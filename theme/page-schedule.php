<?php
/**
 * Template Name: Schedule
 *
 * Two-column Friday/Saturday timeline. Times are hardcoded (do not change
 * year to year). Column headers pull event dates from ACF options.
 */

get_header();

$start_date = hog_option( 'event_start_date', 'Friday, September 11' );
$end_date   = hog_option( 'event_end_date',   'Saturday, September 12, 2026' );
?>

<!-- Page Header -->
<header class="page-header">
    <div class="container">
        <h1 class="page-header__title">Schedule</h1>
        <p class="page-header__subtitle">All times Central &mdash; mark your calendar</p>
    </div>
</header>

<!-- Two-Column Schedule -->
<section class="section schedule-section" aria-label="Event Schedule">
    <div class="container">

        <div class="schedule-grid">

            <!-- Friday Column -->
            <div class="schedule-day">
                <h2 class="schedule-day__heading">
                    <?php echo esc_html( $start_date ); ?>
                </h2>
                <div class="gold-rule" aria-hidden="true"></div>

                <dl class="schedule-list">

                    <div class="schedule-item">
                        <dt class="schedule-item__time">12:00 PM</dt>
                        <dd class="schedule-item__label">Pre-Hunt Rules Review and Q&amp;A</dd>
                        <dd class="schedule-item__note">Review regulations, boundaries, and safety requirements before the hunt &mdash; open to all registered teams</dd>
                    </div>

                    <div class="schedule-item schedule-item--key">
                        <dt class="schedule-item__time">2:00 PM</dt>
                        <dd class="schedule-item__label">Hunt Begins</dd>
                        <dd class="schedule-item__note">24-hour hunt window opens &mdash; all teams in the field</dd>
                    </div>

                </dl>
            </div>

            <!-- Saturday Column -->
            <div class="schedule-day">
                <h2 class="schedule-day__heading">
                    <?php echo esc_html( $end_date ); ?>
                </h2>
                <div class="gold-rule" aria-hidden="true"></div>

                <dl class="schedule-list">

                    <div class="schedule-item">
                        <dt class="schedule-item__time">12:00 PM</dt>
                        <dd class="schedule-item__label">Festival Begins</dd>
                        <dd class="schedule-item__note">Main Street opens &mdash; free admission for all</dd>
                    </div>

                    <div class="schedule-item schedule-item--key">
                        <dt class="schedule-item__time">2:00 PM</dt>
                        <dd class="schedule-item__label">Hunt Ends / Weigh-In Opens</dd>
                        <dd class="schedule-item__note">Hunt window closes; teams bring hogs to the weigh-in behind the Stroud Main Street (Route 66) Pavilion at 4th Avenue and 2nd Street</dd>
                    </div>

                    <div class="schedule-item schedule-item--deadline">
                        <dt class="schedule-item__time">3:00 PM</dt>
                        <dd class="schedule-item__label">Check-In Deadline</dd>
                        <dd class="schedule-item__note">All team members must be present; late check-ins are disqualified</dd>
                    </div>

                    <div class="schedule-item schedule-item--highlight">
                        <dt class="schedule-item__time">5:00 PM</dt>
                        <dd class="schedule-item__label">Awards Ceremony</dd>
                        <dd class="schedule-item__note">Stroud Main Street (Route 66) Pavilion &mdash; champions crowned, prizes awarded</dd>
                    </div>

                    <div class="schedule-item">
                        <dt class="schedule-item__time">10:00 PM</dt>
                        <dd class="schedule-item__label">Festival Closes</dd>
                        <dd class="schedule-item__note">Live music wraps up; see you next year</dd>
                    </div>

                </dl>
            </div>

        </div>

        <!-- Times Callout -->
        <aside class="schedule-callout" aria-label="Hunt window note">
            <svg class="schedule-callout__icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="2"/>
                <line x1="12" y1="8" x2="12" y2="12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                <circle cx="12" cy="15.5" r="0.75" fill="currentColor"/>
            </svg>
            <p>All times Central. Hunt window is 24 hours: Friday 2:00&nbsp;PM through Saturday 2:00&nbsp;PM.</p>
        </aside>

    </div>
</section>

<?php get_footer(); ?>
