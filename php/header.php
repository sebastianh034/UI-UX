<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up until <div id="content">
 *
 * @package FuelAI
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>  <!-- Injects lang & dir attributes automatically :contentReference[oaicite:0]{index=0} -->
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">  <!-- Uses site charset setting :contentReference[oaicite:1]{index=1} -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title( '|', true, 'right' ); ?></title>
  <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>">  <!-- Loads style.css from theme root :contentReference[oaicite:2]{index=2} -->
  <?php wp_head(); ?>  <!-- Prints enqueued CSS, JS, and meta via the wp_head hook :contentReference[oaicite:3]{index=3} -->
</head>

<body <?php body_class(); ?>>  <!-- Adds contextual classes to <body> :contentReference[oaicite:4]{index=4} -->
  <header>
    <div class="container">
      <nav class="site-navigation">
        <!-- Logo -->
        <a href="<?php echo esc_url( home_url() ); ?>" class="logo">
          <img
            src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/fuel-button-white.png"
            alt="FuelAI Logo"
            class="logo-icon"
          >
          <img
            src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/fuel.AI.png"
            alt="FuelAI Text"
            class="logo-text-image"
          >
        </a>

        <!-- Desktop Menu -->
        <div class="nav-links">
          <?php
            wp_nav_menu( array(
              'theme_location' => 'menu',
              'container'      => false,
              'menu_class'     => 'menu',
            ) );  <!-- Renders the registered ‘menu’ location :contentReference[oaicite:5]{index=5} -->
          ?>
        </div>

        <!-- Hamburger Toggle -->
        <button class="hamburger-menu" aria-label="Toggle mobile menu">
          <span></span>
          <span></span>
          <span></span>
        </button>
      </nav>

      <!-- Mobile Menu (hidden by default; your JS toggles .active) -->
      <div class="mobile-menu">
        <?php
          wp_nav_menu( array(
            'theme_location' => 'menu',
            'container'      => false,
            'menu_class'     => 'menu mobile',
          ) );
        ?>
      </div>
    </div><!-- /.container -->
  </header>
