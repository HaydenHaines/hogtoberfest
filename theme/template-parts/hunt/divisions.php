<?php
/**
 * Template Part: Hunt Divisions
 *
 * @package Hogtoberfest
 */
?>
<section class="section section--dark hunt-divisions" aria-labelledby="divisions-heading">
	<div class="container">
		<h2 class="section-title" id="divisions-heading">Hunt Divisions</h2>
		<div class="gold-rule" aria-hidden="true"></div>
		<p class="section-subtitle">Two divisions, each with its own main prize pool. Choose your division when you register.</p>

		<div class="hunt-divisions__grid">

			<article class="division-card">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/division-dogs.jpg' ); ?>"
				     alt="Hunting dog pursuing a wild hog through the woods"
				     class="division-card__photo"
				     width="510" height="512"
				     loading="lazy">
				<h3 class="division-card__title">Dog Division</h3>
				<p class="division-card__desc">Hunt with dogs. Separate prize pool from the No Dog / Thermal Division. Choose this division at registration.</p>
				<span class="division-card__tag">Dog Hunting</span>
			</article>

			<article class="division-card">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/division-thermal.jpg' ); ?>"
				     alt="Wild hogs captured on thermal night-vision camera"
				     class="division-card__photo"
				     width="1024" height="576"
				     loading="lazy">
				<h3 class="division-card__title">No Dog / Thermal Division</h3>
				<p class="division-card__desc">Hunt without dogs. Thermal and other non-dog methods permitted. Separate prize pool from the Dog Division.</p>
				<span class="division-card__tag">No Dog / Thermal</span>
			</article>

		</div>

		<p class="hunt-divisions__note">One main prize pool per division. You select your division during registration. <strong>Side pots are awarded separately and are open to all teams regardless of division.</strong></p>
	</div>
</section>
