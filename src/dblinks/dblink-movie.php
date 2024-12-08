<?php
$dbaction = $_POST['dbaction'];

include_once "{$_SERVER['DOCUMENT_ROOT']}/lib/lib_mysql.php";
$conn = sql_open();

if ($dbaction == "insert") {
    $m_name = $_POST['m_name'];
    $m_intro = $_POST['m_intro'];
    $m_date = $_POST['m_date'];
    $m_pic = $_POST['m_pic'];
    $c_id = $_POST['c_id'];

    // Insert movie
    $stmtMovie = mysqli_prepare($conn, "INSERT INTO movie (m_name, m_intro, m_date, m_pic, c_id) VALUES (?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($stmtMovie, 'sssss', $m_name, $m_intro, $m_date, $m_pic, $c_id);
    mysqli_stmt_execute($stmtMovie);
    $lastMovieId = mysqli_insert_id($conn); // Get the ID of the newly inserted movie
    mysqli_stmt_close($stmtMovie);
    
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
            $stmtGenrem = mysqli_prepare($conn, "INSERT INTO genrem (m_id, g_id) VALUES (?, ?)");
            mysqli_stmt_bind_param($stmtGenrem, 'ii', $lastMovieId, $genreId);
            mysqli_stmt_execute($stmtGenrem);
            mysqli_stmt_close($stmtGenrem);
        }
    }

    $m_id = $lastMovieId;
    header("Location: http://dv.hony.com.tw:800/movie-update.php?m_id=".$m_id);



}if($dbaction == "search"){
    $m_id = $_POST['m_id'];
    $searchWord = $_POST['search'];
    header("Location: http://dv.hony.com.tw:800/movie-update.php?m_id=".$m_id."&search=".$searchWord);

}if($dbaction == "update"){
    $m_name = $_POST['m_name'];
    $m_intro = $_POST['m_intro'];
    $m_date = $_POST['m_date'];
    $m_pic = $_POST['m_pic'];
    $c_id = $_POST['c_id'];

    $m_id = $_POST['m_id'];
    $stmt = mysqli_prepare($conn, "UPDATE movie SET m_name=?, m_intro=?, m_date=?, m_pic=?, c_id=? WHERE m_id=?");
    mysqli_stmt_bind_param($stmt, "sssssi", $m_name, $m_intro, $m_date, $m_pic, $c_id, $m_id);
    mysqli_stmt_execute($stmt);
    
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

    $selectedGenresQuery = "SELECT g_id FROM genrem WHERE m_id = $m_id";
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
            $deleteQuery = "DELETE FROM genrem WHERE m_id = '$m_id' AND g_id = '$genreId'";
            mysqli_query($conn, $deleteQuery);
        }
    }

    // 加新選的
    foreach ($submittedGenres as $genreId => $value) {
        if (!isset($selectedGenres[$genreId]) && $genreId !== 'other') {
            $insertQuery = "INSERT INTO genrem (m_id, g_id) VALUES ('$m_id', '$genreId')";
            mysqli_query($conn, $insertQuery);
        }
    }
    header("location:http://dv.hony.com.tw:800/movie-back.php");

}
mysqli_close($conn);
?>
