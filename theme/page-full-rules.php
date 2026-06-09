<?php
/**
 * Template Name: Full Rules
 *
 * Full Official Rules page — serves the official rulebook and liability
 * waiver as downloadable PDFs bundled with the theme (assets/docs/).
 * Auto-applies to the WP page with slug "full-rules" via the template
 * hierarchy; linked from the Hunt page rules section.
 *
 * @package Hogtoberfest
 */

get_header();

$docs_base = get_template_directory_uri() . '/assets/docs/';
?>

<style>
/* Scoped full-rules page styles */
.rules-docs__intro {
    max-width: 48rem;
    margin: 0 auto var(--sp-8);
    text-align: center;
    font-family: var(--font-body);
    font-size: 1.0625rem;
    line-height: 1.7;
    color: var(--clr-text-muted);
}

.rules-docs__grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: var(--sp-6);
    max-width: 56rem;
    margin: 0 auto;
}

.doc-card {
    display: flex;
    flex-direction: column;
    background-color: var(--clr-off-white);
    border: 1px solid var(--clr-cream-dark);
    border-radius: var(--radius-md);
    padding: var(--sp-8);
    box-shadow: var(--shadow-sm);
}

.doc-card__icon {
    width: 2.5rem;
    height: 2.5rem;
    color: var(--clr-gold-dark);
    margin-bottom: var(--sp-4);
}

.doc-card__heading {
    font-family: var(--font-display);
    font-size: clamp(1.25rem, 2vw, 1.625rem);
    color: var(--clr-green-dark);
    margin: 0 0 var(--sp-3) 0;
    letter-spacing: 0.03em;
}

.doc-card__text {
    font-family: var(--font-body);
    font-size: 0.9375rem;
    line-height: 1.6;
    color: var(--clr-text-muted);
    margin: 0 0 var(--sp-6) 0;
    flex: 1 1 auto;
}

.doc-card__download {
    display: inline-flex;
    align-items: center;
    align-self: flex-start;
    gap: var(--sp-2);
    background-color: var(--clr-gold);
    color: var(--clr-green-dark);
    font-family: var(--font-ui);
    font-size: 0.875rem;
    font-weight: 700;
    letter-spacing: 0.04em;
    text-transform: uppercase;
    text-decoration: none;
    padding: var(--sp-3) var(--sp-6);
    border-radius: var(--radius-sm);
    border: 2px solid var(--clr-gold-dark);
    transition: background-color var(--ease-fast), box-shadow var(--ease-fast), transform var(--ease-fast);
}

.doc-card__download:hover,
.doc-card__download:focus-visible {
    background-color: var(--clr-gold-light);
    box-shadow: var(--glow-gold);
    transform: translateY(-1px);
}

.doc-card__download-icon {
    width: 1.125rem;
    height: 1.125rem;
    flex-shrink: 0;
}

@media (min-width: 769px) {
    .rules-docs__grid {
        grid-template-columns: 1fr 1fr;
    }
}
</style>

<header class="page-header">
    <h1 class="page-header__title">Full Official Rules</h1>
    <p class="page-header__subtitle">Hogtoberfest Hog Hunting Tournament &mdash; Stroud, Oklahoma</p>
</header>

<main id="main-content" class="site-main" role="main">

    <section class="section section--cream" aria-labelledby="rules-docs-heading">
        <div class="container">

            <h2 class="section-title" id="rules-docs-heading" style="color:var(--clr-green-dark)">Official Documents</h2>
            <div class="gold-rule" aria-hidden="true"></div>

            <p class="rules-docs__intro">
                Review the complete official rulebook before the hunt. Every participant must also
                read and sign the liability waiver &mdash; a signed waiver is required to compete.
            </p>

            <div class="rules-docs__grid">

                <!-- Official Rules -->
                <article class="doc-card">
                    <svg class="doc-card__icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M6 2h9l5 5v13a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/>
                        <path d="M14 2v6h6" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/>
                        <path d="M8 13h8M8 17h6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                    </svg>
                    <h3 class="doc-card__heading">Official Rulebook</h3>
                    <p class="doc-card__text">
                        The complete rules governing the 24-hour hog hunt &mdash; eligibility, hunt
                        window, weigh-in, divisions, pots, and the polygraph policy.
                    </p>
                    <a class="doc-card__download" href="<?php echo esc_url( $docs_base . 'hogtoberfest-official-rules.pdf' ); ?>" target="_blank" rel="noopener">
                        <svg class="doc-card__download-icon" viewBox="0 0 20 20" fill="none" aria-hidden="true">
                            <path d="M10 3v9m0 0l-3.5-3.5M10 12l3.5-3.5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M4 14v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/>
                        </svg>
                        View / Download PDF
                    </a>
                </article>

                <!-- Liability Waiver -->
                <article class="doc-card">
                    <svg class="doc-card__icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M12 3l7 3v5c0 4.5-3 8-7 10-4-2-7-5.5-7-10V6l7-3z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/>
                        <path d="M9 12l2 2 4-4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <h3 class="doc-card__heading">Liability Waiver</h3>
                    <p class="doc-card__text">
                        Assumption of risk, release of liability, and indemnification agreement.
                        Every participant must read and sign this waiver to compete in the hunt.
                    </p>
                    <a class="doc-card__download" href="<?php echo esc_url( $docs_base . 'hogtoberfest-waiver.pdf' ); ?>" target="_blank" rel="noopener">
                        <svg class="doc-card__download-icon" viewBox="0 0 20 20" fill="none" aria-hidden="true">
                            <path d="M10 3v9m0 0l-3.5-3.5M10 12l3.5-3.5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M4 14v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/>
                        </svg>
                        View / Download PDF
                    </a>
                </article>

            </div>

        </div>
    </section>

    <?php get_template_part( 'template-parts/register-cta-block' ); ?>

</main>

<?php get_footer(); ?>
