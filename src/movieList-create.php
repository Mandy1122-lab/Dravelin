<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新增片單</title>

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    
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
                <div class="col-lg-12">
                    <div class="blog__details__form">
                        <h3>新增片單</h3>
                        <hr style="border-color:#000000;"><br>
                        <form action="./dblinks/dblink-movieList.php" method="post">
                            <input type=hidden name="dbaction" value="insert">
                            <table width="100%">
                                <tr>
                                    <td>
                                        <b>片單名稱</b><br><input type=text name="l_name" placeholder="片單名" required maxlength=100>
                                    </td>
                                    <td align="right">
                                        <button type="submit" class="site-btn">儲存</button>&nbsp
                                        <a class="reset-btn" href="./movie-back.php">返回</a>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php 
        require 'footer.html';
    ?>

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