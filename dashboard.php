
<?php
session_start();

// Include authentication and DB connection
require_once 'src/auth.php';
require_once 'src/db.php';

// Check login
requireLogin();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

// Generate CSRF token if not set
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

require_once 'src/db.php';

// Fetch last login info for the current user
$stmt = $pdo->prepare("SELECT login_time FROM login_logs WHERE user_id = ? ORDER BY login_time DESC LIMIT 1");
$stmt->execute([$_SESSION['user_id']]);
$lastLogin = $stmt->fetchColumn();

// Fetch all users (for admin purposes)
$usersStmt = $pdo->query("SELECT id, name, email, role FROM users");
$users = $usersStmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Poppins:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/queries.css">
    <link rel="stylesheet" href="assets/css/dashboard.css">
    <link rel="stylesheet" href="assets/css/dashboard-queries.css">
    <title>Dashboard</title>
</head>

<body>
    <section id="dashboard" class="dashboard-container">

        <!-- PRIMARY NAV -->
        <nav class="navbar">
            <div class="nav-address-bar">
                <span>📍 Pretoria, South Africa</span>
            </div>
            <div class="nav-main">
                <a href="index.php">
                    <img class="logo-md" src="assets/images/DaTai-logo.png" alt="DaTai logo">
                </a>
                <div class="nav-middle">
                    <a href="about.php" class="nav-link">Data Tshwane AI</a>
                </div>
                <ul class="nav-btn-container">
                    <li><a href="src/routes/logout.php" class="btn btn-primary">Logout</a></li>
                </ul>
            </div>
        </nav>

        <!-- SECONDARY NAV -->
        <div class="subnav">
            <div class="container">
                <ul class="subnav-links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php#contact">Contact</a></li>
                    <li><a href="register.php">Register</a></li>
                </ul>
            </div>
        </div>

        <!-- Welcome card -->
        <div class="welcome-card dashboard-card">
            <h3 id="welcomeTitle">Welcome back, <?= htmlspecialchars($_SESSION['user_name']) ?>!</h3>
            <p id="welcomeEmail"><?= htmlspecialchars($_SESSION['user_email']) ?></p>
            <p id="welcomeLastLogin"><?= $lastLogin ? htmlspecialchars($lastLogin) : 'First login' ?></p>
        </div>

        <!-- Account section -->
        <section class="account-section dashboard-card">
            <h3>Your account</h3>
            <ul>
                <li><strong>Email:</strong> <?= htmlspecialchars($_SESSION['user_email']) ?></li>
                <li><strong>Last login:</strong> <?= $lastLogin ? htmlspecialchars($lastLogin) : 'First login' ?></li>
            </ul>
        </section>

        <!-- Role-based User Management -->
        <?php if (isset($_SESSION['user_role']) && $_SESSION['user_role'] === 'admin'): ?>
            <section class="dashboard-card">
                <h3>User Management</h3>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Actions</th>
                    </tr>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?= htmlspecialchars($user['id']) ?></td>
                            <td><?= htmlspecialchars($user['name']) ?></td>
                            <td><?= htmlspecialchars($user['email']) ?></td>
                            <td><?= htmlspecialchars($user['role']) ?></td>
                            <td>
                                <!-- Edit -->
                                <a href="src/routes/update-user.php?id=<?= $user['id'] ?>">Edit</a>
                                <!-- Delete -->
                                <form action="src/routes/delete-user.php" method="POST" style="display:inline;">
                                    <input type="hidden" name="id" value="<?= $user['id'] ?>">
                                    <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>">
                                    <button type="submit" onclick="return confirm('Delete user?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </section>
        <?php else: ?>
            <section class="dashboard-card">
                <h3>Your Profile</h3>
                <?php
                $stmt = $pdo->prepare("SELECT name, email FROM users WHERE id = ?");
                $stmt->execute([$_SESSION['user_id']]);
                $currentUser = $stmt->fetch(PDO::FETCH_ASSOC);
                ?>
                <p>Name: <?= htmlspecialchars($currentUser['name']) ?></p>
                <p>Email: <?= htmlspecialchars($currentUser['email']) ?></p>
            </section>
        <?php endif; ?>

    </section>

    <script src="assets/js/scripts.js" defer></script>
</body>

</html>