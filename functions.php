<?php

if (! function_exists('ink_starter_public_scripts')) {
    /**
     * Enqueue public scripts and styles
     */
    function ink_starter_public_scripts() {
        $theme = wp_get_theme();

        // CSS
        wp_enqueue_style('style', get_parent_theme_file_uri('assets/css/app.css'), [], $theme->get('Version'));

        // Scripts
        wp_enqueue_script('main', get_parent_theme_file_uri('assets/js/app.js'), [], $theme->get('Version'), true);
    }
}
add_action('wp_enqueue_scripts', 'ink_starter_public_scripts');
