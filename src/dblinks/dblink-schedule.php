<?php
    $dbaction = $_POST['dbaction'];
    $s_id = $_POST['s_id'];

    include_once "{$_SERVER['DOCUMENT_ROOT']}/lib/lib_mysql.php";
    $conn = sql_open();

    $checkQuery = "SELECT COUNT(*) AS rowcount FROM schedule";
    $result = mysqli_query($conn, $checkQuery);
    $data = mysqli_fetch_assoc($result);

    if ($data['rowcount'] >= 5) {
        header("location: http://dv.hony.com.tw:800/map.php?message=最多地標數為5!");
    }else{
        if($dbaction == "insert"){
            $sql = "INSERT INTO schedule (s_id) values ('$s_id')";
            if(mysqli_query($conn,$sql)){
                header("location:http://dv.hony.com.tw:800/map.php?success=1");
            }else{
                error_log("SQL Error: " . mysqli_error($conn));
                header("location: http://dv.hony.com.tw:800/map.php?error=1");
            }
        }
    }

    mysqli_close($conn);
?>