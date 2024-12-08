<?php
// 連接到數據庫
$link = mysqli_connect('localhost', 'root', 'fjuim110', 'dravelin');

// 檢查是否成功連接到數據庫
if (!$link) {
    die('連接失敗: ' . mysqli_connect_error());
}

// 獲取用戶所請求的分頁編號
$pageNumber = $_GET['page'];

// 根據分頁編號執行相應的查詢
if ($pageNumber == 1) {
    $query = "SELECT * FROM carousel WHERE carousel_id = 1"; // 第一頁的查詢語句
} else if ($pageNumber == 2) {
    $query = "SELECT * FROM carousel WHERE carousel_id = 2"; // 第二頁的查詢語句
} else if ($pageNumber == 3) {
    $query = "SELECT * FROM carousel WHERE carousel_id = 3"; // 第三頁的查詢語句
} else if ($pageNumber == 4) {
    $query = "SELECT * FROM carousel WHERE carousel_id = 4"; // 第四頁的查詢語句
} else {
    // 如果請求的分頁編號無效，你可以返回一個錯誤消息或默認資料
    echo "無效的分頁編號";
    exit;
}

// 執行查詢
$result = mysqli_query($link, $query);

// 檢查是否成功執行查詢
if (!$result) {
    die('查詢失敗: ' . mysqli_error($link));
}

// 解析查詢結果並生成 HTML 代碼
$row = mysqli_fetch_assoc($result);
$imageUrl = htmlspecialchars($row['carousel_pic']);

// 返回 HTML 代碼
echo '<div style="flex: 1; margin-top: 10px; width: 500px;">';
echo '<h6 class="text-size">封面圖片</h6>';
echo '<input type="text" name="carousel_pic" placeholder="圖片網址" value="' . $imageUrl . '" style="border: 1px solid #1D50A1; width:70%; height:35px; background-color:#F5F4F0; color: black;">';
echo "<img src='$imageUrl'>";
echo '</div>';
echo '<div style="flex: 1; margin-top: 10px;">';
echo <<<HTML
<div style="flex: 1; margin-top: 10px;">
    <h6 class="text-size">選擇連結之&nbsp;
        <input type='radio' name='category' value='drama' style="vertical-align: middle;">&nbsp;劇集 /
        <input type='radio' name='category' value='movie' style="vertical-align: middle;">&nbsp;電影 /
        <input type='radio' name='category' value='event' style="vertical-align: middle;">&nbsp;活動
    </h6>
    <form id="searchForm" class="header__search__form">
        <input type="text" name="search" placeholder="搜尋作品/活動" style="border: 1px solid #1D50A1; width:150px; height:30px;background-color: #E0E0E0;">
        <button type="submit" style="border: 1px solid #1D50A1; width:30px; height:30px; background-color: #E0E0E0;"><span class="icon_search"></span></button>
        <div id="searchResults"></div>
    </form>
</div>
<div id="searchResults">
    <table data-toolbar="#toolbar" class="table bg-light table-striped" data-toggle="table" data-sortable="true" data-sort-class="table-active" data-pagination="true" data-search="true">
        <thead>
            <tr>
                <th data-field="id" data-sortable="true">#</th>
                <th data-field="number" data-sortable="true">作品/活動編號</th>
                <th data-field="name" data-sortable="true">作品/活動名稱</th>
                <th data-field="edit">操作</th>
            </tr>
        </thead>
        <tbody id="tableBody"></tbody>
    </table>
</div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('input[name="category"]').forEach(function(radio) {
                radio.addEventListener('change', function() {
                    var selectedCategory = this.value;
                    loadData(selectedCategory);
                });
            });
        });

        function loadData(selectedCategory) {  
            console.error("change category to " + selectedCategory);     
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        document.getElementById('tableBody').innerHTML = xhr.responseText;
                    } else {
                        console.error('請求出錯：' + xhr.status);
                    }
                }
            };
            xhr.open('POST', 'carousel-load.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.send('category=' + selectedCategory);
        }
    </script>
    <script>
    document.getElementById('searchForm').addEventListener('submit', function(event) {
        event.preventDefault(); // 阻止提交表單的默認行為

        var keyword = document.querySelector('input[name="search"]').value;
        var selectedCategory = document.querySelector('input[name="category"]:checked').value;
        var tableRows = document.querySelectorAll('#tableBody tr'); // 獲取表格中的所有行

        tableRows.forEach(function(row) {
            var rowData = row.innerText.toLowerCase(); // 將行中的文本轉換為小寫
            if (rowData.includes(keyword.toLowerCase())) { // 如果行中包含搜索關鍵字
                row.style.display = ''; // 顯示行
            } else {
                row.style.display = 'none'; // 隱藏行
            }
        });
    });
    </script>
HTML;

// 釋放結果集
mysqli_free_result($result);

// 關閉數據庫連接
mysqli_close($link);
?>
