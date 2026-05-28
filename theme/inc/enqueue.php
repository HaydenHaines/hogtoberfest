<?php
function hogtoberfest_scripts(): void {
    $v  = wp_get_theme()->get( 'Version' );
    $tu = get_template_directory_uri();

    // Google Fonts — single request
    wp_enqueue_style(
        'hog-google-fonts',
        'https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700&family=Cinzel:wght@400;600;700&family=Source+Serif+4:ital,wght@0,400;0,600;1,400&family=Inter:wght@400;600&display=swap',
        [],
        null
    );

    // CSS — load order matters; later sheets can override earlier ones
    $styles = [
        'hog-props'     => [ 'custom-properties.css', [] ],
        'hog-base'      => [ 'base.css',              ['hog-props', 'hog-google-fonts'] ],
        'hog-nav'       => [ 'nav.css',               ['hog-base'] ],
        'hog-hero'      => [ 'hero.css',              ['hog-base'] ],
        'hog-quick-nav' => [ 'quick-nav.css',         ['hog-base'] ],
        'hog-cards'     => [ 'cards.css',             ['hog-base'] ],
        'hog-hunt'      => [ 'hunt.css',              ['hog-base', 'hog-cards'] ],
        'hog-schedule'  => [ 'schedule.css',          ['hog-base'] ],
        'hog-sponsors'  => [ 'sponsors.css',          ['hog-base'] ],
        'hog-responsive'=> [ 'responsive.css',        ['hog-base'] ],
    ];

    foreach ( $styles as $handle => [ $file, $deps ] ) {
        wp_enqueue_style( $handle, "$tu/assets/css/$file", $deps, $v );
    }

    // Countdown timer — footer only, no deps
    wp_enqueue_script( 'hog-countdown', "$tu/assets/js/countdown.js", [], $v, true );

    // Pass countdown target from ACF to JS
    $target = get_field( 'countdown_target', 'option' );
    if ( $target ) {
        wp_localize_script( 'hog-countdown', 'HOG', [
            'countdownTarget' => esc_js( $target ),
        ] );
    }
}
add_action( 'wp_enqueue_scripts', 'hogtoberfest_scripts' );
