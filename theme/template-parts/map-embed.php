<?php
$map_embed_url  = get_field( 'map_embed_url',  'option' );
$directions_url = get_field( 'map_directions_url', 'option' );
?>
<section class="section section--dark map-embed-section" aria-labelledby="map-embed-heading">
    <div class="container">

        <div class="map-embed__header text-center">
            <h2 class="section-title" id="map-embed-heading">Weigh-In Location</h2>
            <div class="gold-rule" aria-hidden="true"></div>
            <p class="section-subtitle">Official weigh-in station for the Hogtoberfest Hog Hunt.</p>
        </div>

        <?php if ( $map_embed_url ) : ?>
            <div class="map-embed__container">
                <iframe
                    src="<?php echo esc_url( $map_embed_url ); ?>"
                    width="800"
                    height="400"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    title="Weigh-in station location map"
                    aria-label="Google Maps showing the weigh-in station location">
                </iframe>
            </div>
        <?php endif; ?>

        <div class="map-embed__address">
            <p class="map-embed__address-text">
                <span class="map-embed__address-line">Weigh-In Station</span>
                Across from the Stroud Fire Station<br>
                316 W. 8th Ave, Stroud, OK 74079
            </p>
            <?php if ( $directions_url ) : ?>
                <a href="<?php echo esc_url( $directions_url ); ?>"
                   class="map-embed__directions-link"
                   target="_blank"
                   rel="noopener noreferrer"
                   aria-label="Get directions to the weigh-in station (opens in a new tab)">
                    Get Directions &rarr;
                </a>
            <?php endif; ?>
        </div>

        <p class="map-embed__description text-center">
            All hogs must be weighed in at this location by 3:00 PM Saturday.
            Look for the Hogtoberfest signage. Parking available on adjacent streets.
        </p>

    </div>
</section>
