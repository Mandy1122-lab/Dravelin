<?php
include_once "{$_SERVER['DOCUMENT_ROOT']}/lib/lib_mysql.php";
$conn = sql_open();

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['genre']) && !empty($_GET['genre'])) {
        $genre = mysqli_real_escape_string($conn, $_GET['genre']);
        $type = mysqli_real_escape_string($conn, $_GET['type'] ?? '');

        $sql = "SELECT 'drama' AS source, d.d_id AS id, d.d_name AS name, d.d_pic AS img
                FROM drama d
                INNER JOIN genred gd ON d.d_id = gd.d_id
                INNER JOIN genre g ON gd.g_id = g.g_id
                WHERE g.g_id = '$genre'";

        if ($type !== '') {
            $sql .= " AND 'drama' = '$type'";
        }

        $sql .= " UNION
                  SELECT 'movie' AS source, m.m_id AS id, m.m_name AS name, m.m_pic AS img
                  FROM movie m
                  INNER JOIN genrem gm ON m.m_id = gm.m_id
                  INNER JOIN genre g ON gm.g_id = g.g_id
                  WHERE g.g_id = '$genre'";

        if ($type !== '') {
            $sql .= " AND 'movie' = '$type'";
        }

        if ($type === 'drama') {
            $id_param = 'd_id';
        } elseif ($type === 'movie') {
            $id_param = 'm_id';
        }


        $result = mysqli_query($conn, $sql);

        $response = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $response[] = $row;
        }

        echo json_encode($response);
    } else {
        echo json_encode(array());
    }
}
?>
