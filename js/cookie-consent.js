// Cookie Consent Popup Handler

document.addEventListener('DOMContentLoaded', function() {
  // Elements
  const cookieOverlay = document.getElementById('cookieOverlay');
  const acceptBtn = document.getElementById('acceptCookies');
  const settingsBtn = document.getElementById('changeCookieSettings');
  
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
    const nameEQ = name + '=';
    const ca = document.cookie.split(';');
    for (let i = 0; i < ca.length; i++) {
      let c = ca[i];
      while (c.charAt(0) === ' ') c = c.substring(1, c.length);
      if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
  }
  
  // Show the popup if consent hasn't been given
  if (!getCookie('cookiesAccepted')) {
    cookieOverlay.style.display = 'flex';
    document.body.style.overflow = 'hidden'; // Prevent scrolling when popup is shown
  }
  
  // Handle accept button click
  acceptBtn.addEventListener('click', function() {
    setCookie('cookiesAccepted', 'true', 365); // Set cookie for a year
    cookieOverlay.style.display = 'none';
    document.body.style.overflow = ''; // Re-enable scrolling
  });
  
  // Handle settings button click (opens settings page or modal)
  settingsBtn.addEventListener('click', function() {
    // You can redirect to a cookie policy page or open another modal here
    // For now, we'll just simulate accepting cookies
    setCookie('cookiesAccepted', 'true', 365);
    cookieOverlay.style.display = 'none';
    document.body.style.overflow = '';
    
    // Uncomment and modify this line to redirect to a settings page
    // window.location.href = '/cookie-settings.html';
  });
}); 