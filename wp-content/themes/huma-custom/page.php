<?php get_header(); ?>

<main class="page-shell">
  <div class="wrap page-grid">
    <section>
      <?php while (have_posts()) : the_post(); ?>
        <div class="page-content">
          <h1 class="page-title"><?php the_title(); ?></h1>
          <?php the_content(); ?>
        </div>
      <?php endwhile; ?>
    </section>

    <aside>
      <?php if (is_active_sidebar('sidebar-pages')) : ?>
        <?php dynamic_sidebar('sidebar-pages'); ?>
      <?php else : ?>
        <div class="sidebar-box">
          <h3>Accesos rápidos</h3>
          <ul>
            <li><a href="<?php echo esc_url(home_url('/la-facultad/')); ?>">La Facultad</a></li>
            <li><a href="<?php echo esc_url(home_url('/carreras/')); ?>">Carreras</a></li>
            <li><a href="<?php echo esc_url(home_url('/investigacion-y-extension/')); ?>">Investigación y Extensión</a></li>
            <li><a href="<?php echo esc_url(home_url('/acreditaciones/')); ?>">Acreditaciones</a></li>
          </ul>
        </div>
      <?php endif; ?>
    </aside>
  </div>
</main>

<?php get_footer(); ?>