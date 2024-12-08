<?php
    include_once "{$_SERVER['DOCUMENT_ROOT']}/lib/lib_mysql.php";
    $conn = sql_open();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>地圖</title>

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">

    <script src="https://kit.fontawesome.com/f3385d511c.js" crossorigin="anonymous"></script>

</head>
<body style="overflow: hidden;">
        <?php 
            require 'header.html';
        ?>
        <input id="search-control" type="text" placeholder="搜尋地標">
        <div id="map"></div>
    <style>
        #search-control {
            position: relative;
            margin: 20px 20px;
            height: 55px;
            width: 380px;
            font-size: 16px;
            padding-left: 30px;
            border: none;
            border-radius: 30px;
            margin-bottom: 30px;
            box-shadow: 0 1px 5px rgba(0,0,0,0.4);
            z-index: 10;
        }
    </style>
    <?php
        if ($conn->connect_error) {
        die("連接失敗: " . $conn->connect_error);
        }

        $sql = "SELECT spot.s_id,
                        spot.s_name,
                        spot.s_add,
                        spot.lat_lon,
                        GROUP_CONCAT(spotm.m_id) AS m_ids,
                        GROUP_CONCAT(movie.m_name) AS m_names,
                        GROUP_CONCAT(spotd.d_id) AS d_ids,
                        GROUP_CONCAT(drama.d_name) AS d_names
                    FROM spot
                    LEFT JOIN spotm ON spot.s_id = spotm.s_id
                    LEFT JOIN movie ON spotm.m_id = movie.m_id
                    LEFT JOIN spotd ON spot.s_id = spotd.s_id
                    LEFT JOIN drama ON spotd.d_id = drama.d_id
                    GROUP BY spot.s_id, spot.s_name, spot.s_add, spot.lat_lon;
                ";
        $result = mysqli_query($conn, $sql);

        $landmarks = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                list($lat, $lon) = explode(',', $row['lat_lon']);
                $d_id = !is_null($row['d_ids']) ? explode(',', $row['d_ids']) : [];
                $d_name = !is_null($row['d_names']) ? explode(',', $row['d_names']) : [];
                $m_id = !is_null($row['m_ids']) ? explode(',', $row['m_ids']) : [];
                $m_name = !is_null($row['m_names']) ? explode(',', $row['m_names']) : [];
                $landmarks[] = [
                    'id' => $row['s_id'],
                    'description' => $row['s_add'],
                    'name' => $row['s_name'],
                    'lat' => floatval($lat),
                    'lon' => floatval($lon),

                    'd_id' => $d_id,
                    'd_name' => $d_name,
                    'm_id' => $m_id,
                    'm_name' => $m_name,
                ];
            }
        }
    ?>

    <script>
        function initMap() {
            var mapOptions = {
                zoom: 11,
                center: new google.maps.LatLng(25.053067826074816, 121.52035062111631),
                styles: [
                    {
                        featureType: "poi",
                        stylers: [{ visibility: "off" }]
                    },
                    {
                        featureType: "transit.station",
                        stylers: [{ visibility: "off" }] 
                    }
                ],
                mapTypeControl: false,
                zoomControl: false,
                gestureHandling: "greedy",
                fullscreenControl: false
            };
            var map = new google.maps.Map(document.getElementById('map'), mapOptions);

            var landmarks = <?php echo json_encode($landmarks); ?>;
            var markers = [];
            var currentInfoWindow = null;

            function createMarker(landmark) {
                var popupContent = '<div class="custom-popup"><h2>' + landmark.name + '&nbsp<a href="spot-info.php?s_id=' + landmark.id + '"><img src="../img/info.png" style="width:17px;"></a></h2>' + landmark.description;

                if (landmark.d_id != "") {
                    popupContent += '<br><b>演出劇集：</b>';
                    for (var i = 0; i < landmark.d_id.length; i++) {
                        popupContent += '<a href="drama-detail.php?d_id=' + landmark.d_id[i] + '">' + landmark.d_name[i] + '</a>, ';
                    }
                }
                if (landmark.m_id != "") {
                    popupContent += '<br><b>演出電影：</b>';
                    for (var i = 0; i < landmark.m_id.length; i++) {
                        popupContent += '<a href="movie-detail.php?m_id=' + landmark.m_id[i] + '">' + landmark.m_name[i] + '</a>, ';
                    }
                }
                popupContent += '</div>';

                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(landmark.lat, landmark.lon),
                    map: map,
                    title: landmark.name
                });

                var infoWindow = new google.maps.InfoWindow({
                    content: popupContent
                });

                google.maps.event.addListener(infoWindow, 'domready', function() {
                    var iwCloseBtn = document.querySelector('.gm-ui-hover-effect');
                    if (iwCloseBtn) {
                        iwCloseBtn.style.display = 'none';
                    }
                });

                marker.addListener('click', function() {
                    if (currentInfoWindow) {
                        currentInfoWindow.close(); 
                    }
                    infoWindow.open(map, marker);
                    currentInfoWindow = infoWindow;
                });
                return marker;
            }

            landmarks.forEach(function(landmark) {
                var marker = createMarker(landmark);
                markers.push(marker);
            });

            // 搜尋
            var input = document.getElementById('search-control');
            map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
            
            input.addEventListener('input', function() {
                performSearch(input.value);
            });

            function performSearch(searchQuery) {
                searchQuery = searchQuery.toLowerCase();
                
                markers.forEach(function(marker) {
                    marker.setMap(null);
                });

                var filteredLandmarks = landmarks.filter(function(landmark) {
                    return landmark.name.toLowerCase().includes(searchQuery) || 
                        landmark.description.toLowerCase().includes(searchQuery) || 
                        landmark.d_name.some(d => d.toLowerCase().includes(searchQuery)) || 
                        landmark.m_name.some(m => m.toLowerCase().includes(searchQuery));
                });

                markers = filteredLandmarks.map(function(landmark) {
                    var marker = createMarker(landmark);
                    marker.setMap(map);
                    return marker;
                });

                if (searchQuery === "") {
                    map.setCenter(new google.maps.LatLng(25.053067826074816, 121.52035062111631));
                    return;
                }

                if (filteredLandmarks.length > 0) {
                    var bounds = new google.maps.LatLngBounds();
                    markers.forEach(function(marker) {
                        bounds.extend(marker.getPosition());
                    });
                    if(filteredLandmarks.length == 1){
                        map.fitBounds(bounds);
                        map.setZoom(11);
                    }else{
                        map.fitBounds(bounds);
                    }
                }else{
                    map.setCenter(new google.maps.LatLng(23.58437778480146, 120.99971734565638));
                    map.setZoom(8);
                }
            }
            var urlParams = new URLSearchParams(window.location.search);
            if (urlParams.has('message')) {
                var message = urlParams.get('message');
                input.value = message;
                performSearch(message);
            }

            map.addListener('click', function() {
                if (currentInfoWindow) {
                    currentInfoWindow.close();
                    currentInfoWindow = null;
                }
                
            });
        }

        window.onload = initMap;
    </script>
    <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC6r4fhlxKrqtna5R6sZWXR29VBxulwfM8&loading=async&callback=initMap"></script>
</body>
</html>