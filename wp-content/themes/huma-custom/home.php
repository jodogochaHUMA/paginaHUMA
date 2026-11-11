<?php get_header(); ?>

<main class="page-shell">
  <div class="wrap">
    <div class="section-heading">
      <h2>Noticias y novedades</h2>
      <p>Actualidad institucional, convocatorias y publicaciones recientes.</p>
    </div>

    <div class="post-list">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="post-card">
          <div class="post-meta"><?php echo esc_html(get_the_date('d \d\e F \d\e Y')); ?></div>
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <p><?php echo esc_html(huma_custom_excerpt(36)); ?></p>
        </article>
      <?php endwhile; endif; ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>