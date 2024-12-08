<?php
    $s_id = $_GET['s_id'];
    include_once "{$_SERVER['DOCUMENT_ROOT']}/lib/lib_mysql.php";
    $conn = sql_open();
    $sql = "DELETE FROM schedule WHERE s_id='$s_id'";

    if(mysqli_query($conn,$sql)){
        header("location:http://dv.hony.com.tw:800/map.php?success=1");
    }else{
        header("location: http://dv.hony.com.tw:800/map.php?error=1");
    }
    mysqli_close($conn);
?>