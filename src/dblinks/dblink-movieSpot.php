<?php
    $m_id = $_POST['m_id'];
    $s_id = $_POST['s_id'];

    include_once "{$_SERVER['DOCUMENT_ROOT']}/lib/lib_mysql.php";
    $conn = sql_open();

    $sql = "INSERT INTO spotm (m_id, s_id) VALUES ('$m_id', '$s_id')";

    if(mysqli_query($conn,$sql)){
        header("Location: ".getenv('HTTP_REFERER'));
    }else{
        header("location:http://dv.hony.com.tw:800/movie-update.php?error=1");
    }
?>