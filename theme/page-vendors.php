<?php
/**
 * Template Name: Vendors
 *
 * Year-one stub for the vendor market page. Vendor booth details and the
 * online application will be added here once finalized.
 */

get_header();
?>

<style>
.vendor-apply-box {
    border: var(--border-gold);
    border-radius: var(--radius-md);
    padding: var(--sp-8) var(--sp-6);
    max-width: 680px;
    margin: var(--sp-8) auto 0;
    background-color: var(--clr-white);
    box-shadow: var(--shadow-md);
    text-align: center;
}

.vendor-apply-box__heading {
    font-family: var(--font-display);
    font-size: clamp(1.375rem, 2.5vw, 1.875rem);
    color: var(--clr-green-dark);
    margin: 0 0 var(--sp-4) 0;
    letter-spacing: 0.03em;
}

.vendor-apply-box__body {
    font-family: var(--font-body);
    font-size: 1.0625rem;
    color: var(--clr-text-dark);
    line-height: 1.7;
    margin: 0 0 var(--sp-6) 0;
}

.vendor-contact-list {
    list-style: none;
    margin: 0 0 var(--sp-6) 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    gap: var(--sp-3);
    align-items: center;
}

.vendor-contact-list li {
    font-family: var(--font-ui);
    font-size: 1rem;
    font-weight: 600;
}

.vendor-contact-list a {
    color: var(--clr-green-dark);
    text-decoration: none;
    transition: color var(--ease-fast);
}

.vendor-contact-list a:hover,
.vendor-contact-list a:focus-visible {
    color: var(--clr-gold-dark);
}

.vendor-contact-list .label {
    font-weight: 400;
    color: var(--clr-text-muted);
    margin-right: var(--sp-2);
    font-family: var(--font-body);
    font-size: 0.9375rem;
}

.vendor-tbd-note {
    margin-top: var(--sp-8);
    font-family: var(--font-body);
    font-size: 0.9375rem;
    color: var(--clr-text-muted);
    font-style: italic;
    text-align: center;
}

.vendor-intro {
    max-width: 760px;
    margin: 0 auto;
    text-align: center;
}

.vendor-intro__text {
    font-family: var(--font-body);
    font-size: 1.125rem;
    color: var(--clr-text-dark);
    line-height: 1.8;
    margin: 0;
}

.vendor-tbd-application {
    font-family: var(--font-body);
    font-size: 0.9375rem;
    color: var(--clr-text-muted);
    margin: 0;
    line-height: 1.6;
}

@media (min-width: 601px) {
    .vendor-apply-box {
        padding: var(--sp-8) var(--sp-10);
    }
}
</style>

<header class="page-header">
    <h1 class="page-header__title">Vendors</h1>
    <p class="page-header__subtitle">Join us on Route 66 Main Street</p>
</header>

<main id="main-content" class="site-main" role="main">

    <section class="section">
        <div class="container">
            <div class="vendor-intro">
                <p class="vendor-intro__text">Hogtoberfest features a curated vendor market in the heart of Downtown Stroud on Route 66 Main Street. Vendors line the street alongside live music, BBQ, and the beer garden &mdash; drawing thousands of attendees throughout the day.</p>
            </div>
        </div>
    </section>

    <section class="section section--cream" aria-labelledby="vendor-apply-heading">
        <div class="container">

            <div class="vendor-apply-box">
                <h2 class="vendor-apply-box__heading" id="vendor-apply-heading">Interested in Vending?</h2>
                <p class="vendor-apply-box__body">We&rsquo;re building our vendor lineup for Hogtoberfest 2026. Contact us to get on the early notification list and be the first to know when applications open.</p>
                <ul class="vendor-contact-list">
                    <li>
                        <span class="label">Phone:</span>
                        <a href="tel:+19189879310">(918) 987-9310</a>
                    </li>
                    <li>
                        <span class="label">Email:</span>
                        <a href="mailto:stroudlionsclub@gmail.com">stroudlionsclub@gmail.com</a>
                    </li>
                </ul>
                <p class="vendor-tbd-application">Vendor applications open [date TBD]. Contact us to get on the early notification list.</p>
            </div>

            <p class="vendor-tbd-note">
                Vendor booth details, pricing, and the online application will be available here once finalized.
            </p>

        </div>
    </section>

</main>

<?php get_footer(); ?>
