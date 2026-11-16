<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php
$uploads = wp_upload_dir();
$logo_url = trailingslashit($uploads['baseurl'])
    . '2026/11/'
    . rawurlencode('LogoHD.png');
?>

<a class="skip-link" href="#contenido">Saltar al contenido</a>

<header class="site-header" id="site-header">
  <nav class="nav container" aria-label="Navegación principal">
    <a class="brand"
      href="<?php echo esc_url(home_url('/')); ?>"
      aria-label="Facultad de Humanidades, inicio">
      <img
        class="brand-logo"
        src="<?php echo esc_url($logo_url); ?>"
        alt="">
      <span class="brand-name">
        Facultad de Humanidades,<br>
        Ciencias Sociales y Cultura Guaraní
      </span>
    </a>

    <button class="menu-toggle"
            type="button"
            aria-expanded="false"
            aria-controls="nav-links">
      Menú
    </button>

    <ul class="nav-links" id="nav-links">
      <li><a href="<?php echo esc_url(home_url('/#acerca')); ?>">Institucional</a></li>
      <li><a href="<?php echo esc_url(home_url('/#gestion')); ?>">Gestión</a></li>
      <li><a href="<?php echo esc_url(home_url('/#academico')); ?>">Académico</a></li>
      <li><a href="<?php echo esc_url(home_url('/#investigacion')); ?>">Investigación y Extensión</a></li>
      <li><a href="<?php echo esc_url(home_url('/#posgrado')); ?>">Posgrado</a></li>
      <li><a href="<?php echo esc_url(home_url('/#calidad')); ?>">Calidad</a></li>
      <li><a href="<?php echo esc_url(home_url('/#administracion')); ?>">Administración</a></li>
      <li><a href="<?php echo esc_url(home_url('/#filiales')); ?>">Filiales</a></li>
      <li><a class="nav-contact" href="<?php echo esc_url(home_url('/#contacto')); ?>">Contacto</a></li>
    </ul>

    <button
      class="nav-search-toggle"
      type="button"
      aria-expanded="false"
      aria-controls="nav-search-form"
      aria-label="Abrir buscador"
    >
      <svg aria-hidden="true" viewBox="0 0 24 24">
        <circle cx="10.8" cy="10.8" r="6.8"></circle>
        <path d="m16 16 5 5"></path>
      </svg>
    </button>

    <form class="nav-search-form" id="nav-search-form" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>" hidden>
      <label class="nav-search-label" for="nav-search-input">Buscar en el sitio</label>
      <input id="nav-search-input" type="search" name="s" placeholder="¿Qué deseas encontrar?" required>
      <button type="submit">Buscar</button>
    </form>
  </nav>
</header>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const toggle = document.querySelector('.nav-search-toggle');
    const form = document.querySelector('#nav-search-form');
    const input = document.querySelector('#nav-search-input');

    if (!toggle || !form || !input) return;

    toggle.addEventListener('click', function () {
      const isOpen = toggle.getAttribute('aria-expanded') === 'true';

      toggle.setAttribute('aria-expanded', String(!isOpen));
      toggle.setAttribute('aria-label', isOpen ? 'Abrir buscador' : 'Cerrar buscador');
      form.hidden = isOpen;

      if (!isOpen) input.focus();
    });

    document.addEventListener('keydown', function (event) {
      if (event.key === 'Escape' && !form.hidden) {
        form.hidden = true;
        toggle.setAttribute('aria-expanded', 'false');
        toggle.setAttribute('aria-label', 'Abrir buscador');
        toggle.focus();
      }
    });
  });
</script>