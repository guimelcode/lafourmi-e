<?php

// Palette de couleur du thème
function mytheme_setup_theme_supported_features()
{

    $color_palette = array(
        /* Rouges */
        array(
            'name' => __('Rouge 100%', 'fourmi-e'),
            'slug' => 'rouge-100',
            'color' => '#9a2525',
        ),
        array(
            'name' => __('Rouge 75%', 'fourmi-e'),
            'slug' => 'rouge-75',
            'color' => '#f56969',
        ),
        array(
            'name' => __('Rouge 50%', 'fourmi-e'),
            'slug' => 'rouge-50',
            'color' => '#f89898',
        ),
        array(
            'name' => __('Rouge 25%', 'fourmi-e'),
            'slug' => 'rouge-25',
            'color' => '#fccccc',
        ),
        /* Bleus */
        array(
            'name' => __('Bleu 100%', 'fourmi-e'),
            'slug' => 'bleu-100',
            'color' => '#385f5f',
        ),
        array(
            'name' => __('Bleu 75%', 'fourmi-e'),
            'slug' => 'bleu-75',
            'color' => '#6bf4f4',
        ),
        array(
            'name' => __('Bleu 50%', 'fourmi-e'),
            'slug' => 'bleu-50',
            'color' => '#a3f8f8',
        ),
        array(
            'name' => __('Bleu 25%', 'fourmi-e'),
            'slug' => 'bleu-25',
            'color' => '#e7fdfd',
        ),
        /* Verts */
        array(
            'name' => __('Vert 100%', 'fourmi-e'),
            'slug' => 'vert-100',
            'color' => '#196433',
        ),
        array(
            'name' => __('Vert 75%', 'fourmi-e'),
            'slug' => 'vert-75',
            'color' => '#b0f46b',
        ),
        array(
            'name' => __('Vert 50%', 'fourmi-e'),
            'slug' => 'vert-50',
            'color' => '#cdf8a2',
        ),
        array(
            'name' => __('Vert 25%', 'fourmi-e'),
            'slug' => 'vert-25',
            'color' => '#f2fde7',
        ),
        /* Violets */
        array(
            'name' => __('Violet 100%', 'fourmi-e'),
            'slug' => 'violet-100',
            'color' => '#670ebf',
        ),
        array(
            'name' => __('Violet 75%', 'fourmi-e'),
            'slug' => 'violet-75',
            'color' => '#cda2f8',
        ),
        array(
            'name' => __('Violet 50%', 'fourmi-e'),
            'slug' => 'violet-50',
            'color' => '#ead8fc',
        ),
        array(
            'name' => __('Violet 25%', 'fourmi-e'),
            'slug' => 'violet-25',
            'color' => '#f5ecfe',
        ),
        /* Noirs */
        array(
            'name' => __('Noir 100%', 'fourmi-e'),
            'slug' => 'noir-100',
            'color' => '#000',
        ),
        array(
            'name' => __('Noir 75%', 'fourmi-e'),
            'slug' => 'noir-75',
            'color' => '#9c9c9c',
        ),
        array(
            'name' => __('Noir 50%', 'fourmi-e'),
            'slug' => 'noir-50',
            'color' => '#d0d0d0',
        ),
        array(
            'name' => __('Noir 25%', 'fourmi-e'),
            'slug' => 'noir-25',
            'color' => '#ededed',
        ),
        /* Blanc */
        array(
            'name' => __('Blanc', 'fourmi-e'),
            'slug' => 'blanc',
            'color' => '#fff',
        ),
    );
    add_theme_support('editor-color-palette', $color_palette);
}
add_action('after_setup_theme', 'mytheme_setup_theme_supported_features');