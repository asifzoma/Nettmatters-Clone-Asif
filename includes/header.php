<?php
// Define the current page for active menu highlighting
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="ROBOTS" content="NOINDEX,NOFOLLOW" />
    <!-- Linking main stylesheet for custom styling -->
    <link rel="stylesheet" href="css/styles.css" />
    <!-- Slick carousel CSS for hero slider -->
    <link rel="stylesheet" href="js/slick/slick.css" />
    <link rel="stylesheet" href="js/slick/slick-theme.css" />
    <!-- Font Awesome for icons -->
    <script src="https://kit.fontawesome.com/ad99ca8d44.js" crossorigin="anonymous"></script>
    <!-- Added icon font for sidebar compatibility -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/icomoon-icons@1.0.0/style.css">
    <title><?php echo SITE_NAME; ?></title>
</head>
<body>
    <header>
        <div class="header-placeholder header-hidden"></div>
        <div class="fake-header">
            <div class="container header-background">
                <div class="row">
                    <div class="header-logo-container">
                        <a href="index.php">
                            <img src="img/logo.png" alt="Netmatters Logo" />
                        </a>
                    </div>
                    <span href="#" class="header-phone-icon"><i class="fa-solid fa-phone"></i></span>
                    <div class="header-actions-container">
                        <div class="btn-support-container">
                            <a href="#" target="_blank" class="btn btn-header-support"><i class="fa-solid fa-computer-mouse"></i> Support</a>
                        </div>
                        <div class="btn-contact-container">
                            <a href="contact.php" class="btn btn-header-contact"><i class="fa-solid fa-paper-plane"></i> Contact</a>
                        </div>
                        <form class="large-form-container" action="search.php" method="GET">
                            <input class="header-form-large" type="text" name="q" placeholder="Search..." />
                            <button type="submit" class="large-form-icon-container">
                                <i class="fa-solid fa-magnifying-glass icon-search-large"></i>
                            </button>
                        </form>
                        <div class="header-icon-menu-container">
                            <span href="#" class="hamburger-box"><span class="hamburger-inner"></span></span>
                        </div>
                    </div>
                </div>
                <div class="form-container">
                    <form action="search.php" method="GET">
                        <input class="header-form" type="text" name="q" placeholder="Search..." />
                        <button type="submit"><i class="fa-solid fa-magnifying-glass icon-search-small"></i></button>
                    </form>
                </div>
            </div>
        </div>
        <?php include 'navigation.php'; ?>
        <?php 
// Only show breadcrumb on contact page
if ($current_page === 'contact.php') {
    include 'breadcrumb.php';
}
?>
    </header>
</body>
</html> 