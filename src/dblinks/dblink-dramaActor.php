<?php
    $dbaction = $_POST['dbaction'];
    $d_id = $_POST['d_id'];
    $a_id = $_POST['a_id'];

    include_once "{$_SERVER['DOCUMENT_ROOT']}/lib/lib_mysql.php";
    $conn = sql_open();

    if($dbaction=="insert")
    {
        $stmt = mysqli_prepare($conn, "INSERT INTO actord (a_id, d_id) VALUES (?, ?)");
        mysqli_stmt_bind_param($stmt, 'ii', $a_id, $d_id);

        if (mysqli_stmt_execute($stmt)) {
            mysqli_stmt_close($stmt);
            mysqli_close($conn);
            header("Location:".getenv('HTTP_REFERER'));
            exit();
        }else{
            //插入失敗
            mysqli_stmt_close($stmt);
            mysqli_close($conn);
            header("Location: http://dv.hony.com.tw:800/drama-update.php?method=update&d_id=".$d_id);
            exit();
        }
    }
?>