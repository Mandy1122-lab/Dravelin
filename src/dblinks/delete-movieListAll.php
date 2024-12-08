<?php
    $l_id = isset($_GET['l_id']) ? $_GET['l_id'] : '';
    include_once "{$_SERVER['DOCUMENT_ROOT']}/lib/lib_mysql.php";
    $conn = sql_open();

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $stmt = mysqli_prepare($conn, "DELETE FROM listmovie WHERE l_id = ?");
    mysqli_stmt_bind_param($stmt, 'i', $l_id);

    $sql = "DELETE FROM listm WHERE l_id ='$l_id'";
    mysqli_query($conn,$sql);

            
    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        header("location: http://dv.hony.com.tw:800/movie-back.php?success=1");
        exit(); 
    } else {
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        header("location: http://dv.hony.com.tw:800/movie-back.php?error=1");
        exit();
    }
?>
