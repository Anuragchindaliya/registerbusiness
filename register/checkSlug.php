<?php
//for practice check
// header("Content-Type: application/json");
// header("Access-Control-Allow-Origin: *");

include "../conn.php";
$_POST = json_decode(file_get_contents("php://input"), true);
if (isset($_POST['checkslug'])) {
    extract($_POST);
    $sql = "SELECT * FROM listmeon WHERE slug = '$query'";
    if ($res = mysqli_query($conn, $sql)) {
        if (mysqli_num_rows($res) > 0) {
            echo json_encode(array("status" => true));
        } else {
            echo json_encode(array("status" => false));
        }
    } else {
        echo json_encode(array("error" => "error in database"));
    }
}
