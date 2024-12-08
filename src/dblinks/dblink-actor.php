<?php
    $dbaction = $_POST['dbaction'];
    $a_name = $_POST['a_name'];
    $a_pic = $_POST['a_pic'];

    include_once "{$_SERVER['DOCUMENT_ROOT']}/lib/lib_mysql.php";
    $conn = sql_open();

if($dbaction=="insert")
{
	$sql  = "insert into actor (a_name, a_pic) values ('$a_name', '$a_pic')";
    if(mysqli_query($conn,$sql)){
		header("location:http://dv.hony.com.tw:800/actor.php?success=1");
    }else{
        header("location:http://dv.hony.com.tw:800/actor.php?method=actor");
    }
}
else{
    $a_id = $_POST['a_id'];
    $sql  = "update actor set a_name='$a_name', a_pic='$a_pic' where a_id='$a_id'";
    if(mysqli_query($conn,$sql)){
        header("location:http://dv.hony.com.tw:800/actor.php?success=1");
    }else{
        header("location:http://dv.hony.com.tw:800/actor.php?method=actor");
    }
}
?>
