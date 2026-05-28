<?php $side_pot_fee = hogtoberfest_side_pot_fee(); ?>

<section class="section section--brown prize-spotlight" aria-labelledby="prizes-heading">
    <div class="container">

        <h2 id="prizes-heading" class="section-title">Prize Structure</h2>
        <div class="gold-rule"></div>

        <!-- Mascot image as visual accent -->
        <div class="prize-spotlight__mascot-wrap" aria-hidden="true">
            <img
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo-mascot.png' ); ?>"
                alt=""
                class="prize-spotlight__mascot"
                width="240"
                height="280"
                loading="lazy">
        </div>

        <!-- ── Main Pot ─────────────────────────────────── -->
        <div class="prize-spotlight__main-pot">
            <h3 class="prize-spotlight__main-pot-heading">Main Pot</h3>
            <p class="prize-spotlight__main-pot-body">
                50% of all entry fees paid out directly to winners.
                <strong>1–20 teams registered:</strong> one winner per division takes the full pot.
                <strong>20+ teams registered:</strong> two winners per division split the pot 80/20.
            </p>
        </div>

        <!-- ── Side Pots ───────────────────────────────── -->
        <h3 class="prize-spotlight__side-heading">Side Pots</h3>
        <p class="prize-spotlight__side-subhead">
            Optional add-ons at registration — each pot pays out 100% to the winner.
        </p>

        <div class="cards-grid">

            <!-- Side Pot: Largest Hog -->
            <article class="card card--brown">
                <span class="card__eyebrow">Side Pot</span>
                <h4 class="card__title">Largest Hog</h4>
                <p class="card__fee"><?php echo esc_html( $side_pot_fee ); ?></p>
                <p class="card__payout-label">Entry Fee</p>
                <p class="card__body">
                    Heaviest single hog harvested during the 24-hour hunt window.
                    Weigh-in at the festival Saturday evening.
                </p>
                <p class="card__note">100% Payout to Winner. Sponsored match contributes to fundraiser.</p>
            </article>

            <!-- Side Pot: Most Hogs -->
            <article class="card card--brown">
                <span class="card__eyebrow">Side Pot</span>
                <h4 class="card__title">Most Hogs</h4>
                <p class="card__fee"><?php echo esc_html( $side_pot_fee ); ?></p>
                <p class="card__payout-label">Entry Fee</p>
                <p class="card__body">
                    Highest combined hog count by a single team across the full 24-hour competition period.
                    All harvested hogs must be presented at weigh-in.
                </p>
                <p class="card__note">100% Payout to Winner. Sponsored match contributes to fundraiser.</p>
            </article>

            <!-- Side Pot: Longest Cutter -->
            <article class="card card--brown">
                <span class="card__eyebrow">Side Pot</span>
                <h4 class="card__title">Longest Cutter</h4>
                <p class="card__fee"><?php echo esc_html( $side_pot_fee ); ?></p>
                <p class="card__payout-label">Entry Fee</p>
                <p class="card__body">
                    Longest single cutter (tusk) harvested and presented at weigh-in.
                    Measured tip-to-base by event officials. No substitutions after weigh-in.
                </p>
                <p class="card__note">100% Payout to Winner. Sponsored match contributes to fundraiser.</p>
            </article>

        </div>

    </div>
</section>
