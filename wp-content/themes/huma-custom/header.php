<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="site-topbar">
  <div class="wrap">
    <div>
      <a href="#">Campus Virtual</a> ·
      <a href="#">Webmail</a> ·
      <a href="#">UNI</a>
    </div>
    <div>
      <a href="#">Noticias</a> ·
      <a href="#">Agenda</a> ·
      <a href="#">Contacto</a>
    </div>
  </div>
</div>

<header class="site-header">
  <div class="wrap">
    <div class="brand">
      <h1><?php bloginfo('name'); ?></h1>
      <p><?php bloginfo('description'); ?></p>
    </div>
  </div>
</header>

<nav class="main-nav">
  <div class="wrap">
    <?php
    wp_nav_menu(array(
      'theme_location' => 'primary',
      'container'      => false,
      'fallback_cb'    => false,
      'items_wrap'     => '%3$s',
    ));
    ?>
  </div>
</nav>