<?php
include_once "{$_SERVER['DOCUMENT_ROOT']}/lib/lib_mysql.php";

if (!isset($_REQUEST['cmd'])) {
    die();
}
$P_Command = $_REQUEST['cmd'];

$ret_data = array();

if ($P_Command === "JoinEvent") {
    $p_EventId = $_REQUEST["EventId"];
    $p_UserName = $_REQUEST["UserName"];
    $p_Email = $_REQUEST["Email"];
    $today = date("Y-m-d");
    $conn = sql_open();
    $sql = "INSERT INTO record
    (r_name, r_acc, r_date, e_id)
    VALUES('{$p_UserName}', '{$p_Email}', '{$today}', '{$p_EventId}');";
    $result = mysqli_query($conn, $sql);
    if (mysqli_errno($conn) != 0) {
        $ret_data['ret'] = -1;
        $ret_data['msg'] = "資料儲存時發生錯誤：" . mysqli_error($conn);
        sql_close($conn);
        goto _END_;
    }
    sql_close($conn);
    $ret_data['ret'] = 0;
    goto _END_;
}


_END_:

ob_clean();
ob_end_flush();
echo json_encode($ret_data, JSON_UNESCAPED_UNICODE);
