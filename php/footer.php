    <!-- Footer with Contact Information -->
    <section class="footer-contact">
        <div class="footer-container">
            <!-- Left side with logo -->
            <div class="footer-logo">
                <div class="logo-inline-container">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/fuel-button-white.png" alt="Globe with integration tool icons" class="footer-flame">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/fuel.AI.png" alt="Globe with integration tool icons" class="footer-text">
                </div>
            </div>
            
            <!-- Right side with contact info -->
            <div class="footer-info">
                <div class="footer-contact-text">
                    <h3 class="footer-title">CONTACT US</h3>
                    <p class="footer-phone">PHONE</p>
                    <p class="footer-phone-number">(435) 375-3509</p>
                    <p class="footer-email">EMAIL</p>
                    <p class="footer-email-address">EXAMPLEEMAIL@GMAIL.COM</p>
                </div>
                
                <div class="footer-address-social">
                    <div class="footer-address">
                        <p>85 N 300 W #C<br>WASHINGTON UTAH<br>84790</p>
                    </div>
                    
                    <!-- Social media icons -->
                    <div class="footer-social" style="text-align: center; margin-top: 40px;">
                        <a href="https://www.facebook.com/fuelAI/?_rdr" target="_blank" class="social-icon">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/facebook.png" alt="facebook">

                        </a>
                        <a href="https://www.youtube.com/channel/UC3XoZMivzz08ZfVtJg2ZHRg" target="_blank" class="social-icon">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/youtube.webp" alt="YouTube">

                        </a>
                        <a href="https://www.linkedin.com/company/fuel-ai/" target="_blank" class="social-icon">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/linkedin.png" alt="LinkedIn">

                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>document.addEventListener('DOMContentLoaded', function() {
    // Check if we need to show form or confirmation
    const urlParams = new URLSearchParams(window.location.search);
    const showConfirmation = urlParams.get('submitted');
    
    // Show confirmation section if URL has submitted parameter
    if (showConfirmation === 'true') {
        document.getElementById('contact-form-section').style.display = 'none';
        document.getElementById('confirmation-section').style.display = 'flex';
        
        // If page is refreshed, go back to the form
        if (performance.navigation.type === 1) {
            window.location.href = 'contact.html';
        }
    }
    
    // -------- FORM SUBMISSION FUNCTIONALITY --------
    const contactForm = document.querySelector('.contact-form');
    
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault(); // Prevent default form submission
            
            // Simple form validation
            const firstName = document.getElementById('firstName').value;
            const lastName = document.getElementById('lastName').value;
            const email = document.getElementById('email').value;
            const phone = document.getElementById('phone').value;
            
            // Check if required fields are filled
            if (!firstName || !lastName || !email) {
                alert('Please fill out all required fields.');
                return;
            }
            
            // Simple email validation
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(email)) {
                alert('Please enter a valid email address.');
                return;
            }
            
            // If validation passes, show confirmation and add URL parameter
            document.getElementById('contact-form-section').style.display = 'none';
            document.getElementById('confirmation-section').style.display = 'flex';
            
            // Change URL to include submitted parameter without refreshing page
            const newUrl = window.location.pathname + '?submitted=true';
            window.history.pushState({ submitted: true }, '', newUrl);
            
            // In a real implementation, you would submit the form data to a server here
            // For example: fetch('/submit-form', { method: 'POST', body: new FormData(contactForm) });
        });
    }

    // -------- HAMBURGER MENU FUNCTIONALITY --------
    // Get hamburger menu elements
    const hamburger = document.querySelector('.hamburger-menu');
    const mobileMenu = document.querySelector('.mobile-menu');
    const mobileMenuLinks = document.querySelectorAll('.mobile-menu a');
    
    // Toggle mobile menu when hamburger is clicked
    if (hamburger) {
        hamburger.addEventListener('click', function() {
            hamburger.classList.toggle('active');
            mobileMenu.classList.toggle('active');
            
            // Prevent scrolling when menu is open
            if (mobileMenu.classList.contains('active')) {
                document.body.style.overflow = 'hidden';
            } else {
                document.body.style.overflow = '';
            }
        });
    }
    
    // Close mobile menu when a link is clicked
    mobileMenuLinks.forEach(link => {
        link.addEventListener('click', function() {
            hamburger.classList.remove('active');
            mobileMenu.classList.remove('active');
            document.body.style.overflow = '';
        });
    });
    
    // Close mobile menu when clicking outside
    document.addEventListener('click', function(event) {
        if (hamburger && mobileMenu) {
            const isClickInside = hamburger.contains(event.target) || mobileMenu.contains(event.target);
            
            if (!isClickInside && mobileMenu.classList.contains('active')) {
                hamburger.classList.remove('active');
                mobileMenu.classList.remove('active');
                document.body.style.overflow = '';
            }
        }
    });
    
    // Handle window resize
    window.addEventListener('resize', function() {
        if (mobileMenu && window.innerWidth > 768 && mobileMenu.classList.contains('active')) {
            hamburger.classList.remove('active');
            mobileMenu.classList.remove('active');
            document.body.style.overflow = '';
        }
    });

    // -------- TESTIMONIAL SLIDER FUNCTIONALITY --------
    // Sample testimonials data with varying lengths
    const testimonials = [
        {
            title: "SEE WHY TEAMS LOVE FUEL-AI",
            text: " I was shocked at the impact this had on our sales team. One of our acquisition's guys had been working a lead for months with no success getting him on the calendar. We launched fuelAI and it immediately got the lead scheduled. I met with the client and we were able to close the deal with one phone call! AMAZING!!!!",
            author: "Jason Dehle",
            image: "<?php echo get_stylesheet_directory_uri();?>/images/Jason-Dehle-Testimonial.webp"
        },
        {
            title: "FUEL.AI CHANGED OUR BUSINESS",
            text: " As a solar company our team is constantly moving on to the next opportunity. We struggle to follow up. We needed to consistently reach out to all of our past leads and find those that are still interested. We deployed fuelAI and quickly found 50 deals that were ready to move forward and what's best was our team didn't have to do a thing. fuelAI is awesome!",
            author: "Jerry Moen",
            image: "<?php echo get_stylesheet_directory_uri();?>/images/Jerry-Alta-Energy-Testimonial-Solar.webp"
        },
        {
            title: "INCREDIBLE ROI",
            text: "Our team does a great job closing business, but our struggle has always been getting in contact with our leads. Once we talk to them generally, we do business together. We have seen cases where we had tried to get a hold of a lead over 60 times with no success, and with only 1 day of fuelAI doing the outreach the appointment was scheduled for us. This system is amazing, and the service from the team is top shelf",
            author: "Steve Jones",
            image: "<?php echo get_stylesheet_directory_uri();?>/images/Steve-Jones-and-Jones-Financial-Testimonial-general.webp"
        }
    ];
    
    // Get DOM elements
    const prevButton = document.querySelector('.prev-arrow');
    const nextButton = document.querySelector('.next-arrow');
    const testimonialSlide = document.querySelector('.testimonial-slide');
    const indicatorsContainer = document.querySelector('.testimonial-indicators');
    
    // Current testimonial index
    let currentIndex = 0;
    let isAnimating = false;
    
    // Create indicators
    function createIndicators() {
        if (!indicatorsContainer) return;
        
        for (let i = 0; i < testimonials.length; i++) {
            const indicator = document.createElement('div');
            indicator.classList.add('indicator');
            if (i === 0) {
                indicator.classList.add('active');
            }
            indicator.addEventListener('click', function() {
                if (isAnimating || currentIndex === i) return;
                currentIndex = i;
                updateTestimonial(currentIndex);
                updateIndicators();
            });
            indicatorsContainer.appendChild(indicator);
        }
    }
    
    // Update indicators
    function updateIndicators() {
        const indicators = document.querySelectorAll('.indicator');
        indicators.forEach((indicator, index) => {
            if (index === currentIndex) {
                indicator.classList.add('active');
            } else {
                indicator.classList.remove('active');
            }
        });
    }
    
    // Function to update the testimonial content
    function updateTestimonial(index) {
        if (isAnimating || !testimonialSlide) return;
        isAnimating = true;
        
        // Fade out current testimonial
        testimonialSlide.style.opacity = 0;
        
        setTimeout(() => {
            const testimonial = testimonials[index];
            
            // Create the testimonial HTML
            const testimonialHTML = `
                <div class="testimonial-content">
                    <h3 class="testimonial-title">${testimonial.title}</h3>
                    <p class="testimonial-text">
                        "${testimonial.text}"
                    </p>
                    
                    <div class="testimonial-author">
                        <div class="author-image-container">
                            <img src="${testimonial.image}" alt="${testimonial.author}" class="author-image">
                        </div>
                        <div class="author-name">${testimonial.author}</div>
                    </div>
                </div>
            `;
            
            // Update the testimonial slide content
            testimonialSlide.innerHTML = testimonialHTML;
            
            // Fade in new testimonial
            setTimeout(() => {
                testimonialSlide.style.opacity = 1;
                isAnimating = false;
            }, 50);
            
            // Update indicators
            updateIndicators();
        }, 300); // Wait for fade out to complete
    }
    
    // Initialize testimonial functionality if elements exist
    if (prevButton && nextButton && testimonialSlide) {
        // Event listener for previous button
        prevButton.addEventListener('click', function() {
            if (isAnimating) return;
            currentIndex = (currentIndex - 1 + testimonials.length) % testimonials.length;
            updateTestimonial(currentIndex);
        });
        
        // Event listener for next button
        nextButton.addEventListener('click', function() {
            if (isAnimating) return;
            currentIndex = (currentIndex + 1) % testimonials.length;
            updateTestimonial(currentIndex);
        });
        
        // Add keyboard navigation
        document.addEventListener('keydown', function(event) {
            if (event.key === 'ArrowLeft') {
                prevButton.click();
            } else if (event.key === 'ArrowRight') {
                nextButton.click();
            }
        });
        
        // Create indicators
        createIndicators();
        
        // Initialize the first testimonial
        testimonialSlide.style.opacity = 0;
        setTimeout(() => {
            updateTestimonial(currentIndex);
        }, 100);
        
        // Optional: Auto-rotate testimonials
        let autoRotate;
        
        function startAutoRotate() {
            autoRotate = setInterval(() => {
                nextButton.click();
            }, 8000); // Change testimonial every 8 seconds
        }
        
        function stopAutoRotate() {
            clearInterval(autoRotate);
        }
        
        // Start auto-rotation
        startAutoRotate();
        
        // Pause auto-rotation when hovering over the testimonial
        testimonialSlide.addEventListener('mouseenter', stopAutoRotate);
        
        // Resume auto-rotation when mouse leaves the testimonial
        testimonialSlide.addEventListener('mouseleave', startAutoRotate);
        
        // Also pause when user interacts with navigation
        prevButton.addEventListener('mouseenter', stopAutoRotate);
        nextButton.addEventListener('mouseenter', stopAutoRotate);
        indicatorsContainer.addEventListener('mouseenter', stopAutoRotate);
        
        prevButton.addEventListener('mouseleave', startAutoRotate);
        nextButton.addEventListener('mouseleave', startAutoRotate);
        indicatorsContainer.addEventListener('mouseleave', startAutoRotate);
    }

    function toggleMenu() {
        const mobileMenu = document.getElementById('mobileMenu');
        mobileMenu.classList.toggle('show');
    }
    
}); </script>
</body>
</html>