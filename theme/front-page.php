<?php
/**
 * Front Page Template
 *
 * WordPress uses this file automatically when "Your homepage displays"
 * is set to "A static page" with this page as the front page,
 * OR when no static page is set (front-page.php takes priority over index.php).
 *
 * Section order:
 *   1. hero-home       — Full-bleed hero + countdown
 *   2. quick-nav       — 6-button icon bar
 *   3. event-highlights — Hunt / Festival / Cause cards
 *   4. prize-spotlight — Main Pot + Side Pots
 *   5. sponsor-bar     — Sponsor logos (renders nothing if no sponsors in ACF)
 */

get_header();
?>

<main id="main-content" class="site-main site-main--home" role="main">

    <?php get_template_part( 'template-parts/hero-home' ); ?>

    <?php get_template_part( 'template-parts/quick-nav' ); ?>

    <?php get_template_part( 'template-parts/event-highlights' ); ?>

    <?php get_template_part( 'template-parts/prize-spotlight' ); ?>

    <?php get_template_part( 'template-parts/sponsor-bar' ); ?>

</main>

<?php get_footer(); ?>
