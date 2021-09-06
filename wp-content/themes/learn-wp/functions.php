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
    register_nav_menus( [
		'header_menu' => 'Header menu',
		'footer_menu' => 'Footer menu'
	] );
});

add_action('widgets_init', function() {
    register_sidebar( [
        'name'          => 'Sidebar postams',
        'id'            => 'sidebar-post-single',
        'description'   => 'Isveda postus tik 1 posto puslapiuose',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="h4">',
        'after_title'   => '</div>',
    ] );
    register_sidebar( [
        'name'          => 'Sidebar footeriui 1 stulpelis',
        'id'            => 'sidebar-footer-1',
        'description'   => 'Isveda foterio 1/3 stulpelyje'
    ] );
    register_sidebar( [
        'name'          => 'Sidebar footeriui 2 stulpelis',
        'id'            => 'sidebar-footer-2',
        'description'   => 'Isveda foterio 2/3 stulpelyje'
    ] );
    register_sidebar( [
        'name'          => 'Sidebar footeriui 3 stulpelis',
        'id'            => 'sidebar-footer-3',
        'description'   => 'Isveda foterio 3/3 stulpelyje'
    ] );
});

add_action('init', function() {
    register_post_type('book', [
        'labels' => [
            'name' => 'Books',
            'add_new_item' => 'Pridėti knygą',
            'edit_item' => 'Koreguoti knygą',
            'all_items' => 'Visos knygos',
            'singular_name' => 'Book'
        ],
        'public' => true,
        'menu_icon' => 'dashicons-book',
        'has_archive' => true
    ] );
    register_taxonomy('autorius', ['book'], [
        'labels' => [
            'name' => 'Autorius'
        ],
        'public' => true,
    ]); 
    register_taxonomy('publisher', ['book'], [
        'labels' => [
            'name' => 'Leidykla'
        ],
        'public' => true,
    ]); 
});

