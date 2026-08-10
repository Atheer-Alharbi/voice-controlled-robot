<?php

require_once "db.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    echo json_encode([
        "status" => "error",
        "message" => "Invalid request"
    ]);
    exit;
}

$text = $_POST["text"] ?? "";

if (trim($text) === "") {
    echo json_encode([
        "status" => "error",
        "message" => "No text received"
    ]);
    exit;
}

$stmt = $conn->prepare(
    "INSERT INTO voice_commands (text) VALUES (?)"
);

$stmt->bind_param("s", $text);

if ($stmt->execute()) {
    echo json_encode([
        "status" => "success",
        "message" => "Voice text saved successfully"
    ]);
} else {
    echo json_encode([
        "status" => "error",
        "message" => "Failed to save voice text"
    ]);
}

$stmt->close();
$conn->close();

?>