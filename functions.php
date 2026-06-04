<?php

add_action( 'wp_enqueue_scripts', function() {

    wp_enqueue_style(
        'lightning-child-style',
        get_stylesheet_uri(),
        array( 'lightning-design-style' ),
        wp_get_theme()->get( 'Version' )
    );

    wp_enqueue_style(
        'lightning-child-custom',
        get_stylesheet_directory_uri() . '/assets/css/custom.css',
        array( 'lightning-child-style' ),
        filemtime( get_stylesheet_directory() . '/assets/css/custom.css' )
    );

});