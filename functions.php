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
