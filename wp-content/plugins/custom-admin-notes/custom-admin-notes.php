<?php
/**
 * Plugin Name: Custom Admin Notes
 * Description: Adds a custom dashboard widget for admin-only notes.
 * Version: 1.0
 * Author: David Jesse Odhiambo
 * License: GPL2
 */

 function can_add_dashboard_widget() {
    wp_add_dashboard_widget(
        'custom_admin_notes_widget',          // Widget slug.
        'Custom Admin Notes',                 // Title.
        'can_display_dashboard_widget'        // Display function.
    );
}
add_action('wp_dashboard_setup', 'can_add_dashboard_widget');
