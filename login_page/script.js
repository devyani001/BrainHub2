document.addEventListener('DOMContentLoaded', function() {
    const wrapper = document.querySelector('.wrapper');
    const loginLink = document.querySelector('.login-link');
    const registerLink = document.querySelector('.register-link');
    const togglePassword = document.querySelector('.toggle-password');
    const passwordField = document.querySelector('.password');

    // Toggle between login and register forms
    registerLink.addEventListener('click', (e) => {
        e.preventDefault();
        wrapper.classList.add('active');
    });

    loginLink.addEventListener('click', (e) => {
        e.preventDefault();
        wrapper.classList.remove('active');
    });

    // Toggle password visibility
    if (togglePassword && passwordField) {
        togglePassword.addEventListener('click', () => {
            const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordField.setAttribute('type', type);
            
            // Toggle eye icon
            togglePassword.classList.toggle('bx-hide');
            togglePassword.classList.toggle('bx-show');
        });
    }

    // Form submission (you can add your actual form handling logic here)
    const forms = document.querySelectorAll('form');
    forms.forEach(form => {
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            // Add your form submission logic here
            // For example: validation, AJAX request, etc.
            console.log('Form submitted:', form);
            
            // Simulate successful submission
            if (form.classList.contains('login')) {
                alert('Login successful!');
            } else {
                alert('Registration successful!');
            }
        });
    });
});