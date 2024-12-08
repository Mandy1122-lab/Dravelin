<?php
include_once "{$_SERVER['DOCUMENT_ROOT']}/lib/lib_mysql.php";

$path = $_SERVER['PHP_SELF'];
$path_parts = pathinfo($path);
$m_ThisPage = $path_parts['basename']; //這個網頁的檔名

$m_Method = $_SERVER["REQUEST_METHOD"]; //POST, GET
$m_PageMode = "";   //add, edit
$m_ErrorMsg = "";   //要顯示的錯誤訊息
$m_SaveOk = "N";    //存檔是否 OK
$m_RetPage = "event-manage.php";  //返回頁
$m_PageName = "";

$p_DataKey = 0;
$e_name = "";
$e_start = "";
$e_end = "";
$e_info = "";
$e_rule = "";
$e_pic = "";
$e_link = "";


if ($m_Method == "GET") {
    $m_PageMode = $_GET['action'];
    if ($m_PageMode == "add") {
        //不處理
    }
    if ($m_PageMode == "edit") {
        $p_DataKey = $_GET['id'];
        $conn = sql_open();
        $sql = "SELECT * FROM dravelin.event WHERE e_id = $p_DataKey;";
        $result = mysqli_query($conn, $sql);
        if (mysqli_errno($conn) != 0) {
            $m_ErrorMsg = "資料讀取時發生錯誤 : " . mysqli_error($conn);
            sql_close($conn);
            goto END_PROC;
        }
        sql_close($conn);
        if (mysqli_num_rows($result) == 0) {
            $m_ErrorMsg = "找不到該筆資料！";
            goto END_PROC;
        }
        $row = mysqli_fetch_assoc($result);
        $e_name = $row['e_name'];
        $e_start = $row['e_start'];
        $e_end = $row['e_end'];
        $e_info = $row['e_info'];
        $e_rule = $row['e_rule'];
        $e_pic = $row['e_pic'];
        $e_link = $row['e_link'];
    }
}

if ($m_Method == "POST") {
    $m_PageMode = $_POST['m_PageMode'];
    $p_DataKey = $_POST['p_DataKey'];
    $e_name = $_POST['e_name'];
    $e_start = $_POST['e_start'];
    $e_end = $_POST['e_end'];
    $e_info = $_POST['e_info'];
    $e_rule = $_POST['e_rule'];
    $e_pic = $_POST['e_pic'];
    $e_link = $_POST['e_link'];

    if ($m_PageMode == "add") {
        $conn = sql_open();
        $sql = "
                INSERT INTO event
                (e_name, e_start, e_end, e_info, e_rule, e_pic, e_link)
                VALUES('{$e_name}', '{$e_start}', '{$e_end}', '{$e_info}', '{$e_rule}', '{$e_pic}', '{$e_link}');
            ";
        $result = mysqli_query($conn, $sql);
        if (mysqli_errno($conn) != 0) {
            $m_ErrorMsg = "資料新增時發生錯誤 : " . mysqli_error($conn);
            sql_close($conn);
            goto END_PROC;
        }
        sql_close($conn);
        $m_SaveOk = "Y";
    }

    if ($m_PageMode == "edit") {
        $conn = sql_open();
        $sql = "
                UPDATE event
                SET e_name = '{$e_name}', e_start = '{$e_start}', e_end = '{$e_end}', e_info = '{$e_info}', e_rule = '{$e_rule}', e_pic = '{$e_pic}', e_link = '{$e_link}'
                WHERE e_id = {$p_DataKey};
            ";
        $result = mysqli_query($conn, $sql);
        if (mysqli_errno($conn) != 0) {
            $m_ErrorMsg = "資料更新時發生錯誤 : " . mysqli_error($conn);
            sql_close($conn);
            goto END_PROC;
        }
        sql_close($conn);
        $m_SaveOk = "Y";
    }
}



END_PROC:

if ($m_PageMode == "add") {
    $m_PageName = "新增活動";
} else {
    $m_PageName = "編輯活動";
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
    <title><?php echo $m_PageName ?></title>

    <!-- jquery -->
    <script src="js/jquery-3.3.1.min.js"></script>

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
    <!-- Air datepicker Css -->
    <link href="https://cdn.jsdelivr.net/npm/air-datepicker@3.3.5/air-datepicker.min.css" rel="stylesheet">

    <!--font-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap">
    <script src="https://kit.fontawesome.com/937e93c93c.js" crossorigin="anonymous"></script>

    <script>
        function onCancel() {
            if (!confirm("您確定要離開嗎？")) {
                return false;
            }
            location.href = "<?php echo $m_RetPage ?>";
        }

        function onOk() {
            if (verifyData() === false) {
                return false;
            }
            var form = document.getElementById("thisForm");
            form.submit();
        }

        function verifyData() {
            let tmp;
            tmp = $("#e_name").val().trim();
            $("#e_name").val(tmp);
            if (tmp == "") {
                alert("【活動名稱】必須輸入");
                return false;
            }

            tmp = $("#e_start").val().trim();
            $("#e_start").val(tmp);
            if (tmp == "") {
                alert("【開始時間】必須輸入");
                return false;
            }

            tmp = $("#e_end").val().trim();
            $("#e_end").val(tmp);
            if (tmp == "") {
                alert("【結束時間】必須輸入");
                return false;
            }
            tmp = $("#e_info").val().trim();
            $("#e_info").val(tmp);
            if (tmp == "") {
                alert("【活動資訊】必須輸入");
                return false;
            }
            tmp = $("#e_rule").val().trim();
            $("#e_rule").val(tmp);
            if (tmp == "") {
                alert("【活動辦法】必須輸入");
                return false;
            }
            tmp = $("#e_pic").val().trim();
            $("#e_pic").val(tmp);
            if (tmp == "") {
                alert("【圖片】必須輸入");
                return false;
            }
            return true;
        }


        $(document).ready(function() {
            <?php
            //錯誤訊息處理
            if ($m_ErrorMsg != "") {
                echo "alert('" . addslashes($m_ErrorMsg) . "');\n";
            }
            ?>

            <?php
            //設定返回頁
            if ($m_SaveOk == "Y") {
                echo "location.href = '{$m_RetPage}';";
            }
            ?>
        });
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

        .event__add__table td {
            text-align: left;
            padding: 0 30px 10px 30px;
            vertical-align: top;
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
                    <h4><?php echo $m_PageName ?></h4>
                </div>
            </div>

            <div class="event__add__box" style="margin: 0 auto">
                <form id="thisForm" action="<?php echo $m_ThisPage ?>" method="POST">
                    <input type="hidden" name="m_PageMode" value="<?php echo $m_PageMode ?>">
                    <input type="hidden" name="p_DataKey" value="<?php echo $p_DataKey ?>">
                    <table class="event__add__table">
                        <tr>
                            <td>
                                活動名稱<br>
                                <input class="event__add__input" type="text" name="e_name" value="<?php echo $e_name ?>" placeholder=" 請輸入名稱...">
                            </td>
                            <td rowspan="2">
                                活動辦法<br>
                                <textarea class="event__add__textarea" name="e_rule" placeholder=" 請輸入內容..."><?php echo $e_rule ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                開始時間<br>
                                <input class="event__add__input" type="datetime" name="e_start" id="myDatepicker" value="<?php echo $e_start ?>" placeholder=" yyyy-MM-dd">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                結束時間<br>
                                <input class="event__add__input" type="datetime" name="e_end" id="myDatepicker2" value="<?php echo $e_end ?>" placeholder=" yyyy-MM-dd">
                            </td>
                            <td>
                                圖片<br>
                                <input class="event__add__input" type="text" name="e_pic" value="<?php echo $e_pic ?>" placeholder=" 請輸入圖片網址...">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                活動資訊<br>
                                <textarea class="event__add__textarea" name="e_info" placeholder=" 請輸入內容..."><?php echo $e_info ?></textarea>
                            </td>
                            <td>
                                活動連結<br>
                                <input class="event__add__input" type="text" name="e_link" value="<?php echo $e_link ?>" placeholder=" 請輸入活動網址...">
                            </td>
                        </tr>
                        <tr>
                            <td class="event__add__operate" colspan="2" style="text-align: right">
                                <input type="button" value="取消" style="background-color: #1d50a150" onclick="onCancel()">
                                <input type="submit" value="儲存" style="background-color: #fed566" onclick="onOk()">
                            </td>
                        </tr>
                    </table>
                </form>
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
    <script src="js/bootstrap.min.js"></script>
    <script src="js/player.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <!-- Air datepicker Html element -->
    <input id="myDatepicker">
    <!-- Air datepicker JavaScript-->
    <script src="https://cdn.jsdelivr.net/npm/air-datepicker@3.3.5/air-datepicker.min.js"></script>
    <script>
        // Call Air datepicker function
        new AirDatepicker('#myDatepicker');
        new AirDatepicker('#myDatepicker2');
    </script>
    <script>
        const en = {
            days: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
            daysShort: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
            daysMin: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
            months: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            monthsShort: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            today: 'Today',
            clear: 'Clear',
            dateFormat: 'yyyy-MM-dd',
            timeFormat: 'hh:mm aa',
            firstDay: 0
        }

        const datepicker = new AirDatepicker('#myDatepicker', {
            locale: en, // Set language
        })

        const datepicker2 = new AirDatepicker('#myDatepicker2', {
            locale: en, // Set language
        })

        const printCurrentTime = () => {
            console.log(datepicker.selectedDates) // print selected date
        }

        const printCurrentTime2 = () => {
            console.log(datepicker2.selectedDates) // print selected date
        }
    </script>

</body>

</html>