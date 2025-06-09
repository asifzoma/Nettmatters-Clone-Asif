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

// Navigation Variables
const $navItems = $('.main-nav-ddm');
const $subMenuContainers = $('.sub-menu-container');
const $triangles = $('.triangle');

// Service Variables
const $serviceCards = $('.service');
const $serviceLinks = $('.service a');

// Button Variables
const $buttons = $('.btn');
const $buttonArrows = $('.btn i');

// Social Media Variables
const $socialIcons = $('.social-icons a');

////////
// Navigation Hover Effects
////////

// Add hover effects for navigation items
$navItems.hover(
    function() {
        const $this = $(this);
        const $subMenu = $this.find('.sub-menu-container');
        const $triangle = $this.find('.triangle');
        
        // Ensure proper z-index and visibility
        $subMenu.css({
            'z-index': '1000',
            'visibility': 'visible',
            'opacity': '1'
        });
        
        // Animate triangle
        $triangle.css({
            'visibility': 'visible',
            'opacity': '1',
            'transform': 'translateY(0)'
        });
        
        // Add active class for styling
        $this.addClass('active');
    },
    function() {
        const $this = $(this);
        const $subMenu = $this.find('.sub-menu-container');
        const $triangle = $this.find('.triangle');
        
        // Hide submenu with transition
        $subMenu.css({
            'opacity': '0',
            'visibility': 'hidden'
        });
        
        // Hide triangle with transition
        $triangle.css({
            'opacity': '0',
            'visibility': 'hidden',
            'transform': 'translateY(-10px)'
        });
        
        // Remove active class
        $this.removeClass('active');
    }
);

// Add hover effects for submenu items
$('.sub-menu li a').hover(
    function() {
        $(this).css({
            'color': '#fff',
            'text-decoration': 'underline'
        });
    },
    function() {
        $(this).css({
            'color': '',
            'text-decoration': 'none'
        });
    }
);

// Add hover effects for service cards
$serviceCards.hover(
    function() {
        $(this).css({
            'transform': 'translateY(-10px)',
            'box-shadow': '0 5px 15px rgba(0,0,0,0.1)'
        });
    },
    function() {
        $(this).css({
            'transform': 'translateY(0)',
            'box-shadow': 'none'
        });
    }
);

// Add hover effects for buttons
$buttons.hover(
    function() {
        const $this = $(this);
        const $arrow = $this.find('i');
        
        $this.css({
            'opacity': '0.9',
            'transform': 'translateY(-2px)'
        });
        
        if ($arrow.length) {
            $arrow.css('transform', 'translateX(5px)');
        }
    },
    function() {
        const $this = $(this);
        const $arrow = $this.find('i');
        
        $this.css({
            'opacity': '1',
            'transform': 'translateY(0)'
        });
        
        if ($arrow.length) {
            $arrow.css('transform', 'translateX(0)');
        }
    }
);

// Add hover effects for social media icons
$socialIcons.hover(
    function() {
        $(this).css({
            'transform': 'translateY(-3px)',
            'color': '#fff'
        });
    },
    function() {
        $(this).css({
            'transform': 'translateY(0)',
            'color': ''
        });
    }
);

// Add hover effects for news articles
$('.news-article').hover(
    function() {
        $(this).css({
            'transform': 'translateY(-5px)',
            'box-shadow': '0 5px 15px rgba(0,0,0,0.1)'
        });
    },
    function() {
        $(this).css({
            'transform': 'translateY(0)',
            'box-shadow': 'none'
        });
    }
);

// Add hover effects for case study items
$('.case-study-item').hover(
    function() {
        $(this).find('.case-study-tooltip').css({
            'opacity': '1',
            'visibility': 'visible'
        });
    },
    function() {
        $(this).find('.case-study-tooltip').css({
            'opacity': '0',
            'visibility': 'hidden'
        });
    }
);

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
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        arrows: true,
        infinite: true,
        variableWidth: false,
        swipe: true,
        draggable: true,
        pauseOnHover: true,
        pauseOnFocus: true,
        responsive: [
            {
                breakpoint: 1260,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });
    $('.case-studies .slick-list').addClass('slick-list-overflowremove');
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
        $header.removeClass('header-move-with-wrapper');
        $('body').removeClass('sidebar-header-relative');
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
        $header.addClass('header-move-with-wrapper');
        $('body').addClass('sidebar-header-relative');
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

// Add hover effects for navigation items
$(document).ready(function() {
    // Navigation hover effects
    $('.main-nav-ddm').hover(
        function() {
            $(this).find('.sub-menu-container').stop().fadeIn(200);
            $(this).find('.triangle').stop().fadeIn(200);
        },
        function() {
            $(this).find('.sub-menu-container').stop().fadeOut(200);
            $(this).find('.triangle').stop().fadeOut(200);
        }
    );

    // Service hover effects
    $('.service').hover(
        function() {
            $(this).stop().animate({
                transform: 'translateY(-10px)'
            }, 200);
        },
        function() {
            $(this).stop().animate({
                transform: 'translateY(0)'
            }, 200);
        }
    );

    // Button hover effects
    $('.btn').hover(
        function() {
            $(this).css({
                'opacity': '0.9',
                'transform': 'translateY(-2px)'
            });
        },
        function() {
            $(this).css({
                'opacity': '1',
                'transform': 'translateY(0)'
            });
        }
    );

    // Social media hover effects
    $('.social-icon').hover(
        function() {
            $(this).css('transform', 'translateY(-3px)');
        },
        function() {
            $(this).css('transform', 'translateY(0)');
        }
    );
});

// Accordion functionality for Out of Hours IT Support

document.addEventListener('DOMContentLoaded', function() {
  var toggles = document.querySelectorAll('.accordion-toggle');
  toggles.forEach(function(toggle) {
    toggle.addEventListener('click', function() {
      // Toggle active class
      this.classList.toggle('active');
      // Toggle content
      var content = this.nextElementSibling;
      var arrow = this.querySelector('.accordion-arrow');
      if (content.classList.contains('open')) {
        content.classList.remove('open');
        this.setAttribute('aria-expanded', 'false');
        if (arrow) arrow.innerHTML = '\u25B6'; // ►
      } else {
        content.classList.add('open');
        this.setAttribute('aria-expanded', 'true');
        if (arrow) arrow.innerHTML = '\u25BC'; // ▼
      }
    });
  });
});