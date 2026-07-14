<?php
include('../config.php');

$data = json_decode(file_get_contents("php://input"), true);

$name = $data['name'];
$email = $data['email'];

$stmt = $conn->prepare("INSERT INTO leads (name, email) VALUES (?, ?)");
$stmt->bind_param("ss", $name, $email);
$stmt->execute();

echo json_encode(["status" => "success"]);