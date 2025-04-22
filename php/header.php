<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fuel. - AI-Powered Sales</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <nav>
                <a href="/index.html" class="logo">
                    <div class="logo-container">
                        <img src="/images/fuel-button-white.png" alt="fuel logo icon" class="logo-icon">
                        <img src="/images/fuel.AI.png" alt="fuel text logo" class="logo-text-image">
                    </div>
                </a>
                <div class="nav-links">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'menu',
                            'container' => false,
                            'menu_class' => 'menu',
                        )
                    );
                    ?>

                </div>
                <!-- Hamburger Menu Button -->
                <div class="hamburger-menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            
            <!-- Mobile Menu Overlay -->
            <div class="mobile-menu">
                <ul>
                    <li><a href="<?php echo home_url() ?>">Home</a></li>
                    <li><a href="<?php echo get_permalink(get_page_by_path('info')); ?>">Information</a></li>
                    <li><a href="<?php echo get_permalink(get_page_by_path('about')); ?>">About Us</a></li>
                    <li><a href="<?php echo get_permalink(get_page_by_path('contact')); ?>">Contact Us</a></li> 
                </ul>
            </div>
        </header>