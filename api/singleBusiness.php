<?php

require_once "../conn.php";
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
$slug = $_GET['slug'];
$stmt = $conn->prepare("SELECT * FROM listmeon WHERE slug = ?");
$stmt->bind_param("s", $slug);
$stmt->execute();
$stmt->store_result();
$meta = $stmt->result_metadata();
while ($field = $meta->fetch_field()) {
    $params[] = &$row[$field->name];
}
call_user_func_array(array($stmt, 'bind_result'), $params);
$stmt->store_result();
if ($stmt->num_rows > 0) {
    $result = [];
    while ($stmt->fetch()) {
        foreach ($row as $key => $val) {
            $c[$key] = $val;
        }
        $result[] = $c;
    }
    // echo json_encode($result, true, JSON_PRETTY_PRINT);
    echo json_encode($result);
} else {
    echo json_encode(['message' => 'No Record found', 'status' => false]);
}
$stmt->close();
$conn->close();
