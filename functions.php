<?php

// Ajouter la prise en charge des images mises en avant
add_theme_support('post-thumbnails');

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support('title-tag');

register_nav_menus(array(
    'main' => 'Menu Principal',
    'footer' => 'Bas de page',
));

// Types de publication et taxonomies
require_once get_template_directory() . '/inc/cpt.php';

require_once get_template_directory() . '/inc/colors.php';

add_filter('get_the_archive_title', function ($title) {
    if (is_category()) {
        $title = single_cat_title('', false);
    } elseif (is_tag()) {
        $title = single_tag_title('', false);
    } elseif (is_author()) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    } elseif (is_tax()) { //for custom post types
        $title = sprintf(__('%1$s'), single_term_title('', false));
    } elseif (is_post_type_archive()) {
        $title = post_type_archive_title('', false);
    }
    return $title;
});
// Enregistrement des ressources CSS et Js du thème
function lafourmie_register_assets()
{
    // Ajout de jQuery
    wp_enqueue_script('jquery');

    // Ajout de Overlay ScrollBar
    wp_enqueue_script(
        'overlayScrollbars',
        get_template_directory_uri() . '/js/lib/jquery.overlayScrollbars.min.js',
        array('jquery'),
        '1.13.0',
        true
    );

    // Ajout du JS du thème
    wp_enqueue_script(
        'lafourmie',
        get_template_directory_uri() . '/js/script.js',
        array('jquery'),
        '1.0',
        true
    );

    // Déclarer style.css à la racine du thème
    wp_enqueue_style(
        'lafourmie-default',
        get_stylesheet_uri(),
        array(),
        '1.0'
    );

    // Ajout du CSS de Overlay ScrollBar
    wp_enqueue_style(
        'OverlayScrollbars',
        get_template_directory_uri() . '/css/lib/OverlayScrollbars.min.css',
        array(),
        '1.13.0'
    );
    // Ajout du CSS -- issue d'un scss
    wp_enqueue_style(
        'lafourmie',
        get_template_directory_uri() . '/css/main.css',
        array(),
        '1.0'
    );

}
add_action('wp_enqueue_scripts', 'lafourmie_register_assets');

// Ajout du SVG de l'entête de site
register_default_headers(array(
    'fourmi-e-logo' => array(
        'url' => get_template_directory_uri() . '/assets/img/logo.svg',
        'thumbnail_url' => get_template_directory_uri() . '/assets/img/logo.svg',
        'description' => __('Kami Logo', 'fun'),
    ),
));

function custom_header_setup()
{

    add_theme_support('custom-header', array(
        'default-image' => get_template_directory_uri() . '/assets/img/logo.svg',
        'width' => 330,
        'height' => 84,
        'header-selector' => '.site-title a',
        'header-text' => false,
    ));
}

add_action('after_setup_theme', 'custom_header_setup');

function add_editor_style_init() {
    add_theme_support( 'editor-styles' );
    add_editor_style( trailingslashit( get_template_directory_uri() ) . '/css/editor.css' );
}
add_action( 'init', 'add_editor_style_init' );