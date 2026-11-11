<?php

add_action('wp_enqueue_scripts', 'huma_custom_assets');
function huma_custom_assets() {
    wp_enqueue_style('huma-custom-style', get_stylesheet_uri(), array(), '1.0.0');
}

add_action('after_setup_theme', 'huma_custom_setup');
function huma_custom_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_nav_menus(array(
        'primary' => 'Menú principal',
        'top'     => 'Menú superior',
        'footer'  => 'Menú pie de página',
    ));
}

add_action('widgets_init', 'huma_custom_widgets');
function huma_custom_widgets() {
    register_sidebar(array(
        'name'          => 'Sidebar páginas',
        'id'            => 'sidebar-pages',
        'before_widget' => '<div class="sidebar-box">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ));
}

function huma_custom_excerpt($length = 28) {
    $text = wp_strip_all_tags(get_the_excerpt(), true);

    if (empty($text)) {
        $text = wp_strip_all_tags(get_the_content(), true);
    }

    $words = preg_split('/\s+/', $text);

    if (count($words) > $length) {
        $words = array_slice($words, 0, $length);
        $text = implode(' ', $words) . '…';
    }

    return $text;
}