<?php get_header(); ?>

<main id="contenido" class="page-shell">
  <div class="container page-grid">
    <article class="page-content">
      <?php while (have_posts()) : the_post(); ?>
        <h1 class="page-title"><?php the_title(); ?></h1>
        <?php the_content(); ?>
      <?php endwhile; ?>
    </article>

    <aside class="page-sidebar">
      <div class="sidebar-box">
        <h3>Accesos rápidos</h3>
        <ul>
          <li><a href="<?php echo esc_url(home_url('/#acerca')); ?>">La Facultad</a></li>
          <li><a href="<?php echo esc_url(home_url('/#academico')); ?>">Académico</a></li>
          <li><a href="<?php echo esc_url(home_url('/#investigacion')); ?>">Investigación y Extensión</a></li>
          <li><a href="<?php echo esc_url(home_url('/#contacto')); ?>">Contacto</a></li>
        </ul>
      </div>
    </aside>
  </div>
</main>

<?php get_footer(); ?>