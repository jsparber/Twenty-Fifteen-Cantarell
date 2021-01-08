<?php

// Remove google fonts
function twentyfifteen_cantarell_remove_google_fonts() {
    wp_dequeue_style('twentyfifteen-fonts');
    wp_deregister_style('twentyfifteen-fonts');
}
add_action( 'wp_enqueue_scripts', 'twentyfifteen_cantarell_remove_google_fonts', 20);

function twentyfifteen_cantarell_enqueue_styles() {
    $parenthandle = 'twentyfifteen-style';
    $theme = wp_get_theme();
    wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css', 
        array(),
        $theme->parent()->get('Version')
    );
    wp_enqueue_style( 'twentyfifteen-cantarell-style', get_stylesheet_uri(),
        array( $parenthandle ),
        $theme->get('Version')
    );
}

add_action( 'wp_enqueue_scripts', 'twentyfifteen_cantarell_enqueue_styles');
