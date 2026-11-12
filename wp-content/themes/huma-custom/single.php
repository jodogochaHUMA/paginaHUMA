<?php get_header(); ?>

<main class="page-shell">
  <div class="wrap page-grid">
    <section>
      <?php while (have_posts()) : the_post(); ?>
        <article class="page-content">
          <div class="post-meta"><?php echo esc_html(get_the_date('d \d\e F \d\e Y')); ?></div>
          <h1 class="page-title"><?php the_title(); ?></h1>
          <?php the_content(); ?>
        </article>
      <?php endwhile; ?>
    </section>

    <aside>
      <div class="sidebar-box">
        <h3>Noticias recientes</h3>
        <ul>
          <?php
          $recent = wp_get_recent_posts(array(
            'numberposts' => 5,
            'post_status' => 'publish'
          ));
          foreach ($recent as $item) : ?>
            <li><a href="<?php echo esc_url(get_permalink($item['ID'])); ?>"><?php echo esc_html($item['post_title']); ?></a></li>
          <?php endforeach; ?>
        </ul>
      </div>

      <div class="sidebar-box">
        <h3>Accesos rápidos</h3>
        <ul>
          <li><a href="<?php echo esc_url(home_url('')); ?>">Información Institucional</a></li>
          <li><a href="<?php echo esc_url(home_url('')); ?>">Carreras</a></li>
          <li><a href="<?php echo esc_url(home_url('')); ?>">Investigación</a></li>
          <li><a href="<?php echo esc_url(home_url('')); ?>">Normativas</a></li>
          <li><a href="<?php echo esc_url(home_url('')); ?>">MECIP</a></li>
          <li><a href="<?php echo esc_url(home_url('')); ?>">Departamento de Lenguas</a></li>
          <li><a href="<?php echo esc_url(home_url('')); ?>">Contacto</a></li>
        </ul>
      </div>
    </aside>
  </div>
</main>

<?php get_footer(); ?>