// ==========================================================================
//  Accordion Functionality for Contact Page
// ==========================================================================

document.addEventListener('DOMContentLoaded', function() {
    // Initialize all accordion toggles
    const accordionToggles = document.querySelectorAll('.accordion-toggle');
    
    accordionToggles.forEach(toggle => {
        toggle.addEventListener('click', function() {
            const content = this.nextElementSibling;
            const isExpanded = this.getAttribute('aria-expanded') === 'true';
            
            // Toggle the aria-expanded attribute
            this.setAttribute('aria-expanded', !isExpanded);
            
            // Toggle the content visibility
            if (content.classList.contains('active')) {
                content.classList.remove('active');
            } else {
                content.classList.add('active');
            }
            
            // Close other accordions (optional - for single accordion behavior)
            // Uncomment below if you want only one accordion open at a time
            /*
            accordionToggles.forEach(otherToggle => {
                if (otherToggle !== this) {
                    otherToggle.setAttribute('aria-expanded', 'false');
                    const otherContent = otherToggle.nextElementSibling;
                    if (otherContent) {
                        otherContent.classList.remove('active');
                    }
                }
            });
            */
        });
    });
}); 