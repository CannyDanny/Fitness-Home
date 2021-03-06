<?php
// Register Nav Walker class_alias

require_once('wp_bootstrap_navwalker.php');

// Theme Support

function wpb_theme_setup()
{
    // Add featured image

    add_theme_support('post-thumbnails');

    // Nav menus

    register_nav_menus(array(
        'primary' => __('Primary Menu')
    ));

    // Post Formats
    add_theme_support('post-formats', array('aside', 'gallery'));
}

add_action('after_setup_theme', 'wpb_theme_setup');

/// Excerpt Length control

function set_excerpt_length()
{
    return 30;
}

add_filter('excerpt_length', 'set_excerpt_length');


// Widget Locations

function wpb_init_widgets($id) {

    register_sidebar(array(
        'name'              => 'Box1',
        'id'                => 'box1',
        'before_widget'     => '<div class="box1">',
        'after_widget'      => '</div>',
        'before_title'      => '<h3>',
        'after_title'       => '</h3>'

    ));

    register_sidebar(array(
        'name'              => 'Box2',
        'id'                => 'box2',
        'before_widget'     => '<div class="box2">',
        'after_widget'      => '</div>',
        'before_title'      => '<h3>',
        'after_title'       => '</h3>'

    ));

    register_sidebar(array(
        'name'              => 'Box3',
        'id'                => 'box3',
        'before_widget'     => '<div class="box3">',
        'after_widget'      => '</div>',
        'before_title'      => '<h3>',
        'after_title'       => '</h3>'

    ));

    register_sidebar(array(
        'name'              => 'Footer Menu',
        'id'                => 'footer-menu',
        'before_widget'     => '<div class="footer-menu">',
        'after_widget'      => '</div>',
        'before_title'      => '<h3>',
        'after_title'       => '</h3>'

    ));

}

add_action('widgets_init', 'wpb_init_widgets');

// Customizer File
require get_template_directory(). '/inc/customizer.php';





