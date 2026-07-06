<?php
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Single source of truth for Hogtoberfest sponsors.
 *
 * Both the Sponsors page (page-sponsors.php) and the homepage sponsor bar
 * (template-parts/sponsor-bar.php) read from hog_sponsor_tiers(), so the two
 * can never drift out of sync.
 *
 * To add a sponsor: add an entry to the appropriate tier below and drop a logo
 * into assets/images/sponsors/ named with the sponsor's slug (e.g.
 * tatanka-ranch.png). Until the file exists, the styled name shows as a
 * graceful fallback. Optional 'url' links the logo to a website.
 */
function hog_sponsor_tiers(): array {
    return [
        [
            'name'     => 'Presenting Sponsor',
            'slug'     => 'presenting',
            'sponsors' => [
                [ 'name' => 'Sac and Fox Nation Casino', 'logo' => 'sac-and-fox-casino', 'url' => '' ],
            ],
        ],
        [
            'name'     => 'King Boar Sponsors',
            'slug'     => 'king-boar',
            'sponsors' => [
                [ 'name' => 'Tatanka Ranch', 'logo' => 'tatanka-ranch', 'url' => '' ],
                [ 'name' => 'Five Star BBQ', 'logo' => 'five-star-bbq', 'url' => '' ],
            ],
        ],
        [
            'name'     => 'Big Boar Sponsors',
            'slug'     => 'big-boar',
            'sponsors' => [
                [ 'name' => 'Genesis',     'logo' => 'genesis',     'url' => '' ],
                [ 'name' => 'Jim Hodgens', 'logo' => 'jim-hodgens', 'url' => '' ],
            ],
        ],
        [
            'name'     => 'Trophy Hog Sponsors',
            'slug'     => 'trophy-hog',
            'sponsors' => [
                [ 'name' => 'Five Tool Management', 'logo' => 'five-tool-management', 'url' => '' ],
                [ 'name' => "D's Specialty House",  'logo' => 'ds-specialty-house',    'url' => '' ],
            ],
        ],
    ];
}

/**
 * The presenting sponsor (rendered larger / featured everywhere it appears).
 */
function hog_presenting_sponsor(): ?array {
    $tiers = hog_sponsor_tiers();
    return $tiers[0]['sponsors'][0] ?? null;
}

/**
 * Resolves a sponsor slug to a logo file URI in assets/images/sponsors/,
 * or '' if no matching file exists. Checks common image extensions in order.
 */
function hog_sponsor_logo_uri( string $slug ): string {
    if ( ! $slug ) return '';
    $base = '/assets/images/sponsors/' . $slug;
    foreach ( [ 'svg', 'png', 'webp', 'jpg', 'jpeg' ] as $ext ) {
        if ( file_exists( get_template_directory() . $base . '.' . $ext ) ) {
            return get_template_directory_uri() . $base . '.' . $ext;
        }
    }
    return '';
}

/**
 * Renders a sponsor as a logo <img> (or styled name fallback), optionally
 * wrapped in a link. Class names are parameterised so the Sponsors page and
 * the homepage bar can share one renderer with their own styling hooks.
 *
 * @param array $sponsor  ['name' => string, 'logo' => slug, 'url' => string]
 * @param array $classes  ['img' => ..., 'name' => ..., 'link' => ...]
 */
function hog_sponsor_html( array $sponsor, array $classes = [] ): string {
    $img_class  = $classes['img']  ?? 'sponsor-tile__img';
    $name_class = $classes['name'] ?? 'sponsor-tile__name';
    $link_class = $classes['link'] ?? 'sponsor-tile__link';

    $name = $sponsor['name'] ?? '';
    $uri  = hog_sponsor_logo_uri( $sponsor['logo'] ?? '' );

    $inner = $uri
        ? sprintf(
            '<img src="%s" alt="%s" class="%s" loading="lazy">',
            esc_url( $uri ),
            esc_attr( $name ),
            esc_attr( $img_class )
        )
        : sprintf(
            '<span class="%s">%s</span>',
            esc_attr( $name_class ),
            esc_html( $name )
        );

    if ( ! empty( $sponsor['url'] ) ) {
        return sprintf(
            '<a href="%s" class="%s" target="_blank" rel="noopener noreferrer sponsored" aria-label="%s (opens in a new tab)">%s</a>',
            esc_url( $sponsor['url'] ),
            esc_attr( $link_class ),
            esc_attr( $name ),
            $inner
        );
    }

    return $inner;
}
