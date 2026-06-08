<?php
$fee_2man       = hogtoberfest_entry_fee( 2 );
$fee_3man       = hogtoberfest_entry_fee( 3 );
$fee_4man       = hogtoberfest_entry_fee( 4 );
$per_additional = hog_option( 'entry_fee_per_additional', 75 ) ?: 75;
?>

<section class="section section--brown hunt-entry-fees" aria-labelledby="entry-fees-heading">
    <div class="container">

        <h2 class="section-title" id="entry-fees-heading">Entry Fees</h2>
        <div class="gold-rule" aria-hidden="true"></div>
        <p class="section-subtitle">Teams of 2 to 4 hunters. Register early — spots are limited.</p>

        <div class="entry-fees__grid">

            <!-- 2-Man Team -->
            <div class="entry-fees__card" aria-label="2-Man Team pricing">
                <div class="entry-fees__card-inner">
                    <h3 class="entry-fees__team-size">2-Man Team</h3>
                    <div class="entry-fees__price">
                        <?php echo esc_html( $fee_2man ); ?>
                    </div>
                    <ul class="entry-fees__features">
                        <li>2 hunters per team</li>
                        <li>All divisions eligible</li>
                        <li>Side pots available separately</li>
                    </ul>
                    <a href="<?php echo esc_url( hogtoberfest_registration_url() ); ?>"
                       class="btn btn--outline"
                       target="_blank"
                       rel="noopener noreferrer">
                        Register &rarr;
                    </a>
                </div>
            </div>

            <!-- 3-Man Team (most popular) -->
            <div class="entry-fees__card entry-fees__card--popular" aria-label="3-Man Team pricing, most popular">
                <div class="entry-fees__popular-badge">Most Popular</div>
                <div class="entry-fees__card-inner">
                    <h3 class="entry-fees__team-size">3-Man Team</h3>
                    <div class="entry-fees__price">
                        <?php echo esc_html( $fee_3man ); ?>
                    </div>
                    <ul class="entry-fees__features">
                        <li>3 hunters per team</li>
                        <li>All divisions eligible</li>
                        <li>Side pots available separately</li>
                    </ul>
                    <a href="<?php echo esc_url( hogtoberfest_registration_url() ); ?>"
                       class="btn btn--register"
                       target="_blank"
                       rel="noopener noreferrer">
                        Register &rarr;
                    </a>
                </div>
            </div>

            <!-- 4-Man Team -->
            <div class="entry-fees__card" aria-label="4-Man Team pricing">
                <div class="entry-fees__card-inner">
                    <h3 class="entry-fees__team-size">4-Man Team</h3>
                    <div class="entry-fees__price">
                        <?php echo esc_html( $fee_4man ); ?>
                    </div>
                    <ul class="entry-fees__features">
                        <li>4 hunters per team (maximum)</li>
                        <li>All divisions eligible</li>
                        <li>Side pots available separately</li>
                    </ul>
                    <a href="<?php echo esc_url( hogtoberfest_registration_url() ); ?>"
                       class="btn btn--outline"
                       target="_blank"
                       rel="noopener noreferrer">
                        Register &rarr;
                    </a>
                </div>
            </div>

        </div><!-- .entry-fees__grid -->

        <p class="entry-fees__note">
            +$<?php echo esc_html( $per_additional ); ?> per hunter beyond 2-man base &middot; Maximum 4 hunters per team
        </p>

    </div><!-- .container -->
</section>
