document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('.contact-form');
    const requiredInputs = form.querySelectorAll('input[required], textarea[required]');

    // Validation functions
    const validators = {
        text: value => value.trim().length > 0,
        email: value => /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value),
        tel: value => value.trim().length > 0
    };

    // Real-time validation for each required input
    requiredInputs.forEach(input => {
        let hasBeenFocused = false;

        // Handle focus in
        input.addEventListener('focus', function() {
            hasBeenFocused = true;
        });

        // Handle typing
        input.addEventListener('input', function() {
            const value = this.value;
            const type = this.type === 'text' || this.type === 'textarea' ? 'text' : this.type;
            
            // Remove previous validation classes
            this.classList.remove('valid-input', 'invalid-input');
            
            if (value.trim()) {
                if (validators[type](value)) {
                    this.classList.add('valid-input');
                } else {
                    this.classList.add('invalid-input');
                }
            } else if (hasBeenFocused) {
                this.classList.add('invalid-input');
            }
        });

        // Handle focus out
        input.addEventListener('blur', function() {
            const value = this.value;
            const type = this.type === 'text' || this.type === 'textarea' ? 'text' : this.type;
            
            if (hasBeenFocused && !validators[type](value)) {
                this.classList.remove('valid-input');
                this.classList.add('invalid-input');
            }
        });

        // Special handling for email field
        if (input.type === 'email') {
            input.addEventListener('keydown', function(e) {
                // Ignore tab, shift, etc.
                if (e.key.length === 1) {
                    if (!validators.email(this.value)) {
                        this.classList.add('invalid-input');
                    }
                }
            });
        }
    });

    // Form submit validation
    form.addEventListener('submit', function(e) {
        let isValid = true;

        requiredInputs.forEach(input => {
            const value = input.value;
            const type = input.type === 'text' || this.type === 'textarea' ? 'text' : input.type;
            
            if (!validators[type](value)) {
                e.preventDefault();
                input.classList.add('invalid-input');
                isValid = false;
            }
        });

        return isValid;
    });
}); 