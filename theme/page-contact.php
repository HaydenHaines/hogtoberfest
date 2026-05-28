<?php
/**
 * Template Name: Contact
 *
 * Two-column layout: contact details left, Contact Form 7 right.
 * Map embed below both columns.
 *
 * Setup required: Install "Contact Form 7" plugin (free, wordpress.org),
 * create a form with fields Name / Email / Phone (optional) / Subject / Message,
 * then replace FORM_ID in the do_shortcode call below with the assigned form ID.
 */

get_header();
?>

<style>
/* Scoped contact page styles */
.contact-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: var(--sp-8);
    align-items: start;
}

.contact-info__heading {
    font-family: var(--font-display);
    font-size: clamp(1.25rem, 2vw, 1.625rem);
    color: var(--clr-green-dark);
    margin: 0 0 var(--sp-4) 0;
    letter-spacing: 0.03em;
}

.contact-info__list {
    list-style: none;
    margin: 0 0 var(--sp-6) 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    gap: var(--sp-4);
}

.contact-info__item {
    display: flex;
    align-items: flex-start;
    gap: var(--sp-3);
}

.contact-info__item-icon {
    width: 1.25rem;
    height: 1.25rem;
    color: var(--clr-gold);
    flex-shrink: 0;
    margin-top: 0.15em; /* optical alignment */
}

.contact-info__item-body {
    display: flex;
    flex-direction: column;
    gap: 0.125rem;
}

.contact-info__item-label {
    font-family: var(--font-ui);
    font-size: 0.75rem;
    font-weight: 700;
    color: var(--clr-text-muted);
    text-transform: uppercase;
    letter-spacing: 0.08em;
}

.contact-info__item-value {
    font-family: var(--font-body);
    font-size: 1rem;
    color: var(--clr-text-dark);
    line-height: 1.5;
}

.contact-info__item-value a {
    color: var(--clr-green-dark);
    text-decoration: none;
    font-weight: 600;
    transition: color var(--ease-fast);
}

.contact-info__item-value a:hover,
.contact-info__item-value a:focus-visible {
    color: var(--clr-gold-dark);
}

.contact-info__note {
    font-family: var(--font-body);
    font-size: 0.9375rem;
    color: var(--clr-text-muted);
    line-height: 1.6;
    border-left: 3px solid var(--clr-gold);
    padding-left: var(--sp-4);
    margin: 0;
    font-style: italic;
}

.contact-form-wrap__heading {
    font-family: var(--font-display);
    font-size: clamp(1.25rem, 2vw, 1.625rem);
    color: var(--clr-green-dark);
    margin: 0 0 var(--sp-4) 0;
    letter-spacing: 0.03em;
}

/* Contact Form 7 base overrides */
.wpcf7 input[type="text"],
.wpcf7 input[type="email"],
.wpcf7 input[type="tel"],
.wpcf7 textarea,
.wpcf7 select {
    width: 100%;
    background-color: var(--clr-off-white);
    border: 1px solid var(--clr-cream-dark);
    border-radius: var(--radius-sm);
    padding: var(--sp-3) var(--sp-4);
    font-family: var(--font-body);
    font-size: 1rem;
    color: var(--clr-text-dark);
    transition: border-color var(--ease-fast), box-shadow var(--ease-fast);
    box-sizing: border-box;
}

.wpcf7 input[type="text"]:focus,
.wpcf7 input[type="email"]:focus,
.wpcf7 input[type="tel"]:focus,
.wpcf7 textarea:focus,
.wpcf7 select:focus {
    border-color: var(--clr-gold);
    box-shadow: 0 0 0 3px color-mix(in srgb, var(--clr-gold) 20%, transparent);
}

.wpcf7 textarea {
    min-height: 140px;
    resize: vertical;
}

.wpcf7 label {
    display: block;
    font-family: var(--font-ui);
    font-size: 0.875rem;
    font-weight: 600;
    color: var(--clr-text-muted);
    margin-bottom: var(--sp-2);
    letter-spacing: 0.02em;
}

.wpcf7 .wpcf7-submit {
    background-color: var(--clr-gold);
    color: var(--clr-green-dark);
    font-family: var(--font-heading);
    font-size: 0.9375rem;
    font-weight: 700;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    border: none;
    border-radius: var(--radius-sm);
    padding: var(--sp-3) var(--sp-8);
    cursor: pointer;
    transition: background-color var(--ease-fast), box-shadow var(--ease-fast);
}

.wpcf7 .wpcf7-submit:hover {
    background-color: var(--clr-gold-light);
    box-shadow: var(--shadow-md);
}

.wpcf7 .wpcf7-not-valid-tip {
    font-family: var(--font-ui);
    font-size: 0.8125rem;
    color: #b91c1c; /* red-700 — no design token for error red */
    margin-top: var(--sp-2);
    display: block;
}

.wpcf7 .wpcf7-response-output {
    font-family: var(--font-body);
    font-size: 0.9375rem;
    padding: var(--sp-3) var(--sp-4);
    border-radius: var(--radius-sm);
    margin-top: var(--sp-4);
}

@media (min-width: 769px) {
    .contact-grid {
        grid-template-columns: 1fr 1.4fr;
        gap: var(--sp-12);
    }
}
</style>

<header class="page-header">
    <h1 class="page-header__title">Contact</h1>
    <p class="page-header__subtitle">Get in touch with the Stroud Lions Club</p>
</header>

<main id="main-content" class="site-main" role="main">

<!-- Contact Grid -->
<section class="section" aria-labelledby="contact-info-heading">
    <div class="container">
        <div class="contact-grid">

            <!-- Left: Contact Info -->
            <div class="contact-info">
                <h2 class="contact-info__heading" id="contact-info-heading">Get in Touch</h2>
                <div class="gold-rule" aria-hidden="true"></div>

                <ul class="contact-info__list">

                    <li class="contact-info__item">
                        <svg class="contact-info__item-icon" viewBox="0 0 20 20" fill="none" aria-hidden="true">
                            <path d="M2 3a1 1 0 0 1 1-1h3.28a1 1 0 0 1 .948.684l1.498 4.493a1 1 0 0 1-.502 1.21l-2.257 1.13a11.042 11.042 0 0 0 5.516 5.516l1.13-2.257a1 1 0 0 1 1.21-.502l4.493 1.498a1 1 0 0 1 .684.949V17a1 1 0 0 1-1 1h-2C7.82 18 2 12.18 2 5V3z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/>
                        </svg>
                        <div class="contact-info__item-body">
                            <span class="contact-info__item-label">Phone</span>
                            <span class="contact-info__item-value">
                                <a href="tel:+19189879310">(918) 987-9310</a>
                            </span>
                        </div>
                    </li>

                    <li class="contact-info__item">
                        <svg class="contact-info__item-icon" viewBox="0 0 20 20" fill="none" aria-hidden="true">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0 0 16 4H4a2 2 0 0 0-1.997 1.884z" stroke="currentColor" stroke-width="1.5"/>
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8.118z" stroke="currentColor" stroke-width="1.5"/>
                        </svg>
                        <div class="contact-info__item-body">
                            <span class="contact-info__item-label">Email</span>
                            <span class="contact-info__item-value">
                                <a href="mailto:stroudlionsclub@gmail.com">stroudlionsclub@gmail.com</a>
                            </span>
                        </div>
                    </li>

                    <li class="contact-info__item">
                        <svg class="contact-info__item-icon" viewBox="0 0 20 20" fill="none" aria-hidden="true">
                            <path d="M10 2C6.686 2 4 4.686 4 8c0 4.667 6 10 6 10s6-5.333 6-10c0-3.314-2.686-6-6-6z" stroke="currentColor" stroke-width="1.5"/>
                            <circle cx="10" cy="8" r="2" stroke="currentColor" stroke-width="1.5"/>
                        </svg>
                        <div class="contact-info__item-body">
                            <span class="contact-info__item-label">Address</span>
                            <span class="contact-info__item-value">
                                Route 66 Main Street<br>
                                Downtown Stroud, Oklahoma 74079
                            </span>
                        </div>
                    </li>

                </ul>

                <p class="contact-info__note">
                    For hunt registration questions, team inquiries, sponsorship, or vendor applications.
                </p>
            </div>

            <!-- Right: Contact Form 7 -->
            <div class="contact-form-wrap">
                <h2 class="contact-form-wrap__heading">Send a Message</h2>
                <div class="gold-rule" aria-hidden="true"></div>
                <?php
                // Replace FORM_ID with the ID assigned when Contact Form 7 is configured in WP Admin.
                // To find the ID: WP Admin → Contact → All Forms → hover the form title → note the post= value in the URL.
                echo do_shortcode( '[contact-form-7 id="FORM_ID" title="Contact Form"]' );
                ?>
            </div>

        </div>
    </div>
</section>

<!-- Map Embed -->
<?php get_template_part( 'template-parts/map-embed' ); ?>

</main>

<?php get_footer(); ?>
