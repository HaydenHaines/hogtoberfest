<?php
/**
 * Template Name: Schedule Page
 */
get_header();
?>

<header class="page-header">
    <h1 class="page-header__title">Event Schedule</h1>
    <p class="page-header__subtitle">Full timeline for hunters and festival attendees</p>
</header>

<main id="main-content" class="site-main" role="main">

    <!-- Friday Section -->
    <section class="section section--dark" aria-labelledby="friday-schedule-heading">
        <div class="container">
            <h2 class="section-title" id="friday-schedule-heading">Friday, September 11</h2>
            <div class="gold-rule" aria-hidden="true"></div>
            <p class="section-subtitle">Hunt day begins. Check-in, rules meeting, and the hunt window opens.</p>

            <div class="hunt-schedule__day">
                <div class="hunt-schedule__day-header">
                    <span class="hunt-schedule__day-label">Day 1</span>
                    <h3 class="hunt-schedule__day-date">Friday, September 11, 2026</h3>
                </div>
                <ol class="hunt-schedule__list">
                    <li class="hunt-schedule__entry">
                        <div class="hunt-schedule__time">
                            <span class="hunt-schedule__hour">8:00</span>
                            <span class="hunt-schedule__ampm">AM</span>
                        </div>
                        <div class="hunt-schedule__details">
                            <strong class="hunt-schedule__event-name">Hunter Check-In Opens</strong>
                            <p class="hunt-schedule__event-desc">Registration table opens at the Stroud Community Center. Pick up team packets and wristbands.</p>
                        </div>
                    </li>
                    <li class="hunt-schedule__entry">
                        <div class="hunt-schedule__time">
                            <span class="hunt-schedule__hour">12:00</span>
                            <span class="hunt-schedule__ampm">PM</span>
                        </div>
                        <div class="hunt-schedule__details">
                            <strong class="hunt-schedule__event-name">Mandatory Rules Meeting</strong>
                            <p class="hunt-schedule__event-desc">All registered teams must attend. Hunt boundaries, rules, and safety briefing. Stroud Community Center.</p>
                        </div>
                    </li>
                    <li class="hunt-schedule__entry hunt-schedule__entry--primary">
                        <div class="hunt-schedule__time">
                            <span class="hunt-schedule__hour">2:00</span>
                            <span class="hunt-schedule__ampm">PM</span>
                        </div>
                        <div class="hunt-schedule__details">
                            <strong class="hunt-schedule__event-name">Hunt Begins</strong>
                            <p class="hunt-schedule__event-desc">The official 24-hour hunt window opens. All teams disperse to their designated hunting areas.</p>
                        </div>
                    </li>
                </ol>
            </div>

        </div>
    </section>

    <!-- Saturday Section -->
    <section class="section section--brown" aria-labelledby="saturday-schedule-heading">
        <div class="container">
            <h2 class="section-title" id="saturday-schedule-heading">Saturday, September 12</h2>
            <div class="gold-rule" aria-hidden="true"></div>
            <p class="section-subtitle">Festival day — hunt ends, weigh-in, awards, and the fall festival all day.</p>

            <div class="hunt-schedule__day">
                <div class="hunt-schedule__day-header">
                    <span class="hunt-schedule__day-label">Day 2</span>
                    <h3 class="hunt-schedule__day-date">Saturday, September 12, 2026</h3>
                </div>
                <ol class="hunt-schedule__list">
                    <li class="hunt-schedule__entry">
                        <div class="hunt-schedule__time">
                            <span class="hunt-schedule__hour">10:00</span>
                            <span class="hunt-schedule__ampm">AM</span>
                        </div>
                        <div class="hunt-schedule__details">
                            <strong class="hunt-schedule__event-name">Fall Festival Opens</strong>
                            <p class="hunt-schedule__event-desc">Main Street Stroud comes alive. Vendors, food trucks, live music, and the beer garden open to the public.</p>
                        </div>
                    </li>
                    <li class="hunt-schedule__entry hunt-schedule__entry--primary">
                        <div class="hunt-schedule__time">
                            <span class="hunt-schedule__hour">2:00</span>
                            <span class="hunt-schedule__ampm">PM</span>
                        </div>
                        <div class="hunt-schedule__details">
                            <strong class="hunt-schedule__event-name">Hunt Ends &amp; Weigh-In Opens</strong>
                            <p class="hunt-schedule__event-desc">The 24-hour hunt window closes. Weigh-in station opens across from the Stroud Fire Station.</p>
                        </div>
                    </li>
                    <li class="hunt-schedule__entry">
                        <div class="hunt-schedule__time">
                            <span class="hunt-schedule__hour">3:00</span>
                            <span class="hunt-schedule__ampm">PM</span>
                        </div>
                        <div class="hunt-schedule__details">
                            <strong class="hunt-schedule__event-name">Check-In Deadline</strong>
                            <p class="hunt-schedule__event-desc">All teams must complete weigh-in by 3:00 PM. Late arrivals forfeit prize eligibility.</p>
                        </div>
                    </li>
                    <li class="hunt-schedule__entry">
                        <div class="hunt-schedule__time">
                            <span class="hunt-schedule__hour">5:00</span>
                            <span class="hunt-schedule__ampm">PM</span>
                        </div>
                        <div class="hunt-schedule__details">
                            <strong class="hunt-schedule__event-name">Awards Ceremony</strong>
                            <p class="hunt-schedule__event-desc">Winners announced at the Downtown Pavilion. Prize distribution follows immediately.</p>
                        </div>
                    </li>
                    <li class="hunt-schedule__entry">
                        <div class="hunt-schedule__time">
                            <span class="hunt-schedule__hour">8:00</span>
                            <span class="hunt-schedule__ampm">PM</span>
                        </div>
                        <div class="hunt-schedule__details">
                            <strong class="hunt-schedule__event-name">Festival Closes</strong>
                            <p class="hunt-schedule__event-desc">Main Stage final set. Vendors begin closing. See you next year!</p>
                        </div>
                    </li>
                </ol>
            </div>

        </div>
    </section>

</main>

<?php get_footer(); ?>
