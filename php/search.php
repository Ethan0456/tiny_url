<?php
header("Content-Type: application/json; charset=UTF-8");
$obj = $_GET["x"];

$conn = new mysqli("url", "user", "", "url");
$stmt = $conn->prepare("SELECT * FROM url where full_url=$obj");
$stmt->execute();
$result = $stmt->get_result();
$output = $result->fetch_all(MYSQLI_ASSOC);

echo json_encode($output);
?>