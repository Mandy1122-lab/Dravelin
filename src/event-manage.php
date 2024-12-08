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
$e_state = "all";
$searchText = "";

if ($m_Method == "GET") {
    if (isset($_GET['action'])) {
        $m_PageMode = $_GET['action'];
        if ($m_PageMode == "delete") {
            $p_DataKey = $_GET['id'];
            $sql = "DELETE FROM event WHERE e_id = $p_DataKey";
            $result = mysqli_query($conn, $sql);
        }
    }
}

if ($m_Method == "POST") {
    $m_PageMode = $_POST['m_PageMode'];
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
    <title>活動管理</title>

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
        function onAddItem() {
            location.href = "event-mng.php?action=add";
        }

        function onEditItem(id) {
            location.href = "event-mng.php?action=edit&id=" + id;
        }

        function onDeleteItem(id) {
            if (!confirm("是否確定刪除？")) {
                return false;
            }
            location.href = "event-manage.php?action=delete&id=" + id;
        }

        function onApplicantRecord(id) {
            location.href = "event-applicant.php?id=" + id;
        }

        function onSearchItem() {
            //$("#se_name").val($("#txtSearch").val().trim());
            $("#m_PageMode").val("search");
            var form = document.getElementById("thisForm");
            form.submit();
        }
    </script>

    <style>
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
        <div class="container">
            <div>
                <div class="section_title">
                    <h4>活動管理</h4>
                </div>

                <div class="wrapper">
                    <form class="form-inline my-2 my-lg-0" id="thisForm" action="<?php echo $m_ThisPage ?>" method="POST">
                        <input type="hidden" id="m_PageMode" name="m_PageMode" value="<?php echo $m_PageMode ?>">
                        <input type="hidden" name="p_DataKey" value="<?php echo $p_DataKey ?>">
                        <input class="form-control mr-sm-2 search" type="search" name="se_name" placeholder="搜尋活動" aria-label="Search" value="<?php echo $searchText ?>">
                        <a href="javascript:onSearchItem()"><i class="fa-solid fa-magnifying-glass" style="color: #1d50a1"></i></a>
                    </form>
                    <button onclick="onAddItem()" class="btn btn-outline-primary my-btn">＋&nbsp;新增活動</button>
                </div>
                <?php
                if ($e_state == "all") {
                    $sql = "SELECT * FROM event";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        echo "<table>";
                        echo "<colgroup><col style='width: 120px;'><col style='width: 500px;'><col style='width: 250px;'><col style='width: 150px;'></colgroup>";
                        echo "<tr><th>活動編號</th><th>活動名稱</th><th>結束時間</th><th>操作</th></tr>";

                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>\n";
                            echo "<td>{$row['e_id']}</td>\n";
                            echo "<td align='center'>{$row['e_name']}</td>\n";
                            echo "<td align='center'>{$row['e_end']}</td>\n";
                            echo "<td align='center'>";
                            // echo "  <a href='javascript:onApplicantRecord({$row['e_id']})'><i class='fa-solid fa-user-group' style='color: #000;'></i></a>&nbsp;&nbsp;&nbsp;&nbsp;\n";
                            echo "  <a href='javascript:onEditItem({$row['e_id']})'><i class='fa-solid fa-pen' style='color: #1d50a1;'></i></a>&nbsp;&nbsp;&nbsp;&nbsp;\n";
                            echo "  <a href='javascript:onDeleteItem({$row['e_id']})'><i class='fa-solid fa-trash-can' style='color: #de2626;'></i></a>\n";
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
                    $sql = "SELECT * FROM event WHERE e_name LIKE '%$searchText%';";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        echo "<table>";
                        echo "<colgroup><col style='width: 120px;'><col style='width: 500px;'><col style='width: 250px;'><col style='width: 150px;'></colgroup>";
                        echo "<tr><th>活動編號</th><th>活動名稱</th><th>結束時間</th><th>操作</th></tr>";

                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>\n";
                            echo "<td>{$row['e_id']}</td>\n";
                            echo "<td align='center'>{$row['e_name']}</td>\n";
                            echo "<td align='center'>{$row['e_end']}</td>\n";
                            echo "<td align='center'>";
                            // echo "  <a href='javascript:onApplicantRecord({$row['e_id']})'><i class='fa-solid fa-user-group' style='color: #000;'></i></a>&nbsp;&nbsp;&nbsp;&nbsp;\n";
                            echo "  <a href='javascript:onEditItem({$row['e_id']})'><i class='fa-solid fa-pen' style='color: #1d50a1;'></i></a>&nbsp;&nbsp;&nbsp;&nbsp;\n";
                            echo "  <a href='javascript:onDeleteItem({$row['e_id']})'><i class='fa-solid fa-trash-can' style='color: #de2626;'></i></a>\n";
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