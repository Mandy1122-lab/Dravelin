<?php
// 連接到資料庫
$link = mysqli_connect('localhost', 'root', 'fjuim110', 'dravelin');

// 檢查是否設置了 category 參數
//if (isset($_POST['category'])) {
if (isset($_REQUEST['category'])) {
    //$selectedCategory = $_POST['category'];
    $selectedCategory = $_REQUEST['category'];

    // 根據所選類別從資料庫中檢索資料
    echo $selectedCategory;
    switch ($selectedCategory) {
        case 'spot':
            $query = "SELECT * FROM spot";
            break;
        case 'event':
            $query = "SELECT * FROM event";
            break;
        default:
            // 處理未知的類別選擇
            break;
    }

    // 執行查詢
    $result = mysqli_query($link, $query);

    // 生成结果
    if ($result) {
        echo "<table>";
        while ($row = mysqli_fetch_assoc($result)) {
            // 輸出數據行
            switch ($selectedCategory) {           
                case 'spot':
                    $link = "spot-info.php?s_id=" . $row['s_id'];
                    echo "<tr data-id='" . $row["s_id"] . "'><td>" . $row['s_id'] . "</td><td>" . $row['s_name'] . "</td><td>" . $link . "</td></tr>";
                    break;
                case 'event':
                    $link = "event-details.php?id=" . $row['e_id'];
                    echo "<tr data-id='" . $row["e_id"] . "'><td>" . $row['e_id'] . "</td><td>" . $row['e_name'] . "</td><td>" . $link . "</td></tr>";
                    break;
                default:
                    // 處理未知的類別選擇
                    break;
            }
        }
        echo "</table>";
    } else {
        echo "查詢失敗";
    }
}
?>