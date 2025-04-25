// ==========================
//  Main JavaScript 

// Global Variables 


// Sticky Header Variables 
let lastScrollTop = 0;
const header = document.querySelector('header');
const scrollThreshold = 50; // Amount of scroll before header hides/shows


// Side Menu Variables
const sideMenu = document.querySelector('.sidebar');
const $overlay = $('.overlay');
const $hamburger = $('.hamburger-inner');

// Cookie Variables
const $cookies_policy = $('#cookie-consent');
const $cookies_accept = $('.modal-btn-2');
const $cookies_manage = $('.cookie-settings-btn');
const $cookies_settings = $('.modal-btn-1');

// Case Studies Banner Variables
const $caseStudiesBtn = $('.btn-case-studies');

////////
// Cookie Pop Up
////////

//Checks If Cookies Are Accepted
if(localStorage.getItem('cAccepted') === null){
    $cookies_policy.addClass('cookie-show');
}
else{
    $cookies_policy.addClass('cookie-hide');
    $cookies_manage.addClass('cookie-show');
}


//Cookies Accept Function on Click
$cookies_accept.on('click', function(){
    $cookies_policy.removeClass('cookie-show').addClass('cookie-hide');
    localStorage.setItem("cAccepted", "true");
    $cookies_manage.addClass('cookie-show');
});

//Cookies Manage Consent Function on Click
$cookies_manage.on('click', function(){
    $cookies_policy.removeClass('cookie-hide').addClass('cookie-show');
});

//Cookies Settings Function on Click
$cookies_settings.on('click', function(){
    $cookies_policy.removeClass('cookie-show').addClass('cookie-hide');
    $cookies_manage.addClass('cookie-show');
});

////////
// Sticky Header: removed per request, now using nav hide/show only
////////

// New nav hide/show on scroll
const $nav = $('nav');

// Add header scroll behavior
window.addEventListener('scroll', function() {
  const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
  
  // Don't apply header transformations if sidebar is open
  if (!$('header').hasClass('sidebar-open')) {
    // Check if we've scrolled past the threshold
    if (scrollTop > scrollThreshold) {
      // Scrolling down
      if (scrollTop > lastScrollTop) {
        header.classList.add('header-hidden');
        header.classList.remove('header-visible');
      } 
      // Scrolling up
      else {
        header.classList.remove('header-hidden');
        header.classList.add('header-visible');
      }
    }
  }
  
  lastScrollTop = scrollTop;
});

// Make sure header responsive elements are visible/hidden at the right breakpoints
$(window).resize(function() {
    updateHeaderResponsiveness();
});

// Run responsive updates on page load
$(document).ready(function() {
    updateHeaderResponsiveness();
});

function updateHeaderResponsiveness() {
    const width = $(window).width();
    
    // Phone icon visibility - only visible on mobile
    if (width < 766) {
        $('.header-phone-icon').show();
    } else {
        $('.header-phone-icon').hide();
    }
    
    // Support and contact buttons visibility
    if (width < 992) {
        $('.btn-header-support, .btn-header-contact').hide();
    } else {
        $('.btn-header-support, .btn-header-contact').show();
    }
    
    // Search form visibility
    if (width < 766) {
        $('.form-container').show();
        $('.large-form-container').hide();
    } else if (width >= 766 && width < 992) {
        $('.form-container').hide();
        $('.large-form-container').show();
        $('.header-form-large').show();
    } else if (width >= 992 && width < 1260) {
        $('.form-container').hide();
        $('.large-form-container').show();
        $('.header-form-large').hide();
        $('.large-form-icon-container').css('border-radius', '3px');
    } else {
        $('.form-container').hide();
        $('.large-form-container').show();
        $('.header-form-large').show();
        $('.large-form-icon-container').css('border-radius', '0 3px 3px 0');
    }
    
    // Main navigation visibility
    if (width < 992) {
        $('.drop-down-menu-main-nav-container').hide();
    } else {
        $('.drop-down-menu-main-nav-container').show();
    }
}

////////
// Case Studies Banner Button Animation
////////

$(document).ready(function(){
    // Add hover animation effect for the Case Studies Banner button
    $caseStudiesBtn.hover(
        function() {
            $(this).find('.btn-icon').css('transform', 'translateX(5px)');
        },
        function() {
            $(this).find('.btn-icon').css('transform', 'translateX(0)');
        }
    );
    
    // Smooth scroll to case studies section when button is clicked
    $caseStudiesBtn.on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $('.case-studies').offset().top
        }, 800);
    });
});

////////
// Slick Carousel Plugin
////////

// Banner Carousel
$(document).ready(function(){
    $('.banner-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5000,
        arrows: false,
        dots: true,
        fade: true,
        appendDots: $('.banner-slider')
    });
});

// Partner Carousel
$(document).ready(function(){
    $('.partners').slick({
        slidesToShow:       3,
        slidesToScroll:     1,
        autoplay:           true,
        arrows:             false,
        infinite:           true,
        variableWidth:      true,
        swipe:              false,
        draggable:          false,
        pauseOnHover:       true,
        pauseOnFocus:       true,
        responsive: [
            {
                breakpoint: 1260,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });
    $('.partners .slick-list').addClass('slick-list-overflowremove');
});

// Case Studies Carousel
$(document).ready(function(){
     $('.case-studies').slick({
        slidesToShow:       3,
        slidesToScroll:     1,
        autoplay:           true,
        arrows:             false,
        infinite:           true,
        variableWidth:      true,
        swipe:              false,
        draggable:          false,
        pauseOnHover:       true,
        pauseOnFocus:       true,
    });
    $('.case-studies .slick-list').addClass('slick-list-overflowremove')
 });

////////
// Side Menu
////////

// Side menu show/hide on click
// Animation for the wrapper moving the page content and burger animation on click of the burger menu

$(document).ready(function() {
    // Add overlay div if it doesn't exist
    if ($('.overlay').length === 0) {
        $('body').append('<div class="overlay"></div>');
    }
    
    var $sideBar = $('.sidebar');
    var $wrapper = $('.wrapper');
    var $hamburger = $('.hamburger-box');
    var $overlay = $('.overlay');
    var $header = $('header');
    
    // Function to close sidebar - ensure synchronized movement
    function closeSidebar() {
        $sideBar.removeClass('active-sidebar').addClass('hide-sidebar');
        $wrapper.removeClass('wrapper-right').addClass('wrapper-center');
        $hamburger.removeClass('burger-active');
        $('body').removeClass('no-scroll');
        $overlay.removeClass('overlay-active');
        
        // Re-enable header scroll behavior after transition completes
        setTimeout(function() {
            $header.removeClass('sidebar-open');
        }, 300);
    }
    
    // Function to open sidebar - ensure synchronized movement
    function openSidebar() {
        $sideBar.addClass('active-sidebar').removeClass('hide-sidebar');
        $wrapper.addClass('wrapper-right').removeClass('wrapper-center');
        $hamburger.addClass('burger-active');
        $('body').addClass('no-scroll');
        $overlay.addClass('overlay-active');
        
        // Disable header scroll behavior by adding the sidebar-open class
        $header.addClass('sidebar-open');
    }
    
    // Toggle sidebar on hamburger click
    $('.header-icon-menu-container').click(function(e) {
        e.stopPropagation();
        
        if ($sideBar.hasClass('active-sidebar')) {
            closeSidebar();
        } else {
            openSidebar();
        }
    });
    
    // Close sidebar when clicking the overlay
    $overlay.click(function() {
        closeSidebar();
    });
    
    // Toggle sub-menus in sidebar
    $('.side-menu-list-item > a').click(function(e) {
        e.preventDefault();
        $(this).siblings('.side-sub-menu-banner').slideToggle(300);
    });
    
    // Toggle sub-menus in desktop sidebar
    $('.side-menu-list-item-large > a').click(function(e) {
        e.preventDefault();
        $(this).siblings('.side-sub-menu-banner-large').slideToggle(300);
    });
});

// Prevent clicking inside the sidebar from closing it
$('.sidebar').click(function(e) {
    e.stopPropagation();
});