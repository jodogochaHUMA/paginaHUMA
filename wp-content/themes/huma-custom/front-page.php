<?php get_header(); ?>

<main>

  <section class="hero">
    <div class="wrap hero-grid">
      <div>
        <span class="eyebrow">Institución · Formación · Investigación · Comunidad</span>
        <h2>Una facultad conectada con el pensamiento, la cultura y el territorio.</h2>
        <p>
          La Facultad de Humanidades, Ciencias Sociales y Cultura Guaraní articula docencia,
          investigación, extensión y posgrado para responder a los desafíos educativos, sociales
          y culturales de Itapúa y del Paraguay.
        </p>
        <div class="hero-actions">
          <a class="btn btn-primary" href="<?php echo esc_url(home_url('/la-facultad/')); ?>">Conocer la Facultad</a>
          <a class="btn btn-secondary" href="<?php echo esc_url(home_url('/carreras/')); ?>">Explorar carreras</a>
        </div>
      </div>

      <aside class="panel">
        <h3 class="panel-title">Actualidad institucional</h3>
        <div class="panel-body">
          <?php
          $latest = new WP_Query(array(
            'post_type'      => 'post',
            'posts_per_page' => 3,
            'post_status'    => 'publish'
          ));
          if ($latest->have_posts()) :
            while ($latest->have_posts()) : $latest->the_post(); ?>
              <article class="mini-post">
                <div class="date"><?php echo esc_html(get_the_date('d \d\e F \d\e Y')); ?></div>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </article>
            <?php endwhile; wp_reset_postdata();
          else : ?>
            <article class="mini-post">
              <div class="date">Contenido de ejemplo</div>
              <a href="#">Aquí aparecerán las últimas noticias</a>
            </article>
          <?php endif; ?>
        </div>
      </aside>
    </div>
  </section>

  <section class="section">
    <div class="wrap">
      <div class="section-heading">
        <span class="eyebrow" style="color:#9a7410">Accesos principales</span>
        <h2>Áreas principales</h2>
        <p>Una portada institucional para organizar mejor la información más importante del sitio.</p>
      </div>

      <div class="grid-4">
        <a class="card" href="<?php echo esc_url(home_url('/la-facultad/')); ?>">
          <h3>La Facultad</h3>
          <p>Historia, autoridades, normativa, misión, visión y organigrama institucional.</p>
        </a>

        <a class="card" href="<?php echo esc_url(home_url('/carreras/')); ?>">
          <h3>Carreras</h3>
          <p>Oferta académica, coordinaciones, perfiles de egreso y datos por carrera.</p>
        </a>

        <a class="card" href="<?php echo esc_url(home_url('/investigacion-y-extension/')); ?>">
          <h3>Investigación y Extensión</h3>
          <p>Producción científica, grupos, observatorios, revista y actividades comunitarias.</p>
        </a>

        <a class="card" href="<?php echo esc_url(home_url('/acreditaciones/')); ?>">
          <h3>Acreditaciones</h3>
          <p>Procesos de calidad, informes, resultados y documentos institucionales.</p>
        </a>
      </div>
    </div>
  </section>

  <section class="section band">
    <div class="wrap">
      <div class="section-heading">
        <h2>Noticias destacadas</h2>
        <p>Espacio para publicar novedades institucionales, convocatorias y vida académica.</p>
      </div>

      <div class="grid-3">
        <?php
        $news = new WP_Query(array(
          'post_type'      => 'post',
          'posts_per_page' => 3,
          'post_status'    => 'publish'
        ));
        if ($news->have_posts()) :
          while ($news->have_posts()) : $news->the_post(); ?>
            <article class="card news-card">
              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <p><?php echo esc_html(huma_custom_excerpt(24)); ?></p>
            </article>
          <?php endwhile; wp_reset_postdata();
        endif; ?>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="wrap">
      <div class="section-heading">
        <h2>Documentos y convocatorias</h2>
        <p>Área pensada para resoluciones, formularios, llamados y materiales institucionales.</p>
      </div>

      <div class="grid-3">
        <article class="card doc-card">
          <h3>Documentos institucionales</h3>
          <p>Resoluciones, reglamentos, formularios y normativa relevante.</p>
        </article>
        <article class="card doc-card">
          <h3>Convocatorias</h3>
          <p>Becas, movilidad, concursos, proyectos y llamados académicos.</p>
        </article>
        <article class="card doc-card">
          <h3>Calendario académico</h3>
          <p>Fechas clave, cronogramas y actividades de interés para la comunidad.</p>
        </article>
      </div>
    </div>
  </section>

  <section class="section band">
    <div class="wrap">
      <div class="section-heading">
        <h2>Departamentos y dependencias</h2>
        <p>Sección para visibilizar las áreas misionales, académicas y administrativas.</p>
      </div>

      <div class="grid-4">
        <article class="card dept-card">
          <h3>Investigación y Extensión</h3>
          <p>Proyectos, grupos, observatorios, revista y trabajos finales.</p>
        </article>
        <article class="card dept-card">
          <h3>Académico</h3>
          <p>Coordinaciones, carreras, horarios y seguimiento estudiantil.</p>
        </article>
        <article class="card dept-card">
          <h3>Calidad</h3>
          <p>Acreditaciones, mejora continua, autoevaluación y seguimiento.</p>
        </article>
        <article class="card dept-card">
          <h3>Administrativo</h3>
          <p>Procesos, servicios internos, documentación y atención institucional.</p>
        </article>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="wrap">
      <div class="section-heading">
        <h2>Acreditaciones y aseguramiento de la calidad</h2>
        <p>Bloque específico para mostrar los avances y resultados institucionales.</p>
      </div>

      <div class="grid-2">
        <article class="card qual-card">
          <h3>Procesos de acreditación</h3>
          <p>Información sobre carreras acreditadas, etapas, informes y evidencias.</p>
        </article>
        <article class="card qual-card">
          <h3>Indicadores institucionales</h3>
          <p>Estadísticas clave, cumplimiento de metas y seguimiento de la gestión.</p>
        </article>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>