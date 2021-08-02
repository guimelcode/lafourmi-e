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

// Palette de couleur du thème
function mytheme_setup_theme_supported_features()
{

    $color_palette = array(

        array(
            'name' => __('Blue', 'wpastra'),
            'slug' => 'monte-blue',
            'color' => '#406186',
        ),
        array(
            'name' => __('Pink', 'wpastra'),
            'slug' => 'monte-pink',
            'color' => '#df7c88',
        ),
        array(
            'name' => __('Yellow', 'wpastra'),
            'slug' => 'monte-yellow',
            'color' => '#ffc372',
        ),
        array(
            'name' => __('Purple', 'wpastra'),
            'slug' => 'monte-purple',
            'color' => '#b5aebe',
        ),
        array(
            'name' => __('Light Yellow', 'wpastra'),
            'slug' => 'monte-light-yellow',
            'color' => '#ffd49c',
        ),
        array(
            'name' => __('Light Pink', 'wpastra'),
            'slug' => 'monte-light-pink',
            'color' => '#e8a3ab',
        ),
        array(
            'name' => __('Grey', 'wpastra'),
            'slug' => 'monte-grey',
            'color' => '#393939',
        ),
        array(
            'name' => __('White', 'wpastra'),
            'slug' => 'monte-white',
            'color' => '#ffffff',
        ),

    );
    add_theme_support('editor-color-palette', $color_palette);
}
add_action('after_setup_theme', 'mytheme_setup_theme_supported_features');

// Enregistrement des ressources CSS et Js du thème
function lafourmie_register_assets()
{
    // Ajout de jQuery
    wp_enqueue_script('jquery');

    // Ajout du JS
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

    // Ajout du CSS -- issue d'un scss
    wp_enqueue_style(
        'lafourmie',
        get_template_directory_uri() . '/css/main.css',
        array(),
        '1.0'
    );
}
add_action('wp_enqueue_scripts', 'lafourmie_register_assets');
