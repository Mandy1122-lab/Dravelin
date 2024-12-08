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
                    <div class="header__logo">
                        <a href="./index_edit.php">
                            <img src="img/dravelin_logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="./index.html">首頁</a></li>
                                <li><a href="./categories.html">劇集 <span class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                        <li><a href="./categories.html">1</a></li>
                                        <li><a href="./anime-details.html">2</a></li>
                                        <li><a href="./anime-watching.html">3</a></li>
                                        <li><a href="./blog-details.html">4</a></li>
                                        <li><a href="./signup.html">5</a></li>
                                        <li><a href="./login.html">6</a></li>
                                    </ul>
                                </li>
                                <li><a href="./categories.php">電影 <span class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                        <li><a href="./categories.html">1</a></li>
                                        <li><a href="./anime-details.html">2</a></li>
                                        <li><a href="./anime-watching.html">3</a></li>
                                        <li><a href="./blog-details.html">4</a></li>
                                        <li><a href="./signup.html">5</a></li>
                                        <li><a href="./login.html">6</a></li>
                                    </ul>
                                </li>
                                <li><a href="./categories.html">拍攝景點 <span class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                        <li><a href="./categories.html">台灣</a></li>
                                        <li><a href="./anime-details.html">日本</a></li>
                                        <li><a href="./anime-watching.html">韓國</a></li>
                                        <li><a href="./blog-details.html">中國</a></li>
                                        <li><a href="./signup.html">泰國</a></li>
                                        <li><a href="./login.html">其他</a></li>
                                    </ul>
                                </li>
                                <li><a href="./blog.html">活動專區</a></li>
                                <li><a href="#">Contacts</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="header__right">
                        <a href="#" class="search-switch"><span class="icon_search"></span></a>
                        <a href="./login.html"><span class="icon_profile"></span></a>
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
                    die('Could not connect: ' . mysqli_error());
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
                        echo '<div class="hero__items set-bg" data-setbg="' . $row['carousel_pic'] . '">';
                        echo '<div class="row">';
                        echo '<div class="col-12">';
                        echo '<div class="hero__text">';
                        echo '<h2></h2>'; // 輸出帶連結的標題
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
                                    text-align: center;
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

                            // 從 playlist 資料表中取得專區資料
                            $sql = "SELECT * FROM area";
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $areaId = $row['a_id'];
                                    $areaName = $row['a_name'];
                                    $areaPic = $row['a_pic'];

                                    // 在圖片部分顯示的圖片
                                    echo '<div class="product__sidebar__view__item set-bg mix day years" data-setbg="' . $areaPic . '">';

                                    // 在文字部分顯示的標題
                                    echo '<div class="product__sidebar__view__item-text">';
                                    echo '<h5><a href="" style="color: white;">' . $areaName . '</a></h5>';
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
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4 id="listTitle"></h4>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="movieContent">
                            <!-- 這裡將動態生成片單內容 -->
                        </div>
                    </div>

                    <script>
                        // 定義一個函數，用於向後端發送請求並更新內容
                        function fetchAndUpdateContent() {
                            // 向後端發送請求，檢查是否有更新的內容
                            fetch('index_edit.php?content_changed=true')
                                .then(response => response.json())
                                .then(data => {
                                    // 將從後端獲取的內容更新到使用者頁面上
                                    document.getElementById('listTitle').innerText = data.title;
                                    document.getElementById('movieContent').innerHTML = data.content;
                                })
                                .catch(error => {
                                    console.error('Error fetching data:', error);
                                });
                        }

                        // 在頁面載入完成後立即呼叫 fetchAndUpdateContent 函數
                        fetchAndUpdateContent();
                    </script>

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
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>

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


</body>

</html>