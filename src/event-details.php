<?php
include_once "{$_SERVER['DOCUMENT_ROOT']}/lib/lib_mysql.php";
$id = $_GET["id"];
//建立資料庫連線
$conn = sql_open();
// 取得今天的日期
$sql = "SELECT e_id, e_name, e_start, e_end, e_pic, e_info, e_rule, e_link FROM event WHERE e_id = $id";
$today = date("Y-m-d");
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>活動詳情</title>
    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/player.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>


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
        var EventId = <?php echo $_GET["id"]; ?>;

        function DialogEditAccount_Open() {
            //let dlg = document.getElementById("DialogEditAccount");
            //dlg.style.display = "block";
            if(e_link != "") window.open(e_link);
        }

        function DialogEditAccount_Close() {
            let dlg = document.getElementById("DialogEditAccount");
            dlg.style.display = "none";
        }

        function DialogEditAccount_Ok() {
            let name = $("#r_name").val();
            let email = $("#r_acc").val();
            $.ajax({
                dataType: "json",
                url: "event-xq.php",
                method: "POST",
                data: {
                    cmd: 'JoinEvent',
                    EventId: EventId,
                    UserName: name,
                    Email: email,
                    time: new Date().toTimeString()
                },
                success: function(data, status) {
                    if (data.ret != 0) {
                        alert(data.msg);
                        return false;
                    }
                    DialogEditAccount_Close();
                    alert("恭喜你！加入成功");
                    return true;
                },
                error: function(xhr, status, error) {
                    alert("請求失敗: " + error);
                    return false;
                }
            });
        }
    </script>

    <style>
        /* mm-modal-dialog 樣式 */
        .mm-modal-dialog-mask {
            display: none;
            position: fixed;
            z-index: 101;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(230, 230, 230, 0.4);
        }

        .mm-modal-dialog {
            margin: 15% auto;
            border: 1px solid #666;
            background-color: #fff;
            border-radius: 7px;
            z-index: 103;
        }

        .mm-modal-dialog-content {
            padding: 15px;

        }

        .mm-modal-dialog-close {
            color: #aaa;
            float: right;
            font-size: 25px;
            font-weight: bold;
        }

        .mm-modal-dialog-close:hover,
        .mm-modal-dialog-close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        .mm-modal-dialog-content input {
            font-size: 15px;
        }

        .mm-modal-dialog-content input[type="button"] {
            padding: 2px 15px 2px 15px;
        }

        .backdiv {
            margin-top: 30px;
        }

        #head.event__details__table td {
            width: 700px;
            /* padding-top: 0px; */
        }

        #head.event__details__block {
            width: 600px;
            /* 可选，设置容器宽度 */
            margin: 0 auto 50px auto;
            /* 可选，使容器居中 */
        }

        .event__details__img {
            margin-top: 70px;
            margin-bottom: 20px;
            width: 600px;
            /* 图片容器的最大宽度 */
            height: 300px;
            /* 图片容器的最大高度 */
            overflow: hidden;
            /* 超出容器部分隐藏 */
            border-radius: 10px;
            background-image: url('https://t4.ftcdn.net/jpg/00/53/45/31/360_F_53453175_hVgYVz0WmvOXPd9CNzaUcwcibiGao3CL.jpg');
            background-position: center center;
            background-repeat: no-repeat;
            background-size: 100% auto;
        }

        #head.event__details__block h3 {
            color: black;
            /* 设置标题颜色 */
            font-weight: bolder;
            text-align: left;
            /* 标题靠左 */
            padding-left: 10px;
        }

        #head.event__details__block date {
            color: gray;
            /* 灰色文字 */
            font-size: 12px;
            /* 文字大小 */
            text-align: left;
            /* 日期靠左 */
            margin: 10px 0;
        }

        .event__details__block {
            width: 650px;
            /* 可选，设置容器宽度 */
            margin: 0 auto;
            /* 可选，使容器居中 */
        }

        .event__details__block h4 {
            padding-left: 30px;
            font-weight: bold;
        }

        .event__details__block p {
            padding-left: 30px;
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
        include 'header.html';
    ?>
    <!-- Header End -->

    <!-- Event Section Begin -->
    <?php
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<table class='event__details__table'><tr>";
            echo "<div class='event__details__block' id='head'>";
            echo "<div class='event__details__img' style=\"background-image: url('{$row['e_pic']}')\"></div>";
            echo "<h3>{$row['e_name']}</h3>";
            echo "<div class='event__block__date'>{$row['e_start']} ~ {$row['e_end']}</div>";
            echo "</div></div></td></tr><tr>";

            echo "<div class='event__details__block'>";
            echo "<h4>活動資訊</h4>";
            echo "<div class='event__details__line'></div>";
            echo "<p>{$row['e_info']}</p>";
            echo "</div></td></tr><tr><td>";

            echo "<div class='event__details__block'>";
            echo "<h4>活動辦法</h4>";
            echo "<div class='event__details__line'></div>";
            echo "<p>{$row['e_rule']}</p>";
            echo "</div></td></tr><tr>";

            echo "<td class='event__details__attend'>";
            if($today <= $row['e_end']) {
                echo "<button onclick='DialogEditAccount_Open()'>查看詳情</button>";
            }
            echo "</td></tr></table>";

            echo "<script>var e_link='{$row['e_link']}';</script>";

        }
    }
    sql_close($conn);
    ?>

    <!-- Event Section End -->

    <!-- Footer Section Begin -->
    <?php
        include 'footer.html';
    ?>
    <!-- Footer Section End -->

    <!-- Model 對話框 -->
    <div id="DialogEditAccount" class="mm-modal-dialog-mask">
        <div class="mm-modal-dialog" style="padding:10px; border:3px solid #1e4ea2; margin-top:120px; width:400px">
            <div class="mm-modal-dialog-content">
                <div style="font-size:26px; font-weight:600; text-align:center;">
                    請輸入聯絡資訊
                </div>
                <table style="margin: auto; text-align: left ">
                    <tr>
                        <td style="padding: 25px 0; font-weight: bolder">
                            姓　　名 :&nbsp;
                            <input type="text" id="r_name">
                        </td>
                    </tr>
                    <tr>
                        <td style="padding-bottom: 20px; font-weight: bolder">
                            電子郵件 :&nbsp;
                            <input type="text" id="r_acc">
                        </td>
                    </tr>
                </table>
                <div style="margin-top:30px; text-align:center">
                    <input type="button" value="確認參加" onclick="DialogEditAccount_Ok()" style="border: none; border-radius: 3px; background-color: #fed566; font-weight: bold">
                    <input type="button" value="取消" onclick="DialogEditAccount_Close()" style="margin-left:50px; border: none; border-radius: 3px; background-color: #eee; font-weight: bold">
                </div>
            </div>
        </div>
    </div>
</body>

</html>