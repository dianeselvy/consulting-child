<?php

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
    // engueue parent styles
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
    wp_enqueue_style( 'parent-style-responsive', get_template_directory_uri().'/styles/style-responsive.css');
    
   // enqueue child styles
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() .'/style.css', array('parent-style'));
    wp_enqueue_style('child-style-responsive', get_stylesheet_directory_uri() .'/styles/parent-style-responsive.css', array('consulting-thinkup-responsive'));
}
    // Register theme stylesheets
    //wp_register_style( 'consulting-thinkup-responsive', get_template_directory_uri() . '/styles/style-responsive.css', '', $consulting_thinkup_theme_version );