<?php
/**
 * Template Name: Sponsors
 *
 * Stroud Lions Club section, presenting-sponsor banner, tiered sponsor grid,
 * community partners, and a "Become a Sponsor" CTA.
 *
 * Sponsor tiers are defined in the $sponsor_tiers array below. To add a logo,
 * drop an image into assets/images/sponsors/ named with the sponsor's slug
 * (e.g. tatanka-ranch.png). Until the file exists, the styled sponsor name
 * shows as a graceful fallback. Optional 'url' links the logo to a website.
 */

get_header();

// Sponsor data + renderer live in inc/sponsors.php (shared with the homepage
// sponsor bar so the two never drift). hog_sponsor_html() defaults to the
// sponsor-tile__* classes this page styles.
$sponsor_tiers = hog_sponsor_tiers();
?>

<header class="page-header">
    <h1 class="page-header__title">Our Sponsors</h1>
    <p class="page-header__subtitle">Hogtoberfest is made possible by the generous support of our sponsors and the Stroud community.</p>
</header>

<main id="main-content" class="site-main" role="main">

<!-- Stroud Lions Club -->
<section class="section sponsors-lions" aria-labelledby="sponsors-lions-heading">
    <div class="container">
        <div class="sponsors-lions__inner">
            <div class="sponsors-lions__logo-wrap">
                <img
                    src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo-primary.png' ); ?>"
                    alt="Stroud Lions Club / Hogtoberfest"
                    class="sponsors-lions__logo"
                    width="280"
                    height="180"
                    loading="lazy">
            </div>
            <div class="sponsors-lions__content">
                <h2 class="sponsors-lions__heading" id="sponsors-lions-heading">Stroud Lions Club</h2>
                <div class="gold-rule" aria-hidden="true"></div>
                <p>The Stroud Lions Club has served the Stroud community since 1934. We are a volunteer service organization dedicated to giving back to the people and families of Lincoln County.</p>
                <p>Through Hogtoberfest, Stroud Lions Club supports local community programs, youth organizations, and first responders. <strong>Fifty percent (50%) of all Main Pot entry fees go to Stroud Lions Club to support charitable and community service programs.</strong></p>
                <p>When you sponsor Hogtoberfest, you&rsquo;re not just advertising to thousands of attendees. You&rsquo;re investing in Stroud.</p>
            </div>
        </div>
    </div>
</section>

<!-- Presenting Sponsor Banner -->
<?php $presenting = $sponsor_tiers[0]['sponsors'][0]; ?>
<section class="section sponsors-presenting" aria-labelledby="presenting-heading">
    <div class="container">
        <div class="presenting-banner">
            <p class="presenting-banner__eyebrow">Hogtoberfest</p>
            <p class="presenting-banner__label" id="presenting-heading">Presented By</p>
            <div class="presenting-banner__sponsor">
                <?php echo hog_sponsor_html( $presenting ); ?>
            </div>
            <p class="presenting-banner__tier">Presenting Sponsor</p>
        </div>
    </div>
</section>

<!-- Tiered Sponsor Grid -->
<section class="section section--cream sponsors-tiers-section" aria-labelledby="sponsors-grid-heading">
    <div class="container">
        <h2 class="section-title" id="sponsors-grid-heading">Event Sponsors</h2>
        <div class="gold-rule" aria-hidden="true"></div>

        <?php foreach ( array_slice( $sponsor_tiers, 1 ) as $tier ) : ?>
            <div class="sponsor-tier sponsor-tier--<?php echo esc_attr( $tier['slug'] ); ?>">
                <h3 class="sponsor-tier__heading"><?php echo esc_html( $tier['name'] ); ?></h3>
                <div class="sponsors-logo-grid">
                    <?php foreach ( $tier['sponsors'] as $sponsor ) : ?>
                        <div class="sponsor-tile">
                            <?php echo hog_sponsor_html( $sponsor ); ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- Community Partners -->
<section class="section section--dark sponsors-partners" aria-labelledby="sponsors-partners-heading">
    <div class="container">
        <h2 class="section-title" id="sponsors-partners-heading">Community Partners</h2>
        <div class="gold-rule" aria-hidden="true"></div>
        <p class="section-subtitle">Hogtoberfest is built on community. These local partners make it possible.</p>

        <div class="partners-grid">

            <div class="partner-card">
                <div class="partner-card__icon" aria-hidden="true">
                    <svg viewBox="0 0 48 48" fill="none">
                        <path d="M8 40V20L24 8l16 12v20H30V28H18v12H8z" stroke="#c8972b" stroke-width="2.5" stroke-linejoin="round"/>
                        <rect x="20" y="28" width="8" height="12" stroke="#c8972b" stroke-width="2"/>
                        <path d="M4 22l20-16 20 16" stroke="#c8972b" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <h3 class="partner-card__name">Stroud Fire Department</h3>
                <p class="partner-card__role">Safety Partner</p>
            </div>

            <div class="partner-card">
                <div class="partner-card__icon" aria-hidden="true">
                    <svg viewBox="0 0 48 48" fill="none">
                        <circle cx="24" cy="16" r="8" stroke="#c8972b" stroke-width="2.5"/>
                        <path d="M8 40c0-8.837 7.163-16 16-16s16 7.163 16 16" stroke="#c8972b" stroke-width="2.5" stroke-linecap="round"/>
                        <path d="M30 20l4 4-4 4M34 24H26" stroke="#c8972b" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <h3 class="partner-card__name">Community Volunteers</h3>
                <p class="partner-card__role">Event Operations, Setup, and Day-of Coordination</p>
            </div>

        </div>
    </div>
</section>

<!-- Become a Sponsor CTA -->
<section class="section sponsors-cta-section" aria-labelledby="sponsors-cta-heading">
    <div class="container">
        <div class="sponsor-cta-box">
            <h2 class="sponsor-cta-box__heading" id="sponsors-cta-heading">Become a Sponsor</h2>
            <p class="sponsor-cta-box__body">Join our sponsor family and support Stroud. Sponsorship packages include event signage, logo placement, and recognition at the awards ceremony. Contact us to learn about available tiers.</p>
            <div class="sponsor-cta-box__contact">
                <a href="tel:+19189879310" class="sponsor-cta-box__link">
                    <svg viewBox="0 0 20 20" fill="none" aria-hidden="true">
                        <path d="M2 3a1 1 0 0 1 1-1h3.28a1 1 0 0 1 .948.684l1.498 4.493a1 1 0 0 1-.502 1.21l-2.257 1.13a11.042 11.042 0 0 0 5.516 5.516l1.13-2.257a1 1 0 0 1 1.21-.502l4.493 1.498a1 1 0 0 1 .684.949V17a1 1 0 0 1-1 1h-2C7.82 18 2 12.18 2 5V3z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/>
                    </svg>
                    (918) 987-9310
                </a>
                <a href="mailto:stroudlionsclub@gmail.com" class="sponsor-cta-box__link">
                    <svg viewBox="0 0 20 20" fill="none" aria-hidden="true">
                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0 0 16 4H4a2 2 0 0 0-1.997 1.884z" stroke="currentColor" stroke-width="1.5"/>
                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8.118z" stroke="currentColor" stroke-width="1.5"/>
                    </svg>
                    stroudlionsclub@gmail.com
                </a>
            </div>
        </div>
    </div>
</section>

</main>

<?php get_footer(); ?>
