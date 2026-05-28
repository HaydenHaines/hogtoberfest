<?php
require_once get_template_directory() . '/inc/theme-setup.php';
require_once get_template_directory() . '/inc/enqueue.php';
require_once get_template_directory() . '/inc/acf-options.php';

/** Returns the registration URL from ACF options, or '#' if not yet set. */
function hogtoberfest_registration_url(): string {
    $url = get_field( 'registration_url', 'option' );
    return $url ?: '#';
}

/** Returns a formatted entry fee based on team size. */
function hogtoberfest_entry_fee( int $hunters ): string {
    $base       = (int) get_field( 'entry_fee_2man', 'option' ) ?: 250;
    $additional = (int) get_field( 'entry_fee_per_additional', 'option' ) ?: 75;
    $extra      = max( 0, $hunters - 2 );
    return '$' . number_format( $base + ( $extra * $additional ) );
}

/** Returns the side pot entry fee. */
function hogtoberfest_side_pot_fee(): string {
    $fee = (int) get_field( 'side_pot_fee', 'option' ) ?: 40;
    return '$' . $fee;
}

add_action( 'wp_footer', function (): void {
    ?>
    <script>
    (function () {
        const toggle = document.querySelector('.nav-toggle');
        const nav    = document.querySelector('.primary-nav');
        if (!toggle || !nav) return;
        toggle.addEventListener('click', function () {
            const open = this.getAttribute('aria-expanded') === 'true';
            this.setAttribute('aria-expanded', String(!open));
            nav.classList.toggle('is-open', !open);
        });
    }());
    </script>
    <?php
} );
