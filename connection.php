<?php
require_once __DIR__ . '/config/config.php';
// Load environment variables if not already loaded
if (!defined('DB_HOST')) {
    $env_file = dirname(__DIR__) . '/.env';
    if (file_exists($env_file)) {
        $lines = file($env_file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($lines as $line) {
            if (strpos($line, '=') !== false && strpos($line, '#') !== 0) {
                list($key, $value) = explode('=', $line, 2);
                $key = trim($key);
                $value = trim($value);
                putenv("$key=$value");
                $_ENV[$key] = $value;
            }
        }
    }
}

// Database configuration
$host = getenv('DB_HOST') ?: 'localhost';
$dbname = getenv('DB_NAME') ?: 'Netmatters_db';
$username = getenv('DB_USER') ?: 'root';
$password = getenv('DB_PASS') ?: '';

try {
    // Create PDO connection
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
        $username,
        $password,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false
        ]
    );
    
    // Make the connection available globally
    $GLOBALS['pdo'] = $pdo;
    
    if (ENVIRONMENT === 'development') {
        error_log("Database connection successful");
    }
} catch (PDOException $e) {
    // Log the error
    error_log("Connection failed: " . $e->getMessage());
    
    if (ENVIRONMENT === 'development') {
        echo "<div style='color: red; padding: 10px; margin: 10px; border: 1px solid red;'>Database connection failed: " . htmlspecialchars($e->getMessage()) . "</div>";
    } else {
        die("Connection failed. Please try again later.");
    }
} 