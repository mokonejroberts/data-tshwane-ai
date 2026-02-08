
<?php
session_start();
$_SESSION['csrf_token'] = bin2hex(random_bytes(32));
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
    <title>Register</title>
</head>

<body>
    <div class="page-wrapper">

        <header>
            <!-- Main navbar -->
            <div class="nav-wrapper">
                <nav class="navbar">
                    <!-- Address row -->
                    <div class="nav-faith-pillar">
                        <img src="/assets/images/64px-Flag_RSA.png?v=4" alt="South Africa flag">
                        <span>I can do all things through Christ who strengthens me, gives me wisdom and helps my unbelief.</span>
                        <img src="/assets/images/64px-Flag_RSA.png" alt="South Africa flag">
                    </div>

                    <!-- Flex row -->
                    <div class="nav-main">
                        <a href="/">
                            <img class="logo-md" src="assets/images/DaTai-logo.png" alt="DaTai logo">
                        </a>
                        <div class="nav-middle">
                            <a href="about.html" class="nav-link">Data Tshwane AI</a>
                        </div>
                        <ul class="nav-btn-container">
                            <li><a class="btn btn-primary-outline" href="login.php">Login</a></li>
                            <li><a class="btn btn-primary" href="register.php">Register</a></li>
                        </ul>
                    </div>
                </nav>

                <!-- Secondary navbar -->
                <div class="subnav">
                    <ul class="subnav-links">
                        <li><a href="/">Home</a></li>
                        <!-- <li class="dropdown">
                            <a href="#about" class="dropdown-toggle">About</a>
                            <ul class="dropdown-menu">
                                <li><a href="#about-origin">Why DaTai was founded</a></li>
                                <li><a href="#about-founder">Meet the Founder</a></li>
                                <li><a href="#about-evolution">From frustration to framework</a></li>
                                <li><a href="#about-mission">Our mission & vision</a></li>
                                <li><a href="#about-values-principles">Our values & principles</a></li>
                            </ul>
                        </li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#guidelines">Guidelines</a></li>
                        <li><a href="#contact">Contact us</a></li>
                        <li><a href="#case-studies">Case studies</a></li> -->
                    </ul>
                </div>
            </div>
            <div class="nav-spacer"></div>
        </header>

        <section id="register" class="register">
            <div class="form-container">
                <h2>Create your Data Tshwane AI account</h2>
                <form action="src/routes/register.php" method="POST" class="auth-form">

                    <!-- CSRF token for security hardening -->
                    <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>">

                    <!-- Split Name into First Name + Surname -->
                    <div class="form-name">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" required>
                        </div>

                        <div class="form-group">
                            <label for="surname">Surname</label>
                            <input type="text" id="surname" name="surname" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="company">Company</label>
                        <input type="text" id="company" name="company" placeholder="Enter your company name or 'None'">
                    </div>

                    <!-- Province Dropdown -->
                    <div class="form-group">
                        <label for="province">Province</label>
                        <select id="province" name="province" class="form-select-province" required>
                            <option value="">--Choose Province--</option>
                            <option value="Gauteng">Gauteng</option>
                            <option value="KwaZulu-Natal">KwaZulu-Natal</option>
                            <option value="Western Cape">Western Cape</option>
                            <option value="Eastern Cape">Eastern Cape</option>
                            <option value="Free State">Free State</option>
                            <option value="Mpumalanga">Mpumalanga</option>
                            <option value="Limpopo">Limpopo</option>
                            <option value="North West">North West</option>
                            <option value="Northern Cape">Northern Cape</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>

                    <!-- Conditional Country Field -->
                    <div class="form-group" id="countryField" style="display:none;">
                        <label for="country">Enter Country Name</label>
                        <input type="text" id="country" name="country" placeholder="Enter your country name">
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

                    <div class="form-group">
                        <label for="confirm-password">Confirm Password</label>
                        <input type="password" id="confirm-password" name="confirm-password" required>
                        <small>Please re-enter your password to confirm.</small>
                    </div>

                    <button type="submit" class="btn-primary">Register</button>
                </form>
                <p class="auth-switch">
                    Already have an account? <a href="login.php">Login here</a>
                </p>
            </div>
        </section>
    </div>

    <!-- Link to external JavaScript file -->
    <script src="assets/js/scripts.js" defer></script>
</body>

</html>