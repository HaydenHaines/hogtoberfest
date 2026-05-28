<?php
/**
 * Template Part: Festival Info
 * Practical details for public festival attendees (when, where, admission, parking, directions).
 */
?>

<section class="section section--dark" aria-labelledby="festival-info-heading">
    <div class="container">
        <h2 class="section-title" id="festival-info-heading">Festival Details</h2>
        <div class="gold-rule" aria-hidden="true"></div>
        <p class="section-subtitle"><?php esc_html_e( 'Everything you need to know before you go.', 'hogtoberfest' ); ?></p>

        <div class="page-content text-cream">
            <h3><?php esc_html_e( 'When & Where', 'hogtoberfest' ); ?></h3>
            <p>
                <?php esc_html_e( 'Saturday, September 12, 2026 · 10:00 AM – 8:00 PM', 'hogtoberfest' ); ?><br>
                <?php esc_html_e( 'Main Street, Stroud, Oklahoma 74079 · Historic Route 66', 'hogtoberfest' ); ?>
            </p>

            <h3><?php esc_html_e( 'Admission', 'hogtoberfest' ); ?></h3>
            <p>
                <?php
                printf(
                    /* translators: %s: bold "free and open to the public" text */
                    esc_html__( 'The fall festival is %s. No tickets required. The beer garden is 21+ with ID. All other areas are all-ages.', 'hogtoberfest' ),
                    '<strong>' . esc_html__( 'free and open to the public', 'hogtoberfest' ) . '</strong>'
                );
                ?>
            </p>

            <h3><?php esc_html_e( 'Parking', 'hogtoberfest' ); ?></h3>
            <p><?php esc_html_e( 'Free parking is available throughout downtown Stroud. Overflow parking at the Stroud Community Center on Oak Avenue. Expect a short walk to Main Street.', 'hogtoberfest' ); ?></p>

            <h3><?php esc_html_e( 'Getting There', 'hogtoberfest' ); ?></h3>
            <p><?php esc_html_e( 'Stroud is located on Historic Route 66, approximately 60 miles east of Oklahoma City and 80 miles southwest of Tulsa. Take Exit 166 off I-44.', 'hogtoberfest' ); ?></p>
        </div>

    </div>
</section>
