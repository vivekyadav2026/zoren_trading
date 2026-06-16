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

    // AJAX PHP Enquiry Form Integration
    const allForms = document.querySelectorAll('form');
    allForms.forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Show loading state
            const submitBtn = form.querySelector('button[type="submit"]');
            let originalBtnText = "Submit";
            if(submitBtn) {
                originalBtnText = submitBtn.innerHTML;
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i> Sending...';
                submitBtn.disabled = true;
            }
            
            // Collect data
            const inputs = form.querySelectorAll('input, textarea, select');
            let formData = {};
            
            inputs.forEach(input => {
                const labelElement = input.closest('.col-md-6, .col-md-12, .col-12, .mb-3, .row')?.querySelector('label');
                let label = labelElement ? labelElement.innerText : (input.placeholder || input.name || "Field");
                
                // Clean up label (remove asterisks)
                label = label.replace(/\*/g, '').trim();
                
                if(input.value.trim() !== '') {
                    formData[label] = input.value;
                }
            });
            
            // Send AJAX request to PHP backend
            fetch('process_form.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(formData)
            })
            .then(response => {
                return response.text().then(text => {
                    try {
                        return JSON.parse(text);
                    } catch(e) {
                        console.error('Server response was not JSON:', text);
                        return {
                            status: 'error',
                            message: 'Invalid response from server. Received: ' + (text.trim() ? text.substring(0, 300) : 'Empty Response')
                        };
                    }
                });
            })
            .then(data => {
                if(data.status === 'success') {
                    alert(data.message || 'Thank you! Your enquiry has been sent successfully.');
                    form.reset();
                } else {
                    alert('Error: ' + data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Connection error. Please check if your server is running and try again.');
            })
            .finally(() => {
                // Restore button
                if(submitBtn) {
                    submitBtn.innerHTML = originalBtnText;
                    submitBtn.disabled = false;
                }
            });
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
