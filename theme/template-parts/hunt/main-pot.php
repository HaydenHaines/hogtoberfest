<?php
/**
 * Template Part: Hunt Main Pot Payouts
 *
 * Displays the 50/50 split summary and payout breakdown tables
 * for both the Rifled/Open and Archery/Primitive divisions.
 *
 * @package Hogtoberfest
 */
?>
<section class="section section--dark hunt-main-pot" aria-labelledby="main-pot-heading">
	<div class="container">
		<h2 class="section-title" id="main-pot-heading">Main Pot Payouts</h2>
		<div class="gold-rule" aria-hidden="true"></div>
		<p class="section-subtitle">50% of all entry fees go to hunters. 50% supports the Stroud Lions Club and local community.</p>

		<!-- 50/50 Split Summary Cards -->
		<div class="main-pot__summary">

			<div class="main-pot__split-card">
				<span class="main-pot__split-percent">50%</span>
				<span class="main-pot__split-label">Prize Money</span>
				<p class="main-pot__split-desc">Distributed to winning hunters in each division</p>
			</div>

			<div class="main-pot__split-card">
				<span class="main-pot__split-percent">50%</span>
				<span class="main-pot__split-label">Stroud Lions Club</span>
				<p class="main-pot__split-desc">Supporting local community programs and first responders</p>
			</div>

		</div>

		<!-- Rifled / Open Division Payout Table -->
		<div class="main-pot__table-wrap">
			<h3 class="main-pot__table-heading">Rifled / Open Division</h3>
			<table class="main-pot__table">
				<caption class="sr-only">Rifled / Open division payout breakdown</caption>
				<thead>
					<tr>
						<th scope="col">Place</th>
						<th scope="col">Category</th>
						<th scope="col">Payout</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1st Place</td>
						<td>Heaviest Hog</td>
						<td>50% of division pot</td>
					</tr>
					<tr>
						<td>2nd Place</td>
						<td>Heaviest Hog</td>
						<td>30% of division pot</td>
					</tr>
					<tr>
						<td>3rd Place</td>
						<td>Heaviest Hog</td>
						<td>20% of division pot</td>
					</tr>
				</tbody>
			</table>
			<p class="main-pot__table-note">Payout percentages are of the hunters&#8217; 50% share for that division.</p>
		</div>

		<!-- Archery / Primitive Division Payout Table -->
		<div class="main-pot__table-wrap">
			<h3 class="main-pot__table-heading">Archery / Primitive Division</h3>
			<table class="main-pot__table">
				<caption class="sr-only">Archery / Primitive division payout breakdown</caption>
				<thead>
					<tr>
						<th scope="col">Place</th>
						<th scope="col">Category</th>
						<th scope="col">Payout</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1st Place</td>
						<td>Heaviest Hog</td>
						<td>50% of division pot</td>
					</tr>
					<tr>
						<td>2nd Place</td>
						<td>Heaviest Hog</td>
						<td>30% of division pot</td>
					</tr>
					<tr>
						<td>3rd Place</td>
						<td>Heaviest Hog</td>
						<td>20% of division pot</td>
					</tr>
				</tbody>
			</table>
			<p class="main-pot__table-note">Payout percentages are of the hunters&#8217; 50% share for that division.</p>
		</div>

	</div>
</section>
