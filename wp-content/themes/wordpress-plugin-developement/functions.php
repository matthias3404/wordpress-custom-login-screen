<?php

// Create CSS to customize login page
function my_login_stylesheet() {
    wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/assets/css/style-login.css' );
    wp_enqueue_script( 'custom-login', get_stylesheet_directory_uri() . '/assets/js/style-login.js' );
}
add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );

// Change logo url of login page
add_filter( 'login_headerurl', 'my_custom_login_url' );
function my_custom_login_url($url) {
    return 'https://commpro.nl';
}