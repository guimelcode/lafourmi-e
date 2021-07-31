<?php

function fourmie_register_post_types()
{
    /**
     * CPT Artiste
     */

    $artiste_labels = array(
        'name' => 'Artistes',
        'all_items' => 'Tous les artistes',
        'singular_name' => 'Artiste',
        'add_new_item' => 'Ajouter un artiste',
        'edit_item' => 'Modifier l\'artiste',
        'menu_name' => 'Artistes',
    );

    $artiste_args = array(
		'labels' => $artiste_labels,
		'public' => true,
		'show_in_rest' => true,
		'has_archive' => true,
		'supports' => array('title', 'editor', 'thumbnail'),
		'menu_position' => 5,
		'menu_icon' => 'dashicons-admin-customizer'
	);

    register_post_type('artiste', $artiste_args);
}
add_action('init', 'fourmie_register_post_types');
