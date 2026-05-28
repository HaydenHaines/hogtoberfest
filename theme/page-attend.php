<?php
/**
 * Template Name: Attend Page
 * Attend / festival page for non-hunting public visitors.
 */
get_header();
?>

<header class="page-header">
    <h1 class="page-header__title"><?php esc_html_e( 'The Festival', 'hogtoberfest' ); ?></h1>
    <p class="page-header__subtitle"><?php esc_html_e( 'Hogtoberfest Fall Festival · Downtown Stroud, Oklahoma', 'hogtoberfest' ); ?></p>
</header>

<main id="main-content" class="site-main" role="main">
    <?php get_template_part( 'template-parts/attend/festival-highlights' ); ?>
    <?php get_template_part( 'template-parts/attend/festival-info' ); ?>
    <?php get_template_part( 'template-parts/map-embed' ); ?>
</main>

<?php get_footer(); ?>
