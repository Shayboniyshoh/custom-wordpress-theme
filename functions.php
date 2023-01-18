<?php function shayboniyshoh_reg_style()
{
    wp_enqueue_style('shoh-bootstrap', get_template_directory_uri() . "/style.css", array(), '1.0');
}

add_action('wp_enqueue_scripts', 'shayboniyshoh_reg_style');
