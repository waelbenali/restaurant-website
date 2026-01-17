<?php
require "db_config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name    = $_POST["name"];
    $email   = $_POST["email"];
    $message = $_POST["message"];

    $sql = "INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);

    // SAFETY CHECK (IMPORTANT)
    if ($stmt === false) {
        die("SQL Prepare Failed: " . $conn->error);
    }

    $stmt->bind_param("sss", $name, $email, $message);
    $stmt->execute();

    header("Location: contact.php?success=1");
    exit();
}
