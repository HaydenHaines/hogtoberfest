<?php
$event_start = get_field( 'event_start_date', 'option' ) ?: 'September 11';
$event_end   = get_field( 'event_end_date', 'option' )   ?: 'September 12, 2026';
$reg_url     = hogtoberfest_registration_url();
$theme_uri   = get_template_directory_uri();
?>

<section class="hero" aria-label="Event hero and countdown">

    <div class="hero__inner">

        <img
            src="<?php echo esc_url( $theme_uri . '/assets/images/logo-primary.png' ); ?>"
            alt="Stroud Hogtoberfest — Inaugural Hog Hunt &amp; Fall Festival"
            class="hero__logo"
            width="960"
            height="480"
            loading="eager"
            fetchpriority="high">

        <p class="hero__tagline">
            Hunt<span class="hero__tagline-dot">&bull;</span>Compete<span class="hero__tagline-dot">&bull;</span>Celebrate.
        </p>

        <div class="hero__event-info">
            <span class="hero__date">
                <?php echo esc_html( $event_start . ' – ' . $event_end ); ?>
            </span>
            <span class="hero__location">
                Downtown Stroud, Oklahoma &nbsp;&middot;&nbsp; Route 66
            </span>
        </div>

        <div class="hero__countdown" aria-label="Countdown to hunt start" aria-live="polite">
            <div class="countdown__unit">
                <span class="countdown__number" id="countdown-days">--</span>
                <span class="countdown__label">Days</span>
            </div>

            <span class="countdown__separator" aria-hidden="true">:</span>

            <div class="countdown__unit">
                <span class="countdown__number" id="countdown-hours">--</span>
                <span class="countdown__label">Hours</span>
            </div>

            <span class="countdown__separator" aria-hidden="true">:</span>

            <div class="countdown__unit">
                <span class="countdown__number" id="countdown-minutes">--</span>
                <span class="countdown__label">Minutes</span>
            </div>

            <span class="countdown__separator" aria-hidden="true">:</span>

            <div class="countdown__unit">
                <span class="countdown__number" id="countdown-seconds">--</span>
                <span class="countdown__label">Seconds</span>
            </div>

            <span class="countdown__launched-msg" aria-label="The Hunt Has Begun!">
                The Hunt Has Begun!
            </span>
        </div>

        <a href="<?php echo esc_url( $reg_url ); ?>"
           class="btn btn--register hero__cta"
           target="_blank"
           rel="noopener noreferrer">
            Register Your Team &rarr;
        </a>

    </div>

</section>
