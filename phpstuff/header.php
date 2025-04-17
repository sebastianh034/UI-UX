<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php wp_title(); ?></title>

  <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" media="all" />

  <?php wp_head(); ?>
</head>
<body>

<!-- Header with Hamburger Menu -->
<header>
  <div class="container">
    <nav>
      <a href="<?php echo home_url(); ?>" class="logo">
        <div class="logo-container">
          <img src="<?php echo get_template_directory_uri(); ?>/images/fuel-button-white.png" alt="fuel logo icon" class="logo-icon" />
          <img src="<?php echo get_template_directory_uri(); ?>/images/fuel.AI.png" alt="fuel text logo" class="logo-text-image" />
        </div>
      </a>
      <ul class="nav-links">
        <li><a href="<?php echo home_url(); ?>">Home</a></li>
        <li><a href="<?php echo site_url('/about'); ?>">About Us</a></li>
        <li><a href="<?php echo site_url('/contact'); ?>">Contact Us</a></li>

      </ul>
      <div class="hamburger-menu">
        <span></span><span></span><span></span>
      </div>
    </nav>
  </div>

  <div class="mobile-menu">
    <ul>
        <li><a href="<?php echo home_url(); ?>">Home</a></li>
        <li><a href="<?php echo site_url('/about'); ?>">About Us</a></li>
        <li><a href="<?php echo site_url('/contact'); ?>">Contact Us</a></li>
    </ul>
  </div>
</header>
