<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dravelin</title>

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
    <link rel="stylesheet" href="dec.css" type="text/css">

    <!-- Js Plugins -->
    <script src="https://kit.fontawesome.com/f3385d511c.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header>
        <?php
        include 'header.html';
        ?>
    </header>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero" style="margin-bottom: 10px;">  <!-- 減少下邊距 -->
        <div class="container">
            <div class="content-wrapper">
                <?php
                // 建立資料庫連接
                $link = mysqli_connect('localhost', 'root', 'fjuim110', 'dravelin');

                // 檢查連接是否成功
                if (!$link) {
                    die('Could not connect: ' . mysqli_connect_error());
                }

                // 從資料庫中獲取輪播圖片和文字內容
                $result = mysqli_query($link, "SELECT * FROM carousel");
                ?>
                <style>
                    .hero__slider {
                        overflow: hidden;
                    }

                    .hero__items {
                        position: relative;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        height: 500px;
                        /* 或根據您的需求調整高度 */
                        background-size: cover;
                        background-position: center;
                    }
                </style>
                <div class="hero__slider owl-carousel">
                    <?php
                    // 遍歷資料庫中的每一行
                    while ($row = mysqli_fetch_assoc($result)) {
                        // 在HTML中顯示每個輪播項目
                        echo '<a href="' . $row['carousel_link'] . '" class="hero__items set-bg" data-setbg="' . $row['carousel_pic'] . '">';
                        echo '<div class="row">';
                        echo '<div class="col-12">';
                        echo '<div class="hero__text">';
                        echo '<h2></h2>'; // 替換標題文本為您希望顯示的內容
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</a>';
                    }
                    ?>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2">
                    <div class="product__sidebar">
                        <div class="product__sidebar__view">
                            <style>
                                .product__sidebar__view__item {
                                    position: relative;
                                }

                                .product__sidebar__view__item-text {
                                    position: absolute;
                                    bottom: -10px;
                                    /* 調整文字與圖片之間的距離 */
                                    left: 0;
                                    right: 0;
                                    text-align: left;
                                }
                            </style>
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

                            // 從資料表中取得專區資料
                            $sql = "SELECT * FROM area";
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $areaId = $row['area_id'];
                                    $areaName = $row['area_name'];
                                    $areaPic = $row['area_pic'];
                                    $areaChoose = $row['area_choose'];

                                    // 在圖片部分顯示的圖片
                                    echo '<div class="product__sidebar__view__item set-bg mix day years" data-setbg="' . $areaPic . '">';

                                    // 在文字部分顯示的標題
                                    echo '<div class="product__sidebar__view__item-text">';
                                    echo '<h5><a href="' . $areaChoose . '" style="color: white;">' . $areaName . '</a></h5>';
                                    echo '</div>';

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
    <section class="product spad" style="padding-top: 10px;"> <!-- 減少上邊距 -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-6 section_title" style="margin-bottom: 0px; padding-bottom: 0px;">
                    <div class="section-title">
                        <h4>熱門景點</h4>
                    </div>
                </div>
                <?php
                include_once "{$_SERVER['DOCUMENT_ROOT']}/lib/lib_mysql.php";
                $conn = sql_open();
                $sql = "SELECT hotspot.h_id, spot.s_id, spot.s_name, spot.s_pic FROM hotspot JOIN spot ON hotspot.s_id = spot.s_id ORDER BY hotspot.h_id;";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    echo "<div class='hot-wrap line' style='margin-top: 0px padding-top: 0px;;'>";
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<div>";
                        echo '<a href="spot-info.php?s_id=' . $row['s_id'] . '">';
                        echo "<img class='image' src='{$row['s_pic']}'>";
                        echo "<p class='word'>{$row['s_name']}</p>";
                        echo "</a>";
                        echo "</div>";
                    }
                    echo "</div>";
                    mysqli_free_result($result);
                }
                mysqli_close($conn);
                ?>
                <div class="col-lg-12">
                    <div class="trending__product">
                        <div class="row align-items-center justify-content-start">
                            <!-- 初始展示片單的標題和內容 -->
                            <?php
                            // 建立資料庫連接
                            $link = mysqli_connect('localhost', 'root', 'fjuim110', 'dravelin');

                            // 檢查連接是否成功
                            if (!$link) {
                                die('Could not connect: ' . mysqli_connect_error());
                            }

                            // 從資料庫中獲取片單名稱
                            $result = mysqli_query($link, "SELECT list_name FROM displaylist");
                            while ($row = mysqli_fetch_assoc($result)) {
                                $listName = $row['list_name'];
                                echo '<div class="col-md-4">';
                                echo '<div class="section-title">';
                                echo '<h4 id="listTitle"><b>' . $listName . '</b></h4>';
                                echo '</div>';
                                echo '</div>';
                            }
                            ?>
                        </div>
                        <style>
                            .hot-wrap,
                            .trending__product {
                                border: none;
                                /* Ensure no border */
                                padding: 20px 0;
                                /* Add padding to separate blocks visually without lines */
                            }

                            .section_title {
                                margin-bottom: 20px;
                                /* Adjust spacing below section title */
                            }

                            .movie-slider-container {
                                position: relative;
                                overflow: hidden;
                                display: flex;
                            }

                            #listContent {
                                display: flex;
                                /* 使用 flex 佈局 */
                                white-space: nowrap;
                                /* 不換行 */
                                overflow-x: scroll;
                                /* 水平滾動 */
                            }

                            .product__item {
                                flex: 0 0 auto;
                                /* 不允許項目伸縮 */
                                margin: 8px;
                                width: 200px;
                                /* 根據需要調整寬度 */
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
                                top: 45%;
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

                                // 從資料表中取得片單資料
                                $sql = "SELECT * FROM displayitems";
                                $result = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $itemName = $row['item_name'];
                                    $itemGenres = explode(', ', $row['item_genre']); // 将类型字符串解析为数组
                                    $itemGenreLinks = explode(', ', $row['genre_link']); // 将链接字符串解析为数组
                                    $itemPic = $row['item_poster'];
                                    $itemDetail = $row['detail_link'];

                                    echo '<div class="col-lg-auto col-md-auto col-sm-auto">';
                                    echo '<div class="product__item">';
                                    echo '<img class="product__item__pic" src="' . $itemPic . '" alt="' . htmlspecialchars($itemName) . '">';
                                    echo '<div class="product__item__text">';
                                    echo '<ul>';

                                    // 遍历类型数组并为每个类型创建相应的链接或文本
                                    foreach ($itemGenres as $index => $genre) {
                                        $genreLink = array_key_exists($index, $itemGenreLinks) ? $itemGenreLinks[$index] : ''; // 检查索引是否存在
                                        if (!empty($genreLink)) {
                                            echo '<li><a href="' . htmlspecialchars($genreLink) . '">' . htmlspecialchars($genre) . '</a></li> ';
                                        } else {
                                            echo '<li><a href="#">' . htmlspecialchars($genre) . '</a></li> '; // 如果没有链接，显示为#链接
                                        }
                                    }

                                    echo '</ul>';
                                    echo '<h5><b><a href="' . htmlspecialchars($itemDetail) . '">' . htmlspecialchars($itemName) . '</a></b></h5>'; // 显示名称
                                    echo '</div>';
                                    echo '</div>';
                                    echo '</div>';
                                }


                                // 關閉資料庫連接
                                mysqli_close($conn);
                                ?>
                            </div>
                            <button class="slider-arrow right-arrow">＞</button>
                            <script>
                                document.querySelector('.left-arrow').addEventListener('click', function() {
                                    document.getElementById('listContent').scrollLeft -= 200; // 按需調整滾動距離
                                });

                                document.querySelector('.right-arrow').addEventListener('click', function() {
                                    document.getElementById('listContent').scrollLeft += 200; // 按需調整滾動距離
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Product Section End -->

    <!-- Footer Section Begin -->
    <footer>
        <?php
        include 'footer.html';
        ?>
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
</body>

</html>