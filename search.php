<?php
// Start session
session_start();

// Include database connection
require_once 'connection.php';

// Get search query
$search_query = isset($_GET['q']) ? htmlspecialchars($_GET['q']) : '';

// Include header
include 'includes/header.php';

// Include cookie consent
include 'includes/cookie-consent.php';
?>

<div class="wrapper wrapper-center">
    <div class="container">
        <h1>Search Results</h1>
        
        <?php if (!empty($search_query)): ?>
            <p>Showing results for: "<?php echo $search_query; ?>"</p>
            
            <?php
            // Here you would typically perform a database search
            // For now, we'll just show a message
            ?>
            <div class="search-results">
                <p>Search functionality will be implemented with database integration.</p>
            </div>
        <?php else: ?>
            <p>Please enter a search term.</p>
        <?php endif; ?>
    </div>
</div>

<?php
// Include footer
include 'includes/footer.php';
?> 