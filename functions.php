<?php

/**
 * Fonctions du thème.
 *
 * @package MonTheme
 */

if (! defined('ABSPATH')) {
    exit;
}

/**
 * Charge les fichiers CSS et JavaScript du thème.
 */
function mon_theme_enqueue_assets(): void
{
    wp_enqueue_style(
        'mon-theme-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );

    wp_enqueue_script(
        'mon-theme-script',
        get_theme_file_uri('assets/js/main.js'),
        array(),
        wp_get_theme()->get('Version'),
        true
    );
}
add_action('wp_enqueue_scripts', 'mon_theme_enqueue_assets');
