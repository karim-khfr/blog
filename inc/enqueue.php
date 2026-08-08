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
        'blog-hero',
        get_theme_file_uri('assets/css/components/hero.css'),
        array('blog-buttons'),
        blog_get_asset_version('assets/css/components/hero.css')
    );

    wp_enqueue_style(
        'blog-presentation',
        get_theme_file_uri('assets/css/components/presentation.css'),
        array('blog-hero'),
        blog_get_asset_version('assets/css/components/presentation.css')
    );

    wp_enqueue_style(
        'blog-cta',
        get_theme_file_uri('assets/css/components/cta.css'),
        array('blog-presentation'),
        blog_get_asset_version('assets/css/components/cta.css')
    );

    wp_enqueue_style(
        'blog-contact',
        get_theme_file_uri('assets/css/components/contact.css'),
        array('blog-cta'),
        blog_get_asset_version('assets/css/components/contact.css')
    );

    wp_enqueue_style(
        'blog-cards',
        get_theme_file_uri('assets/css/components/cards.css'),
        array('blog-contact'),
        blog_get_asset_version('assets/css/components/cards.css')
    );

    wp_enqueue_style(
        'blog-portfolio',
        get_theme_file_uri('assets/css/components/portfolio.css'),
        array('blog-cards'),
        blog_get_asset_version('assets/css/components/portfolio.css')
    );

    wp_enqueue_style(
        'blog-forms',
        get_theme_file_uri('assets/css/components/forms.css'),
        array('blog-portfolio'),
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
        'blog-metadata',
        get_theme_file_uri('assets/css/components/metadata.css'),
        array('blog-badges'),
        blog_get_asset_version('assets/css/components/metadata.css')
    );

    wp_enqueue_style(
        'blog-pagination',
        get_theme_file_uri('assets/css/components/pagination.css'),
        array('blog-metadata'),
        blog_get_asset_version('assets/css/components/pagination.css')
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
