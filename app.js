document.addEventListener('DOMContentLoaded', function() {
    // Sample testimonials data with varying lengths
    const testimonials = [
        {
            title: "SEE WHY TEAMS LOVE FUEL-AI",
            text: " I was shocked at the impact this had on our sales team. One of our acquisition’s guys had been working a lead for months with no success getting him on the calendar. We launched fuelAI and it immediately got the lead scheduled. I met with the client and we were able to close the deal with one phone call! AMAZING!!!!",
            author: "Jason Dehle",
            image: "./images/Jason-Dehle-Testimonial.webp"
        },
        {
            title: "FUEL.AI CHANGED OUR BUSINESS",
            text: " As a solar company our team is constantly moving on to the next opportunity. We struggle to follow up. We needed to consistently reach out to all of our past leads and find those that are still interested. We deployed fuelAI and quickly found 50 deals that were ready to move forward and what’s best was our team didn’t have to do a thing. fuelAI is awesome!",
            author: "Jerry Moen",
            image: "./images/Jerry-Alta-Energy-Testimonial-Solar.webp"
        },
        {
            title: "INCREDIBLE ROI",
            text: "Our team does a great job closing business, but our struggle has always been getting in contact with our leads. Once we talk to them generally, we do business together. We have seen cases where we had tried to get a hold of a lead over 60 times with no success, and with only 1 day of fuelAI doing the outreach the appointment was scheduled for us. This system is amazing, and the service from the team is top shelf",
            author: "Steve Jones",
            image: "./images/Steve-Jones-and-Jones-Financial-Testimonial-general.webp"
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
        if (isAnimating) return;
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
});