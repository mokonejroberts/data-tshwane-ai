
<?php
session_start();
require_once '../db.php';

// Generate CSRF token if not set
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // CSRF token validation
    if (
        !isset($_POST['csrf_token'], $_SESSION['csrf_token']) ||
        !hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])
    ) {
        die("CSRF validation failed");
    }

    // Collect and sanitize input
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $password = trim($_POST['password']);

    // Validate input
    if (empty($email) || empty($password)) {
        die("Error: Email and password are required.");
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format.");
    }

    // Fetch user by email (include role)
    $stmt = $pdo->prepare("SELECT id, name, surname, email, password, role FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    $ip = $_SERVER['REMOTE_ADDR'];

    if ($user && password_verify($password, $user['password'])) {
        // ✅ Successful login
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['name'];
        $_SESSION['user_email'] = $user['email'];
        $_SESSION['user_role'] = $user['role'];

        // ✅ Log success
        $logStmt = $pdo->prepare("INSERT INTO login_logs (user_id, login_time, ip_address, success) VALUES (?, NOW(), ?, ?)");
        $logStmt->execute([$user['id'], $ip, 1]);


        // Regenerate session ID for security
        session_regenerate_id(true);

        // Redirect to dashboard
        header('Location: ../../dashboard.php');
        exit();
    } else {
        // ✅ Log failure (if user exists, log user_id; else log 0)
        $userId = $user ? $user['id'] : 0;
        $logStmt = $pdo->prepare("INSERT INTO login_logs (user_id, login_time, ip_address, success) VALUES (?, NOW(), ?, ?)");
        $logStmt->execute([$userId, $ip, 0]);

        echo "Invalid email or password.";
    }
}
?>
