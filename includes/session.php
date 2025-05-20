<?php
// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Set session cookie parameters
$session_lifetime = 3600; // 1 hour
$session_path = '/';
$session_domain = '';
$session_secure = false; // Set to true if using HTTPS
$session_httponly = true;

session_set_cookie_params(
    $session_lifetime,
    $session_path,
    $session_domain,
    $session_secure,
    $session_httponly
);

// Regenerate session ID periodically to prevent session fixation
if (!isset($_SESSION['last_regeneration'])) {
    session_regenerate_id(true);
    $_SESSION['last_regeneration'] = time();
} else {
    $regeneration_time = 1800; // 30 minutes
    if (time() - $_SESSION['last_regeneration'] > $regeneration_time) {
        session_regenerate_id(true);
        $_SESSION['last_regeneration'] = time();
    }
} 