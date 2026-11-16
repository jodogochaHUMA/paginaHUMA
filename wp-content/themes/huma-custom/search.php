<?php get_header(); ?>

<main id="contenido" class="page-shell">
  <div class="container">
    <header class="section-heading">
      <div>
        <p class="eyebrow">Búsqueda</p>
        <h1>
          <?php
          printf(
            'Resultados para: %s',
            '<span>' . esc_html( get_search_query() ) . '</span>'
          );
          ?>
        </h1>
      </div>
    </header>

    <?php if ( have_posts() ) : ?>
      <div class="post-list">
        <?php while ( have_posts() ) : the_post(); ?>
          <article <?php post_class( 'post-card' ); ?>>

            <?php if ( has_post_thumbnail() ) : ?>
              <a
                class="post-card-thumbnail"
                href="<?php echo esc_url( get_permalink() ); ?>"
                aria-label="<?php echo esc_attr( get_the_title() ); ?>"
              >
                <?php
                the_post_thumbnail(
                  'medium_large',
                  array( 'loading' => 'lazy' )
                );
                ?>
              </a>
            <?php endif; ?>

            <p class="post-meta">
              <time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>">
                <?php echo esc_html( get_the_date( 'j \d\e F \d\e Y' ) ); ?>
              </time>
            </p>

            <h2>
              <a href="<?php echo esc_url( get_permalink() ); ?>">
                <?php the_title(); ?>
              </a>
            </h2>

            <p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 36 ) ); ?></p>
          </article>
        <?php endwhile; ?>
      </div>

      <?php
      the_posts_pagination(
        array(
          'mid_size'   => 2,
          'prev_text'  => '← Más recientes',
          'next_text'  => 'Más resultados →',
          'aria_label' => 'Paginación de resultados de búsqueda',
        )
      );
      ?>

    <?php else : ?>
      <p>
        No encontramos resultados para
        <strong><?php echo esc_html( get_search_query() ); ?></strong>.
        Prueba con otra palabra.
      </p>
    <?php endif; ?>
  </div>
</main>

<?php get_footer(); ?>