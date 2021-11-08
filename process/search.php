<?php
include_once "../conn.php";
header('Content-Type: application/json; charset=utf-8');
if (isset($_POST['query'])) {
    $q = '%' . $_POST['query'] . '%';
    
    $columns = ["firm_name", "whatsapp", "pincode"];

    $sqlColumns = "`";
    $sqlColumns .= join("` LIKE ? OR `", $columns);
    $sqlColumns .= "` LIKE ?";

    $stmt = $conn->prepare("SELECT * FROM listmeon WHERE $sqlColumns");
    $stmt->bind_param("sss", $q, $q, $q);
} else {
    $stmt = $conn->prepare("SELECT * FROM listmeon");
}
$stmt->execute();
$res = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
echo json_encode($res);
