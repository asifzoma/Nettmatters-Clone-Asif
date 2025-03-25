class StickyHeader {
    constructor() {
      this.header = document.querySelector('.top-bar');
      this.nav = document.querySelector('.main-nav');
      this.scrollPosition = 0;
      this.init();
    }
  
    init() {
      window.addEventListener('scroll', () => this.toggleSticky());
      // Initialize on load
      this.toggleSticky();
    }
  
    toggleSticky() {
      const currentScroll = window.pageYOffset;
      
      // Scrolling down
      if (currentScroll > 100) {
        this.header.classList.add('sticky');
        this.nav.classList.add('sticky-nav');
        
        // Adjust padding if nav is below header
        if (this.nav.offsetTop > this.header.offsetHeight) {
          document.body.style.paddingTop = `${this.header.offsetHeight}px`;
        }
      } 
      // Scrolling up
      else {
        this.header.classList.remove('sticky');
        this.nav.classList.remove('sticky-nav');
        document.body.style.paddingTop = '0';
      }
  
      this.scrollPosition = currentScroll;
    }
  }
  
  // Initialize when DOM is loaded
  document.addEventListener('DOMContentLoaded', () => {
    new StickyHeader();
  });