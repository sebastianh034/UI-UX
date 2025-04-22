<?php
/*Template Name: contact*/
get_header(); ?>
        
    
    <!-- Contact Form Section -->
    <section id="contact-form-section" class="contact-form-section">
        <div class="contact-container">
            <h2 class="contact-title">CONTACT US</h2>
            <form id="contact-form" class="contact-form">
                <div class="form-group">
                    <label for="firstName" class="form-label">First name:</label>
                    <input type="text" id="firstName" class="form-input">
                </div>
                
                <div class="form-group">
                    <label for="lastName" class="form-label">Last name:</label>
                    <input type="text" id="lastName" class="form-input">
                </div>
                
                <div class="form-group">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" id="email" class="form-input">
                </div>
                
                <div class="form-group">
                    <label for="phone" class="form-label">Phone:</label>
                    <input type="tel" id="phone" class="form-input">
                </div>
                
                <div class="form-group">
                    <label for="leads" class="form-label">How many leads do you get a month?</label>
                    <input type="text" id="leads" class="form-input">
                </div>
                
                <div class="form-group">
                    <label for="hearAbout" class="form-label">How did you hear about us?</label>
                    <textarea id="hearAbout" class="form-input hear-about-input"></textarea>
                </div>
                
                <div class="submit-container">
                    <button type="submit" class="submit-button">Submit</button>
                </div>
            </form>
        </div>
    </section>

    <!-- Confirmation Section (Hidden by default) -->
    <section id="confirmation-section" class="confirmation-section" style="display: none;">
        <div class="confirmation-container">
            <div class="checkmark-icon">
                <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                    <path fill="none" stroke="white" stroke-width="5" d="M14,27 L22,35 L38,15" />
                </svg>
            </div>
            
            <div class="envelope-icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2">
                    <rect x="2" y="4" width="20" height="16" rx="2" />
                    <path d="M22,5L12,13L2,5" />
                </svg>
            </div>
            
            <h2 class="confirmation-message">Your submission has been received.</h2>
        </div>
    </section>

<?php get_footer(); ?>
