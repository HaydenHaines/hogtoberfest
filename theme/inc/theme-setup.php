<?php
function hogtoberfest_setup(): void {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'html5', [
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
    ] );

    register_nav_menus( [
        'primary' => __( 'Primary Navigation', 'hogtoberfest' ),
        'footer'  => __( 'Footer Navigation', 'hogtoberfest' ),
    ] );

    add_image_size( 'sponsor-logo', 300, 150, false );
    add_image_size( 'gallery-thumb', 600, 400, true );
}
add_action( 'after_setup_theme', 'hogtoberfest_setup' );
