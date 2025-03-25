class SearchComponent {
    constructor() {
      this.searchBox = document.querySelector('.search-box');
      this.searchToggle = document.querySelector('.search-toggle');
      this.searchInput = document.querySelector('.search-input');
      this.init();
    }
  
    init() {
      // Mobile toggle
      if (this.searchToggle) {
        this.searchToggle.addEventListener('click', (e) => {
          e.stopPropagation();
          this.toggleSearch();
        });
      }
  
      // Close when clicking outside
      document.addEventListener('click', (e) => {
        if (!e.target.closest('.search-box') && !e.target.closest('.search-toggle')) {
          this.closeSearch();
        }
      });
  
      // Handle ESC key
      document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') this.closeSearch();
      });
    }
  
    toggleSearch() {
      this.searchBox.classList.toggle('expanded');
      if (this.searchBox.classList.contains('expanded')) {
        this.searchInput.focus();
      }
    }
  
    closeSearch() {
      this.searchBox.classList.remove('expanded');
    }
  }
  
  // Initialize
  document.addEventListener('DOMContentLoaded', () => {
    new SearchComponent();
  });