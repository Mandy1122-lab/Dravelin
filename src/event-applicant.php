<?php
include_once "{$_SERVER['DOCUMENT_ROOT']}/lib/lib_mysql.php";
//建立資料庫連線
$conn = sql_open();
$path = $_SERVER['PHP_SELF'];
$path_parts = pathinfo($path);
$m_ThisPage = $path_parts['basename']; //這個網頁的檔名
$m_Method = $_SERVER["REQUEST_METHOD"]; //POST, GET
$m_PageMode = "";
$p_DataKey = 0;
$p_DeleteKey = 0;
$m_RetPage = "event-manage.php";
$e_state = "all";
$searchText = "";

if ($m_Method == "GET") {
    $p_DataKey = $_GET["id"];
    if (isset($_GET['action'])) {
        $m_PageMode = $_GET['action'];
        if ($m_PageMode == "delete") {
            $p_DeleteKey = $_GET['d_id'];
            $sql = "DELETE FROM record WHERE r_id = $p_DeleteKey";
            $result = mysqli_query($conn, $sql);
        }
    }
}

if ($m_Method == "POST") {
    $m_PageMode = $_POST['m_PageMode'];
    $p_DataKey = $_POST['p_DataKey'];
    $searchText = $_POST['se_name'];

    if ($m_PageMode == "search") {
        $e_state = "search";
    }
}

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>活動報名名單</title>

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
    <script>
        var e_id = <?php echo $p_DataKey ?>;

        function onBackPage() {
            location.href = "<?php echo $m_RetPage ?>";
        }

        function onDeleteItem(id) {
            if (!confirm("是否確定刪除？")) {
                return false;
            }
            //location.href = "event-applicant.php?id=" + e_id +  "&action=delete&d_id=" + id;
            location.href = `event-applicant.php?id=${e_id}&action=delete&d_id=${id}`;
        }

        function onSearchItem() {
            //$("#se_name").val($("#txtSearch").val().trim());
            $("#m_PageMode").val("search");
            var form = document.getElementById("thisForm");
            form.submit();
        }
    </script>
    <style>
        .body_container {
            margin: 0 auto;
            width: 1140px;
        }

        .section_title {
            margin-bottom: 30px;
            color: #000;
            font-weight: 600;
            line-height: 21px;
            text-transform: uppercase;
            padding-left: 20px;
            position: relative;
        }

        .section_title,
        .section_title h4 {
            margin-bottom: 30px;
            color: #000;
            font-weight: bolder;
            line-height: 21px;
            text-transform: uppercase;
            padding-left: 15px;
            position: relative;

        }

        .section_title {
            border-bottom: 1px solid;
        }


        table {
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #B1B1B1;
            text-align: left;
            padding: 8px;
            text-align: center;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

        tr th,
        tr:nth-child(odd) {
            background-color: #f5f5f5;
        }

        .my-btn {
            background-color: #F5F4F0;
            border-color: #1d50a1;
            color: #1d50a1;
            font-size: 18;
            font-weight: bold;
            margin-left: 84%;
            width: 120px;

        }

        .my-btn:hover {
            background-color: #1d50a1;
            border-color: #1d50a1;
            color: #f5f4f0;
        }

        .my-btn:active {
            background-color: #1d50a1 !important;
            border-color: #1d50a1 !important;
            color: #f5f4f0 !important;
        }

        .wrapper {
            display: grid;
            grid-template-columns: 1fr 2fr;
            margin-bottom: 15px;
        }

        .search {
            max-width: 150px;
            background-color: #D9D9D9;
            border-color: #1d50a1;
            font-family: Inter;
        }
    </style>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <?php
    include 'header-mng.html';
    ?>

    <!-- Header End -->

    <!-- Event Section Begin -->
    <section class="product-page spad">
        <div class="body_container">
            <div>
                <div class="section_title">
                    <h4 style="display:inline-block">報名名單</h4>
                </div>
                <div class="wrapper">
                    <form class="form-inline my-2 my-lg-0" id="thisForm" action="<?php echo $m_ThisPage ?>" method="POST">
                        <input type="hidden" id="m_PageMode" name="m_PageMode" value="<?php echo $m_PageMode ?>">
                        <input type="hidden" name="p_DataKey" value="<?php echo $p_DataKey ?>">
                        <input class="form-control mr-sm-2 search" type="search" name="se_name" placeholder="搜尋報名者" aria-label="Search" value="<?php echo $searchText ?>">
                        <a href="javascript:onSearchItem()"><i class="fa-solid fa-magnifying-glass" style="color: #1d50a1"></i></a>
                    </form>
                </div>
                <?php
                if ($e_state == "all") {
                    $sql = "SELECT * FROM record WHERE e_id = $p_DataKey";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {

                        echo "<table>";
                        echo "<colgroup><col style='width: 150px;'><col style='width: 150px;'><col style='width: 400px;'><col style='width: 200px;'><col style='width: 100px;'></colgroup>";
                        echo "<tr><th>報名順序</th><th>姓名</th><th>帳號</th><th>報名日期</th><th>操作</th></tr>";
                        $no = 0;
                        while ($row = mysqli_fetch_assoc($result)) {
                            $no++;
                            echo "<tr>\n";
                            echo "<td>{$no}</td>\n";
                            echo "<td align='center'>{$row['r_name']}</td>\n";
                            echo "<td align='center'>{$row['r_acc']}</td>\n";
                            echo "<td align='center'>{$row['r_date']}</td>\n";
                            echo "<td align='center'>";
                            echo "  <a href='javascript:onDeleteItem({$row['r_id']})'><i class='fa-solid fa-trash-can' style='color: #de2626;'></i></a>\n";
                            echo "</td>\n";
                            echo "</tr>\n";
                        }

                        echo "</table>";
                    } else {
                        echo "<div style='text-align:center'>沒有資料</div>\n";
                    }

                    mysqli_close($conn);
                }
                if ($e_state == "search") {
                    $sql = "SELECT * FROM record WHERE e_id = $p_DataKey AND (r_name LIKE '%$searchText%' or r_acc LIKE '%$searchText%');";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        echo "<table>";
                        echo "<colgroup><col style='width: 150px;'><col style='width: 150px;'><col style='width: 400px;'><col style='width: 200px;'><col style='width: 100px;'></colgroup>";
                        echo "<tr><th>報名順序</th><th>姓名</th><th>帳號</th><th>報名日期</th><th>操作</th></tr>";
                        $no = 0;
                        while ($row = mysqli_fetch_assoc($result)) {
                            $no++;
                            echo "<tr>\n";
                            echo "<td>{$no}</td>\n";
                            echo "<td align='center'>{$row['r_name']}</td>\n";
                            echo "<td align='center'>{$row['r_acc']}</td>\n";
                            echo "<td align='center'>{$row['r_date']}</td>\n";
                            echo "<td align='center'>";
                            echo "  <a href='javascript:onDeleteItem({$row['r_id']})'><i class='fa-solid fa-trash-can' style='color: #de2626;'></i></a>\n";
                            echo "</td>\n";
                            echo "</tr>\n";
                        }

                        echo "</table>";
                    } else {
                        echo "<div style='text-align:center'>沒有資料</div>\n";
                    }

                    mysqli_close($conn);
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Event Section End -->

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

</body>

</html>