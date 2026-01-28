<?php
require_once __DIR__ . '/config.php';

try {
    // Create PDO connection using constants from config.php
    $pdo = new PDO(
        "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME,
        DB_USER,
        DB_PASS
    );

    // Set PDO error mode to Exception for better debugging
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    // Handle errors based on environment
    if (ENV === 'development') {
        die("Database connection failed: " . $e->getMessage());
    } else {
        error_log($e->getMessage());
        die("Database connection error.");
    }
}
?>



