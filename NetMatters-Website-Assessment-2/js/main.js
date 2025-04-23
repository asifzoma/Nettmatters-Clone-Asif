// ==========================================================================
//  Main JavaScript 
// ==========================================================================

////////
// Global Variables 
////////

// Sticky Header Variables 
var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $('.fake-header').outerHeight();

// Side Menu Variables
// set's variables for the sidebar
const sideMenu = document.querySelector('.sidebar');

// Cookie Variables
const $cookies_policy = $('#cookie-consent');
const $cookies_accept = $('.modal-btn-2');
const $cookies_manage = $('.cookie-settings-btn');
const $cookies_settings = $('.modal-btn-1');

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
});

//Cookies Manage Consent Function on Click
$cookies_manage.on('click', function(){
    $cookies_policy.removeClass('cookie-hide').addClass('cookie-show');
});

//Cookies Settings Function on Click
$cookies_settings.on('click', function(){
    $cookies_policy.removeClass('cookie-show').addClass('cookie-hide');
});

////////
// Sticky Header
////////

$(window).scroll(function(event){
    didScroll = true;
});

setInterval(function() {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 250);

function hasScrolled() {
    var st = $(this).scrollTop();
    if(Math.abs(lastScrollTop - st) <= delta)
        return;
    
    // If they scrolled down and are past the .fake-header, add class .nav-up.
    if (st > lastScrollTop && st > navbarHeight){
        // Scroll Down
        $('.fake-header').removeClass('nav-down').addClass('nav-up');
        $('.header-placeholder').removeClass('header-show').addClass('header-hidden');
    } else {
        // Scroll Up
        if(st + $(window).height() < $(document).height()) {
            $('.fake-header').removeClass('nav-up').addClass('nav-down');
            $('.header-placeholder').removeClass('header-hidden').addClass('header-show');
        }
    }
    
    lastScrollTop = st;
}


////////
// Slick Carousel Plugin
////////

// Banner Carousel
$(document).ready(function(){
    $('.slides').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 4000,
        arrows: false,
        dots: true,
        appendDots: $('.slides'),
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
    });
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
    $('.header-icon-menu-container').click(function(e) {
        var mySideBar = $('.sidebar');
        mySideBar.addClass('active-sidebar').removeClass('hide-sidebar');
        $('.wrapper').addClass('wrapper-right').removeClass('wrapper-center');
        $('.hamburger-box').addClass('burger-active');
        //  $(".wrapper").animate({
        //       right: `${sideMenu.offsetWidth}px`
        //  })
        $('.wrapper').click(function() {
        $('.active-sidebar').removeClass('active-sidebar');
        $('.wrapper').addClass('wrapper-center').removeClass('wrapper-right');
        $('.hamburger-box').removeClass('burger-active');
        //   $(".wrapper").animate({
        //       right: '0px'
        //  })
        $('.wrapper').off('click'); // cancel the wrappers click handler when it's used
      });
      e.stopPropagation(); 
    });
});

// function execute(){
//     if(screen.width > 992) {
//         $('.wrapper').addClass('wrapper-right-large').removeClass('wrapper-right-small');
//         $(".wrapper").animate({
//             right: `${sideMenu.offsetWidth}px`
//        })
//       }
//  }
//  function execute(){
//     if(screen.width < 992) {
//         $('.wrapper').addClass('wrapper-right-small').removeClass('wrapper-right-large');
//         $(".wrapper").animate({
//             right: `${sideMenu.offsetWidth}px`
//        })
//       }
//  }