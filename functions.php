<?php

// Ajouter la prise en charge des images mises en avant
add_theme_support('post-thumbnails');

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support('title-tag');

register_nav_menus( array(
	'main' => 'Menu Principal',
	'footer' => 'Bas de page',
) );

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
add_action( 'wp_enqueue_scripts', 'lafourmie_register_assets' );