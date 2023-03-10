<!-- Adding WordPress Dynamic title -->
<?php

function shayboniyshoh_title_tag()
{
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'shayboniyshoh_title_tag');
// end of adding WordPress Dynamic title

// Creating menus
function shayboniyshoh_menus()
{
    $locations = array(
        'primary' => "Primary menu located at sidebar",
        'footer' => "Footer menu of the theme"
    );
    register_nav_menus($locations);
}
// end of creating menus
add_action('init', 'shayboniyshoh_menus');

// Enqueuing styles
function shayboniyshoh_reg_styles()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('shoh-style', get_template_directory_uri() . '/style.css', array('shoh-bootstrap'), $version, 'all');
    wp_enqueue_style('shoh-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', array(), '4.4.1', 'all');
    wp_enqueue_style('shoh-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css', array(), '5.13.0', 'all');
}
add_action('wp_enqueue_scripts', 'shayboniyshoh_reg_styles');
// end of enqueuing styles

// Enqueuing scripts
function shayboniyshoh_reg_scripts()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_script('shoh-script', get_template_directory_uri() . '/assets/js/main.js', array('shoh-jquery'), $version, true);
    wp_enqueue_script('shoh-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true);
    wp_enqueue_script('shoh-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0', true);
    wp_enqueue_script('shoh-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '4.4.1', true);
}
add_action('wp_enqueue_scripts', 'shayboniyshoh_reg_scripts');

?>
<!-- end enqueuing scripts -->