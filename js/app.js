// Slider slides the images on the home page

$(document).ready(function () {
    $('.hero-slider').slick({
      dots: true,
      infinite: true,
      autoplay: true,
      autoplaySpeed: 3000,
      speed: 600,
      arrows: false,
      fade: true,
      cssEase: 'linear'    });
  });
  

  // Hamburger Menu
const hamburger = document.querySelector('.hamburger-menu');
const body = document.body;
const overlay = document.querySelector('.overlay');

// Toggle sidebar open/close on hamburger click
hamburger.addEventListener('click', () => {
  hamburger.classList.toggle('open');       // animate hamburger to X or back
  body.classList.toggle('menu-open');       // open or close the sidebar/overlay
});

// close the menu when clicking the overlay
overlay.addEventListener('click', () => {
  hamburger.classList.remove('open');
  body.classList.remove('menu-open');
});


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


