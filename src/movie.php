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
    <title>Dravelin-電影一覽</title>

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">

    <!-- owl 輪播頁 -->
    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
    <script src="owlcarousel/jquery.min.js"></script>
    <script src="owlcarousel/owl.carousel.min.js"></script>
    
    <script src="https://kit.fontawesome.com/f3385d511c.js" crossorigin="anonymous"></script>

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <?php 
        require 'header.html';
    ?>

    <!-- Product Section Begin -->
    <section class="spad">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h4>最新上架</h4>
                </div>
                <div class="owl-carousel owl-theme">
                    <?php
                        $sql = "SELECT * FROM movie JOIN listm ON listm.m_id = movie.m_id WHERE listm.l_id = 2";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0){
                        
                        while($row = mysqli_fetch_assoc($result)){
                            $sql2 = "SELECT * FROM genre JOIN genrem ON genrem.g_id = genre.g_id WHERE genrem.m_id ={$row['m_id']}";
                            $genre = mysqli_query($conn, $sql2);
                            echo"       
                                <div class='item'><img src='{$row['m_pic']}'>
                                    <div class='product__item__text'>
                                        <ul>
                            ";
                                    while($item = mysqli_fetch_assoc($genre)){
                                        echo"<li><a href='movie-genre.php?g_id={$item['g_id']}'>{$item['g_name']}</a></li>";
                                    }
                            echo"
                                        </ul>
                                        <h5><a href='movie-detail.php?m_id={$row['m_id']}'>{$row['m_name']}</a></h5>
                                    </div>
                                </div>
                            ";
                        }}
                    ?>
                </div>
                <div class="section-title">
                    <h4>熱門電影</h4>
                </div>
                <div class="owl-carousel owl-theme">
                    <?php
                        $sql = "SELECT * FROM movie JOIN listm ON listm.m_id = movie.m_id WHERE listm.l_id = 1";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0){
                        
                        while($row = mysqli_fetch_assoc($result)){
                            $sql2 = "SELECT * FROM genre JOIN genrem ON genrem.g_id = genre.g_id WHERE genrem.m_id ={$row['m_id']}";
                            $genre = mysqli_query($conn, $sql2);
                            echo"       
                                <div class='item'><img src='{$row['m_pic']}'>
                                    <div class='product__item__text'>
                                        <ul>
                            ";
                                    while($item = mysqli_fetch_assoc($genre)){
                                        echo"<li><a href='movie-genre.php?g_id={$item['g_id']}'>{$item['g_name']}</a></li>";
                                    }
                            echo"
                                        </ul>
                                        <h5><a href='movie-detail.php?m_id={$row['m_id']}'>{$row['m_name']}</a></h5>
                                    </div>
                                </div>
                            ";
                        }}
                    ?>
                </div>
                <?php
                    $sql = "SELECT * FROM genre";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0){
                    
                    while($row = mysqli_fetch_assoc($result)){
                        $sql2 = "SELECT * FROM movie JOIN genrem ON genrem.m_id = movie.m_id WHERE genrem.g_id = {$row['g_id']}";
                        $movie = mysqli_query($conn, $sql2);
                        echo"       
                            <div class='section-title'>
                                <h4>{$row['g_name']}</h4>
                            </div>
                            <div class='owl-carousel owl-theme'>";

                                while($item = mysqli_fetch_assoc($movie)){
                                    $sql3 = "SELECT * FROM genre JOIN genrem ON genrem.g_id = genre.g_id WHERE genrem.m_id ={$item['m_id']}";
                                    $genre = mysqli_query($conn, $sql3);   
                                    echo"<div class='item'><img src='{$item['m_pic']}'>
                                            <div class='product__item__text'>
                                                <ul>";
                                                    while($gen = mysqli_fetch_assoc($genre)){
                                                        echo"<li><a href='movie-genre.php?g_id={$gen['g_id']}'>{$gen['g_name']}</a></li>";
                                                    }
                                            echo"</ul>
                                                <h5><a href='movie-detail.php?m_id={$item['m_id']}'>{$item['m_name']}</a></h5>
                                            </div>
                                        </div>";
                                }
                            echo"</div>";
                    }}
                ?>

            </div>
        </div>
    </section>

    <?php 
        require 'footer.html';
    ?>

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/player.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

    <!-- owl 輪播頁 -->
    <script>
        $('.owl-carousel').owlCarousel({
            margin:10,
            nav:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
        })
    </script>
    <style>
        .owl-theme .item {
            height: 25rem;
            width: 15rem;
            padding: 1rem;
        }
        .owl-theme .item img{
            height: 18rem;
            width: 13rem;
            border-radius: 5%;
            object-fit: cover;   /* 等比例縮放 */
            object-position: center center;
        }
    </style>


</body>

</html>