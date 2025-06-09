<?php
// Start output buffering
ob_start();

// Include configuration
$config_file = 'config/config.php';
if (!file_exists($config_file)) {
    die('Configuration file not found. Please check your installation.');
}
require_once $config_file;

// Start session for cookie management
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Include database connection if needed
$connection_file = 'connection.php';
if (file_exists($connection_file)) {
    require_once $connection_file;
}

// Function to safely include files
function safe_include($file) {
    if (file_exists($file)) {
        include $file;
    } else {
        error_log("Required file not found: $file");
        if (ENVIRONMENT === 'development') {
            echo "<div style='color: red; padding: 10px; margin: 10px; border: 1px solid red;'>Required file not found: $file</div>";
        }
    }
}

// Include header
safe_include('includes/header.php');

// Include cookie consent
safe_include('includes/cookie-consent.php');

// Main content wrapper
?>
<div class="wrapper wrapper-center">
    <?php
    // Include main content
    safe_include('includes/main-content.php');
    ?>
</div>

<?php
// Include footer
safe_include('includes/footer.php');

// End output buffering and flush
ob_end_flush();
?> 