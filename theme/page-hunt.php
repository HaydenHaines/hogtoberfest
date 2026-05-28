<?php
/**
 * Template Name: Hunt Page
 * Hunt page — assembles all hunt template parts in order.
 */
get_header();
?>

<header class="page-header">
    <h1 class="page-header__title">The Hunt</h1>
    <p class="page-header__subtitle">24-Hour Oklahoma Hog Hunt Competition</p>
</header>

<main id="main-content" class="site-main" role="main">
    <?php get_template_part( 'template-parts/hunt/schedule' ); ?>
    <?php get_template_part( 'template-parts/hunt/entry-fees' ); ?>
    <?php get_template_part( 'template-parts/hunt/divisions' ); ?>
    <?php get_template_part( 'template-parts/hunt/main-pot' ); ?>
    <?php get_template_part( 'template-parts/hunt/side-pots' ); ?>
    <?php get_template_part( 'template-parts/register-cta-block' ); ?>
    <?php get_template_part( 'template-parts/hunt/rules' ); ?>
    <?php get_template_part( 'template-parts/map-embed' ); ?>
    <?php get_template_part( 'template-parts/register-cta-block' ); ?>
</main>

<?php get_footer(); ?>
