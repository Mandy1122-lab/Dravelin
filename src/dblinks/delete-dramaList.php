<?php
    $d_id = isset($_GET['d_id']) ? $_GET['d_id'] : '';
    $l_id = isset($_GET['l_id']) ? $_GET['l_id'] : '';
    include_once "{$_SERVER['DOCUMENT_ROOT']}/lib/lib_mysql.php";
    $conn = sql_open();

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $stmt = mysqli_prepare($conn, "DELETE FROM listd WHERE d_id = ? AND l_id = ?");
    mysqli_stmt_bind_param($stmt, 'ii', $d_id, $l_id);

    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        header("Location: ".getenv('HTTP_REFERER'));
        exit(); 
    } else {
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
            header("Location: http://dv.hony.com.tw:800/drama-back.php?error=1");
        exit();
    }
?>
