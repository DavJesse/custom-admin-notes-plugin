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

function can_display_dashboard_widget() {
    // Check if the user has submitted the form.
    if (isset($_POST['can_admin_note'])) {
        // Verify nonce for security.
        check_admin_referer('can_save_admin_note', 'can_admin_note_nonce');
        
        // Sanitize and save the note.
        $note = sanitize_textarea_field($_POST['can_admin_note']);
        update_option('can_admin_note', $note);
    }

    // Retrieve the saved note.
    $note = get_option('can_admin_note', '');

    // Display the form.
    echo '<form method="post">';
    wp_nonce_field('can_save_admin_note', 'can_admin_note_nonce');
    echo '<textarea name="can_admin_note" rows="5" style="width:100%;">' . esc_textarea($note) . '</textarea>';
    echo '<p><input type="submit" class="button-primary" value="Save Note"></p>';
    echo '</form>';
}

// Enqueue admin styles
function can_enqueue_admin_styles($hook) {
    // Only enqueue on the dashboard page.
    if ($hook !== 'index.php') {
        return;
    }
    wp_enqueue_style('can_admin_styles', plugin_dir_url(__FILE__) . 'css/admin-style.css');
}
add_action('admin_enqueue_scripts', 'can_enqueue_admin_styles');

// Register settings
function can_register_settings() {
    register_setting('can_settings_group', 'can_widget_title');
    register_setting('can_settings_group', 'can_widget_visibility');
}
add_action('admin_init', 'can_register_settings');

// Adds settings page
function can_add_settings_page() {
    add_options_page(
        'Custom Admin Notes Settings',
        'Admin Notes',
        'manage_options',
        'custom-admin-notes-settings',
        'can_render_settings_page'
    );
}
add_action('admin_menu', 'can_add_settings_page');

