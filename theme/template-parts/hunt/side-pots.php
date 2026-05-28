<?php
/**
 * Template Part: Hunt Side Pots
 *
 * @package Hogtoberfest
 */

$side_pot_fee = hogtoberfest_side_pot_fee();
?>
<section class="section section--brown hunt-side-pots" aria-labelledby="side-pots-heading">
	<div class="container">
		<h2 class="section-title" id="side-pots-heading">Side Pot Options</h2>
		<div class="gold-rule" aria-hidden="true"></div>
		<p class="section-subtitle">Optional add-ons at registration. Each side pot pays out 100% to the winner.</p>

		<div class="side-pots__grid">

			<!-- Largest Hog -->
			<div class="side-pot-card">
				<div class="side-pot-card__icon" aria-hidden="true">🏆</div>
				<h3 class="side-pot-card__title">Largest Hog</h3>
				<div class="side-pot-card__fee-badge">
					<span class="side-pot-card__fee-label">Entry Fee</span>
					<span class="side-pot-card__fee-amount"><?php echo esc_html( $side_pot_fee ); ?></span>
				</div>
				<p class="side-pot-card__payout">100% Winner Take All</p>
				<p class="side-pot-card__note">Heaviest single hog harvested during the 24-hour hunt window. Weigh-in at the festival Saturday evening.</p>
				<p class="side-pot-card__note">100% Payout to Winner. Sponsored match contributes to fundraiser.</p>
			</div>

			<!-- Most Hogs -->
			<div class="side-pot-card">
				<div class="side-pot-card__icon" aria-hidden="true">🐗</div>
				<h3 class="side-pot-card__title">Most Hogs</h3>
				<div class="side-pot-card__fee-badge">
					<span class="side-pot-card__fee-label">Entry Fee</span>
					<span class="side-pot-card__fee-amount"><?php echo esc_html( $side_pot_fee ); ?></span>
				</div>
				<p class="side-pot-card__payout">100% Winner Take All</p>
				<p class="side-pot-card__note">Highest combined hog count by a single team across the full 24-hour competition period. All harvested hogs must be presented at weigh-in.</p>
				<p class="side-pot-card__note">100% Payout to Winner. Sponsored match contributes to fundraiser.</p>
			</div>

			<!-- Longest Cutter -->
			<div class="side-pot-card">
				<div class="side-pot-card__icon" aria-hidden="true">🦷</div>
				<h3 class="side-pot-card__title">Longest Cutter</h3>
				<div class="side-pot-card__fee-badge">
					<span class="side-pot-card__fee-label">Entry Fee</span>
					<span class="side-pot-card__fee-amount"><?php echo esc_html( $side_pot_fee ); ?></span>
				</div>
				<p class="side-pot-card__payout">100% Winner Take All</p>
				<p class="side-pot-card__note">Longest single cutter (tusk) harvested and presented at weigh-in. Measured tip-to-base by event officials. No substitutions after weigh-in.</p>
				<p class="side-pot-card__note">100% Payout to Winner. Sponsored match contributes to fundraiser.</p>
			</div>

		</div>

		<p class="side-pots__separate-note">
			Side pots are purchased separately at registration. You may enter any combination.
		</p>

	</div>
</section>
