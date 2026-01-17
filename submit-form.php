<?php
require 'db_config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize and validate input data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Validate inputs
    if (empty($name) || empty($email) || empty($message)) {
        header("Location: contact.php?error=Please fill out all fields.");
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: contact.php?error=Please provide a valid email address.");
        exit;
    }

    // Insert data into the database
    try {
        $stmt = $conn->prepare("INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)");
        $stmt->execute([$name, $email, $message]);

        header("Location: contact.php?success=Thank you, $name. Your message has been submitted.");
        exit;
    } catch (PDOException $e) {
        header("Location: contact.php?error=Database error: " . $e->getMessage());
        exit;
    }
} else {
    header("Location: contact.php?error=Invalid request method.");
    exit;
}
?>