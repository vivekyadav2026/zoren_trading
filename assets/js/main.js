/**
 * Zoren Trading - Main JavaScript
 */

document.addEventListener('DOMContentLoaded', function() {
    
    // Sticky Navbar
    const navbar = document.querySelector('.navbar-custom');
    if (navbar) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                navbar.classList.add('sticky');
            } else {
                navbar.classList.remove('sticky');
            }
        });
    }

    // Floating Button Tooltips for Mobile Support
    const floatingBtns = document.querySelectorAll('.floating-btn');
    floatingBtns.forEach(btn => {
        btn.addEventListener('click', function(e) {
            // Prevent default if it's just opening a tooltip on mobile
            // But usually these are links (tel:, mailto:, https://wa.me)
        });
    });

    // Initialize Bootstrap Tooltips if Bootstrap JS is loaded
    if (typeof bootstrap !== 'undefined') {
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        });
    }

    // WhatsApp Enquiry Form Integration
    const allForms = document.querySelectorAll('form');
    allForms.forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Collect data
            const inputs = form.querySelectorAll('input, textarea, select');
            let message = "Hello Zoren Trading,\n\nI have a new enquiry:\n\n";
            
            inputs.forEach(input => {
                const labelElement = input.closest('.col-md-6, .col-md-12, .col-12, .mb-3, .row')?.querySelector('label');
                let label = labelElement ? labelElement.innerText : (input.placeholder || input.name || "Field");
                
                // Clean up label (remove asterisks)
                label = label.replace(/\*/g, '').trim();
                
                if(input.value.trim() !== '') {
                    message += **: \n;
                }
            });
            
            // Encode message for Email
            const encodedMessage = encodeURIComponent(message);
            const emailAddress = "info@zorentradingservices.com";
            const emailSubject = encodeURIComponent("New Website Enquiry");
            const mailtoUrl = mailto:?subject=&body=;
            
            // Open default email client
            window.location.href = mailtoUrl;
            
            // Optional: reset form
            // form.reset();
        });
    });

    // Add smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            if(targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

});


