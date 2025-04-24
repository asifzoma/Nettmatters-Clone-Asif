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

// Initialize cookie consent on document ready
$(document).ready(function() {
    //Checks If Cookies Are Accepted
    if(localStorage.getItem('cAccepted') === null){
        $cookies_policy.addClass('cookie-show');
    }
    else{
        $cookies_policy.addClass('cookie-hide');
        $cookies_manage.addClass('cookie-show');

    }
});

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
        $('.drop-down-menu-main-nav-container, .main-nav').removeClass('nav-visible').addClass('nav-hidden');
    } else {
        // Scroll Up
        if(st + $(window).height() < $(document).height()) {
            $('.fake-header').removeClass('nav-up').addClass('nav-down');
            $('.header-placeholder').removeClass('header-hidden').addClass('header-show');
            $('.drop-down-menu-main-nav-container').removeClass('nav-hidden').addClass('nav-visible');
            // Only manage main-nav if it's visible at the current viewport
            if ($(window).width() >= 992) {
                $('.main-nav').removeClass('nav-hidden').addClass('nav-visible');
            }
        }
    }
    
    lastScrollTop = st;
}

// Make sure header responsive elements are visible/hidden at the right breakpoints
$(window).resize(function() {
    updateHeaderResponsiveness();
});

$(document).ready(function() {
    updateHeaderResponsiveness();
    
    // Initialize sticky header classes
    $('.fake-header').addClass('nav-down');
    $('.header-placeholder').addClass('header-show');
    $('.drop-down-menu-main-nav-container, .main-nav').addClass('nav-visible');
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
    $('.header-icon-menu-container').click(function(e) {
        var mySideBar = $('.sidebar');
        mySideBar.addClass('active-sidebar').removeClass('hide-sidebar');
        $('.wrapper').addClass('wrapper-right').removeClass('wrapper-center');
        $('.hamburger-box').addClass('burger-active');
        $('body').addClass('no-scroll');
        
        $('.wrapper').click(function() {
            $('.active-sidebar').removeClass('active-sidebar');
            $('.wrapper').addClass('wrapper-center').removeClass('wrapper-right');
            $('.hamburger-box').removeClass('burger-active');
            $('body').removeClass('no-scroll');
            
            $('.wrapper').off('click'); // cancel the wrappers click handler when it's used
        });
        e.stopPropagation(); 
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
