<?php
    include_once "{$_SERVER['DOCUMENT_ROOT']}/lib/lib_mysql.php";
    $conn = sql_open();
    $l_id=$_GET['l_id'];
    $sql = "select * from listdrama where l_id = '$l_id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $l_name = $row['l_name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新增片單</title>

    <!-- Css Styles -->
    <link rel="stylesheet" href="./css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="./css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="./css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="./css/style.css" type="text/css">

    <!-- BootstrapTable CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.22.4/dist/bootstrap-table.min.css">

    <script src="https://kit.fontawesome.com/f3385d511c.js" crossorigin="anonymous"></script>
    
</head>
<body>

    <?php 
        require 'header-mng.html';
    ?>

    <section class="spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog__details__form">
                    <?php echo "
                        <table width='100%'>
                            <tr><td><h3>編輯 :  $l_name</h3></td>
                                <td align=right>
                                <a href='javascript:void(0);' onclick='confirmDelete(\"./dblinks/delete-dramaListAll.php?method=delete&l_id={$l_id}\")'><button class='btn btn-outline-danger'>
                                        <b>刪除片單</b>
                                    </button></a>
                                </td>
                            </tr>
                        </table>";
                    ?>

                        <hr style="border-color:#000000;"><br>

                        <form action="./dblinks/dblink-dramaList.php" method="post">
                            <input type=hidden name="dbaction" value="updateName">
                            <input type=hidden name="l_id" value="<?php echo $l_id; ?>">

                            <table width="100%">
                                <tr><td><h5>片單標題</h5><input type=text name="l_name" value="<?php echo $l_name; ?>" required maxlength=100></td>
                                    <td align="right">
                                        <button type="submit" class="site-btn">儲存</button>&nbsp
                                        <a class="reset-btn" href="./drama-back.php">返回</a>
                                    </td>
                                </tr>
                            </table>
                        </form>
                        <h4 style="padding-top: 10px;">目前選擇</h4>
                        <table 
                            class="table bg-light table-striped tableList"
                            data-toggle="table" 
                            data-sortable="true"
                            data-sort-class="table-active"
                            data-pagination="true"
                        >
                            <thead>
                                <tr>
                                    <th data-field="id" data-sortable="true">劇集ID</th>
                                    <th data-field="name" data-sortable="true">劇集名稱</th>
                                    <th data-field="edit" >操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $result = mysqli_query($conn, "SELECT * FROM drama JOIN listd ON listd.d_id = drama.d_id WHERE listd.l_id = '$l_id'");
                                    while($row = mysqli_fetch_assoc($result)){
                                        echo"
                                        
                                            <tr>
                                                <td style='width: 300px;'>", $row['d_id'],"</td>
                                                <td>", $row['d_name'],"</td>
                                                <td style='width:100px;'>
                                                    <a href='./dblinks/delete-dramaList.php?method=delete&d_id=",$row['d_id'],"&l_id=".$l_id."'>
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
                                    <th data-field="id" data-sortable="true">劇集ID</th>
                                    <th data-field="name" data-sortable="true">劇集名稱</th>
                                    <th data-field="edit" >操作</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                    $result = mysqli_query($conn, "SELECT * FROM drama WHERE d_id NOT IN (
                                                                    SELECT d_id FROM listd WHERE l_id = '$l_id'
                                    )");
                                    while($row = mysqli_fetch_assoc($result)){
                                        echo"
                                        
                                            <tr>
                                                <td style='width: 300px;'>", $row['d_id'],"</td>
                                                <td>", $row['d_name'],"</td>                                                    
                                                <td style='width:100px;'>
                                                    <form action='./dblinks/dblink-dramaList.php' method='post'>
                                                        <input type='hidden' name='d_id' value='".$row['d_id']."'>
                                                        <input type='hidden' name='l_id' value='".$l_id."'>
                                                        <input type=hidden name='dbaction' value='update'>
                    
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
    </section>

    <script>
        function confirmDelete(url) {
            if (confirm("是否確定刪除？")) {
                window.location.href = url;
            }
        }
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

    <!-- BootstrapTable JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-table@1.22.4/dist/bootstrap-table.min.js"></script>

</body>
</html>