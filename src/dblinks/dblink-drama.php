<?php
    $dbaction = $_POST['dbaction'];

    include_once "{$_SERVER['DOCUMENT_ROOT']}/lib/lib_mysql.php";
    $conn = sql_open();


if ($dbaction == "insert") {
    $d_name = $_POST['d_name'];
    $d_intro = $_POST['d_intro'];
    $d_date = $_POST['d_date'];
    $d_pic = $_POST['d_pic'];
    $c_id = $_POST['c_id'];

    // Insert movie
    $stmtDrama = mysqli_prepare($conn, "INSERT INTO drama (d_name, d_intro, d_date, d_pic, c_id) VALUES (?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($stmtDrama, 'sssss', $d_name, $d_intro, $d_date, $d_pic, $c_id);
    mysqli_stmt_execute($stmtDrama);
    $lastDramaId = mysqli_insert_id($conn); // Get the ID of the newly inserted movie
    mysqli_stmt_close($stmtDrama);
    
    // 「其他」類別
    if (in_array('other', $_POST['options']) && !empty(trim($_POST['othergenre']))) {
        $otherGenre = trim($_POST['othergenre']);
        // Check if this genre already exists to avoid duplication
        $stmtCheckGenre = mysqli_prepare($conn, "SELECT g_id FROM genre WHERE g_name = ?");
        mysqli_stmt_bind_param($stmtCheckGenre, 's', $otherGenre);
        mysqli_stmt_execute($stmtCheckGenre);
        mysqli_stmt_bind_result($stmtCheckGenre, $existingGenreId);
        mysqli_stmt_fetch($stmtCheckGenre);
        mysqli_stmt_close($stmtCheckGenre);

        if (!empty($existingGenreId)) {
            $_POST['options'][] = $existingGenreId; // 使用現有 genre ID 進行鏈接
        } else {
            // 插入新 genre
            $stmtGenre = mysqli_prepare($conn, "INSERT INTO genre (g_name) VALUES (?)");
            mysqli_stmt_bind_param($stmtGenre, 's', $otherGenre);
            mysqli_stmt_execute($stmtGenre);
            $newGenreId = mysqli_insert_id($conn); // 獲取新插入的 genre ID
            mysqli_stmt_close($stmtGenre);
        
            $_POST['options'][] = $newGenreId; // 確保這裡添加的是有效的 g_id
        }
    }

    // Link movie with selected genres
    foreach ($_POST['options'] as $genreId) {
        if ($genreId !== 'other') {
            $stmtGenrem = mysqli_prepare($conn, "INSERT INTO genred (d_id, g_id) VALUES (?, ?)");
            mysqli_stmt_bind_param($stmtGenrem, 'ii', $lastDramaId, $genreId);
            mysqli_stmt_execute($stmtGenrem);
            mysqli_stmt_close($stmtGenrem);
        }
    }

    $d_id = $lastDramaId;
    
    header("Location: http://dv.hony.com.tw:800/drama-update.php?d_id=".$d_id);



}if($dbaction == "search"){
    $d_id = $_POST['d_id'];
    $searchWord = $_POST['search'];
    header("Location: http://dv.hony.com.tw:800/drama-update.php?d_id=".$d_id."&search=".$searchWord);

}if($dbaction == "update"){
    $d_name = $_POST['d_name'];
    $d_intro = $_POST['d_intro'];
    $d_date = $_POST['d_date'];
    $d_pic = $_POST['d_pic'];
    $c_id = $_POST['c_id'];

    $d_id = $_POST['d_id'];
    $stmt = mysqli_prepare($conn, "UPDATE drama SET d_name=?, d_intro=?, d_date=?, d_pic=?, c_id=? WHERE d_id=?");
    mysqli_stmt_bind_param($stmt, "sssssi", $d_name, $d_intro, $d_date, $d_pic, $c_id, $d_id);
    mysqli_stmt_execute($stmt);
    

    if (in_array('other', $_POST['options']) && !empty(trim($_POST['othergenre']))) {
        $otherGenre = trim($_POST['othergenre']);
        // Check if this genre already exists to avoid duplication
        $stmtCheckGenre = mysqli_prepare($conn, "SELECT g_id FROM genre WHERE g_name = ?");
        mysqli_stmt_bind_param($stmtCheckGenre, 's', $otherGenre);
        mysqli_stmt_execute($stmtCheckGenre);
        mysqli_stmt_bind_result($stmtCheckGenre, $existingGenreId);
        mysqli_stmt_fetch($stmtCheckGenre);
        mysqli_stmt_close($stmtCheckGenre);

        if (!empty($existingGenreId)) {
            $_POST['options'][] = $existingGenreId; // 使用現有 genre ID 進行鏈接
        } else {
            // 插入新 genre
            $stmtGenre = mysqli_prepare($conn, "INSERT INTO genre (g_name) VALUES (?)");
            mysqli_stmt_bind_param($stmtGenre, 's', $otherGenre);
            mysqli_stmt_execute($stmtGenre);
            $newGenreId = mysqli_insert_id($conn); // 獲取新插入的 genre ID
            mysqli_stmt_close($stmtGenre);
        
            $_POST['options'][] = $newGenreId; // 確保這裡添加的是有效的 g_id
        }
    }

    $selectedGenresQuery = "SELECT g_id FROM genred WHERE d_id = $d_id";
    $selectedGenresResult = mysqli_query($conn, $selectedGenresQuery);
    $selectedGenres = array();
    while ($genreRow = mysqli_fetch_assoc($selectedGenresResult)) {
        $selectedGenres[$genreRow['g_id']] = true;
    }

    // 获取表单提交的类型
    $submittedGenres = array();
    foreach ($_POST['options'] as $submittedGenre) {
        $submittedGenres[$submittedGenre] = true;
    }

    // 比較並更新
    foreach ($selectedGenres as $genreId => $value) {
        if (!isset($submittedGenres[$genreId])) {
            $deleteQuery = "DELETE FROM genred WHERE d_id = '$d_id' AND g_id = '$genreId'";
            mysqli_query($conn, $deleteQuery);
        }
    }

    // 加新選的
    foreach ($submittedGenres as $genreId => $value) {
        if (!isset($selectedGenres[$genreId]) && $genreId !== 'other') {
            $insertQuery = "INSERT INTO genred (d_id, g_id) VALUES ('$d_id', '$genreId')";
            mysqli_query($conn, $insertQuery);
        }
    }
    header("location:http://dv.hony.com.tw:800/drama-back.php");

}
mysqli_close($conn);
?>
