<?php

/**
 * Carga la hoja de estilos y las imágenes de fondo de la portada.
 */
add_action('wp_enqueue_scripts', 'huma_custom_assets');
function huma_custom_assets() {
    $stylesheet_path = get_stylesheet_directory() . '/style.css';
    $stylesheet_version = file_exists($stylesheet_path)
        ? (string) filemtime($stylesheet_path)
        : '1.1.0';

    wp_enqueue_style(
        'huma-custom-style',
        get_stylesheet_uri(),
        array(),
        $stylesheet_version
    );

    $image_variables = array(
        'hero'     => '4-2-1.png',
        'academic' => 'academ.webp',
        'filiales' => 'sanpe.webp',
        'posgrado'  => 'pogradofondo-1.png',
    );

    $inline_css = ':root{';

    foreach ($image_variables as $key => $filename) {
        $image_url = huma_custom_upload_image_url($filename);

        if ($image_url) {
            $inline_css .= '--huma-' . $key . '-image:url('
                . wp_json_encode(esc_url_raw($image_url))
                . ');';
        }
    }

    $inline_css .= '}';

    wp_add_inline_style('huma-custom-style', $inline_css);
}

/**
 * Busca primero en la Biblioteca de medios y luego en uploads/año/mes.
 *
 * @param string $filename Nombre del archivo, por ejemplo 4.png.
 * @return string|false URL de la imagen o false si no se encuentra.
 */
function huma_custom_upload_image_url($filename) {
    $uploads = wp_upload_dir();

    if (
        !empty($uploads['error'])
        || empty($uploads['basedir'])
        || empty($uploads['baseurl'])
    ) {
        return false;
    }

    // Primero, intenta resolver el archivo como adjunto de la Biblioteca de medios.
    $attachment_ids = get_posts(array(
        'post_type'      => 'attachment',
        'post_status'    => 'inherit',
        'posts_per_page' => 30,
        'fields'         => 'ids',
        'meta_query'     => array(
            array(
                'key'     => '_wp_attached_file',
                'value'   => $filename,
                'compare' => 'LIKE',
            ),
        ),
    ));

    foreach ($attachment_ids as $attachment_id) {
        $attachment_path = get_attached_file($attachment_id);

        if (
            $attachment_path
            && wp_basename($attachment_path) === $filename
            && file_exists($attachment_path)
        ) {
            $attachment_url = wp_get_attachment_url($attachment_id);

            if ($attachment_url) {
                return $attachment_url;
            }
        }
    }

    // También admite archivos copiados directamente a uploads/año/mes/.
    $basedir = trailingslashit(wp_normalize_path($uploads['basedir']));
    $patterns = array(
        $basedir . '*/*/' . $filename,
        $basedir . $filename,
    );

    foreach ($patterns as $pattern) {
        $matches = glob($pattern);

        if (empty($matches)) {
            continue;
        }

        $file_path = wp_normalize_path($matches[0]);

        if (!is_file($file_path)) {
            continue;
        }

        $relative_path = ltrim(
            str_replace($basedir, '', $file_path),
            '/'
        );

        $encoded_path = implode(
            '/',
            array_map('rawurlencode', explode('/', $relative_path))
        );

        return trailingslashit($uploads['baseurl']) . $encoded_path;
    }

    /**
     * Permite definir una URL manual para una imagen si está en otra ubicación.
     *
     * Ejemplo:
     * add_filter('huma_custom_image_url_4.png', function () {
     *     return 'https://ejemplo.com/wp-content/uploads/4.png';
     * });
     */
    $custom_url = apply_filters(
        'huma_custom_image_url_' . $filename,
        false
    );

    return $custom_url ? esc_url_raw($custom_url) : false;
}

/**
 * Configuración del tema.
 */
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

/**
 * Área de widgets para páginas internas.
 */
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

/**
 * Menú responsive y año del pie de página.
 */
add_action('wp_footer', 'huma_custom_footer_script');
function huma_custom_footer_script() {
    ?>
    <script>
      document.addEventListener('DOMContentLoaded', function () {
        const menuButton = document.querySelector('.menu-toggle');
        const navLinks = document.querySelector('.nav-links');

        const header = document.querySelector('#site-header');

        if (header) {
        const updateHeaderTransparency = function () {
            // Al llegar a 400 px de desplazamiento, el fondo llega a 30 % de opacidad.
            const progress = Math.min(window.scrollY / 400, 1);
            const alpha = 1 - (progress * 0.7);

            header.style.setProperty('--header-alpha', alpha.toFixed(2));
        };

        updateHeaderTransparency();
        window.addEventListener('scroll', updateHeaderTransparency, { passive: true });
        }

        if (menuButton && navLinks) {
          menuButton.addEventListener('click', function () {
            const isExpanded =
              menuButton.getAttribute('aria-expanded') === 'true';

            menuButton.setAttribute(
              'aria-expanded',
              String(!isExpanded)
            );

            navLinks.classList.toggle('is-open', !isExpanded);
          });

          navLinks.addEventListener('click', function (event) {
            if (event.target.closest('a')) {
              menuButton.setAttribute('aria-expanded', 'false');
              navLinks.classList.remove('is-open');
            }
          });
        }

        const year = document.querySelector('#year');

        if (year) {
          year.textContent = new Date().getFullYear();
        }

        document.querySelectorAll('[data-news-carousel]').forEach(function (carousel) {
            const track = carousel.querySelector('[data-carousel-track]');
            const previous = carousel.querySelector('[data-carousel-prev]');
            const next = carousel.querySelector('[data-carousel-next]');

            if (!track || !previous || !next) return;

            function updateButtons() {
                const maxScroll = track.scrollWidth - track.clientWidth;
                previous.disabled = track.scrollLeft <= 2;
                next.disabled = track.scrollLeft >= maxScroll - 2;
            }

            function scrollByCard(direction) {
                const cards = track.querySelectorAll('.news-carousel-card');
                if (!cards.length) return;

                const gap = parseFloat(getComputedStyle(track).gap) || 0;
                const distance = cards[0].getBoundingClientRect().width + gap;

                track.scrollBy({
                left: direction * distance,
                behavior: 'smooth'
                });
            }

            previous.addEventListener('click', function () {
                scrollByCard(-1);
            });

            next.addEventListener('click', function () {
                scrollByCard(1);
            });

            track.addEventListener('scroll', updateButtons, { passive: true });
            window.addEventListener('resize', updateButtons);
            updateButtons();
            });
      });
    </script>
    <?php
}

/**
 * Genera un extracto limitado en cantidad de palabras.
 *
 * @param int $length Cantidad máxima de palabras.
 * @return string
 */
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