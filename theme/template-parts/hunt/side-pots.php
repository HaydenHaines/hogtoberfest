<?php
/**
 * Template Part: Hunt Side Pots
 *
 * Displays optional side pot add-ons available at registration,
 * including Heaviest Overall Hog, Ugliest Hog, and Biggest Head.
 *
 * @package Hogtoberfest
 */

$side_pot_fee = hogtoberfest_side_pot_fee();
?>
<section class="section section--brown hunt-side-pots" aria-labelledby="side-pots-heading">
	<div class="container">
		<h2 class="section-title" id="side-pots-heading">Side Pot Options</h2>
		<div class="gold-rule" aria-hidden="true"></div>
		<p class="section-subtitle">Optional add-ons at registration. Each side pot has its own prize pool — 100% paid out to winners.</p>

		<div class="side-pots__grid">

			<!-- Heaviest Overall Hog -->
			<div class="side-pot-card">
				<div class="side-pot-card__icon" aria-hidden="true">🏆</div>
				<h3 class="side-pot-card__title">Heaviest Overall Hog</h3>
				<div class="side-pot-card__fee-badge">
					<span class="side-pot-card__fee-label">Entry Fee</span>
					<span class="side-pot-card__fee-amount"><?php echo esc_html( $side_pot_fee ); ?></span>
				</div>
				<p class="side-pot-card__payout">100% Winner Take All</p>
				<p class="side-pot-card__note">Across both divisions. Heaviest single hog of the entire event.</p>
			</div>

			<!-- Ugliest Hog -->
			<div class="side-pot-card">
				<div class="side-pot-card__icon" aria-hidden="true">😤</div>
				<h3 class="side-pot-card__title">Ugliest Hog</h3>
				<div class="side-pot-card__fee-badge">
					<span class="side-pot-card__fee-label">Entry Fee</span>
					<span class="side-pot-card__fee-amount"><?php echo esc_html( $side_pot_fee ); ?></span>
				</div>
				<p class="side-pot-card__payout">100% Winner Take All</p>
				<p class="side-pot-card__note">Judged by panel at weigh-in. Most notable physical characteristics wins.</p>
			</div>

			<!-- Biggest Head -->
			<div class="side-pot-card">
				<div class="side-pot-card__icon" aria-hidden="true">💀</div>
				<h3 class="side-pot-card__title">Biggest Head</h3>
				<div class="side-pot-card__fee-badge">
					<span class="side-pot-card__fee-label">Entry Fee</span>
					<span class="side-pot-card__fee-amount"><?php echo esc_html( $side_pot_fee ); ?></span>
				</div>
				<p class="side-pot-card__payout">100% Winner Take All</p>
				<p class="side-pot-card__note">Measured at weigh-in station. Widest skull measurement wins.</p>
			</div>

		</div>

		<p class="side-pots__separate-note">
			Side pots are purchased separately at registration. You may enter any combination.
		</p>

	</div>
</section>
