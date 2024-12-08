<?php
    $d_id = isset($_GET['d_id']) ? $_GET['d_id'] : '';

    include_once "{$_SERVER['DOCUMENT_ROOT']}/lib/lib_mysql.php";
    $conn = sql_open();

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $stmt = mysqli_prepare($conn, "DELETE FROM drama WHERE d_id = ?");
    mysqli_stmt_bind_param($stmt, 'i', $d_id);

    $sql = "DELETE FROM genred where d_id='$d_id'";
    mysqli_query($conn,$sql);
    $sql2 = "DELETE FROM actord WHERE d_id ='$d_id'";
    mysqli_query($conn,$sql2);
    $sqlSpot = "DELETE FROM spotd WHERE d_id ='$d_id'";
    mysqli_query($conn,$sqlSpot);
            
    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        header("Location: ".getenv('HTTP_REFERER'));
        exit(); 
    } else {
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        header("Location: http://dv.hony.com.tw:800/dblinks/update-drama.php?method=update&d_id=".$d_id);
        exit();
    }
?>
