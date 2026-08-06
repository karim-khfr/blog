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
        array('blog-fonts'),
        blog_get_asset_version('assets/css/base.css')
    );

    wp_enqueue_style(
        'blog-layout',
        get_theme_file_uri('assets/css/layout.css'),
        array('blog-base'),
        blog_get_asset_version('assets/css/layout.css')
    );

    wp_enqueue_style(
        'blog-buttons',
        get_theme_file_uri('assets/css/components/buttons.css'),
        array('blog-layout'),
        blog_get_asset_version('assets/css/components/buttons.css')
    );

    wp_enqueue_style(
        'blog-cards',
        get_theme_file_uri('assets/css/components/cards.css'),
        array('blog-buttons'),
        blog_get_asset_version('assets/css/components/cards.css')
    );

    wp_enqueue_style(
        'blog-forms',
        get_theme_file_uri('assets/css/components/forms.css'),
        array('blog-cards'),
        blog_get_asset_version('assets/css/components/forms.css')
    );

    wp_enqueue_style(
        'blog-navigation',
        get_theme_file_uri('assets/css/components/navigation.css'),
        array('blog-forms'),
        blog_get_asset_version('assets/css/components/navigation.css')
    );

    wp_enqueue_style(
        'blog-footer',
        get_theme_file_uri('assets/css/components/footer.css'),
        array('blog-navigation'),
        blog_get_asset_version('assets/css/components/footer.css')
    );

    wp_enqueue_style(
        'blog-badges',
        get_theme_file_uri('assets/css/components/badges.css'),
        array('blog-footer'),
        blog_get_asset_version('assets/css/components/badges.css')
    );

    wp_enqueue_style(
        'blog-pagination',
        get_theme_file_uri('assets/css/components/pagination.css'),
        array('blog-badges'),
        blog_get_asset_version('assets/css/components/pagination.css')
    );

    wp_enqueue_style(
        'blog-utilities',
        get_theme_file_uri('assets/css/utilities.css'),
        array('blog-pagination'),
        blog_get_asset_version('assets/css/utilities.css')
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
