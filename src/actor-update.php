<?php
    include_once "{$_SERVER['DOCUMENT_ROOT']}/lib/lib_mysql.php";
    $conn = sql_open();

    $a_id=$_GET['a_id'];
    $sql = "select * from actor where a_id = '$a_id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $a_name = $row['a_name'];
    $a_pic = $row['a_pic'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>演員列表</title>

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
                        <h3>演員列表</h3>
                        <hr style="border-color:#000000;">

                        <form action="./dblinks/dblink-actor.php" method="post">
                            <input type=hidden name="dbaction" value="update">
                            <input type=hidden name="a_id" value="<?php echo $a_id; ?>">

                                <table 
                                    class="table bg-light table-striped tableList"
                                    data-toggle="table" 
                                    data-sortable="true"
                                    data-sort-class="table-active"
                                    data-pagination="true"
                                >
                                    <thead>
                                        <tr>
                                            <th data-field="id" data-sortable="true">演員ID</th>
                                            <th data-field="name" data-sortable="true">演員名稱</th>
                                            <th data-field="pic" data-sortable="true">圖片URL</th>
                                            <th data-field="edit" >操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>

                                        <td></td>
                                        <td>
                                            <input type=text name="a_name" style="width:90px; margin-bottom: 0px;" value="<?php echo $a_name; ?>" required maxlength=30>
                                        </td>
                                        <td align="center"><input type=text name="a_pic" value="<?php echo $a_pic; ?>" required maxlength=300 style="margin-bottom: 0px;"></td>
                                        <td style='width: 115px;'>
                                            <button type="submit" style="border: none; background: none; padding: 0; margin: 8px;">
                                                <img src='./img/check.png' style='width: 25px;'>
                                            </button>
                                            <a href="actor.php"><img src='./img/cancel.png'style='width: 25px; margin: 8px;'></a>
                                        </td>
                                </tr>
                                

                                <?php
                                    $result = mysqli_query($conn, "SELECT * FROM actor");
                                    while($row = mysqli_fetch_assoc($result)){
                                        echo"
                                        
                                            <tr>
                                                <td>", $row['a_id'],"</td>
                                                <td>", $row['a_name'],"</td>
                                                <td style='word-break: break-all; width: 800px;'>
                                                    <div style='display: flex; align-items: center;'>
                                                        <img src='", $row['a_pic'],"' style='object-fit: cover; object-position: center center; border-radius: 50%; width: 4rem; height: 4rem; margin-right: 10px;'>", $row['a_pic'],"
                                                    </div>
                                                </td>
                                                <td style='width: 115px;'>
                                                    <a href='./actor-update.php?method=update&a_id=",$row['a_id'],"'>
                                                        <img src='./img/edit.png'style='width: 25px; margin: 5px;'>
                                                    </a>
                                                    <a href='javascript:void(0);' onclick='confirmDelete(\"./dblinks/delete-actor.php?method=delete&a_id={$row['a_id']}\")'>
                                                        <img src='./img/delete.png' class='delete-btn' style='width: 25px; margin: 5px;'>
                                                    </a>
                                                </td>
                                            </tr>
                                        ";
                                    }

                                ?>
                            </tbody>
                        </table>       
                        </form>               
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-table@1.22.4/dist/bootstrap-table.min.js"></script>

</body>
</html>