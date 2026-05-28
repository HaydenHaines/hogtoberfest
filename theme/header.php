<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="sr-only sr-only--focusable" href="#main-content">Skip to main content</a>

<header class="site-header" role="banner">
    <div class="site-header__inner container">

        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"
           class="site-header__logo"
           aria-label="<?php bloginfo( 'name' ); ?> — Home">
            <img
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo-primary.png' ); ?>"
                alt="Hogtoberfest"
                width="180"
                height="64"
                loading="eager">
        </a>

        <nav class="primary-nav" id="primary-nav-list" role="navigation" aria-label="Primary navigation">
            <?php
            wp_nav_menu( [
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'primary-nav__list',
                'fallback_cb'    => false,
                'depth'          => 1,
            ] );
            ?>
        </nav>

        <a href="<?php echo esc_url( hogtoberfest_registration_url() ); ?>"
           class="btn btn--register site-header__cta"
           target="_blank"
           rel="noopener noreferrer">
            Register Your Team &rarr;
        </a>

        <button class="nav-toggle"
                aria-label="Toggle navigation menu"
                aria-expanded="false"
                aria-controls="primary-nav-list">
            <span class="nav-toggle__bar"></span>
            <span class="nav-toggle__bar"></span>
            <span class="nav-toggle__bar"></span>
        </button>

    </div>
</header>

<div class="site-content">
