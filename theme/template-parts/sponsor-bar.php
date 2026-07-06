<?php
/**
 * Homepage Sponsor Bar
 *
 * Renders every sponsor from the shared source of truth (inc/sponsors.php),
 * so the homepage always matches the Sponsors page. The presenting sponsor
 * (Sac and Fox Nation Casino) is featured above the rest at a larger size.
 */

if ( ! function_exists( 'hog_sponsor_tiers' ) ) {
    return;
}

$tiers      = hog_sponsor_tiers();
$presenting = hog_presenting_sponsor();

// Flatten every non-presenting sponsor into a single row.
$others = [];
foreach ( array_slice( $tiers, 1 ) as $tier ) {
    foreach ( $tier['sponsors'] as $sponsor ) {
        $others[] = $sponsor;
    }
}

if ( ! $presenting && ! $others ) {
    return;
}

$bar_classes = [
    'img'  => 'sponsor-bar__logo',
    'name' => 'sponsor-bar__name',
    'link' => 'sponsor-bar__link',
];
$featured_classes = [
    'img'  => 'sponsor-bar__logo sponsor-bar__logo--featured',
    'name' => 'sponsor-bar__name sponsor-bar__name--featured',
    'link' => 'sponsor-bar__link',
];
?>

<aside class="sponsor-bar" aria-label="Event sponsors">
    <div class="container">

        <p class="sponsor-bar__label">Proudly Supported By</p>

        <?php if ( $presenting ) : ?>
            <div class="sponsor-bar__featured">
                <?php echo hog_sponsor_html( $presenting, $featured_classes ); ?>
            </div>
        <?php endif; ?>

        <?php if ( $others ) : ?>
            <ul class="sponsor-bar__list">
                <?php foreach ( $others as $sponsor ) : ?>
                    <li class="sponsor-bar__item">
                        <?php echo hog_sponsor_html( $sponsor, $bar_classes ); ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

    </div>
</aside>
