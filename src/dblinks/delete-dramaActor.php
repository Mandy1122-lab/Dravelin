<?php
    $a_id = isset($_GET['a_id']) ? $_GET['a_id'] : '';
    $d_id = isset($_GET['d_id']) ? $_GET['d_id'] : '';
    include_once "{$_SERVER['DOCUMENT_ROOT']}/lib/lib_mysql.php";
    $conn = sql_open();

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $stmt = mysqli_prepare($conn, "DELETE FROM actord WHERE d_id = ? AND a_id = ?");
    mysqli_stmt_bind_param($stmt, 'ii', $d_id, $a_id);

            
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
