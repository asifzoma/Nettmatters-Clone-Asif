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

<!-- Manage Consent Button -->
<button type="button" class="cookie-settings-btn btn">Manage Consent</button>

<!-- Cookie Consent Banner -->
<div id="cookie-consent" class="cookie-modal fade-in cookie-hide">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Cookies Policy</h3>
            </div>
            <div class="modal-body">
                <p>Our website uses cookies. This helps us provide you with a good experience on our website. To see what cookies we use and what they do, and to opt-in on non-essential cookies click "change settings". For a detailed explanation, click on "<a href="privacy-policy.php">Privacy Policy</a>" otherwise click "Accept Cookies" to enter.</p>
            </div>
            <div class="modal-footer">
                <div class="modal-row">
                    <div class="modal-row-item modal-top-btn">
                        <a class="btn modal-btn-1" id="change-settings-btn">Change Settings</a>
                    </div>
                    <div class="modal-row-item">
                        <a class="btn modal-btn-2" id="accept-cookies-btn">Accept Cookies</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Cookie Settings Modal (hidden by default, shown when 'Change Settings' is clicked) -->
<div id="cookie-settings-modal" class="cookie-modal cookie-hide">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Cookie Settings</h3>
            </div>
            <div class="modal-body">
                <form id="cookie-settings-form">
                    <div class="cookie-option">
                        <label>
                            <input type="checkbox" name="necessary" checked disabled>
                            Necessary Cookies (Required)
                        </label>
                        <p class="cookie-description">Essential cookies that enable core functionality.</p>
                    </div>
                    <div class="cookie-option">
                        <label>
                            <input type="checkbox" name="analytics">
                            Analytics Cookies
                        </label>
                        <p class="cookie-description">Help us understand how visitors interact with our website.</p>
                    </div>
                    <div class="cookie-option">
                        <label>
                            <input type="checkbox" name="marketing">
                            Marketing Cookies
                        </label>
                        <p class="cookie-description">Used to track visitors across websites for marketing purposes.</p>
                    </div>
                    <div class="cookie-option">
                        <label>
                            <input type="checkbox" name="preferences">
                            Preference Cookies
                        </label>
                        <p class="cookie-description">Remember your settings and preferences for a better experience.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn modal-btn-1">Save Settings</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
// Cookie Consent JavaScript (relies on js/cookie-consent.js for full logic)
document.addEventListener('DOMContentLoaded', function() {
    const consentModal = document.getElementById('cookie-consent');
    const settingsModal = document.getElementById('cookie-settings-modal');
    const changeSettingsBtn = document.getElementById('change-settings-btn');
    const acceptCookiesBtn = document.getElementById('accept-cookies-btn');
    const settingsForm = document.getElementById('cookie-settings-form');

    if (changeSettingsBtn) {
        changeSettingsBtn.addEventListener('click', function() {
            consentModal.classList.remove('cookie-hide');
            settingsModal.classList.add('cookie-hide');
        });
    }
    if (acceptCookiesBtn) {
        acceptCookiesBtn.addEventListener('click', function() {
            // This will be handled by js/cookie-consent.js
            consentModal.classList.add('cookie-hide');
        });
    }
    if (settingsForm) {
        settingsForm.addEventListener('submit', function(e) {
            e.preventDefault();
            // This will be handled by js/cookie-consent.js
            settingsModal.classList.add('cookie-hide');
        });
    }
    // Close modals when clicking outside
    window.addEventListener('click', function(event) {
        if (event.target === consentModal) {
            consentModal.classList.add('cookie-hide');
        }
        if (event.target === settingsModal) {
            settingsModal.classList.add('cookie-hide');
        }
    });
});
</script> 