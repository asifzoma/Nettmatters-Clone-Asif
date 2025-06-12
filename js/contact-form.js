document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('.contact-form');
    const requiredInputs = form.querySelectorAll('input[required], textarea[required]');

    // Validation messages
    const messages = {
        name: {
            required: 'Please enter your name',
            invalid: 'Please enter a valid name'
        },
        email: {
            required: 'Please enter your email address',
            invalid: 'Please enter a valid email address'
        },
        telephone: {
            required: 'Please enter your telephone number',
            invalid: 'Please enter a valid UK telephone number'
        },
        message: {
            required: 'Please enter your message',
            invalid: 'Message must be at least 10 characters'
        }
    };

    // Validation functions
    const validators = {
        text: value => {
            return value.trim().length > 0;
        },
        email: value => {
            return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value);
        },
        tel: value => {
            // UK phone number validation
            // Matches formats: +44 7xxx xxxxxx, 07xxx xxxxxx, 01xxx xxxxxx, 02x xxxx xxxx
            const ukPhoneRegex = /^(?:(?:\+44\s?|0)(?:(?:1\d{3}|[27][1-9]\d{2}|3[0-9]\d{2}|[4-9]\d{3})\s?\d{6}|20\s?\d{4}\s?\d{4}))$/;
            
            // Remove spaces and any other non-digit characters except +
            const cleanNumber = value.replace(/[^\d+]/g, '');
            
            return ukPhoneRegex.test(value) || ukPhoneRegex.test(cleanNumber);
        },
        message: value => {
            return value.trim().length >= 10;
        }
    };

    // Format UK phone number as user types
    function formatUKPhoneNumber(value) {
        // Remove all non-digit characters except +
        let number = value.replace(/[^\d+]/g, '');
        
        // Handle different UK number formats
        if (number.startsWith('+44')) {
            // Format: +44 7XXX XXXXXX
            return number.replace(/(\+44)(\d{4})(\d{6})/, '$1 $2 $3');
        } else if (number.startsWith('07') || number.startsWith('01')) {
            // Format: 07XXX XXXXXX or 01XXX XXXXXX
            return number.replace(/(\d{5})(\d{6})/, '$1 $2');
        } else if (number.startsWith('02')) {
            // Format: 020 XXXX XXXX
            return number.replace(/(\d{3})(\d{4})(\d{4})/, '$1 $2 $3');
        }
        
        return number;
    }

    // Show validation message
    function showValidationMessage(input, isValid) {
        const messageElement = input.nextElementSibling;
        const type = input.type === 'textarea' ? 'message' : input.type;
        const fieldName = input.name;
        
        if (!isValid) {
            const message = input.value.trim() === '' ? 
                messages[fieldName].required : 
                messages[fieldName].invalid;
            
            messageElement.textContent = message;
            input.classList.add('invalid-input');
            input.classList.remove('valid-input');
        } else {
            messageElement.textContent = '';
            input.classList.add('valid-input');
            input.classList.remove('invalid-input');
        }
    }

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
            const type = this.type === 'textarea' ? 'message' : 
                        this.type === 'text' ? this.name : this.type;
            
            // Format phone number if it's a telephone input
            if (type === 'tel') {
                this.value = formatUKPhoneNumber(value);
            }
            
            // Validate and show message
            if (value.trim() || hasBeenFocused) {
                const isValid = validators[type](value);
                showValidationMessage(this, isValid);
            }
        });

        // Handle focus out
        input.addEventListener('blur', function() {
            const value = this.value;
            const type = this.type === 'textarea' ? 'message' : 
                        this.type === 'text' ? this.name : this.type;
            
            if (hasBeenFocused) {
                const isValid = validators[type](value);
                showValidationMessage(this, isValid);
            }
        });
    });

    // Form submit validation
    form.addEventListener('submit', function(e) {
        let isValid = true;

        requiredInputs.forEach(input => {
            const value = input.value;
            const type = input.type === 'textarea' ? 'message' : 
                        input.type === 'text' ? input.name : input.type;
            
            const fieldValid = validators[type](value);
            showValidationMessage(input, fieldValid);
            
            if (!fieldValid) {
                isValid = false;
            }
        });

        if (!isValid) {
            e.preventDefault();
            // Scroll to the first invalid input
            const firstInvalid = form.querySelector('.invalid-input');
            if (firstInvalid) {
                firstInvalid.scrollIntoView({ behavior: 'smooth', block: 'center' });
                firstInvalid.focus();
            }
        }
    });
}); 