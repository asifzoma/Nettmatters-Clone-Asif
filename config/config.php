<?php
// =========================
// Load Environment Variables
// =========================
// I want to keep sensitive info (like DB credentials) out of my codebase, so I use a .env file in the project root.
// This block reads each line from .env, skips comments, and loads the key-value pairs into environment variables.
// That way, I can use getenv('KEY') or _ENV['KEY'] anywhere in my code, and I don't have to hardcode secrets.
$env_file = dirname(__DIR__) . '/.env';
if (file_exists($env_file)) {
    $lines = file($env_file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        // Skip lines that are comments (start with #)
        if (strpos(trim($line), '#') === 0) continue;
        // Split the line into key and value at the first =
        list($key, $value) = array_map('trim', explode('=', $line, 2));
        // Set the environment variable for this key
        putenv("$key=$value");
        // Also store it in $_ENV for convenience
        $_ENV[$key] = $value;
    }
}
// Always define ENVIRONMENT constant so it is available everywhere
if (!defined('ENVIRONMENT')) {
    define('ENVIRONMENT', getenv('ENVIRONMENT') ?: 'development');
}

// =========================
// Site Configuration
// =========================

// This is the name of my website. I use it throughout the site.
define('SITE_NAME', getenv('SITE_NAME') ?: 'Netmatters');

// This is my site's base URL. If I move to production, I'll update this.
define('SITE_URL', getenv('SITE_URL') ?: 'http://localhost');


// =========================
// Database Configuration
// =========================

// This is the address of my database server. For local development, it's usually 'localhost'.
define('DB_HOST', getenv('DB_HOST') ?: 'localhost');

// My database username. 'root' is the default for local setups.
define('DB_USER', getenv('DB_USER') ?: 'root');

// My database password. It's empty for local by default, but I should change this for production.
define('DB_PASS', getenv('DB_PASS') ?: '');

// The name of the database I want to use.
define('DB_NAME', getenv('DB_NAME') ?: 'Netmatters_db');


// =========================
// Email (SMTP) Configuration
// =========================

// The SMTP server I use for sending emails.
define('SMTP_HOST', getenv('SMTP_HOST') ?: 'smtp.example.com');

// My SMTP username (usually my email address).
define('SMTP_USER', getenv('SMTP_USER') ?: 'your-email@example.com');

// My SMTP password (or app password for my email account).
define('SMTP_PASS', getenv('SMTP_PASS') ?: 'your-password');

// The SMTP port. 587 is for TLS, 465 is for SSL.
define('SMTP_PORT', getenv('SMTP_PORT') ?: 587);


// =========================
// Error Reporting
// =========================

// I want to see all PHP errors while developing. I'll turn this off in production.
error_reporting(E_ALL);
ini_set('display_errors', 1);


// =========================
// Session Configuration
// =========================

// This makes my session cookies inaccessible to JavaScript (for security).
ini_set('session.cookie_httponly', 1);

// This ensures sessions only use cookies (not URL parameters).
ini_set('session.use_only_cookies', 1);

// This makes sure session cookies are only sent over HTTPS. I'll set this to 1 when I go live with HTTPS.
ini_set('session.cookie_secure', 0); // Change to 1 if I switch to HTTPS


// =========================
// Time Zone
// =========================

// I want all date/time functions to use the London time zone.
date_default_timezone_set('Europe/London');
//Note to Future Me:
//When I move to production, I need to update SITE_URL, use secure database credentials, and set session.cookie_secure to 1 if I'm using HTTPS. For even better security, I have created an .env file and a gitignore.




