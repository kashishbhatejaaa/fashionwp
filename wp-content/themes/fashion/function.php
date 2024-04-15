<?php
// Enqueue scripts and styles
function my_elementor_theme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'my_elementor_theme_scripts' );
