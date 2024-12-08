<?php
    $m_id = isset($_GET['m_id']) ? $_GET['m_id'] : '';
    include_once "{$_SERVER['DOCUMENT_ROOT']}/lib/lib_mysql.php";
    $conn = sql_open();

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $stmt = mysqli_prepare($conn, "DELETE FROM movie WHERE m_id = ?");
    mysqli_stmt_bind_param($stmt, 'i', $m_id);

    $sql = "DELETE FROM genrem where m_id='$m_id'";
    mysqli_query($conn,$sql);
    $sql2 = "DELETE FROM actorm WHERE m_id ='$m_id'";
    mysqli_query($conn,$sql2);
    $sqlSpot = "DELETE FROM spotm WHERE m_id ='$m_id'";
    mysqli_query($conn,$sqlSpot);

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
