<?php
    include_once "{$_SERVER['DOCUMENT_ROOT']}/lib/lib_mysql.php";
    $conn = sql_open();
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>新增劇集</title>

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">

    <script src="https://kit.fontawesome.com/f3385d511c.js" crossorigin="anonymous"></script>

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <?php 
        require 'header-mng.html';
    ?>

    <section class="spad">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-12">
                    <div class="blog__details__form">
                        <h3>新增-劇集</h3>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="introduce-tab" data-bs-toggle="tab" data-bs-target="#introduce" type="button" role="tab" aria-controls="introduce" aria-selected="true">介紹</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="introduce" role="tabpanel" aria-labelledby="introduce-tab">
                                <form action="./dblinks/dblink-drama.php" method="post">
                                    <input type=hidden name="dbaction" value="insert">
                                    <table class="table" frame=void style="table-layout:fixed">
                                        <tr>
                                            <td><p>劇集名稱</p><input type=text name="d_name" placeholder="作品名" required maxlength=100></td>
                                            <td rowspan="2"><p>劇情簡介</p><textarea name="d_intro" placeholder="簡介內容" rows="8" cols="60" required maxlength=900></textarea></td>
                                        </tr>
                                        <tr>
                                            <td><p>日期</p><input type="date" id="start" name="d_date" required></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>國家</p>
                                                <select class="selection" name="c_id" required>
                                                    <?php
                                                        $result = mysqli_query($conn, "SELECT * FROM country");
                                                        while($row = mysqli_fetch_assoc($result)){
                                                            echo"
                                                                <option value='".$row['c_id']."'>".$row['c_name']."</option>
                                                            ";
                                                        }
                                                    ?>
                                                </select>
                                            </td>
                                            <td><p>封面圖片</p><input type="text" name="d_pic" placeholder="圖片網址" required maxlength=300></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <?php
                                                $result = mysqli_query($conn, "SELECT * FROM genre");
                                                while($row = mysqli_fetch_assoc($result)){
                                                    echo"
                                                    
                                                    <label>
                                                        <input type='checkbox' style='width:18px;height:18px;' name='options[]' value='",$row['g_id'],"'>",$row['g_name'],"
                                                    </label>&nbsp
                                                    ";
                                                }
                                                ?>
                                            
                                                <label>
                                                    <input type="checkbox" style="width:18px;height:18px;" name="options[]" value="other" id="otherOption">其他
                                                </label>
                                                <input type="text" id="otherText" name="othergenre" style="display:none;" placeholder="輸入其他類別">
                                            </td>
                                            <td align="right">
                                                <button type="submit" class="site-btn">儲存</button>&nbsp
                                                <a class="reset-btn" href="./drama-back.php">返回</a>
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php 
        require 'footer.html';
    ?>

    <!-- checkbox其他 -->
    <script>
        var otherCheckbox = document.getElementById('otherOption');
        var otherText = document.getElementById('otherText');
        
        // 為 checkbox 添加一個事件監聽器
        otherCheckbox.addEventListener('change', function() {
            // 檢查 checkbox 是否被選中
            if(this.checked) {
                // 如果被選中，顯示文本輸入框
                otherText.style.display = 'block';
            } else {
                // 如果未被選中，隱藏文本輸入框
                otherText.style.display = 'none';
            }
        });
    </script>

    

    <!-- Js Plugins -->
    <script src="./js/jquery-3.3.1.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/player.js"></script>
    <script src="./js/jquery.nice-select.min.js"></script>
    <script src="./js/mixitup.min.js"></script>
    <script src="./js/jquery.slicknav.js"></script>
    <script src="./js/owl.carousel.min.js"></script>
    <script src="./js/main.js"></script>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

</body>
</html>