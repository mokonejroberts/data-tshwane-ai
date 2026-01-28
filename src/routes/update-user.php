
<?php
session_start();
require_once '../db.php';

// Ensure only logged-in users can access
if (!isset($_SESSION['user_id'])) {
    header('Location: ../../login.php');
    exit();
}

// Ensure only admin can update users
if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] !== 'admin') {
    die("Unauthorized action");
}

// Handle POST request for update
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // CSRF validation
    if (!isset($_POST['csrf_token']) || !hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
        die("CSRF validation failed");
    }

    // Validate and sanitize input
    $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
    $name = htmlspecialchars(trim($_POST['name']));
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    if (!$id || empty($name) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid input data");
    }

    // Update user
    $stmt = $pdo->prepare("UPDATE users SET name = ?, email = ? WHERE id = ?");
    $stmt->execute([$name, $email, $id]);

    header("Location: ../../dashboard.php");
    exit();
}

// Fetch user for editing
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
if (!$id) {
    die("Invalid user ID");
}

$stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
$stmt->execute([$id]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$user) {
    die("User not found");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit user</title>
</head>
<body>
    <h2>Edit user</h2>
    <form method="POST">
        <input type="hidden" name="id" value="<?= htmlspecialchars($user['id']) ?>">
        <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>">
        <label>Name:</label>
        <input type="text" name="name" value="<?= htmlspecialchars($user['name']) ?>" required>
        <br>
        <label>Email:</label>
        <input type="email" name="email" value="<?= htmlspecialchars($user['email']) ?>" required>
        <br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
