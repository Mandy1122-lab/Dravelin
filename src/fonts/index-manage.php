<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dravelin</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

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
    <link rel="stylesheet" href="css/content-wrapper.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.edit.css" type="text/css">
    <!-- <link rel="stylesheet" href="css/dropdown.css" type="text/css"> -->

    <script>
        function onChangeListSelect() {
            // 監聽下拉式選單的變化事件
            var selectedList = $("#listSelect").val();
            // 使用 Ajax 向後端發送請求，根據選擇的片單更新標題和內容
            $.ajax({
                url: 'get_data.php', // 取得片單內容的 PHP 文件路徑
                method: 'POST',
                dataType: "text",
                data: {
                    listName: selectedList
                },
                success: function(response) {
                    // 解析 JSON 格式的回應
                    var data = JSON.parse(response);
                    if (data.ret != 0) {
                        alert(data.msg);
                        return false;
                    }
                    // 更新標題和內容
                    $('#listTitle').text(data.title);
                    $('#listContent').html(data.content);
                },
                error: function(xhr, status, error) {
                    // 處理錯誤情況
                    alert("發生錯誤: " + error);
                }
            });
        }
    </script>
    <script>
        function saveCurrentSelection() {
            var selectedList = $("#listSelect").val();
            var items = [];
            // 假设每个item信息从某处获取，例如DOM或JavaScript对象
            $('.product__item').each(function() {
                var item = {
                    poster: $(this).find('img').attr('src'),
                    name: $(this).find('h5 a'), // $(this).find('h5 a').text(),
                    genre: $(this).find('li').text()
                };
                items.push(item);
            });

            $.ajax({
                url: 'save_selection.php',
                method: 'POST',
                contentType: "application/json",
                data: JSON.stringify({
                    listName: selectedList,
                    items: items
                }),
                success: function(response) {
                    alert("保存成功");
                },
                error: function() {
                    alert("保存失败，请重试");
                }
            });
        }
    </script>


</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="heading_logo">
                        <a href="http://dv.hony.com.tw:800/">
                            <img src="img/logo.png" height="60%">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li><a href="drama-back.php">劇集<span class="arrow_carrot-down"></span></a></li>
                                <li><a href="movie-back.php">電影<span class="arrow_carrot-down"></span></a></li>
                                <li><a href="genre.php">分類</a></li>
                                <li><a href="spot-mange.php">拍攝景點<span class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                        <li><a href="spot-complication.php">景點列表</a></li>
                                    </ul>
                                </li>
                                <li><a href="event-manage.php">活動</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="content-wrapper">
                <?php
                // 建立資料庫連接
                $link = mysqli_connect('localhost', 'root', 'fjuim110', 'dravelin');

                // 檢查連接是否成功
                if (!$link) {
                    //die('Could not connect: ' . mysqli_error());
                }

                // 從資料庫中獲取輪播圖片和文字內容
                $result = mysqli_query($link, "SELECT * FROM carousel");
                ?>
                <style>
                    /* 將連結的顏色設置為黑色 */
                    .hero__text h2 a {
                        color: white;
                        text-decoration: none;
                        /* 移除下劃線 */
                    }
                </style>
                <div class="hero__slider owl-carousel">
                    <?php
                    // 遍歷資料庫中的每一行
                    while ($row = mysqli_fetch_assoc($result)) {
                        // 在HTML中顯示每個輪播項目
                        echo '<div class="hero__items set-bg" data-setbg="' . $row['carousel_pic'] . '">';
                        echo '<div class="row">';
                        echo '<div class="col-12">';
                        echo '<div class="hero__text">';
                        echo '<h2><a href="carousel.php">編輯輪播頁</a></h2>'; // 輸出帶連結的標題
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                    ?>
                </div>


                <div class="col-lg-2 col-md-2 col-sm-2">
                    <div class="product__sidebar">
                        <div class="product__sidebar__view">
                            <?php
                            // 建立與資料庫的連接
                            $servername = "localhost"; // 資料庫伺服器位置，通常為 localhost
                            $username = "root"; // 資料庫使用者名稱
                            $password = "fjuim110"; // 資料庫密碼
                            $dbname = "dravelin"; // 資料庫名稱

                            // 建立與資料庫的連接
                            $conn = mysqli_connect($servername, $username, $password, $dbname);

                            // 檢查連接是否成功
                            if (!$conn) {
                                die("Connection failed: " . mysqli_connect_error());
                            }

                            // 從 playlist 資料表中取得專區資料
                            $sql = "SELECT * FROM area";
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $areaId = $row['area_id'];
                                    $areaName = $row['area_name'];
                                    $areaPic = $row['area_pic'];

                                    echo '<div class="product__sidebar__view__item set-bg mix day years" data-setbg="' . $areaPic . '">';
                                    echo '<h5><a href="index-area' . $areaId . '.php">' . $areaName . '</a></h5>';
                                    echo '</div>';
                                }
                            } else {
                                echo "0 results";
                            }

                            // 關閉資料庫連接
                            mysqli_close($conn);
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Hero Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="trending__product">
                        <div class="trending__product">
                            <div class="row align-items-center justify-content-start">
                                <!-- 初始展示片單的標題 -->
                                <div class="col-md-4">
                                    <div class="section-title">
                                        <h4 id="listTitle"><b>片單名稱</b></h4>
                                    </div>
                                </div>
                                <!-- 下拉式選單 -->
                                <div class="col-md-4" style="margin-left: -5px; margin-bottom:20px;">
                                    <div class="dropdown">
                                        <?php
                                        // 資料庫連接設定
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "fjuim110";
                                        $dbname = "dravelin";

                                        // 建立連接
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // 檢查連接
                                        if ($conn->connect_error) {
                                            die("連接失敗: " . $conn->connect_error);
                                        }

                                        // 查詢片單資料
                                        $sql = "SELECT l_id, l_name FROM listdrama UNION SELECT l_id, l_name FROM listmovie";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            echo '<select id="listSelect" onchange="onChangeListSelect()">';
                                            echo '<option value="">請選擇片單</option>'; // 添加一個空選項
                                            while ($row = $result->fetch_assoc()) {
                                                echo '<option value="' . $row["l_name"] . '">' . $row["l_name"] . '</option>';
                                            }
                                            echo '</select>';
                                        } else {
                                            echo "0 個結果";
                                        }
                                        $conn->close();
                                        ?>
                                    </div>
                                </div>
                                <!-- 儲存按鈕 -->
                                <div class="col-md-4" style="margin-bottom:20px;">
                                    <button id="saveSelection" style="background-color: #FED566; color:black; font-size: 10px; font-weight: bold; border: none; padding: 6px 15px; border-radius: 3px;" onclick="saveCurrentSelection()">儲存選擇</button>
                                </div>
                            </div>
                            <style>
                                /* 隐藏滚动条 */
                                .movie-slider-container::-webkit-scrollbar {
                                    display: none;
                                }

                                .movie-slider-container {
                                    position: relative;
                                    overflow: hidden;
                                }

                                #listContent {
                                    display: flex;
                                    /* 使用 flex 佈局 */
                                    white-space: nowrap;
                                    /* 不換行 */
                                    overflow-x: scroll;
                                    /* 水平滾動 */
                                }

                                .product__item__pic {
                                    width: 208px;
                                    /* 設置圖片寬度 */
                                    height: 288px;
                                    /* 設置圖片高度 */
                                    object-fit: cover;
                                    /* 確保圖片完全填充其容器，可能會裁切圖片 */
                                }

                                .slider-arrow {
                                    position: absolute;
                                    top: 40%;
                                    transform: translateY(-50%);
                                    z-index: 10;
                                    background-color: #FED566;
                                    color: white;
                                    border-radius: 50%;
                                    width: 35px;
                                    height: 35px;
                                    opacity: 0.8;
                                    border: none;
                                    cursor: pointer;
                                }

                                .left-arrow {
                                    left: 0;
                                }

                                .right-arrow {
                                    right: 0;
                                }

                                .slider-arrow:hover {
                                    opacity: 1;
                                }
                            </style>
                            <div class="movie-slider-container">
                                <button class="slider-arrow left-arrow">＜</button>
                                <div id="listContent" class="movie-content">
                                    <!-- 這裡將動態生成片單內容 -->
                                </div>
                                <button class="slider-arrow right-arrow">＞</button>
                            </div>
                            <script>
                                document.querySelector('.left-arrow').addEventListener('click', function() {
                                    console.log('Left button clicked');
                                    document.getElementById('listContent').scrollLeft -= 200; // 按需調整滾動距離
                                });

                                document.querySelector('.right-arrow').addEventListener('click', function() {
                                    console.log('Right button clicked');
                                    document.getElementById('listContent').scrollLeft += 200; // 按需調整滾動距離
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
    </section>
    <!-- Product Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="page-up">
            <a href="#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer__logo">
                        <a href="./index.html"><img src="img/dravelin_logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="footer__nav">
                        <ul>
                            <li class="active"><a href="./index.html">Homepage</a></li>
                            <li><a href="./categories.html">Categories</a></li>
                            <li><a href="./blog.html">Our Blog</a></li>
                            <li><a href="#">Contacts</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template
                        is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>

                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/player.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</body>

</html>