<?php

include(__DIR__ . '/Tailwind_Nav_Walker.php');


function geosky_theme_enqueue_styles() {
    // Enqueue Tailwind CSS (assuming it's hosted or included in the theme)
    wp_enqueue_style( 'tailwindcss', 'https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css' );
    wp_enqueue_script('menu-toggle', get_template_directory_uri() . '/scripts.js', array(), null, true);
    wp_enqueue_style( 'geosky-theme', get_stylesheet_uri(), [], wp_get_theme()->get('Version'));

}
add_action( 'wp_enqueue_scripts', 'geosky_theme_enqueue_styles' );

function geosky_theme_setup() {
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'geosky-theme' ),
    ) );
    add_theme_support('custom-logo', array(
        'height'      => 80,
        'width'       => 100,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    add_theme_support('title-tag');
}
add_action( 'after_setup_theme', 'geosky_theme_setup' );