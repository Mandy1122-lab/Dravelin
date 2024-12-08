<?php
    $d_id = $_POST['d_id'];
    $s_id = $_POST['s_id'];

    include_once "{$_SERVER['DOCUMENT_ROOT']}/lib/lib_mysql.php";
    $conn = sql_open();

    $sql = "INSERT INTO spotd (d_id, s_id) VALUES ('$d_id', '$s_id')";

    if(mysqli_query($conn,$sql)){
        header("Location: ".getenv('HTTP_REFERER'));
    }else{
        header("location:http://dv.hony.com.tw:800/drama-update.php?error=1");
    }
?>