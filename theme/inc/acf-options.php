<?php
// Register the options page in WP Admin sidebar
add_action( 'acf/init', function (): void {
    if ( ! function_exists( 'acf_add_options_page' ) ) return;

    acf_add_options_page( [
        'page_title' => 'Event Settings',
        'menu_title' => 'Event Settings',
        'menu_slug'  => 'hogtoberfest-settings',
        'capability' => 'edit_posts',
        'redirect'   => false,
        'icon_url'   => 'dashicons-calendar-alt',
        'position'   => 5,
    ] );
} );

// Register all annual-update fields
add_action( 'acf/init', function (): void {
    if ( ! function_exists( 'acf_add_local_field_group' ) ) return;

    acf_add_local_field_group( [
        'key'    => 'group_hog_settings',
        'title'  => 'Annual Event Settings',
        'fields' => [

            // ── Dates ──────────────────────────────────────────────
            [
                'key'           => 'field_event_year',
                'label'         => 'Event Year',
                'name'          => 'event_year',
                'type'          => 'number',
                'default_value' => 2026,
                'instructions'  => 'Update each year.',
            ],
            [
                'key'            => 'field_event_start_date',
                'label'          => 'Display Start Date',
                'name'           => 'event_start_date',
                'type'           => 'text',
                'default_value'  => 'September 11',
                'instructions'   => 'Shown in hero and page headers. Example: September 11',
            ],
            [
                'key'           => 'field_event_end_date',
                'label'         => 'Display End Date',
                'name'          => 'event_end_date',
                'type'          => 'text',
                'default_value' => 'September 12, 2026',
                'instructions'  => 'Full date shown on site. Example: September 12, 2026',
            ],
            [
                'key'          => 'field_countdown_target',
                'label'        => 'Countdown Target (Hunt Start)',
                'name'         => 'countdown_target',
                'type'         => 'text',
                'default_value'=> '2026-09-11T14:00:00',
                'instructions' => 'ISO 8601 format: YYYY-MM-DDTHH:MM:SS (Central Time). Hunt begins 2:00 PM.',
            ],

            // ── Entry Fees ─────────────────────────────────────────
            [
                'key'           => 'field_entry_fee_2man',
                'label'         => 'Entry Fee — 2-Man Team ($)',
                'name'          => 'entry_fee_2man',
                'type'          => 'number',
                'default_value' => 250,
                'prepend'       => '$',
            ],
            [
                'key'           => 'field_entry_fee_per_additional',
                'label'         => 'Entry Fee — Per Additional Hunter ($)',
                'name'          => 'entry_fee_per_additional',
                'type'          => 'number',
                'default_value' => 75,
                'prepend'       => '$',
            ],
            [
                'key'           => 'field_side_pot_fee',
                'label'         => 'Side Pot Entry Fee ($)',
                'name'          => 'side_pot_fee',
                'type'          => 'number',
                'default_value' => 40,
                'prepend'       => '$',
            ],

            // ── Registration ───────────────────────────────────────
            [
                'key'         => 'field_registration_url',
                'label'       => 'Registration URL',
                'name'        => 'registration_url',
                'type'        => 'url',
                'placeholder' => 'https://your-ticketing-service.com/hogtoberfest',
                'instructions'=> 'Link to third-party ticketing service. All "Register" buttons point here.',
            ],

            // ── Sponsors ───────────────────────────────────────────
            [
                'key'        => 'field_sponsors',
                'label'      => 'Sponsors',
                'name'       => 'sponsors',
                'type'       => 'repeater',
                'layout'     => 'table',
                'button_label' => 'Add Sponsor',
                'sub_fields' => [
                    [
                        'key'   => 'field_sponsor_name',
                        'label' => 'Name',
                        'name'  => 'sponsor_name',
                        'type'  => 'text',
                    ],
                    [
                        'key'           => 'field_sponsor_logo',
                        'label'         => 'Logo',
                        'name'          => 'sponsor_logo',
                        'type'          => 'image',
                        'return_format' => 'array',
                        'preview_size'  => 'thumbnail',
                    ],
                    [
                        'key'  => 'field_sponsor_url',
                        'label'=> 'Website URL',
                        'name' => 'sponsor_url',
                        'type' => 'url',
                    ],
                ],
            ],

        ],
        'location' => [ [
            [ 'param' => 'options_page', 'operator' => '==', 'value' => 'hogtoberfest-settings' ],
        ] ],
    ] );
} );
