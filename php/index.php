<?php
/*Template Name: Home*/
get_header(); ?>
    
    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1 class="hero-title">FUEL YOUR SALES WITH AI</h1>
            
            <div class="hero-main">
                <div class="hero-text">
                    <h2 class="hero-heading">BOOK MORE MEETINGS AND CLOSE MORE DEALS. AUTOMATICALLY.</h2>
                    <p class="hero-description">
                        AI-powered follow-up and scheduling that converts leads into appointments — so your sales team can focus on selling, not chasing.
                    </p>
                    <button onclick="window.location.href=<?php echo get_permalink(get_page_by_path('contact') ); ?> ';">BOOK A DEMO TODAY</button>
                </div>
                <iframe
                width="560" height="315"
                src="https://www.youtube.com/embed/TmUJoSnpd00?"
                frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen
              ></iframe>
            </div>
        </div>
    </section>

    <!-- "Do More Without Chasing" Section (From Mobile Screenshot) -->
    <section class="mobile-features">
        <div class="container">
            <h2 class="section-title">DO MORE WITHOUT CHASING LEADS</h2>
            <p class="section-description">
                Turn the burden into an opportunity with automation. Our software handles lead tracking, follow-ups, scheduling, and reminders—freeing your sales team to focus on what they do best: closing deals.
            </p>
            <button onclick="window.location.href=<?php echo get_permalink(get_page_by_path('info') ); ?> ';">LEARN MORE ABOUT FUELAI</button>
        </div>
    </section>

    <!-- Time Wheel Diagram Section -->
    <section class="time-wheel-section">
        <div class="container">
            
            <!-- Testimonials Section -->
            <div class="testimonials-container">
                <div class="testimonial-slider">
                    <div class="testimonial-navigation">
                        <button class="nav-arrow prev-arrow">
                            <span>←</span>
                        </button>
                        
                        <div class="testimonial-slide active">
                            <!-- Testimonial content will be dynamically inserted here by JavaScript -->
                        </div>
                        
                        <button class="nav-arrow next-arrow">
                            <span>→</span>
                        </button>
                    </div>
                    
                    <div class="testimonial-indicators">
                        <!-- Indicators will be dynamically inserted here by JavaScript -->
                    </div>
                </div>

                <div class="testimonial-sidebar">
                    <h3 class="sidebar-title">What they Love about us!</h3>
                    <p class="sidebar-text">
                        Our clients are passionate about what they do and we are honored that they have trusted us. They have made fuelAI such a huge success. Here's some of the kind words they've shared with us.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Connect with Tools (From Mobile Screenshot) -->
    <section class="connect-tools">
        <div class="container">
            <h2 class="section-title">CONNECT TO YOUR FAVORITE TOOLS</h2>
            <div class="globe-container">
                <img src="/images/globe.png" alt="Globe with integration tool icons" class="globe-img">
            </div>
            <p class="tools-description">
                Easily install with the software you already use. Our engineers connect directly to your CRM, messaging platforms, and software solutions for a seamless integration experience.
            </p>
            <a href="/contact.html" class="get-started">GET STARTED</a>
        </div>
    </section>

<?php get_footer(); ?>

