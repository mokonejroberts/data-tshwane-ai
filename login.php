
<?php
session_start();
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fonts (Preconnect for performance) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/queries.css">
    <link rel="stylesheet" href="assets/css/dashboard.css">
    <link rel="stylesheet" href="assets/css/dashboard-queries.css">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <header>

            <!-- PRIMARY -->
            <nav class="navbar">
                <!-- Address row (independent) -->
                <div class="nav-address-bar">
                    <span>📍 Pretoria, South Africa</span>
                </div>

                <!-- Flex row for main nav (logo, middle and login/register) -->
                <div class="nav-main">

                    <!-- Single logo anchor -->
                    <a href="/">
                        <img class="logo-md" src="assets/images/DaTai-logo.svg" alt="DaTai logo">
                    </a>

                    <!-- DaTai in full -->
                    <div class="nav-middle">
                        <a href="about.html" class="nav-link">Data Tshwane AI</a>
                    </div>

                    <!-- Right-side buttons -->
                    <ul class="nav-btn-container">
                        <li><a class="btn btn-primary-outline" href="login.php">Login</a></li>
                        <li><a class="btn btn-primary" href="register.php">Register</a></li>
                    </ul>
                </div>
            </nav>

            <!-- SECONDARY NAVBAR - HOME-->
            <div class="subnav">
                <div class="container">
                    <ul class="subnav-links">
                        <li><a href="/">Home</a></li>
        </header>

        <section id="login" class="login">
            <div class="form-container">
                <h2>Login</h2>
                <form class="login-form" action="src/routes/login.php" method="POST" id="loginForm">

                    <!-- CSRF token for security hardening -->
                    <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($_SESSION['csrf_token']); ?>">

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <!-- Password imperative snippet -->
                        <input type="password" id="password" name="password" minlength="8"
                            pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@#$!%*?&]).{8,}"
                            title="Password must be at least 8 characters, include uppercase, lowercase, number, and symbol"
                            required>
                        <small>Password must be at least 8 characters, include uppercase, lowercase, number, and
                            symbol.</small>
                    </div>

                    <button type="submit" class="btn-primary">Login</button>
                </form>
            </div>
        </section>
    </div>

    <!-- Link to external JavaScript file -->
    <script src="assets/js/scripts.js" defer></script>
</body>

</html>