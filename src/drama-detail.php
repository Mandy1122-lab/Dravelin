<?php
    include_once "{$_SERVER['DOCUMENT_ROOT']}/lib/lib_mysql.php";
    $conn = sql_open();
    $d_id=$_GET['d_id'];
    $sql = "SELECT * FROM drama WHERE d_id = '$d_id'";
    $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>劇集資訊</title>


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


    <!-- 主要頁面 -->

    <section class="spad">
        <div class="container">
            <div class="row">

                <?php
                    $genre = mysqli_query($conn, "SELECT * FROM genre JOIN genred ON genred.g_id = genre.g_id WHERE genred.d_id =".$d_id."");
                    while($row = mysqli_fetch_assoc($result)){
                        $name = $row['d_name'];
                        $country = mysqli_query($conn, "SELECT c_name FROM country JOIN drama ON drama.c_id = country.c_id WHERE drama.c_id =".$row['c_id']."");
                        $year = date('Y', strtotime($row['d_date']));
                        echo"       

                            <div class='col-lg-3'>
                                <div class='anime__details__pic set-bg'  data-setbg='",$row['d_pic'],"'>
                                </div>
                            </div>
                            <div class='col-lg-9'>
                                <div class='anime__details__text'>
                                    <div class='anime__details__title'>
                                        <h2>", $row['d_name'],"</h2>";
                                        while($cou = mysqli_fetch_assoc($country)){
                                            echo"<span>",$cou['c_name']," / 劇集</span>";
                                            break;
                                        }
                                        echo"
                                    </div>
                                    <div class='anime__details__widget'>
                                        <div class='row'>
                                            <div class='col-lg-12'>
                                                <ul>
                                                    <li><span>出品年份:</span>", $year ,"</li>
                                                    <li><span>類型:</span>";
                                                        while($item = mysqli_fetch_assoc($genre)){
                                                            echo"<a href='drama-genre.php?g_id={$item['g_id']}'>".$item['g_name']."</a> /";
                                                        }
                        echo"
                                                    </li>
                                                </ul>
                                                <ul>
                                                <li><span>劇情簡介:</span>
                                                    <p>", $row['d_intro'],"</p>
                                                </li>
                                                </ul>
        
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                        ";
                    }
                ?>

            </div>
            <br>
            <div class="col-lg-12 col-md-8">
                <div class="section-title">
                    <h5>拍攝地點
                    <a href="map.php?message=<?php echo$name;?>" style="float: right">前往地圖⭢</a></h5>
                </div>
                <div class="owl-carouselSpot owl-carousel owl-theme">

                    <?php
                        $stmt = mysqli_prepare($conn, "SELECT * FROM spot JOIN spotd ON spotd.s_id = spot.s_id WHERE spotd.d_id = ?");
                        mysqli_stmt_bind_param($stmt, "i", $d_id);
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);

                        while($row = mysqli_fetch_assoc($result)){
                            echo"

                            <div class='itemSpot'><img src='",$row['s_pic'] ,"'>
                                <h5><a href='spot-info.php?s_id=", $row['s_id'], "'>", $row['s_name'] ,"</a></h5>
                            </div>
                            ";
                        }
                    ?>
                </div>
                <br>
                <div class="section-title">
                    <h5>演員名單</h5>
                </div>
                <div class="owl-carousel owl-theme">
                    <?php
                        $stmt = mysqli_prepare($conn, "SELECT * FROM actor JOIN actord ON actor.a_id = actord.a_id WHERE actord.d_id = ?");
                        mysqli_stmt_bind_param($stmt, "i", $d_id);
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);
                        
                        while($row = mysqli_fetch_assoc($result)){
                            echo"

                            <div class='item'><a data-bs-toggle='modal' data-bs-target='#Modal".$row['a_id']."'><img src='",$row['a_pic'],"'></a>
                                <h5>", $row['a_name'] ,"</h5>
                            </div>

                            ";
                        }
                    ?>
                </div>

                <!-- Modal -->
                <?php
                    $result2 = mysqli_query($conn, "SELECT * FROM actor JOIN actord ON actor.a_id = actord.a_id WHERE actord.d_id ={$d_id}");
                    while($row2 = mysqli_fetch_assoc($result2)){
                        echo"

                        <div class='modal fade' id='Modal".$row2['a_id']."' tabindex='-1' aria-labelledby='ModalLabel' aria-hidden='true'>
                            <div class='modal-dialog modal-dialog-centered'>
                                <div class='modal-content'>
                                    <div class='modal-header'>
                                        <h4 class='modal-title' id='ModalLabel'><b>".$row2['a_name']."</b></h4>
                                        <i type='button' class='fa-solid fa-xmark' data-bs-dismiss='modal' aria-label='Close'></i>
                                    </div>
                                    <div class='modal-body'>
                                        <b>出演電影</b>
                                        <div class='owl-carouselModal owl-carousel  owl-theme'>
                                            ";
                                                $sql2 = "SELECT * FROM `movie` JOIN actorm ON actorm.m_id = movie.m_id WHERE actorm.a_id=".$row2['a_id']."";
                                                $resultA = mysqli_query($conn, $sql2);
                                                while($act = mysqli_fetch_assoc($resultA)){
                                                    echo "
                                                        <div class='modalitem'><img src='".$act['m_pic']."'>
                                                            <h5><a href='movie-detail.php?m_id={$act['m_id']}'>".$act['m_name']."</a></h5>
                                                        </div>
                                                    ";
                                                }
                                            echo"
                                        </div>
        
                                        <b>出演劇集</b>
                                        <div class='owl-carouselModal owl-carousel  owl-theme'>
                                            ";
                                                $sql3 = "SELECT * FROM `drama` JOIN actord ON actord.d_id = drama.d_id WHERE actord.a_id=".$row2['a_id']."";
                                                $resultD = mysqli_query($conn, $sql3);
                                                while($act = mysqli_fetch_assoc($resultD)){
                                                    echo "
                                                        <div class='modalitem'><img src='".$act['d_pic']."'>
                                                            <h5><a href='drama-detail.php?d_id=".$act['d_id']."'>".$act['d_name']."</a></h5>
                                                        </div>
                                                    ";
                                                }
                                            echo"
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ";
                    }
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

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

    <!-- owl 輪播頁 -->
    <script>
        $('.owl-carouselModal').owlCarousel({
            margin:10, //間距
            items:3,  //一頁顯示幾個
        })

        $('.owl-carouselSpot').owlCarousel({
            margin:10,
            nav:true,
            items:4, 
        })

        $('.owl-carousel').owlCarousel({
            margin:10,
            nav:true,  //點點
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:6
                }
            }
        })
    </script>
    <style>
        .owl-theme .item {
            height: 11rem;
            width: 10rem;
            padding: 1rem;
        }
        .owl-theme .item img{
            height: 8rem;
            width: 8rem;
            border-radius: 50%;
            object-fit: cover;   /* 等比例縮放 */
            object-position: center center;
        }
        .owl-carousel .item h5 {
            color: #000000;
            font-weight:bold;  /* 粗體 */
            font-size: 1.1rem;
            text-align: center;
            padding-top: 5px;
        }

        /* 演員小窗 */
        .owl-theme .modalitem {
            height: 16rem;
            width: 9.8rem;
            padding: 1rem;
        }
        .owl-theme .modalitem img{
            border-radius: 5%;
        }
        .owl-carousel .modalitem h5 a {
            color: #000;
            font-weight: 700;
            line-height: 26px;
        }

        /* 景點 */
        .owl-theme .itemSpot {
            height: 15rem;
            width: 20rem;
            padding: 1rem;
        }
        .owl-theme .itemSpot img{
            height: 12rem;
            width: 16rem;
            border-radius: 5%;
            object-fit: cover;   /* 等比例縮放 */
            object-position: center center;
        }
        .owl-carousel .itemSpot h5 {
            padding-top: 5px;
        }
        .owl-carousel .itemSpot h5 a {
            color: #000;
            font-weight: 700;
            line-height: 26px;
        }

        .back-icon {
            position: absolute;
            left: 16%;
            top: 15%;
        }

    </style>

</body>
</html>