<?php
/**
 * Template Name: Gallery
 *
 * Year-one stub — not linked from the Primary Navigation menu.
 * Add this page to the menu and replace the placeholder section
 * with native WordPress gallery blocks after the inaugural event.
 */

get_header();
?>

<style>
.gallery-placeholder {
    text-align: center;
    padding: var(--sp-16) var(--sp-4);
}

.gallery-placeholder__mascot {
    width: 180px;
    height: auto;
    margin: 0 auto var(--sp-8);
    display: block;
    opacity: 0.85;
    filter: drop-shadow(0 6px 16px rgba(0, 0, 0, 0.2));
}

.gallery-placeholder__heading {
    font-family: var(--font-display);
    font-size: clamp(1.375rem, 2.5vw, 2rem);
    color: var(--clr-green-dark);
    margin: 0 0 var(--sp-4) 0;
    letter-spacing: 0.03em;
}

.gallery-placeholder__body {
    font-family: var(--font-body);
    font-size: 1.125rem;
    color: var(--clr-text-dark);
    line-height: 1.75;
    max-width: 560px;
    margin: 0 auto;
}

.gallery-placeholder__date-badge {
    display: inline-block;
    margin-top: var(--sp-6);
    background-color: var(--clr-gold);
    color: var(--clr-green-dark);
    font-family: var(--font-heading);
    font-size: 0.875rem;
    font-weight: 700;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    padding: var(--sp-2) var(--sp-6);
    border-radius: 999px;
}
</style>

<header class="page-header">
    <h1 class="page-header__title">Gallery</h1>
    <p class="page-header__subtitle">Photos from Stroud Hogtoberfest</p>
</header>

<main id="main-content" class="site-main" role="main">

    <section class="section" aria-labelledby="gallery-placeholder-heading">
        <div class="container">

            <div class="gallery-placeholder">

                <img
                    src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo-mascot.png' ); ?>"
                    alt="Hogtoberfest mascot — hog in lederhosen"
                    class="gallery-placeholder__mascot"
                    width="180"
                    height="180"
                    loading="lazy">

                <h2 class="gallery-placeholder__heading" id="gallery-placeholder-heading">Photos Coming Soon</h2>

                <p class="gallery-placeholder__body">
                    Photos from our inaugural Hogtoberfest will be posted here after the event in September 2026. Check back after the hunt!
                </p>

                <span class="gallery-placeholder__date-badge">September 12, 2026</span>

            </div>

            <!-- DEVELOPER: Add gallery blocks here after the inaugural event.
                 Use native WordPress gallery block, organized by year.
                 Add this page to the Primary Navigation menu when photos are available. -->

        </div>
    </section>

</main>

<?php get_footer(); ?>
