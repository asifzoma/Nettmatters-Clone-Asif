<?php
// Cookie consent settings
$cookie_settings = [
    'necessary' => true, // Always required
    'analytics' => false,
    'marketing' => false,
    'preferences' => false
];

// Handle cookie settings form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['accept_cookies'])) {
        // Accept all cookies
        $_SESSION['cookies_accepted'] = true;
        $_SESSION['cookie_settings'] = array_fill_keys(array_keys($cookie_settings), true);
        setcookie('cookies_accepted', '1', time() + (86400 * 365), '/', '', true, true);
    } elseif (isset($_POST['save_cookie_settings'])) {
        // Save specific cookie preferences
        $_SESSION['cookies_accepted'] = true;
        $_SESSION['cookie_settings'] = array_intersect_key($_POST, $cookie_settings);
        setcookie('cookie_settings', json_encode($_SESSION['cookie_settings']), time() + (86400 * 365), '/', '', true, true);
    }
}

// Get current cookie settings
$cookies_accepted = isset($_SESSION['cookies_accepted']) ? $_SESSION['cookies_accepted'] : false;
$current_settings = isset($_SESSION['cookie_settings']) ? $_SESSION['cookie_settings'] : $cookie_settings;
?>

<!-- Cookie Settings Button -->
<button type="button" class="cookie-settings-btn btn" onclick="document.getElementById('cookie-consent').classList.add('show')">
    Manage Consent
</button>

<!-- Cookie Consent Modal -->
<div id="cookie-consent" class="cookie-modal <?php echo !$cookies_accepted ? 'fade-in' : ''; ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Cookies Policy</h3>
                <button type="button" class="close-btn" onclick="document.getElementById('cookie-consent').classList.remove('show')">&times;</button>
            </div>
            <div class="modal-body">
                <p>Our website uses cookies. This helps us provide you with a good experience on our website. To see what cookies we use and what they do, and to opt-in on non-essential cookies click "change settings". For a detailed explanation, click on "<a href="privacy-policy.php">Privacy Policy</a>" otherwise click "Accept Cookies" to enter.</p>
                
                <?php if (isset($_POST['show_settings'])): ?>
                <form method="POST" class="cookie-settings-form">
                    <div class="cookie-option">
                        <label>
                            <input type="checkbox" name="necessary" checked disabled>
                            Necessary Cookies (Required)
                        </label>
                        <p class="cookie-description">Essential cookies that enable core functionality.</p>
                    </div>
                    
                    <div class="cookie-option">
                        <label>
                            <input type="checkbox" name="analytics" <?php echo $current_settings['analytics'] ? 'checked' : ''; ?>>
                            Analytics Cookies
                        </label>
                        <p class="cookie-description">Help us understand how visitors interact with our website.</p>
                    </div>
                    
                    <div class="cookie-option">
                        <label>
                            <input type="checkbox" name="marketing" <?php echo $current_settings['marketing'] ? 'checked' : ''; ?>>
                            Marketing Cookies
                        </label>
                        <p class="cookie-description">Used to track visitors across websites for marketing purposes.</p>
                    </div>
                    
                    <div class="cookie-option">
                        <label>
                            <input type="checkbox" name="preferences" <?php echo $current_settings['preferences'] ? 'checked' : ''; ?>>
                            Preference Cookies
                        </label>
                        <p class="cookie-description">Remember your settings and preferences for a better experience.</p>
                    </div>
                    
                    <div class="modal-footer">
                        <button type="submit" name="save_cookie_settings" class="btn modal-btn-1">Save Settings</button>
                    </div>
                </form>
                <?php endif; ?>
            </div>
            
            <?php if (!isset($_POST['show_settings'])): ?>
            <div class="modal-footer">
                <div class="modal-row">
                    <div class="modal-row-item modal-top-btn">
                        <form method="POST">
                            <button type="submit" name="show_settings" class="btn modal-btn-1">Change Settings</button>
                        </form>
                    </div>
                    <div class="modal-row-item">
                        <form method="POST">
                            <button type="submit" name="accept_cookies" class="btn modal-btn-2">Accept Cookies</button>
                        </form>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<script>
// Add cookie consent JavaScript
document.addEventListener('DOMContentLoaded', function() {
    const cookieConsent = document.getElementById('cookie-consent');
    const closeBtn = document.querySelector('.close-btn');
    
    if (closeBtn) {
        closeBtn.addEventListener('click', function() {
            cookieConsent.classList.remove('show');
        });
    }
    
    // Close modal when clicking outside
    window.addEventListener('click', function(event) {
        if (event.target === cookieConsent) {
            cookieConsent.classList.remove('show');
        }
    });
});
</script> 