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
        alt="Facultad de Humanidades, Ciencias Sociales y Cultura Guaraní">
    </a>

    <button class="menu-toggle"
            type="button"
            aria-expanded="false"
            aria-controls="nav-links">
      Menú
    </button>

    <ul class="nav-links" id="nav-links">
      <li><a href="<?php echo esc_url(home_url('/#acerca')); ?>">Institucional</a></li>
      <li><a href="<?php echo esc_url(home_url('/#academico')); ?>">Académico</a></li>
      <li><a href="<?php echo esc_url(home_url('/#investigacion')); ?>">Investigación y Extensión</a></li>
      <li><a href="<?php echo esc_url(home_url('/#posgrado')); ?>">Posgrado</a></li>
      <li><a href="<?php echo esc_url(home_url('/#calidad')); ?>">Calidad</a></li>
      <li><a href="<?php echo esc_url(home_url('/#administracion')); ?>">Administración</a></li>
      <li><a href="<?php echo esc_url(home_url('/#filiales')); ?>">Filiales</a></li>
      <li><a class="nav-contact" href="<?php echo esc_url(home_url('/#contacto')); ?>">Contacto</a></li>
    </ul>
  </nav>
</header>