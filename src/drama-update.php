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
    <title>編輯劇集</title>

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">

    <!-- BootstrapTable CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.22.4/dist/bootstrap-table.min.css">

</head>
<body>

    <?php 
        require 'header-mng.html';
    ?>

    <?php
        $d_id=$_GET['d_id'];
        $sql = "SELECT * FROM drama WHERE d_id = '$d_id'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $d_name = $row['d_name'];
        $d_pic = $row['d_pic'];
        $d_date = $row['d_date'];
        $d_intro = $row['d_intro'];
    ?>

    <section class="spad">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-12">
                    <div class="blog__details__form">
                        <h3>修改-劇集</h3>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="introduce-tab" data-bs-toggle="tab" data-bs-target="#introduce" type="button" role="tab" aria-controls="introduce" aria-selected="true">介紹</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="actor-tab" data-bs-toggle="tab" data-bs-target="#actor" type="button" role="tab" aria-controls="actor" aria-selected="false">演員</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="spot-tab" data-bs-toggle="tab" data-bs-target="#spot" type="button" role="tab" aria-controls="spot" aria-selected="false">景點</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade" id="introduce" role="tabpanel" aria-labelledby="introduce-tab">

                                <form action="./dblinks/dblink-drama.php" method="post">
                                    <input type=hidden name="d_id" value="<?php echo $d_id; ?>">
                                    <input type=hidden name="dbaction" value="update">
                                    <table class="table" frame=void style="table-layout:fixed; margin-top: 20px;">

                                        <tr>
                                            <td><p>電影名稱</p><input type=text name="d_name" value="<?php echo $d_name; ?>" required maxlength=100></td>
                                            <td rowspan="2"><p>劇情簡介</p><textarea name="d_intro" rows="8" cols="63" required maxlength=900><?php echo $d_intro; ?></textarea></td>
                                        </tr>
                                        <tr>
                                            <td><p>日期</p><input type="date" value="<?php echo $d_date; ?>" name="d_date"></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>國家</p>
                                                <select class="selection" name="c_id" required>
                                                <?php
                                                    $selectedCountryQuery = "SELECT drama.c_id FROM drama WHERE drama.d_id = $d_id";
                                                    $selectedCountryResult = mysqli_query($conn, $selectedCountryQuery);
                                                    while ($countryRow = mysqli_fetch_assoc($selectedCountryResult)) {
                                                        $selectedCountry[] = $countryRow['c_id'];
                                                    }
                                                    $result = mysqli_query($conn, "SELECT * FROM country");
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        $selected = in_array($row['c_id'], $selectedCountry) ? 'selected' : '';
                                                        echo"
                                                                <option value='".$row['c_id']."'$selected>".$row['c_name']."</option>
                                                            ";
                                                    }
                                                ?>
                                                </select>
                                            </td>
                                            <td><p>封面圖片</p><input type=text name="d_pic" value="<?php echo $d_pic; ?>" required maxlength=300></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <?php
                                                $selectedGenresQuery = "SELECT genre.g_id FROM genre JOIN genred ON genred.g_id = genre.g_id WHERE genred.d_id = $d_id";
                                                $selectedGenresResult = mysqli_query($conn, $selectedGenresQuery);

                                                $selectedGenres = array();
                                                while ($genreRow = mysqli_fetch_assoc($selectedGenresResult)) {
                                                    $selectedGenres[] = $genreRow['g_id'];
                                                }
                                                    $result = mysqli_query($conn, "SELECT * FROM genre");
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        // 檢查genre是否選中
                                                        $checked = in_array($row['g_id'], $selectedGenres) ? 'checked' : '';

                                                        echo "
                                                        <label>
                                                            <input type='checkbox' style='width:18px;height:18px;' name='options[]' value='",$row['g_id'],"' $checked>",$row['g_name'],"
                                                        </label>&nbsp;
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
                            <div class="tab-pane fade" id="actor" role="tabpanel" aria-labelledby="actor-tab">

                                <table width="100%">
                                    <tr>
                                        <td>
                                            <h4 style="padding-top: 35px;">目前選擇</h4>
                                        </td>
                                        <td align=right>
                                            <a class="reset-btn" href="./drama-back.php">完成</a>
                                        </td>
                                    </tr>
                                </table>
                                <div class="row">

                                    <?php
                                        $result = mysqli_query($conn, "SELECT * FROM actor JOIN actord ON actord.a_id = actor.a_id WHERE actord.d_id = '$d_id'");
                                        while($row = mysqli_fetch_assoc($result)){
                                            echo"       
                                                <div class='image-container'>
                                                    <img src='",$row['a_pic'],"' class='actor' alt='Image'>
                                                    <a href='./dblinks/delete-dramaActor.php?method=delete&a_id=",$row['a_id'],"&d_id=",$row['d_id'],"'>
                                                        <img src='./img/close.png' class='close-btn' alt='Image'>
                                                    </a>
                                                    <h5>",$row['a_name'],"</h5>
                                                </div>
                                            ";
                                        }

                                    ?>

                                </div>
                                <br>
                                <form action="./dblinks/dblink-drama.php" method="POST">
                                    <input type='hidden' name='dbaction' value='search'>
                                    <input type=hidden name="d_id" value="<?php echo $d_id; ?>">
                                    <input type="text" name="search" placeholder="搜尋演員" value="<?php if(isset($_GET['search'])){ echo $_GET['search']; }?>">
                                </form>
                                <h4 style="padding-top: 10px;">演員列表</h4>
                                <div class="row">
                                    <?php
                                        $result = mysqli_query($conn, "SELECT * FROM actor WHERE a_id NOT IN (
                                                                    SELECT a_id
                                                                    FROM actord
                                                                    WHERE d_id = '$d_id'
                                                                );");
                                        if(isset($_GET['search'])){
                                            $searchWord = $_GET['search'];
                                            $query = "SELECT * FROM actor WHERE a_name LIKE '%$searchWord%'";
                                            $query_run = mysqli_query($conn, $query);

                                            if(mysqli_num_rows($query_run) > 0)
                                            {
                                                foreach($query_run as $items)
                                                {
                                                    echo"       
                                                        <div class='image-container'>
                                                            <form action='./dblinks/dblink-dramaActor.php' method='post'>
                                                                <input type='hidden' name='a_id' value='".$items['a_id']."'>
                                                                <input type='hidden' name='d_id' value='$d_id'>
                                                                <input type='hidden' name='dbaction' value='insert'>
                            
                                                                <button type='submit' style='border: none; background: none;'>
                                                                    <img src='", $items['a_pic'],"' class='actor'>
                                                                    <h5>", $items['a_name'],"</h5>
                                                                </button>
                                                            </form>
                                                        </div>
            
                                                    ";
                                                }
                                            }else{
                                                ?>
                                                    <p>No Record Found</p>
                                                <?php
                                            }
                                        }else{
                                        
                                            while($row = mysqli_fetch_assoc($result)){
                                                echo"       
                                                    <div class='image-container'>
                                                        <form action='./dblinks/dblink-dramaActor.php' method='post'>
                                                            <input type='hidden' name='a_id' value='".$row['a_id']."'>
                                                            <input type='hidden' name='d_id' value='$d_id'>
                                                            <input type=hidden name='dbaction' value='insert'>
                        
                                                            <button type='submit' style='border: none; background: none;'>
                                                                <img src='", $row['a_pic'],"' class='actor'>
                                                                <h5>", $row['a_name'],"</h5>
                                                            </button>
                                                        </form>
                                                    </div>
        
                                                ";
                                            }
                                        }

                                    ?>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="spot" role="tabpanel" aria-labelledby="spot-tab">
                                <table width="100%">
                                    <tr>
                                        <td>
                                            <h4 style="padding-top: 35px;">目前選擇</h4>
                                        </td>
                                        <td align=right>
                                            <a class="reset-btn" href="./drama-back.php">完成</a>
                                        </td>
                                    </tr>
                                </table>

                                <table 
                                    class="table bg-light table-striped tableList"
                                    data-toggle="table" 
                                    data-sortable="true"
                                    data-sort-class="table-active"
                                    data-pagination="true"
                                >
                                    <thead>
                                        <tr>
                                            <th data-field="id" data-sortable="true">景點ID</th>
                                            <th data-field="name" data-sortable="true">景點名稱</th>
                                            <th data-field="edit" >操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $result = mysqli_query($conn, "SELECT * FROM spot JOIN spotd ON spotd.s_id = spot.s_id WHERE spotd.d_id = '$d_id'");
                                            while($row = mysqli_fetch_assoc($result)){
                                                echo"
                                                
                                                    <tr>
                                                        <td style='width: 300px;'>", $row['s_id'],"</td>
                                                        <td>", $row['s_name'],"</td>
                                                        <td style='width:100px;'>
                                                            <a href='./dblinks/delete-dramaSpot.php?method=delete&sd_id=",$row['sd_id'],"'>
                                                                <img src='./img/delete.png' style='width: 25px;'>
                                                            </a>

                                                        </td>
                                                    </tr>
                                                ";
                                            }

                                        ?>
                                    </tbody>
                                </table>

                                <table 
                                    class="table bg-light table-striped tableList"
                                    data-toggle="table" 
                                    data-sortable="true"
                                    data-sort-class="table-active"
                                    data-pagination="true"
                                    data-search="true"
                                >
                                    <thead>
                                        <tr>
                                            <th data-field="id" data-sortable="true">景點ID</th>
                                            <th data-field="name" data-sortable="true">景點名稱</th>
                                            <th data-field="edit" >操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                            $result = mysqli_query($conn, "SELECT * FROM spot WHERE s_id NOT IN (
                                                                            SELECT s_id FROM spotd WHERE d_id = '$d_id'
                                                                )");
                                            while($row = mysqli_fetch_assoc($result)){
                                                echo"
                                                
                                                    <tr>
                                                        <td style='width: 300px;'>", $row['s_id'],"</td>
                                                        <td>", $row['s_name'],"</td>                                                    
                                                        <td style='width:100px;'>
                                                            <form action='./dblinks/dblink-dramaSpot.php' method='post'>
                                                                <input type='hidden' name='s_id' value='".$row['s_id']."'>
                                                                <input type='hidden' name='d_id' value='".$d_id."'>

                                                                <button type='submit' style='border: none; background: none;'>
                                                                    <img src='./img/add.png' style='width: 30px;'>
                                                                </button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                ";
                                            }

                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- checkbox其他 -->
    <script>
        var otherCheckbox = document.getElementById('otherOption');
        var otherText = document.getElementById('otherText');
        
        // 為 checkbox 添加一個事件監聽器
        otherCheckbox.addEventListener('change', function() {
            // 檢查 checkbox 是否被選中
            if(this.checked) {
                otherText.style.display = 'block';
            } else {
                otherText.style.display = 'none';
            }
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var myTab = document.querySelector('#myTab');
            var activeTab = localStorage.getItem('activeTab');
            if (activeTab) {
                var someTabTriggerEl = document.querySelector(`#${activeTab}`);
                var tab = new bootstrap.Tab(someTabTriggerEl);
                tab.show();
            }

            myTab.addEventListener('shown.bs.tab', function (event) {
                var activatedTab = event.target; // newly activated tab
                localStorage.setItem('activeTab', activatedTab.id);
            });
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
    <!-- BootstrapTable JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-table@1.22.4/dist/bootstrap-table.min.js"></script>

</body>
</html>