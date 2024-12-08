<?php
    $sm_id = $_GET['sm_id'];

    include_once "{$_SERVER['DOCUMENT_ROOT']}/lib/lib_mysql.php";
    $conn = sql_open();
    
    $sql = "DELETE FROM spotm WHERE sm_id='$sm_id'";

    if(mysqli_query($conn,$sql)){
        header("Location: ".getenv('HTTP_REFERER'));
    }else{
        header("Location: http://dv.hony.com.tw:800/movie-update.php?error=1");
    }
?>