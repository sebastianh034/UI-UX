<?php
    function register_my_menu() {
        register_nav_menus(
            array(
                'menu' => __( 'Menu' ),
                'footer-menu' => __( 'Footer Menu' ),
            )
        );
    }
    add_action( 'init', 'register_my_menu' );
?>