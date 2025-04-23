<?php
/**
 * FuelAI Theme functions and definitions
 */

/** 1) Register menu locations */
function register_my_menus() {
    register_nav_menus( array(
        'menu'        => __( 'Menu' ),
        'footer-menu' => __( 'Footer Menu' ),
    ) );
}
add_action( 'init', 'register_my_menus' );

/** 2) Enqueue styles and scripts */
function fuelai_enqueue_assets() {
    // Main stylesheet
    wp_enqueue_style(
        'fuelai-style',
        get_stylesheet_uri(),
        array(),
        filemtime( get_stylesheet_directory() . '/style.css' )
    );

    // Your app.js (handles mobile menu, forms, testimonials, etc.)
    wp_enqueue_script(
        'fuelai-app',
        get_stylesheet_directory_uri() . '/js/app.js',
        array(),
        filemtime( get_stylesheet_directory() . '/js/app.js' ),
        true // load just before </body>
    );
}
add_action( 'wp_enqueue_scripts', 'fuelai_enqueue_assets' );
