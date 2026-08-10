<?php
$host = "sql301.infinityfree.com";
$user = "if0_42448481";
$pass = "Atheeralharbi12";
$dbname = "if0_42448481_robot_control";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die(json_encode(["status" => "error", "message" => "فشل الاتصال: " . $conn->connect_error]));
}
?>
