<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip-link" href="#contenido">Saltar al contenido</a>

<header class="site-header">
  <nav class="nav container" aria-label="Navegación principal">
    <a class="brand" href="<?php echo esc_url(home_url('/')); ?>" aria-label="Facultad de Humanidades, inicio">
      <span class="brand-mark" aria-hidden="true">H</span>
      <span class="brand-name">Facultad de Humanidades,<br>Ciencias Sociales y Cultura Guaraní</span>
    </a>

    <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="nav-links">Menú</button>

    <ul class="nav-links" id="nav-links">
      <li><a href="<?php echo esc_url(home_url('/#acerca')); ?>">La Facultad</a></li>
      <li><a href="<?php echo esc_url(home_url('/#academico')); ?>">Académico</a></li>
      <li><a href="<?php echo esc_url(home_url('/#formacion-grado')); ?>">Carreras</a></li>
      <li><a href="<?php echo esc_url(home_url('/#investigacion')); ?>">Investigación y Extensión</a></li>
      <li><a href="<?php echo esc_url(home_url('/#filiales')); ?>">Filiales</a></li>
      <li><a class="nav-contact" href="<?php echo esc_url(home_url('/#contacto')); ?>">Contacto</a></li>
    </ul>
  </nav>
</header>