<?php

/**
 * Chargement des fichiers CSS et JavaScript.
 *
 * @package Blog
 */

if (! defined('ABSPATH')) {
    exit;
}

/**
 * Retourne une version basée sur la date de modification d'un fichier.
 *
 * En production, cela permet au navigateur de récupérer le fichier
 * lorsqu'il a été modifié.
 *
 * @param string $relative_path Chemin relatif depuis la racine du thème.
 * @return string
 */
function blog_get_asset_version(string $relative_path): string
{
    $file_path = get_theme_file_path($relative_path);

    if (file_exists($file_path)) {
        return (string) filemtime($file_path);
    }

    return (string) wp_get_theme()->get('Version');
}

/**
 * Charge les ressources publiques du thème.
 *
 * @return void
 */
function blog_enqueue_assets(): void
{
    wp_enqueue_style(
        'blog-style',
        get_stylesheet_uri(),
        array(),
        blog_get_asset_version('style.css')
    );

    wp_enqueue_style(
        'blog-fonts',
        get_theme_file_uri('assets/css/fonts.css'),
        array('blog-style'),
        blog_get_asset_version('assets/css/fonts.css')
    );

    wp_enqueue_style(
        'blog-base',
        get_theme_file_uri('assets/css/base.css'),
        array('blog-style'),
        blog_get_asset_version('assets/css/base.css')
    );

    wp_enqueue_style(
        'blog-layout',
        get_theme_file_uri('assets/css/layout.css'),
        array('blog-base'),
        blog_get_asset_version('assets/css/layout.css')
    );

    wp_enqueue_style(
        'blog-components',
        get_theme_file_uri('assets/css/components.css'),
        array('blog-layout'),
        blog_get_asset_version('assets/css/components.css')
    );

    $script_path = get_theme_file_path('assets/js/main.js');

    if (file_exists($script_path)) {
        wp_enqueue_script(
            'blog-script',
            get_theme_file_uri('assets/js/main.js'),
            array(),
            blog_get_asset_version('assets/js/main.js'),
            true
        );
    }
}
add_action('wp_enqueue_scripts', 'blog_enqueue_assets');
