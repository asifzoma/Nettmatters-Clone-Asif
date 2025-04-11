// Slider slides the images on the home page

$(document).ready(function () {
    $('.hero-slider').slick({
      dots: true,
      infinite: true,
      autoplay: true,
      autoplaySpeed: 3000,
      speed: 600,
      arrows: false,
      fade: false,
      cssEase: 'linear'    });
  });
  

  /// grab the hamburger button
const hamburger = document.querySelector('.hamburger-menu');

// grab the <body> so we can add/remove the .menu-open class
const body = document.body;

// grab the overlay so we can detect when user clicks outside menu
const overlay = document.querySelector('.overlay');

// when user clicks hamburger:
// - toggle .menu-open class on body (which triggers sidebar & overlay in SCSS)
// - also toggle .scroll-lock to prevent background from scrolling
// - toggle .open class on the hamburger icon (for animation if needed)
hamburger.addEventListener('click', () => {
  hamburger.classList.toggle('open');       // animate hamburger icon (if styles exist need to add)
  body.classList.toggle('menu-open');       // triggers slide-left + overlay fade
  body.classList.toggle('scroll-lock');     // stops body from scrolling when menu is open
});

// when user clicks the overlay:
// - remove .menu-open from body to close menu
// - remove .scroll-lock to allow scrolling again
// - remove .open class from hamburger to reset icon
overlay.addEventListener('click', () => {
  hamburger.classList.remove('open');
  body.classList.remove('menu-open');
  body.classList.remove('scroll-lock');
});

// optional: close cookie popup on click
const cookieCloseBtn = document.querySelector('.cookie-close-btn');
const cookieNotice = document.querySelector('.cookie-notice');

// when the user clicks the cookie banner close button, hide the cookie notice
if (cookieCloseBtn && cookieNotice) {
  cookieCloseBtn.addEventListener('click', () => {
    cookieNotice.style.display = 'none';
  });
}



// Cookie Popup
document.addEventListener('DOMContentLoaded', () => {
  const popup = document.getElementById('cookie-popup');
  const acceptBtn = document.getElementById('accept-cookies');
  const changeBtn = document.getElementById('change-settings');

  // Only show if not already accepted
  if (!localStorage.getItem('cookiesAccepted')) {
    popup.style.display = 'block';
  }

  // Accept button - store consent
  acceptBtn.addEventListener('click', () => {
    localStorage.setItem('cookiesAccepted', 'true');
    popup.style.display = 'none';
  });

  // Change Settings - redirect or open modal
  changeBtn.addEventListener('click', () => {
    // You can replace this with a modal later
    window.location.href = '/cookie-settings';
  });
});


