<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fuel. - AI-Powered Sales</title>
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" media="all">
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <nav>
                <a href="/index.html" class="logo">
                    <div class="logo-container">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/fuel-button-white.png" alt="fuel logo icon" class="logo-icon">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/fuel.AI.png" alt="fuel text logo" class="logo-text-image">
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
                <?php
                    wp_nav_menu( array(
                    'theme_location' => 'menu',
                    'container'      => false,
                    'menu_class'     => 'menu mobile',
                    ) );
                ?>
                </div>
            </div>
        </header>