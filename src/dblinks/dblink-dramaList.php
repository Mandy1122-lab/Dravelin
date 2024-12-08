<?php
    $dbaction = $_POST['dbaction'];
	
    include_once "{$_SERVER['DOCUMENT_ROOT']}/lib/lib_mysql.php";
    $conn = sql_open();

    if($dbaction=="insert"){
        $l_name = $_POST['l_name'];
        $sql  = "INSERT into listdrama (l_name) values ('$l_name')";
        if(mysqli_query($conn,$sql)){
            $l_id = mysqli_insert_id($conn);

            header("location: http://dv.hony.com.tw:800/dramaList-update.php?method=update&l_id=".$l_id);
        }else{
            header("location: http://dv.hony.com.tw:800/drama-back.php?error=1");
        }
    
    }
    if($dbaction=="updateName"){
        $l_name = $_POST['l_name'];
        $l_id = $_POST['l_id'];
        $stmt = mysqli_prepare($conn, "UPDATE listdrama SET l_name=? WHERE l_id=?");
        mysqli_stmt_bind_param($stmt, "si", $l_name, $l_id);
        mysqli_stmt_execute($stmt);
        header("location: http://dv.hony.com.tw:800/drama-back.php");

    }
    if($dbaction=="update"){
        $d_id = $_POST['d_id'];
        $l_id = $_POST['l_id'];
        $stmt = mysqli_prepare($conn, "INSERT INTO listd (l_id, d_id) VALUES (?, ?)");
        mysqli_stmt_bind_param($stmt, 'ii', $l_id, $d_id);

        if (mysqli_stmt_execute($stmt)) {
            mysqli_stmt_close($stmt);
            mysqli_close($conn);
            header("Location:".getenv('HTTP_REFERER'));
            exit();
        }
    }
?>
