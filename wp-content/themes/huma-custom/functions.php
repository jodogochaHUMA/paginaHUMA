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

add_action('wp_footer', 'huma_custom_menu_script');
function huma_custom_menu_script() {
    ?>
    <script>
      document.addEventListener('DOMContentLoaded', function () {
        const menuButton = document.querySelector('.menu-toggle');
        const navLinks = document.querySelector('.nav-links');

        if (!menuButton || !navLinks) return;

        menuButton.addEventListener('click', function () {
          const isExpanded = menuButton.getAttribute('aria-expanded') === 'true';
          menuButton.setAttribute('aria-expanded', String(!isExpanded));
          navLinks.classList.toggle('is-open', !isExpanded);
        });

        navLinks.addEventListener('click', function (event) {
          if (event.target.closest('a')) {
            menuButton.setAttribute('aria-expanded', 'false');
            navLinks.classList.remove('is-open');
          }
        });

        document.querySelector('#year')?.textContent = new Date().getFullYear();
      });
    </script>
    <?php
}