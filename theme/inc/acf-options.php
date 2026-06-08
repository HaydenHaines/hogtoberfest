<?php
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Get a Hogtoberfest site option. Drop-in replacement for get_field( $key, 'option' ).
 */
function hog_option( string $key, $default = '' ) {
    return get_option( 'hog_' . $key, $default );
}

/**
 * Returns the sponsors array with logo data resolved from attachment IDs.
 * Matches the data structure the templates expect from ACF's repeater + image field.
 */
function hog_option_sponsors(): array {
    $raw = get_option( 'hog_sponsors', [] );
    if ( ! is_array( $raw ) ) return [];

    $sponsors = [];
    foreach ( $raw as $row ) {
        $logo = null;
        if ( ! empty( $row['sponsor_logo_id'] ) ) {
            $id  = (int) $row['sponsor_logo_id'];
            $src = wp_get_attachment_image_src( $id, 'full' );
            if ( $src ) {
                $logo = [
                    'url'    => $src[0],
                    'width'  => $src[1],
                    'height' => $src[2],
                    'alt'    => (string) get_post_meta( $id, '_wp_attachment_image_alt', true ),
                ];
            }
        }
        $sponsors[] = [
            'sponsor_name' => $row['sponsor_name'] ?? '',
            'sponsor_logo' => $logo,
            'sponsor_url'  => $row['sponsor_url']  ?? '',
        ];
    }
    return $sponsors;
}

// ── Admin menu ─────────────────────────────────────────────────────────────

add_action( 'admin_menu', function (): void {
    add_menu_page(
        'Event Settings',
        'Event Settings',
        'edit_posts',
        'hogtoberfest-settings',
        'hog_render_settings_page',
        'dashicons-calendar-alt',
        5
    );
} );

add_action( 'admin_enqueue_scripts', function ( string $hook ): void {
    if ( $hook !== 'toplevel_page_hogtoberfest-settings' ) return;
    wp_enqueue_media();
    wp_enqueue_script(
        'hog-admin-settings',
        get_template_directory_uri() . '/assets/js/admin-settings.js',
        [],
        wp_get_theme()->get( 'Version' ),
        true
    );
} );

// ── Settings registration ───────────────────────────────────────────────────

add_action( 'admin_init', function (): void {
    $scalar_keys = [
        'event_year', 'event_start_date', 'event_end_date', 'countdown_target',
        'entry_fee_2man', 'entry_fee_per_additional', 'side_pot_fee',
        'registration_url', 'registration_open',
        'map_embed_url', 'map_directions_url',
    ];
    foreach ( $scalar_keys as $key ) {
        register_setting( 'hog_settings_group', 'hog_' . $key );
    }
    register_setting( 'hog_settings_group', 'hog_sponsors', [
        'sanitize_callback' => 'hog_sanitize_sponsors',
    ] );
} );

function hog_sanitize_sponsors( $value ): array {
    if ( is_string( $value ) ) {
        $value = json_decode( stripslashes( $value ), true );
    }
    if ( ! is_array( $value ) ) return [];

    $clean = [];
    foreach ( $value as $row ) {
        if ( empty( $row['sponsor_name'] ) && empty( $row['sponsor_logo_id'] ) ) continue;
        $clean[] = [
            'sponsor_name'    => sanitize_text_field( $row['sponsor_name'] ?? '' ),
            'sponsor_logo_id' => absint( $row['sponsor_logo_id'] ?? 0 ),
            'sponsor_url'     => esc_url_raw( $row['sponsor_url'] ?? '' ),
        ];
    }
    return $clean;
}

// ── Settings page renderer ──────────────────────────────────────────────────

function hog_render_settings_page(): void {
    if ( ! current_user_can( 'edit_posts' ) ) return;

    $raw_sponsors = get_option( 'hog_sponsors', [] );
    if ( ! is_array( $raw_sponsors ) ) $raw_sponsors = [];

    // Attach preview URLs so JS can render existing logos
    $sponsors_for_js = array_map( function ( $row ) {
        $preview_url = '';
        if ( ! empty( $row['sponsor_logo_id'] ) ) {
            $src = wp_get_attachment_image_src( (int) $row['sponsor_logo_id'], 'thumbnail' );
            if ( $src ) $preview_url = $src[0];
        }
        return array_merge( $row, [ 'sponsor_logo_url' => $preview_url ] );
    }, $raw_sponsors );

    $f = fn( $key, $default = '' ) => esc_attr( get_option( 'hog_' . $key, $default ) );
    ?>
    <div class="wrap">
        <h1>Event Settings</h1>
        <form method="post" action="options.php" id="hog-settings-form">
            <?php settings_fields( 'hog_settings_group' ); ?>
            <input type="hidden" name="hog_sponsors" id="hog-sponsors-json"
                   value="<?php echo esc_attr( wp_json_encode( $sponsors_for_js ) ); ?>">

            <h2>Event Dates</h2>
            <table class="form-table">
                <tr>
                    <th><label for="hog_event_year">Event Year</label></th>
                    <td><input type="number" id="hog_event_year" name="hog_event_year"
                               value="<?php echo $f( 'event_year', '2026' ); ?>" class="small-text"></td>
                </tr>
                <tr>
                    <th><label for="hog_event_start_date">Display Start Date</label></th>
                    <td>
                        <input type="text" id="hog_event_start_date" name="hog_event_start_date"
                               value="<?php echo $f( 'event_start_date', 'September 11' ); ?>" class="regular-text">
                        <p class="description">Shown in hero and headers. Example: <code>September 11</code></p>
                    </td>
                </tr>
                <tr>
                    <th><label for="hog_event_end_date">Display End Date</label></th>
                    <td>
                        <input type="text" id="hog_event_end_date" name="hog_event_end_date"
                               value="<?php echo $f( 'event_end_date', 'September 12, 2026' ); ?>" class="regular-text">
                        <p class="description">Full date. Example: <code>September 12, 2026</code></p>
                    </td>
                </tr>
                <tr>
                    <th><label for="hog_countdown_target">Countdown Target (Hunt Start)</label></th>
                    <td>
                        <input type="text" id="hog_countdown_target" name="hog_countdown_target"
                               value="<?php echo $f( 'countdown_target', '2026-09-11T14:00:00' ); ?>" class="regular-text">
                        <p class="description">ISO 8601, Central Time. Example: <code>2026-09-11T14:00:00</code></p>
                    </td>
                </tr>
            </table>

            <h2>Entry Fees</h2>
            <table class="form-table">
                <tr>
                    <th><label for="hog_entry_fee_2man">2-Man Team Entry Fee ($)</label></th>
                    <td><input type="number" id="hog_entry_fee_2man" name="hog_entry_fee_2man"
                               value="<?php echo $f( 'entry_fee_2man', '250' ); ?>" class="small-text"></td>
                </tr>
                <tr>
                    <th><label for="hog_entry_fee_per_additional">Per Additional Hunter ($)</label></th>
                    <td><input type="number" id="hog_entry_fee_per_additional" name="hog_entry_fee_per_additional"
                               value="<?php echo $f( 'entry_fee_per_additional', '75' ); ?>" class="small-text"></td>
                </tr>
                <tr>
                    <th><label for="hog_side_pot_fee">Side Pot Entry Fee ($)</label></th>
                    <td><input type="number" id="hog_side_pot_fee" name="hog_side_pot_fee"
                               value="<?php echo $f( 'side_pot_fee', '40' ); ?>" class="small-text"></td>
                </tr>
            </table>

            <h2>Registration</h2>
            <table class="form-table">
                <tr>
                    <th><label for="hog_registration_url">Registration URL</label></th>
                    <td>
                        <input type="url" id="hog_registration_url" name="hog_registration_url"
                               value="<?php echo $f( 'registration_url' ); ?>" class="large-text">
                        <p class="description">All "Register" buttons across the site point here.</p>
                    </td>
                </tr>
                <tr>
                    <th>Registration Open</th>
                    <td>
                        <label>
                            <input type="checkbox" name="hog_registration_open" value="1"
                                   <?php checked( 1, get_option( 'hog_registration_open', 0 ) ); ?>>
                            Registration is currently open
                        </label>
                    </td>
                </tr>
            </table>

            <h2>Location / Map</h2>
            <table class="form-table">
                <tr>
                    <th><label for="hog_map_embed_url">Google Maps Embed URL</label></th>
                    <td>
                        <input type="url" id="hog_map_embed_url" name="hog_map_embed_url"
                               value="<?php echo $f( 'map_embed_url' ); ?>" class="large-text">
                        <p class="description">The <code>src</code> URL from a Google Maps embed iframe.</p>
                    </td>
                </tr>
                <tr>
                    <th><label for="hog_map_directions_url">Directions URL</label></th>
                    <td>
                        <input type="url" id="hog_map_directions_url" name="hog_map_directions_url"
                               value="<?php echo $f( 'map_directions_url' ); ?>" class="large-text">
                        <p class="description">Google Maps link for the "Get Directions" button.</p>
                    </td>
                </tr>
            </table>

            <h2>Sponsors</h2>
            <p class="description">Logos appear in the sponsor bar and on the Sponsors page.</p>
            <div id="hog-sponsors-repeater" style="margin-top:12px">
                <div id="hog-sponsor-rows"></div>
                <button type="button" class="button" id="hog-add-sponsor" style="margin-top:8px">
                    + Add Sponsor
                </button>
            </div>

            <?php submit_button( 'Save Event Settings' ); ?>
        </form>
    </div>

    <script id="hog-sponsor-row-tpl" type="text/html">
        <div class="hog-sponsor-row" style="border:1px solid #ddd;padding:14px 14px 10px;margin-bottom:10px;background:#fff;position:relative;max-width:700px">
            <button type="button" class="button button-small hog-remove-sponsor"
                    style="position:absolute;top:10px;right:10px">Remove</button>
            <p style="margin:0 0 10px">
                <label style="display:block;font-weight:600;margin-bottom:4px">Sponsor Name</label>
                <input type="text" class="hog-sponsor-name regular-text" placeholder="ACME Corp">
            </p>
            <p style="margin:0 0 10px">
                <label style="display:block;font-weight:600;margin-bottom:4px">Logo</label>
                <button type="button" class="button hog-upload-logo">Upload / Select Logo</button>
                <span class="hog-logo-preview" style="display:inline-block;margin-left:10px;vertical-align:middle"></span>
                <input type="hidden" class="hog-sponsor-logo-id" value="">
            </p>
            <p style="margin:0">
                <label style="display:block;font-weight:600;margin-bottom:4px">Website URL</label>
                <input type="url" class="hog-sponsor-url large-text" placeholder="https://">
            </p>
        </div>
    </script>
    <?php
}
