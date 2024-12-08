<?php

    $a_id = isset($_GET['a_id']) ? $_GET['a_id'] : '';
    $m_id = isset($_GET['m_id']) ? $_GET['m_id'] : '';
    include_once "{$_SERVER['DOCUMENT_ROOT']}/lib/lib_mysql.php";
    $conn = sql_open();

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $stmt = mysqli_prepare($conn, "DELETE FROM actorm WHERE m_id = ? AND a_id = ?");
    mysqli_stmt_bind_param($stmt, 'ii', $m_id, $a_id);

            
    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        header("Location: ".getenv('HTTP_REFERER'));
        exit(); 
    } else {
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        header("Location: http://dv.hony.com.tw:800/dblinks/update-movie.php?method=update&m_id=".$m_id);
        exit();
    }
?>
