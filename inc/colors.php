<?php

// Palette de couleur du thème
function mytheme_setup_theme_supported_features()
{

    $color_palette = array(
        /* Turquoises */
        array(
            'name' => esc_attr__('Turquoise base', 'fourmi-e'),
            'slug' => 'turquoise-base',
            'color' => '#2BE7B4',
        ),
        array(
            'name' => esc_attr__('Turquoise mis en avant', 'fourmi-e'),
            'slug' => 'turquoise-highlight',
            'color' => '#7CFEDA',
        ),
        array(
            'name' => esc_attr__('Turquoise clair', 'fourmi-e'),
            'slug' => 'turquoise-light',
            'color' => '#EFFDF9',
        ),
        array(
            'name' => esc_attr__('Turquoise sombre', 'fourmi-e'),
            'slug' => 'turquoise-dark',
            'color' => '#004C37',
        ),
        array(
            'name' => esc_attr__('Turquoise plus sombre', 'fourmi-e'),
            'slug' => 'turquoise-darker',
            'color' => '#022C20',
        ),
        /* Indigos */
        array(
            'name' => esc_attr__('Indigo base', 'fourmi-e'),
            'slug' => 'indigo-base',
            'color' => '#5025ED',
        ),
        array(
            'name' => esc_attr__('Indigo mis en avant', 'fourmi-e'),
            'slug' => 'indigo-highlight',
            'color' => '#C4B3FF',
        ),
        array(
            'name' => esc_attr__('Indigo clair', 'fourmi-e'),
            'slug' => 'indigo-light',
            'color' => '#F1EEFE',
        ),
        array(
            'name' => esc_attr__('Indigo sombre', 'fourmi-e'),
            'slug' => 'indigo-dark',
            'color' => '#2C1A72',
        ),
        array(
            'name' => esc_attr__('Indigo plus sombre', 'fourmi-e'),
            'slug' => 'indigo-darker',
            'color' => '#130D2E',
        ),
        /* Corails */
        array(
            'name' => esc_attr__('Corail base', 'fourmi-e'),
            'slug' => 'corail-base',
            'color' => '#FF4A22',
        ),
        array(
            'name' => esc_attr__('Corail mis en avant', 'fourmi-e'),
            'slug' => 'corail-highlight',
            'color' => '#FF957C',
        ),
        array(
            'name' => esc_attr__('Corail clair', 'fourmi-e'),
            'slug' => 'corail-light',
            'color' => '#FFF1EE',
        ),
        array(
            'name' => esc_attr__('Corail sombre', 'fourmi-e'),
            'slug' => 'corail-dark',
            'color' => '#8D1A02',
        ),
        array(
            'name' => esc_attr__('Corail plus sombre', 'fourmi-e'),
            'slug' => 'corail-darker',
            'color' => '#3D1008',
        ),
        // /* Rouges */
        // array(
        //     'name' => esc_attr__('Rouge 100%', 'fourmi-e'),
        //     'slug' => 'rouge-100',
        //     'color' => '#9a2525',
        // ),
        // array(
        //     'name' => esc_attr__('Rouge 75%', 'fourmi-e'),
        //     'slug' => 'rouge-75',
        //     'color' => '#f56969',
        // ),
        // array(
        //     'name' => esc_attr__('Rouge 50%', 'fourmi-e'),
        //     'slug' => 'rouge-50',
        //     'color' => '#f89898',
        // ),
        // array(
        //     'name' => esc_attr__('Rouge 25%', 'fourmi-e'),
        //     'slug' => 'rouge-25',
        //     'color' => '#fccccc',
        // ),
        // /* Bleus */
        // array(
        //     'name' => esc_attr__('Bleu 100%', 'fourmi-e'),
        //     'slug' => 'bleu-100',
        //     'color' => '#385f5f',
        // ),
        // array(
        //     'name' => esc_attr__('Bleu 75%', 'fourmi-e'),
        //     'slug' => 'bleu-75',
        //     'color' => '#6bf4f4',
        // ),
        // array(
        //     'name' => esc_attr__('Bleu 50%', 'fourmi-e'),
        //     'slug' => 'bleu-50',
        //     'color' => '#a3f8f8',
        // ),
        // array(
        //     'name' => esc_attr__('Bleu 25%', 'fourmi-e'),
        //     'slug' => 'bleu-25',
        //     'color' => '#e7fdfd',
        // ),
        // /* Verts */
        // array(
        //     'name' => esc_attr__('Vert 100%', 'fourmi-e'),
        //     'slug' => 'vert-100',
        //     'color' => '#196433',
        // ),
        // array(
        //     'name' => esc_attr__('Vert 75%', 'fourmi-e'),
        //     'slug' => 'vert-75',
        //     'color' => '#b0f46b',
        // ),
        // array(
        //     'name' => esc_attr__('Vert 50%', 'fourmi-e'),
        //     'slug' => 'vert-50',
        //     'color' => '#cdf8a2',
        // ),
        // array(
        //     'name' => esc_attr__('Vert 25%', 'fourmi-e'),
        //     'slug' => 'vert-25',
        //     'color' => '#f2fde7',
        // ),
        // /* Violets */
        // array(
        //     'name' => esc_attr__('Violet 100%', 'fourmi-e'),
        //     'slug' => 'violet-100',
        //     'color' => '#670ebf',
        // ),
        // array(
        //     'name' => esc_attr__('Violet 75%', 'fourmi-e'),
        //     'slug' => 'violet-75',
        //     'color' => '#cda2f8',
        // ),
        // array(
        //     'name' => esc_attr__('Violet 50%', 'fourmi-e'),
        //     'slug' => 'violet-50',
        //     'color' => '#ead8fc',
        // ),
        // array(
        //     'name' => esc_attr__('Violet 25%', 'fourmi-e'),
        //     'slug' => 'violet-25',
        //     'color' => '#f5ecfe',
        // ),
        /* Noirs */
        array(
            'name' => esc_attr__('Noir 100%', 'fourmi-e'),
            'slug' => 'noir-100',
            'color' => '#000',
        ),
        array(
            'name' => esc_attr__('Noir 75%', 'fourmi-e'),
            'slug' => 'noir-75',
            'color' => '#9c9c9c',
        ),
        array(
            'name' => esc_attr__('Noir 50%', 'fourmi-e'),
            'slug' => 'noir-50',
            'color' => '#d0d0d0',
        ),
        array(
            'name' => esc_attr__('Noir 25%', 'fourmi-e'),
            'slug' => 'noir-25',
            'color' => '#ededed',
        ),
        /* Blanc */
        array(
            'name' => esc_attr__('Blanc', 'fourmi-e'),
            'slug' => 'blanc',
            'color' => '#fff',
        ),
    );
    add_theme_support('editor-color-palette', $color_palette);
}
add_action('after_setup_theme', 'mytheme_setup_theme_supported_features');