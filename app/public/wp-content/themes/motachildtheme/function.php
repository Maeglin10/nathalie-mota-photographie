<?php
function enqueue_parent_child_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'), wp_get_theme()->get('Version') );
}
add_action( 'wp_enqueue_scripts', 'enqueue_parent_child_styles' );
