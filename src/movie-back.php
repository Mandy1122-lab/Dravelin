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
    <title>電影、片單列表</title>

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">

    <!-- BootstrapTable CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.22.4/dist/bootstrap-table.min.css">
    
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

    <!-- Blog Details Section Begin -->
    <section class="blog-details spad">
        <div class="container">
            <div class="col-lg-12">
                <div class="blog__details__form">
                    <h3>電影列表</h3>
                    <hr style="border-color:#000000;">

                    <div id="toolbar">
                        <a href='movie-create.php'><button class="btn btn-outline-primary">
                            <b>+ &nbsp新增電影</b>
                        </button></a>
                    </div>
                    <table 
                        data-toolbar="#toolbar"
                        class="table bg-light table-striped tableList"
                        data-toggle="table" 
                        data-sortable="true"
                        data-sort-class="table-active"
                        data-pagination="true"
                        data-search="true"
                        data-toolbar-align="right"
                        data-search-align="left"
                    >
                        <thead>
                            <tr>
                                <th data-field="id" data-sortable="true">電影ID</th>
                                <th data-field="name" data-sortable="true">電影名稱</th>
                                <th data-field="edit" >操作</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                                $result = mysqli_query($conn, "SELECT * FROM movie");
                                while($row = mysqli_fetch_assoc($result)){
                                    echo"
                                    
                                        <tr>
                                            <td style='width: 300px;'>", $row['m_id'],"</td>
                                            <td>", $row['m_name'],"</td>
                                            <td style='width: 125px;'>
                                                <a href='./movie-update.php?m_id=",$row['m_id'],"'><img src='./img/edit.png' style='width: 25px; margin: 5px;'></a>
                                                <a href='javascript:void(0);' onclick='confirmDelete(\"./dblinks/delete-movie.php?method=delete&m_id={$row['m_id']}\")'>
                                                    <img src='./img/delete.png' style='width: 25px; margin: 5px;'>
                                                </a>
                                            </td>
                                        </tr>
                                    ";
                                }

                            ?>
                        </tbody>
                    </table>                   
                    
                    <br>
                    <h3>片單列表</h3>
                    <hr style="border-color:#000000;">

                    <div class="toolbar">
                        <a href='movieList-create.php'><button class="btn btn-outline-primary">
                            <b>+ &nbsp新增片單</b>
                        </button></a>
                    </div>
                    <table 
                        data-toolbar=".toolbar"
                        data-toolbar-align="right"
                        class="table bg-light table-striped tableList"
                        data-toggle="table" 
                        data-sortable="true"
                        data-sort-class="table-active"
                        data-pagination="true"
                        data-search="true"
                        data-search-align="left"
                    >
                        <thead>
                            <tr>
                                <th data-field="id" data-sortable="true">片單ID</th>
                                <th data-field="name" data-sortable="true">片單名稱</th>
                                <th data-field="edit" >操作</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                                $result = mysqli_query($conn, "SELECT * FROM listmovie");
                                while($row = mysqli_fetch_assoc($result)){
                                    echo"
                                    
                                        <tr>
                                            <td style='width: 300px;'>", $row['l_id'],"</td>
                                            <td>", $row['l_name'],"</td>
                                            <td style='width: 125px;'>
                                                <a href='./movieList-update.php?method=update&l_id=",$row['l_id'],"'><img src='./img/edit.png' style='width: 25px; margin: 5px;'></a>
                                                <a href='javascript:void(0);' onclick='confirmDelete(\"./dblinks/delete-movieListAll.php?method=delete&l_id={$row['l_id']}\")'>
                                                    <img src='./img/delete.png' class='delete-btn' style='width: 25px; margin: 5px;'>
                                                </a>
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