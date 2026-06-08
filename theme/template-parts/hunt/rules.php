<?php
/**
 * Template Part: Hunt Rules
 *
 * @package Hogtoberfest
 */
?>
<section class="section section--dark hunt-rules" aria-labelledby="rules-heading">
	<div class="container">
		<h2 class="section-title" id="rules-heading">Hunt Rules</h2>
		<div class="gold-rule" aria-hidden="true"></div>
		<p class="section-subtitle">All teams must review and agree to these rules at the mandatory pre-hunt meeting.</p>

		<ol class="hunt-rules__list">

			<li class="hunt-rules__item">
				<p class="hunt-rules__text">All hogs must be killed within the official 24-hour hunt window — 2:00 PM Friday to 2:00 PM Saturday.</p>
			</li>

			<li class="hunt-rules__item">
				<p class="hunt-rules__text">No trapped, penned, or previously killed animals.</p>
			</li>

			<li class="hunt-rules__item">
				<p class="hunt-rules__text">No pooling between teams.</p>
			</li>

			<li class="hunt-rules__item">
				<p class="hunt-rules__text">No aircraft or illegal methods.</p>
			</li>

			<li class="hunt-rules__item">
				<p class="hunt-rules__text">Entire team must weigh in together. All team members must be present and in line for check-in by 3:00 PM Saturday.</p>
			</li>

			<li class="hunt-rules__item hunt-rules__item--polygraph">
				<div class="polygraph-callout">
					<span class="polygraph-callout__rule-badge">Important Rule</span>
					<h3 class="polygraph-callout__heading">Polygraph Policy</h3>
					<p class="polygraph-callout__text">Winners of any pot may be required to submit to a polygraph examination at the discretion of the event organizers. Refusal to submit forfeits all prizes. This policy exists to protect the integrity of the competition for all participants.</p>
				</div>
			</li>

		</ol>

		<div class="hunt-rules__full-link" style="text-align:center;margin-top:2.5rem">
			<a class="btn btn--outline" href="<?php echo esc_url( home_url( '/full-rules/' ) ); ?>">View the Full Official Rules (PDF)</a>
		</div>

	</div>
</section>
