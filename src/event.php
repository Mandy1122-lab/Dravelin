<?php
include_once "{$_SERVER['DOCUMENT_ROOT']}/lib/lib_mysql.php";
//建立資料庫連線
$conn = sql_open();
// 取得今天的日期
$today = date("Y-m-d");
// 使用 strtotime() 函式計算今天減去 6 天後的日期
$previous_date = date("Y-m-d", strtotime($today . " -6 days"));
$sql = "SELECT e_id, e_name, e_start, e_end, e_pic FROM event WHERE e_end >= '$previous_date' ORDER BY e_end ASC";
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>活動專區</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/plyr.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <!--font-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap">
    <script src="https://kit.fontawesome.com/937e93c93c.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <?php
        include 'header.html';
    ?>
    <!-- Header End -->

    <!-- Normal Breadcrumb Begin -->
    <section class="normal-breadcrumb set-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="normal__breadcrumb__text">
                        <h2>活 動 專 區</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Normal Breadcrumb End -->

    <!-- Event Section Begin -->
    <?php
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            if (!$row_1 = mysqli_fetch_assoc($result)) {
                $row_1 = null;
            }

            $state_name = $today > $row['e_end'] ? "已結束" : "進行中";
            $state_sub = $today > $row['e_end'] ? "status_over" : "status_ontime";

            if ($today > $row['e_end']) {
                $state_name = "已結束";
                $state_sub = "status_over";
            } else {
                $state_name = "進行中";
                $state_sub = "status_ontime";
            }

            echo "<table class='event__table'><tr><td>";
            echo "<a href='event-details.php?id={$row['e_id']}'>";
            echo "<div class='event__block'>";
            echo "<div class='event__img' style=\"background-image: url('{$row['e_pic']}')\"></div>";
            echo "<div class='event__block__date'>{$row['e_start']} ~ {$row['e_end']}</div>";
            echo "<h3>{$row['e_name']}</h3>";
            echo "<div class='event__block__line'></div>";
            echo "<div class='{$state_sub}'><span>{$state_name}</span></div>";
            echo "</div></td>";

            if (is_null($row_1)) {
                echo "<td><div class='event__block' style=\"background-color: transparent; box-shadow: none\"></div></td>";
            } 
            else {

                if ($today > $row_1['e_end']) {
                    $state_name = "已結束";
                    $state_sub = "status_over";
                } else {
                    $state_name = "進行中";
                    $state_sub = "status_ontime";
                }

                echo "<td><a href='event-details.php?id={$row_1['e_id']}'>";
                echo "<div class='event__block'>";
                echo "<div class='event__img' style=\"background-image: url('{$row_1['e_pic']}')\"></div>";
                echo "<div class='event__block__date'>{$row_1['e_start']} ~ {$row_1['e_end']}</div>";
                echo "<h3>{$row_1['e_name']}</h3>";
                echo "<div class='event__block__line'></div>";
                echo "<div class='{$state_sub}'><span>{$state_name}</span></div>";
                echo "</div></td>";
            }

            echo "</tr></table>";
        }
    }
    else{
        echo "<h5 style=\"text-align: center; margin: 80px 0 141px 0\">暫無活動</h5>";
    }

    sql_close($conn);
    ?>
    <!-- Event Section End -->



    <!-- Footer Section Begin -->
    <?php
        include 'footer.html';
    ?>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/player.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>


</body>

</html>