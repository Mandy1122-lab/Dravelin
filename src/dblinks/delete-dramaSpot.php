<?php
    $sd_id = $_GET['sd_id'];

    include_once "{$_SERVER['DOCUMENT_ROOT']}/lib/lib_mysql.php";
    $conn = sql_open();
    
    $sql = "DELETE FROM spotd WHERE sd_id='$sd_id'";

    if(mysqli_query($conn,$sql)){
        header("Location: ".getenv('HTTP_REFERER'));
    }else{
        header("Location: http://dv.hony.com.tw:800/drama-update.php?error=1");
    }
?>