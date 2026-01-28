
<?php
session_start();
require_once '../db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // ✅ CSRF token validation
    if (!hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
        die("CSRF validation failed");
    }

    // ✅ Collect and sanitize input
    $name = htmlspecialchars(trim($_POST['name']));
    $surname = htmlspecialchars(trim($_POST['surname']));
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $company = htmlspecialchars(trim($_POST['company']));
    $province = htmlspecialchars(trim($_POST['province']));
    $country = htmlspecialchars(trim($_POST['country']));
    $topicTitle = htmlspecialchars(trim($_POST['topicTitle']));
    $message = htmlspecialchars(trim($_POST['message']));

    // ✅ Validate required fields
    if (empty($name) || empty($surname) || empty($email) || empty($message)) {
        die("Error: Required fields are missing.");
    }

    // ✅ Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format.");
    }

    // ✅ Validate message length
    if (strlen($message) < 10) {
        die("Message must be at least 10 characters.");
    }

    // ✅ Insert into database securely
    $stmt = $pdo->prepare("INSERT INTO contact_messages (name, surname, email, company, province, country, topicTitle, message) 
                           VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    if ($stmt->execute([$name, $surname, $email, $company, $province, $country, $topicTitle, $message])) {
        echo "Thank you for reaching out! Our team will review your message and respond shortly. 
            Expect a reply via email within 2 business days.";
    } else {
        echo "Error: Could not send message.";
    }
}
?>
