<?php
define('LEARN_WP_PATH_CSS', get_template_directory_uri() . '/assets/css/');
define('LEARN_WP_PATH_JS', get_template_directory_uri() . '/assets/js/');
define('LEARN_WP_PATH_IMAGES', get_template_directory_uri() . '/assets/images/');

add_action( 'wp_enqueue_scripts', 'learn_wp_styles_scripts');

function learn_wp_styles_scripts() {
    wp_enqueue_style('bootstrapmin', LEARN_WP_PATH_CSS . 'bootstrap.min.css', array(), '1.0.1');
    wp_enqueue_style('custom_css', LEARN_WP_PATH_CSS . 'main.css', array(), '1.0.1');
    wp_enqueue_script('customjs', LEARN_WP_PATH_JS . 'scripts.js', array(), '1.0.1', true);
}

add_action('after_setup_theme', function() {
    add_theme_support('post-thumbnails');
});


