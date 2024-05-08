<?php

function growhigh_supports () {
    add_theme_support('title-tag');
}

function growhigh_register_assets () {
    wp_register_style('style', get_template_directory_uri() . '/assets/style.css', []);
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', []);
    wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js', ['popper', 'jquery'], false, true);
    wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', [], false, true);
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', [], false, true);
    wp_enqueue_style('style');
    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');
}

add_action('after_setup_theme', 'growhigh_supports');
add_action('wp_enqueue_scripts', 'growhigh_register_assets');
// function wp_style() {
    // Enregistrement du style CSS de Bootstrap
//     wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/5.0.2/css/bootstrap.min.css' );
//     wp_enqueue_style( 'style', get_stylesheet_uri() );
// }
// add_action( 'wp_enqueue_scripts', 'wp_style' );

