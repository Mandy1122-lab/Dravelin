<?php
    $a_id = $_GET['a_id'];
    include_once "{$_SERVER['DOCUMENT_ROOT']}/lib/lib_mysql.php";
    $conn = sql_open();
    $sql = "delete from actor where a_id='$a_id'";

    if(mysqli_query($conn,$sql)){
        header("Location: ".getenv('HTTP_REFERER'));
    }else{
        header("Location: http://dv.hony.com.tw:800/actor.php?error=1");
        }
    ?>
