<?php
$friday_date   = hog_option( 'event_start_date', 'Friday, September 11' );
$saturday_date = hog_option( 'event_end_date',   'Saturday, September 12, 2026' );
?>

<section class="section section--dark hunt-schedule" aria-labelledby="schedule-heading">
    <div class="container">

        <h2 class="section-title" id="schedule-heading">Hunt Schedule</h2>
        <div class="gold-rule" aria-hidden="true"></div>
        <p class="section-subtitle">All times are Central Time. Hunt window runs 24 hours.</p>

        <div class="hunt-schedule__grid">

            <!-- Friday column -->
            <div class="hunt-schedule__day">
                <div class="hunt-schedule__day-header">
                    <span class="hunt-schedule__day-label">Day 1</span>
                    <h3 class="hunt-schedule__day-date"><?php echo esc_html( $friday_date ); ?></h3>
                </div>

                <ol class="hunt-schedule__list" aria-label="Friday schedule">

                    <li class="hunt-schedule__entry">
                        <div class="hunt-schedule__time">
                            <span class="hunt-schedule__hour">12:00</span>
                            <span class="hunt-schedule__ampm">PM</span>
                        </div>
                        <div class="hunt-schedule__details">
                            <strong class="hunt-schedule__event-name">Pre-Hunt Rules Review and Q&amp;A</strong>
                            <p class="hunt-schedule__event-desc">Review regulations, boundaries, and safety requirements before the hunt begins. Open to all registered teams.</p>
                        </div>
                    </li>

                    <li class="hunt-schedule__entry hunt-schedule__entry--primary">
                        <div class="hunt-schedule__time">
                            <span class="hunt-schedule__hour">2:00</span>
                            <span class="hunt-schedule__ampm">PM</span>
                        </div>
                        <div class="hunt-schedule__details">
                            <strong class="hunt-schedule__event-name">Hunt Begins</strong>
                            <p class="hunt-schedule__event-desc">The official 24-hour hunt window opens. All hogs must be killed after this moment to count.</p>
                        </div>
                    </li>

                </ol>
            </div>

            <!-- Saturday column -->
            <div class="hunt-schedule__day">
                <div class="hunt-schedule__day-header">
                    <span class="hunt-schedule__day-label">Day 2</span>
                    <h3 class="hunt-schedule__day-date"><?php echo esc_html( $saturday_date ); ?></h3>
                </div>

                <ol class="hunt-schedule__list" aria-label="Saturday schedule">

                    <li class="hunt-schedule__entry hunt-schedule__entry--primary">
                        <div class="hunt-schedule__time">
                            <span class="hunt-schedule__hour">2:00</span>
                            <span class="hunt-schedule__ampm">PM</span>
                        </div>
                        <div class="hunt-schedule__details">
                            <strong class="hunt-schedule__event-name">Hunt Ends</strong>
                            <p class="hunt-schedule__event-desc">The hunt window closes. Weigh-in opens behind the Stroud Main Street (Route 66) Pavilion at 4th Avenue and 2nd Street.</p>
                        </div>
                    </li>

                    <li class="hunt-schedule__entry">
                        <div class="hunt-schedule__time">
                            <span class="hunt-schedule__hour">3:00</span>
                            <span class="hunt-schedule__ampm">PM</span>
                        </div>
                        <div class="hunt-schedule__details">
                            <strong class="hunt-schedule__event-name">Check-In Deadline</strong>
                            <p class="hunt-schedule__event-desc">All teams must have completed weigh-in by this time. Late arrivals are not eligible for prizes.</p>
                        </div>
                    </li>

                    <li class="hunt-schedule__entry">
                        <div class="hunt-schedule__time">
                            <span class="hunt-schedule__hour">5:00</span>
                            <span class="hunt-schedule__ampm">PM</span>
                        </div>
                        <div class="hunt-schedule__details">
                            <strong class="hunt-schedule__event-name">Awards Ceremony</strong>
                            <p class="hunt-schedule__event-desc">Winners announced at the Stroud Main Street (Route 66) Pavilion.</p>
                        </div>
                    </li>

                </ol>
            </div>

        </div><!-- .hunt-schedule__grid -->

    </div><!-- .container -->
</section>
