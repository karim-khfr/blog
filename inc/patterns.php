<?php

/**
 * Enregistrement des compositions du thème.
 *
 * @package Blog
 */

if (! defined('ABSPATH')) {
    exit;
}

/**
 * Enregistre les compositions du thème.
 *
 * @return void
 */
function blog_register_patterns(): void
{
    register_block_pattern(
        'blog/hero',
        array(
            'title'       => __('Hero principal', 'blog'),
            'categories' => array('banner'),
            'description' => __('Hero principal de la page d’accueil.', 'blog'),
            'content'     => '
                <!-- wp:group {"className":"hero","align":"full","layout":{"type":"default"}} -->
                <div class="wp-block-group alignfull hero">

                    <!-- wp:group {"className":"hero__inner","layout":{"type":"default"}} -->
                    <div class="wp-block-group hero__inner">

                        <!-- wp:paragraph {"className":"hero__eyebrow"} -->
                        <p class="hero__eyebrow">Développement web · Numérique · Éducation</p>
                        <!-- /wp:paragraph -->

                        <!-- wp:heading {"level":1,"className":"hero__title"} -->
                        <h1 class="wp-block-heading hero__title">Karim Khenifer</h1>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"className":"hero__lead"} -->
                        <p class="hero__lead">Développeur web et assistant de direction, je partage ici mes projets, mes retours d’expérience et mes réflexions autour du numérique et des nouvelles technologies.</p>
                        <!-- /wp:paragraph -->

                        <!-- wp:buttons {"className":"hero__actions"} -->
                        <div class="wp-block-buttons hero__actions">

                            <!-- wp:button -->
                            <div class="wp-block-button">
                                <a class="wp-block-button__link wp-element-button" href="/portfolio/">Voir mon portfolio</a>
                            </div>
                            <!-- /wp:button -->

                            <!-- wp:button {"className":"is-style-outline"} -->
                            <div class="wp-block-button is-style-outline">
                                <a class="wp-block-button__link wp-element-button" href="/blog/">Lire mes articles</a>
                            </div>
                            <!-- /wp:button -->

                        </div>
                        <!-- /wp:buttons -->

                    </div>
                    <!-- /wp:group -->

                </div>
                <!-- /wp:group -->
            ',
        )
    );

    register_block_pattern(
        'blog/presentation',
        array(
            'title'       => __('Présentation', 'blog'),
            'categories'  => array('about'),
            'description' => __('Présentation personnelle pour la page d’accueil.', 'blog'),
            'content'     => '
            <!-- wp:group {"className":"presentation-section","align":"full","layout":{"type":"default"}} -->
            <div class="wp-block-group alignfull presentation-section">

                <!-- wp:columns {"className":"presentation-section__inner","verticalAlignment":"center"} -->
                <div class="wp-block-columns are-vertically-aligned-center presentation-section__inner">

                    <!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
                    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">

                        <!-- wp:paragraph {"className":"presentation-section__eyebrow"} -->
                        <p class="presentation-section__eyebrow">
                            À propos
                        </p>
                        <!-- /wp:paragraph -->

                        <!-- wp:heading {"level":2,"className":"presentation-section__title"} -->
                        <h2 class="wp-block-heading presentation-section__title">
                            Développement web, numérique et service public
                        </h2>
                        <!-- /wp:heading -->

                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
                    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%">

                        <!-- wp:paragraph {"className":"presentation-section__lead"} -->
                        <p class="presentation-section__lead">
                            Développeur web et assistant de direction, je m’intéresse aux usages du numérique, aux nouvelles technologies et à leur place dans l’Éducation nationale.
                        </p>
                        <!-- /wp:paragraph -->

                        <!-- wp:paragraph -->
                        <p>
                            Ce site rassemble mes projets, mes expérimentations et mes retours d’expérience, avec l’objectif de partager des solutions utiles, accessibles et durables.
                        </p>
                        <!-- /wp:paragraph -->

                        <!-- wp:buttons {"className":"presentation-section__actions"} -->
                        <div class="wp-block-buttons presentation-section__actions">

                            <!-- wp:button {"className":"is-style-outline"} -->
                            <div class="wp-block-button is-style-outline">
                                <a class="wp-block-button__link wp-element-button" href="/contact/">
                                    Me contacter
                                </a>
                            </div>
                            <!-- /wp:button -->

                        </div>
                        <!-- /wp:buttons -->

                    </div>
                    <!-- /wp:column -->

                </div>
                <!-- /wp:columns -->

            </div>
            <!-- /wp:group -->
        ',
        )
    );

    register_block_pattern(
        'blog/latest-posts',
        array(
            'title'       => __('Derniers articles', 'blog'),
            'categories' => array('query'),
            'description' => __('Affiche les trois derniers articles du blog.', 'blog'),
            'content'     => '
            <!-- wp:group {"className":"latest-posts","align":"full","layout":{"type":"default"}} -->
            <div class="wp-block-group alignfull latest-posts">

                <!-- wp:group {"className":"latest-posts__inner","layout":{"type":"default"}} -->
                <div class="wp-block-group latest-posts__inner">

                    <!-- wp:group {"className":"latest-posts__header","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
                    <div class="wp-block-group latest-posts__header">

                        <!-- wp:heading {"level":2,"className":"latest-posts__title"} -->
                        <h2 class="wp-block-heading latest-posts__title">
                            Derniers articles
                        </h2>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"className":"latest-posts__link"} -->
                        <p class="latest-posts__link">
                            <a href="/blog/">Voir tous les articles →</a>
                        </p>
                        <!-- /wp:paragraph -->

                    </div>
                    <!-- /wp:group -->

                    <!-- wp:query {"queryId":10,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"blog-posts-query"} -->
                    <div class="wp-block-query blog-posts-query">

                        <!-- wp:post-template {"layout":{"type":"grid","columnCount":3},"className":"blog-posts-grid"} -->

                            <!-- wp:group {"className":"is-style-blog-card","layout":{"type":"default"}} -->
                            <div class="wp-block-group is-style-blog-card">

                                <!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","height":"auto"} /-->

                                <!-- wp:group {"className":"blog-card__content","layout":{"type":"constrained"}} -->
                                <div class="wp-block-group blog-card__content">

                                    <!-- wp:post-terms {"term":"category"} /-->

                                    <!-- wp:post-title {"isLink":true,"level":3} /-->

                                    <!-- wp:post-excerpt {"moreText":"Lire l’article"} /-->

                                    <!-- wp:post-date /-->

                                </div>
                                <!-- /wp:group -->

                            </div>
                            <!-- /wp:group -->

                        <!-- /wp:post-template -->

                        <!-- wp:query-no-results -->
                            <!-- wp:paragraph -->
                            <p>Aucun article n’est disponible pour le moment.</p>
                            <!-- /wp:paragraph -->
                        <!-- /wp:query-no-results -->

                    </div>
                    <!-- /wp:query -->

                </div>
                <!-- /wp:group -->

            </div>
            <!-- /wp:group -->
        ',
        )
    );

    register_block_pattern(
        'blog/cta',
        array(
            'title'       => __('Appel à l’action', 'blog'),
            'categories'  => array('call-to-action'),
            'description' => __('Bloc d’appel à l’action réutilisable.', 'blog'),
            'content'     => '
            <!-- wp:group {"className":"cta-section","align":"full","layout":{"type":"default"}} -->
            <div class="wp-block-group alignfull cta-section">

                <!-- wp:group {"className":"cta-section__inner","layout":{"type":"default"}} -->
                <div class="wp-block-group cta-section__inner">

                    <!-- wp:paragraph {"className":"cta-section__eyebrow"} -->
                    <p class="cta-section__eyebrow">
                        Travaillons ensemble
                    </p>
                    <!-- /wp:paragraph -->

                    <!-- wp:heading {"level":2,"className":"cta-section__title"} -->
                    <h2 class="wp-block-heading cta-section__title">
                        Un projet, une idée, une collaboration ?
                    </h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"className":"cta-section__text"} -->
                    <p class="cta-section__text">
                        Échangeons autour du développement web, du numérique ou de vos besoins.
                    </p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"className":"cta-section__actions"} -->
                    <div class="wp-block-buttons cta-section__actions">

                        <!-- wp:button -->
                        <div class="wp-block-button">
                            <a class="wp-block-button__link wp-element-button" href="/contact/">
                                Me contacter
                            </a>
                        </div>
                        <!-- /wp:button -->

                    </div>
                    <!-- /wp:buttons -->

                </div>
                <!-- /wp:group -->

            </div>
            <!-- /wp:group -->
        ',
        )
    );

    register_block_pattern(
        'blog/contact',
        array(
            'title'       => __('Contact', 'blog'),
            'categories'  => array('contact'),
            'description' => __('Section de contact réutilisable.', 'blog'),
            'content'     => '
            <!-- wp:group {"className":"contact-section","align":"full","layout":{"type":"default"}} -->
            <div class="wp-block-group alignfull contact-section">

                <!-- wp:columns {"className":"contact-section__inner","verticalAlignment":"center"} -->
                <div class="wp-block-columns are-vertically-aligned-center contact-section__inner">

                    <!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
                    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">

                        <!-- wp:paragraph {"className":"contact-section__eyebrow"} -->
                        <p class="contact-section__eyebrow">
                            Contact
                        </p>
                        <!-- /wp:paragraph -->

                        <!-- wp:heading {"level":2,"className":"contact-section__title"} -->
                        <h2 class="wp-block-heading contact-section__title">
                            Échangeons
                        </h2>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"className":"contact-section__text"} -->
                        <p class="contact-section__text">
                            Une question, un projet ou simplement l’envie d’échanger autour du web et du numérique ? Vous pouvez me contacter directement.
                        </p>
                        <!-- /wp:paragraph -->

                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
                    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">

                        <!-- wp:paragraph {"className":"contact-section__email"} -->
                        <p class="contact-section__email">
                            <a href="mailto:karim.khenifer@ac-grenoble.fr">
                                karim.khenifer@ac-grenoble.fr
                            </a>
                        </p>
                        <!-- /wp:paragraph -->

                        <!-- wp:social-links {"openInNewTab":true,"className":"is-style-logos-only contact-section__socials"} -->
                        <ul class="wp-block-social-links is-style-logos-only contact-section__socials">

                            <!-- wp:social-link {"url":"https://github.com/karim-khfr","service":"github"} /-->
                            <!-- wp:social-link {"url":"https://bsky.app/profile/VOTRE-PROFIL","service":"bluesky"} /-->
                            <!-- wp:social-link {"url":"https://www.linkedin.com/in/VOTRE-PROFIL","service":"linkedin"} /-->
                            <!-- wp:social-link {"url":"https://www.instagram.com/VOTRE-PROFIL","service":"instagram"} /-->

                        </ul>
                        <!-- /wp:social-links -->

                    </div>
                    <!-- /wp:column -->

                </div>
                <!-- /wp:columns -->

            </div>
            <!-- /wp:group -->
        ',
        )
    );
}
add_action('init', 'blog_register_patterns');
