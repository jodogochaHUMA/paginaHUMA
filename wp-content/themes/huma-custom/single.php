<?php get_header(); ?>

<main id="contenido" class="single-news page-shell">
  <div class="container single-news-layout">
    <div class="single-news-main">
      <?php while (have_posts()) : the_post(); ?>
        <article <?php post_class('single-news-article'); ?>>
          <nav class="single-news-breadcrumb" aria-label="Ruta de navegación">
            <a href="<?php echo esc_url(home_url('/')); ?>">Inicio</a>
            <span aria-hidden="true">/</span>
            <a href="<?php echo esc_url(home_url('/#noticias')); ?>">Noticias</a>
          </nav>

          <header class="single-news-header">
            <p class="single-news-date">
              Publicado el <?php echo esc_html(get_the_date('j \d\e F \d\e Y')); ?>
              <span aria-hidden="true">·</span>
              <?php echo esc_html(get_the_author()); ?>
            </p>

            <h1 class="single-news-title"><?php the_title(); ?></h1>

            <?php if (has_excerpt()) : ?>
              <p class="single-news-excerpt"><?php echo esc_html(get_the_excerpt()); ?></p>
            <?php endif; ?>
          </header>

          <?php if (has_post_thumbnail()) : ?>
            <figure class="single-news-featured-image">
              <?php the_post_thumbnail('large'); ?>
            </figure>
          <?php endif; ?>

          <div class="single-news-content">
            <?php the_content(); ?>

            <?php
            wp_link_pages(array(
              'before' => '<nav class="single-news-pages" aria-label="Páginas de la noticia">',
              'after'  => '</nav>',
            ));
            ?>
          </div>

          <nav class="single-news-pagination" aria-label="Navegación entre noticias">
            <div class="single-news-pagination-item">
              <?php previous_post_link('%link', '← Noticia anterior'); ?>
            </div>
            <div class="single-news-pagination-item single-news-pagination-next">
              <?php next_post_link('%link', 'Siguiente noticia →'); ?>
            </div>
          </nav>
        </article>
      <?php endwhile; ?>
    </div>

    <aside class="single-news-sidebar" aria-label="Más noticias">
      <section class="single-news-sidebar-box">
        <h2>Noticias recientes</h2>
        <ul>
          <?php
          $recent_news = new WP_Query(array(
            'post_type'           => 'post',
            'post_status'         => 'publish',
            'posts_per_page'      => 5,
            'post__not_in'        => array(get_the_ID()),
            'orderby'             => 'date',
            'order'               => 'DESC',
            'ignore_sticky_posts' => true,
          ));

          if ($recent_news->have_posts()) :
            while ($recent_news->have_posts()) :
              $recent_news->the_post();
              ?>
              <li>
                <a href="<?php echo esc_url(get_permalink()); ?>">
                  <?php echo esc_html(get_the_title()); ?>
                </a>
                <time datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                  <?php echo esc_html(get_the_date('j M Y')); ?>
                </time>
              </li>
              <?php
            endwhile;
          else :
            ?>
            <li class="single-news-empty">No hay otras noticias publicadas.</li>
          <?php endif; ?>
        </ul>
        <?php wp_reset_postdata(); ?>
      </section>

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