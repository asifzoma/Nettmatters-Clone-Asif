// Cookie Consent Popup Handler

document.addEventListener('DOMContentLoaded', function() {
  // Elements
  const consentModal = document.getElementById('cookie-consent');
  const acceptBtn = document.getElementById('accept-cookies-btn');
  const settingsBtn = document.getElementById('change-settings-btn');
  const settingsModal = document.getElementById('cookie-settings-modal');
  const settingsForm = document.getElementById('cookie-settings-form');
  const manageConsentBtn = document.querySelector('.cookie-settings-btn');
  
  // Cookie functions
  function setCookie(name, value, days) {
    let expires = '';
    if (days) {
      const date = new Date();
      date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
      expires = '; expires=' + date.toUTCString();
    }
    document.cookie = name + '=' + (value || '') + expires + '; path=/';
  }
  
  function getCookie(name) {
    let match = document.cookie.match(new RegExp('(^| )' + name + '=([^;]+)'));
    return match ? match[2] : null;
  }
  
  // Show the modal if consent hasn't been given
  if (consentModal && !getCookie('cookiesAccepted')) {
    consentModal.classList.remove('cookie-hide');
    consentModal.classList.add('cookie-show');
    document.body.style.overflow = 'hidden'; // Prevent scrolling when popup is shown
  }
  
  // Handle accept button click
  if (acceptBtn) {
    acceptBtn.addEventListener('click', function() {
      setCookie('cookiesAccepted', 'true', 365); // Set cookie for a year
      consentModal.classList.remove('cookie-show');
      consentModal.classList.add('cookie-hide');
      document.body.style.overflow = '';
    });
  }
  
  // Handle settings button click (opens settings modal)
  if (settingsBtn && settingsModal) {
    settingsBtn.addEventListener('click', function() {
      consentModal.classList.remove('cookie-show');
      consentModal.classList.add('cookie-hide');
      settingsModal.classList.remove('cookie-hide');
      settingsModal.classList.add('cookie-show');
    });
  }
  
  // Handle settings form submit
  if (settingsForm && settingsModal) {
    settingsForm.addEventListener('submit', function(e) {
      e.preventDefault();
      setCookie('cookiesAccepted', 'true', 365);
      settingsModal.classList.remove('cookie-show');
      settingsModal.classList.add('cookie-hide');
      document.body.style.overflow = '';
    });
  }

  // Manage Consent Button (show modal again)
  if (manageConsentBtn) {
    manageConsentBtn.addEventListener('click', function() {
      consentModal.classList.remove('cookie-hide');
      consentModal.classList.add('cookie-show');
      document.body.style.overflow = 'hidden';
    });
  }
}); 