<?php
// FILEPATH: /c:/PersonalProject/Wordpress_project/functions.php

// Enqueue styles and scripts
function theme_enqueue_scripts() {
    // Enqueue styles
    wp_enqueue_style('theme-style', get_stylesheet_uri());

    // Enqueue scripts
    wp_enqueue_script('theme-script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');

// Register navigation menus
function theme_register_menus() {
    register_nav_menus(array(
        'primary-menu' => 'Primary Menu',
        'footer-menu' => 'Footer Menu'
    ));
}
add_action('init', 'theme_register_menus');

// Add theme support
function theme_setup() {
    // Add support for featured images
    add_theme_support('post-thumbnails');

    // Add support for custom logo
    add_theme_support('custom-logo');

    // Add support for title tag
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'theme_setup');

// Custom function example
function theme_custom_function() {
    // Your custom code here
}
