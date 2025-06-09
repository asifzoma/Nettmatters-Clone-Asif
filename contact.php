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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="ROBOTS" content="NOINDEX,NOFOLLOW" />
    <!-- Linking my main stylesheet for custum styling -->
    <link rel="stylesheet" href="css/styles.css" />
    <!-- Slick carousel CSS for hero slider I mite use -->
    <link rel="stylesheet" href="js/slick/slick.css" />
    <link rel="stylesheet" href="js/slick/slick-theme.css" />
    <!-- Font Awesome for icons -->
    <script src="https://kit.fontawesome.com/ad99ca8d44.js" crossorigin="anonymous"></script>
    <!-- Added icon font for sidebar compatibility -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/icomoon-icons@1.0.0/style.css">
    <title>Netmatters Clone</title>
</head>
<body>
    <!-- Include cookie consent -->
    <?php safe_include('includes/cookie-consent.php'); ?>

    <!-- ================= PAGE WRAPPER ================= -->
    <div class="wrapper wrapper-center">
        <!-- Include sidebar -->
        <?php safe_include('includes/sidebar.php'); ?>
        <!-- Include header -->
        <?php safe_include('includes/header.php'); ?>

        <!-- Include contact us main content -->
        <?php safe_include('includes/contact-us-main-content.php'); ?>
    </div>

    <!-- Include footer -->
    <?php safe_include('includes/footer.php'); ?>
</body>
</html>
<?php
// End output buffering and flush
ob_end_flush();
?> 