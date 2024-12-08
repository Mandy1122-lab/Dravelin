<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dravelin</title>
    <style>
        body {
            background-color: #F5F4F0;
        }
    </style>

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
                        <a href="./index.html">
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

    <!-- Content section,Blog Details Section Begin -->
    <style>
        .blog-details {
            margin-top: 0;
            /* 將上邊距設置為0 */
            padding-top: 0;
            /* 將上內邊距設置為0 */
        }

        h5 .bold-text {
            font-weight: bold;
            /* 將class為bold-text的文本設置為粗體 */
        }

        .blog__details__form {
            max-width: 1200px;
            /* 設置最大寬度 */
            margin: 0 auto;
            /* 讓元素在容器中水平居中 */
            padding: 0 130px;
            /* 添加左右邊距 */
        }

        .nav {
            margin-top: 20px;
        }

        .nav-tabs {
            border-bottom: 1px solid #000;
            /* 將下邊框設置為1像素寬度的黑色 */
        }

        /* 將分頁項目樣式應用到.nav-tabs的.nav-link上 */
        .nav-tabs .nav-link {
            border: none;
            /* 移除預設的邊框 */
            border-radius: 0;
            /* 移除圓角 */
            background-color: #F5F4F0;
            /* 移除背景色 */
            color: #000;
            /* 設置文字顏色 */
            font-size: 13px;
            /* 調整分頁中文字的大小 */
            font-weight: normal;
            /* 設置分頁中文字為粗體 */
            padding: 10px 15px 5px 15px;
            /* 設置填充 */
            cursor: pointer;
            /* 添加指示游標 */
        }

        /* 活動分頁項目的樣式 */
        .nav-tabs .nav-link.active {
            background-color: #D9D9D9;
            /* 設置懸停時的背景色 */
            color: #000;
            /* 設置懸停時的文字顏色 */
            border-bottom: none;
            /* 移除懸停時的下框線 */
        }

        /* 將:hover樣式應用到分頁項目上，當鼠標懸停在項目上時 */
        .nav-tabs .nav-link:hover {
            background-color: #E0E0E0;
            /* 設置懸停時的背景色 */
            color: #000;
            /* 設置懸停時的文字顏色 */
            border-bottom: none;
            /* 移除懸停時的下框線 */
        }

        h6.text-size {
            font-size: 13px;
            /* 將<h6>元素中的文本設置為13像素 */
            margin-top: 20px;
            margin-bottom: 5px;
        }

        .custom-table {
            /* 在這裡添加自定義樣式 */
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f8f8f8;
        }
    </style>
    <section class="blog-details spad" style="display: flex; flex-direction: column; margin: 0 auto; max-width: 1200px; margin-top: 20px;">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-12">
                    <div class="blog__details__form">
                        <h5><span class=bold-text>編輯 - 輪播頁</span></h5>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="first-tab" data-bs-toggle="tab" data-bs-target="#first" type="button" role="tab" aria-controls="first" aria-selected="true">第一頁</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="second-tab" data-bs-toggle="tab" data-bs-target="#second" type="button" role="tab" aria-controls="second" aria-selected="false">第二頁</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="third-tab" data-bs-toggle="tab" data-bs-target="#third" type="button" role="tab" aria-controls="third" aria-selected="false">第三頁</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="forth-tab" data-bs-toggle="tab" data-bs-target="#forth" type="button" role="tab" aria-controls="forth" aria-selected="false">第四頁</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="first" role="tabpanel" aria-labelledby="first-tab">
                                <div style="flex: 1;margin-top: 10px; width: 500px;">
                                    <h6 class="text-size">封面圖片</h6>
                                    <?php
                                    $link = mysqli_connect('localhost', 'root', 'fjuim110', 'dravelin');
                                    $result = mysqli_query($link, "SELECT * FROM carousel WHERE carousel_id = 1"); // 根據“第一頁”的ID查詢
                                    $row = mysqli_fetch_assoc($result);
                                    ?>
                                    <form action="save_changes_test.php" method="post"> <!-- 表单开始 -->
                                        <input type="text" name="carousel_pic" placeholder="圖片網址" value="<?php echo htmlspecialchars($row['carousel_pic']); ?>" style="border: 1px solid #1D50A1; width:70%; height:35px; background-color:#F5F4F0; color: black;">
                                        <div style="align-self: flex-end; display: flex; justify-content: flex-end;">
                                            <button type="reset" style="margin-right: 10px; background-color:#1D50A1; background:rgba(29, 80, 161, 0.5); color:black; font-size: 10px; font-weight: bold; border: none; padding: 6px 15px; border-radius: 3px;">取消</button>
                                            <button type="submit" id="saveButton" style="margin-right: 120px; background-color: #FED566; color:black; font-size: 10px; font-weight: bold; border: none; padding: 6px 15px; border-radius: 3px;">儲存</button> <!-- 将类型更改为 submit -->
                                        </div><!-- 保存按钮 -->
                                    </form> <!-- 表单结束 -->
                                    <input type="text" name="carousel_pic" placeholder="圖片網址" value="<?php echo htmlspecialchars($row['carousel_pic']); ?>" style="border: 1px solid #1D50A1; width:70%; height:35px; background-color:#F5F4F0;">
                                </div>
                                <div style="flex: 1; margin-top: 10px;">
                                    <h6 class="text-size">選擇連結之&nbsp;
                                        <input type='radio' name='category' value='drama' style="vertical-align: middle;">&nbsp;劇集 /
                                        <input type='radio' name='category' value='movie' style="vertical-align: middle;">&nbsp;電影 /
                                        <input type='radio' name='category' value='event' style="vertical-align: middle;">&nbsp;活動
                                    </h6>
                                    <form id="searchForm" class="header__search__form">
                                        <input type="text" name="search" placeholder="搜尋作品/活動" style="border: 1px solid #1D50A1; width:150px; height:30px;background-color: #E0E0E0;">
                                        <button type="submit" style="border: 1px solid #1D50A1; width:30px; height:30px; background-color: #E0E0E0;"><span class="icon_search"></span></button>
                                        <div id="searchResults"></div>
                                    </form>
                                </div>
                                <div id="searchResults">
                                    <table data-toolbar="#toolbar" class="table bg-light table-striped" data-toggle="table" data-sortable="true" data-sort-class="table-active" data-pagination="true" data-search="true">
                                        <thead>
                                            <tr>
                                                <th data-field="id" data-sortable="true">#</th>
                                                <th data-field="name" data-sortable="true">作品/活動名稱</th>
                                                <th data-field="number" data-sortable="true">作品/活動編號</th>
                                                <th data-field="edit">操作</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tableBody"></tbody>
                                    </table>
                                </div>

                                <!-- Buttons -->
                                <div style="align-self: flex-end; display: flex; justify-content: flex-end;">
                                    <button type="reset" style="margin-right: 10px; background-color:#1D50A1; background:rgba(29, 80, 161, 0.5); color:black; font-size: 10px; font-weight: bold; border: none; padding: 6px 15px; border-radius: 3px;">取消</button>
                                    <button type="button" id="saveButton" style="margin-right: 120px; background-color: #FED566; color:black; font-size: 10px; font-weight: bold; border: none; padding: 6px 15px; border-radius: 3px;">儲存</button>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="second" role="tabpanel" aria-labelledby="second-tab">
                                <div style="flex: 1;margin-top: 10px; width: 500px;">
                                    <h6 class="text-size">封面圖片</h6>
                                    <?php
                                    $link = mysqli_connect('localhost', 'root', 'fjuim110', 'dravelin');
                                    $result = mysqli_query($link, "SELECT * FROM carousel WHERE carousel_id = 2"); // 根據“第二頁”的ID查詢
                                    $row = mysqli_fetch_assoc($result);
                                    ?>
                                    <input type="text" name="carousel_pic" placeholder="圖片網址" value="<?php echo htmlspecialchars($row['carousel_pic']); ?>" style="border: 1px solid #1D50A1; width:70%; height:35px; background-color:#F5F4F0;">
                                </div>
                                <div style="flex: 1; margin-top: 10px;">
                                    <h6 class="text-size">選擇連結之&nbsp;
                                        <input type='radio' name='category' value='drama' style="vertical-align: middle;">&nbsp;劇集 /
                                        <input type='radio' name='category' value='movie' style="vertical-align: middle;">&nbsp;電影 /
                                        <input type='radio' name='category' value='event' style="vertical-align: middle;">&nbsp;活動
                                    </h6>
                                    <form id="searchForm" class="header__search__form">
                                        <input type="text" name="search" placeholder="搜尋作品/活動" style="border: 1px solid #1D50A1; width:150px; height:30px;background-color: #E0E0E0;">
                                        <button type="submit" style="border: 1px solid #1D50A1; width:30px; height:30px; background-color: #E0E0E0;"><span class="icon_search"></span></button>
                                        <div id="searchResults"></div>
                                    </form>
                                </div>
                                <div id="searchResults">
                                    <table data-toolbar="#toolbar" class="table bg-light table-striped" data-toggle="table" data-sortable="true" data-sort-class="table-active" data-pagination="true" data-search="true">
                                        <thead>
                                            <tr>
                                                <th data-field="id" data-sortable="true">#</th>
                                                <th data-field="name" data-sortable="true">作品/活動名稱</th>
                                                <th data-field="number" data-sortable="true">作品/活動編號</th>
                                                <th data-field="edit">操作</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tableBody"></tbody>
                                    </table>
                                </div>
                                <!-- Buttons -->
                                <div style="align-self: flex-end; display: flex; justify-content: flex-end;">
                                    <button type="reset" style="margin-right: 10px; background-color:#1D50A1; background:rgba(29, 80, 161, 0.5); color:black; font-size: 10px; font-weight: bold; border: none; padding: 6px 15px; border-radius: 3px;">取消</button>
                                    <button type="button" id="saveButton" style="margin-right: 120px; background-color: #FED566; color:black; font-size: 10px; font-weight: bold; border: none; padding: 6px 15px; border-radius: 3px;">儲存</button>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="third" role="tabpanel" aria-labelledby="third-tab">
                                <div style="flex: 1;margin-top: 10px; width: 500px;">
                                    <h6 class="text-size">封面圖片</h6>
                                    <?php
                                    $link = mysqli_connect('localhost', 'root', 'fjuim110', 'dravelin');
                                    $result = mysqli_query($link, "SELECT * FROM carousel WHERE carousel_id = 3"); // 根據“第三頁”的ID查詢
                                    $row = mysqli_fetch_assoc($result);
                                    ?>
                                    <input type="text" name="carousel_pic" placeholder="圖片網址" value="<?php echo htmlspecialchars($row['carousel_pic']); ?>" style="border: 1px solid #1D50A1; width:70%; height:35px; background-color:#F5F4F0;">
                                </div>
                                <div style="flex: 1; margin-top: 10px;">
                                    <h6 class="text-size">選擇連結之&nbsp;
                                        <input type='radio' name='category' value='drama' style="vertical-align: middle;">&nbsp;劇集 /
                                        <input type='radio' name='category' value='movie' style="vertical-align: middle;">&nbsp;電影 /
                                        <input type='radio' name='category' value='event' style="vertical-align: middle;">&nbsp;活動
                                    </h6>
                                    <form id="searchForm" class="header__search__form">
                                        <input type="text" name="search" placeholder="搜尋作品/活動" style="border: 1px solid #1D50A1; width:150px; height:30px;background-color: #E0E0E0;">
                                        <button type="submit" style="border: 1px solid #1D50A1; width:30px; height:30px; background-color: #E0E0E0;"><span class="icon_search"></span></button>
                                        <div id="searchResults"></div>
                                    </form>
                                </div>
                                <div id="searchResults">
                                    <table data-toolbar="#toolbar" class="table bg-light table-striped" data-toggle="table" data-sortable="true" data-sort-class="table-active" data-pagination="true" data-search="true">
                                        <thead>
                                            <tr>
                                                <th data-field="id" data-sortable="true">#</th>
                                                <th data-field="name" data-sortable="true">作品/活動名稱</th>
                                                <th data-field="number" data-sortable="true">作品/活動編號</th>
                                                <th data-field="edit">操作</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tableBody"></tbody>
                                    </table>
                                </div>


                                <!-- Buttons -->
                                <div style="align-self: flex-end; display: flex; justify-content: flex-end;">
                                    <button type="reset" style="margin-right: 10px; background-color:#1D50A1; background:rgba(29, 80, 161, 0.5); color:black; font-size: 10px; font-weight: bold; border: none; padding: 6px 15px; border-radius: 3px;">取消</button>
                                    <button type="button" id="saveButton" style="margin-right: 120px; background-color: #FED566; color:black; font-size: 10px; font-weight: bold; border: none; padding: 6px 15px; border-radius: 3px;">儲存</button>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="forth" role="tabpanel" aria-labelledby="forth-tab">
                                <div style="flex: 1;margin-top: 10px; width: 500px;">
                                    <h6 class="text-size">封面圖片</h6>
                                    <?php
                                    $link = mysqli_connect('localhost', 'root', 'fjuim110', 'dravelin');
                                    $result = mysqli_query($link, "SELECT * FROM carousel WHERE carousel_id = 4"); // 根據“第四頁”的ID查詢
                                    $row = mysqli_fetch_assoc($result);
                                    ?>
                                    <input type="text" name="carousel_pic" placeholder="圖片網址" value="<?php echo htmlspecialchars($row['carousel_pic']); ?>" style="border: 1px solid #1D50A1; width:70%; height:35px; background-color:#F5F4F0;">
                                </div>
                                <div style="flex: 1; margin-top: 10px;">
                                    <h6 class="text-size">選擇連結之&nbsp;
                                        <input type='radio' name='category' value='drama' style="vertical-align: middle;">&nbsp;劇集 /
                                        <input type='radio' name='category' value='movie' style="vertical-align: middle;">&nbsp;電影 /
                                        <input type='radio' name='category' value='event' style="vertical-align: middle;">&nbsp;活動
                                    </h6>
                                    <form id="searchForm" class="header__search__form">
                                        <input type="text" name="search" placeholder="搜尋作品/活動" style="border: 1px solid #1D50A1; width:150px; height:30px;background-color: #E0E0E0;">
                                        <button type="submit" style="border: 1px solid #1D50A1; width:30px; height:30px; background-color: #E0E0E0;"><span class="icon_search"></span></button>
                                        <div id="searchResults"></div>
                                    </form>
                                </div>
                                <div id="searchResults">
                                    <table data-toolbar="#toolbar" class="table bg-light table-striped" data-toggle="table" data-sortable="true" data-sort-class="table-active" data-pagination="true" data-search="true">
                                        <thead>
                                            <tr>
                                                <th data-field="id" data-sortable="true">#</th>
                                                <th data-field="name" data-sortable="true">作品/活動名稱</th>
                                                <th data-field="number" data-sortable="true">作品/活動編號</th>
                                                <th data-field="edit">操作</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tableBody"></tbody>
                                    </table>
                                </div>

                                <!-- Buttons -->
                                <div style="align-self: flex-end; display: flex; justify-content: flex-end;">
                                    <button type="reset" style="margin-right: 10px; background-color:#1D50A1; background:rgba(29, 80, 161, 0.5); color:black; font-size: 10px; font-weight: bold; border: none; padding: 6px 15px; border-radius: 3px;">取消</button>
                                    <button type="button" id="saveButton" style="margin-right: 120px; background-color: #FED566; color:black; font-size: 10px; font-weight: bold; border: none; padding: 6px 15px; border-radius: 3px;">儲存</button>
                                </div>


                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Content section, Blog Details Section End -->

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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="js/player.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <script>
        // 捕获标签页切换事件
        $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
            // 获取当前激活的标签页的 id
            var targetTabId = $(e.target).attr('href');

            // 更新页面内容
            $(targetTabId).addClass('show active').siblings().removeClass('show active');
        });
    </script>

    <script>
        document.querySelectorAll('input[name="category"]').forEach(function(radio) {
            radio.addEventListener('change', function() {
                var selectedCategory = this.value;
                loadData(selectedCategory);
            });
        });

        function loadData(selectedCategory) {
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        document.getElementById('tableBody').innerHTML = xhr.responseText;
                    } else {
                        console.error('請求出錯：' + xhr.status);
                    }
                }
            };
            xhr.open('POST', 'carousel-load.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.send('category=' + selectedCategory);
        }
    </script>
    <script>
        document.getElementById('searchForm').addEventListener('submit', function(event) {
            event.preventDefault(); // 阻止表單提交的默認行為
            var keyword = document.querySelector('input[name="search"]').value;
            var selectedCategory = document.querySelector('input[name="category"]:checked').value;

            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        document.getElementById('searchResults').innerHTML = xhr.responseText;
                    } else {
                        console.error('請求出錯：' + xhr.status);
                    }
                }
            };
            xhr.open('POST', 'carousel-search.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.send('keyword=' + keyword + '&category=' + selectedCategory);
        });
    </script>

    <script>
        document.getElementById('saveButton').addEventListener('click', function() {
            var selectedItem = document.querySelector('input[name="selectedItem"]:checked').value;
            var selectedCategory = document.querySelector('input[name="category"]:checked').value;
            saveData(selectedItem, selectedCategory);
        });

        function saveData(selectedItem, selectedCategory) {
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        // 请求成功，您可以在这里执行其他操作，比如刷新页面或者显示成功提示
                        alert('保存成功');
                    } else {
                        console.error('請求出錯：' + xhr.status);
                        // 请求失败，您可以在这里执行错误处理操作
                        alert('保存失敗，請重試');
                    }
                }
            };
            xhr.open('POST', 'carousel-update.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.send('selectedItem=' + selectedItem + '&category=' + selectedCategory);
        }
    </script>



</body>

</html>