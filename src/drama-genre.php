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
    <title>Dravelin-劇集類別</title>

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
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
        require 'header.html';
    ?>

    <?php
        $g_id=$_GET['g_id'];
        $sql = "SELECT * FROM genre WHERE g_id='$g_id'";
        $result = mysqli_query($conn, $sql);
        $gen = mysqli_fetch_assoc($result);
    ?>

    <section class="spad">
        <div class="container">
            <div class="section-title">
                <h4>劇集類別：<?php echo $gen['g_name'];?></h4>
            </div>
            <div class="row">
                <?php
                    $sqlM = "SELECT * FROM drama JOIN genred ON genred.d_id = drama.d_id WHERE genred.g_id='$g_id'";
                    $resultM = mysqli_query($conn, $sqlM);
                    if (mysqli_num_rows($resultM) > 0){
                    
                    while($row = mysqli_fetch_assoc($resultM)){
                        $sqlG = "SELECT * FROM genre JOIN genred ON genred.g_id = genre.g_id WHERE genred.d_id =".$row['d_id']."";
                        $resultG = mysqli_query($conn, $sqlG);
                        echo"       
                            <div class='item'><img src='".$row['d_pic']."'>
                                <div class='product__item__text'>
                                    <ul>
                        ";
                                while($item = mysqli_fetch_assoc($resultG)){
                                    echo"<li><a href='drama-genre.php?g_id= ".$item['g_id']."'>".$item['g_name']."</a></li>";
                                }
                        echo"
                                    </ul>
                                    <h5><a href='drama-detail.php?d_id= ".$row['d_id']."'>".$row['d_name']."</a></h5>
                                </div>
                            </div>
                        ";
                    }}
                ?>
            </div>
        </div>
    </section>

    <?php
        require "footer.html";
    ?>
    <style>
        .item {
            height: 25rem;
            width: 14rem;
            padding: 1rem;
        }
        .item img{
            height: 18rem;
            width: 13rem;
            border-radius: 5%;
            object-fit: cover;   /* 等比例縮放 */
            object-position: center center;
        }
    </style>

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