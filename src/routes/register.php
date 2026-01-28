
<?php
session_start(); // Start the session before using $_SESSION
require_once '../db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // ✅ Check if CSRF tokens exist before comparing
    if (!isset($_SESSION['csrf_token'], $_POST['csrf_token'])) {
        die("CSRF token missing");
    }

    // ✅ Validate CSRF token securely
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
    $password = trim($_POST['password']);
    $confirmPassword = trim($_POST['confirm-password']);

    // ✅ Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format");
    }

    // ✅ Validate password strength
    if (strlen($password) < 8) {
        die("Password must be at least 8 characters");
    }

    // ✅ Validate password match
    if ($password !== $confirmPassword) {
        die("Error: Passwords do not match.");
    }

    // ✅ Hash password securely
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // ✅ Define role (default user role)
    $role = 'user';

    // ✅ Prepare and execute query
    $stmt = $pdo->prepare("INSERT INTO users (name, surname, email, company, province, country, password, role) 
                           VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    if ($stmt->execute([$name, $surname, $email, $company, $province, $country, $hashedPassword, $role])) {
        header('Location: ../../register-success.php');
        exit();
    } else {
        echo "Error: Could not register user.";
    }
}
?>
