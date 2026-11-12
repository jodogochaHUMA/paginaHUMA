<?php get_header(); ?>

<main id="contenido">
  <?php
  $uploads = wp_upload_dir();
  $hero_logo_url = trailingslashit($uploads['baseurl']) . '2026/11/LogoHD.png';
  ?>

  <section class="hero" id="inicio" aria-labelledby="hero-title">
    <div class="hero-content container">
      <div class="hero-lockup">
        <div class="hero-logo-wrap">
          <img
            class="hero-logo"
            src="<?php echo esc_url($hero_logo_url); ?>"
            alt="Logo de la Facultad de Humanidades"
          >
        </div>

        <div class="hero-text">
          <p class="eyebrow">Universidad Nacional de Itapúa</p>

          <h1 class="hero-title-es" id="hero-title">
            Facultad de Humanidades, Ciencias Sociales y Cultura Guaraní
          </h1>

          <p class="hero-title-gn" lang="gn">
            Yvyporareko, Tekoaty Rembikuaa ha Guarani Arandupy Mbo'ehaoite
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="intro container" id="acerca" aria-labelledby="acerca-title">
    <div>
      <p class="eyebrow">Institucional</p>
      <h2 id="acerca-title">Acerca de la Facultad</h2>
    </div>
    <div class="intro-copy">
      <p>El 30 de diciembre de 1998 se crea la primera carrera nacional de Bilingüismo Guaraní – Castellano, en aquel tiempo, de la Facultad de Humanidades y Cultura Guaraní.</p>
      <p>El 15 de febrero del año 2003 se puso a consideración del país los primeros graduados Licenciados en Bilingüismo Guaraní-Castellano, al mismo tiempo de inaugurarse el Campus Universitario de Encarnación.</p>
      <p>En el 2004, la Facultad de Humanidades, Ciencias Sociales y Cultura Guaraní crea la carrera de Ciencias de la Educación con Énfasis en Ciencias Sociales, Ciencias Básicas y Matemáticas.</p>
      <p>Al inicio del 2008, la Facultad de Humanidades, Ciencias Sociales y Cultura Guaraní habilita nuevas carreras de Licenciatura en Ciencias Sociales con Énfasis en Trabajo Social y Relaciones Internacionales.</p>
      <p>Actualmente esta Unidad Académica ha diversificado su oferta académica ya que además de la Licenciatura de Bilingüismo Guaraní – Castellano cuenta con las carreras de Licenciatura en Ciencias Sociales, Educación, Lengua Inglesa, Psicología y otras especializaciones.</p>
      <a class="button intro-more" href="<?php echo esc_url(home_url('/institucional/')); ?>">Ver más</a>
    </div>
  </section>

  <section class="section academic-section" id="academico" aria-labelledby="academico-title">
    <div class="container">
      <div class="section-heading">
        <div>
          <p class="eyebrow">Académico</p>
          <h2 id="academico-title">Dirección Académica</h2>
        </div>
        <p>Conoce las propuestas de formación de grado de la Facultad</p>
      </div>

      <div class="cards">
        <article class="card" id="formacion-grado">
          <h3>Carreras</h3>
          <p>Información sobre carreras, perfiles de egreso, planes de estudio y requisitos de admisión</p>
          <a href="#contacto">Consultar información <span aria-hidden="true">→</span></a>
        </article>

        <article class="card" id="formacion-posgrado">
          <h3>Coordinación de Carreras</h3>
          <p>Espacio para conocer más sobre las carreras</p>
          <a href="#contacto">Consultar información <span aria-hidden="true">→</span></a>
        </article>

        <article class="card">
          <h3>Admisión</h3>
          <p>Conoce el proceso de admisión y presenta tu postulación</p>
          <a href="#contacto">Consultar información <span aria-hidden="true">→</span></a>
        </article>

        <article class="card">
          <h3>Bienestar Estudiantil</h3>
          <p>Servicios, acompañamiento y actividades destinados al bienestar de la comunidad estudiantil.</p>
          <a href="<?php echo esc_url(home_url('/bienestar-estudiantil/')); ?>">
            Ver información <span aria-hidden="true">→</span>
          </a>
        </article>

        <article class="card">
          <h3>Documentos</h3>
          <p>Accede a reglamentos, formularios, calendarios y otros documentos académicos.</p>
          <a href="<?php echo esc_url(home_url('/documentos/')); ?>">
            Ver documentos <span aria-hidden="true">→</span>
          </a>
        </article>
      </div>
    </div>
  </section>

  <section class="community" id="investigacion" aria-labelledby="investigacion-title">
    <div class="community-inner container">
      <div class="section-heading">
        <div>
          <p class="eyebrow">Conocimiento y comunidad</p>
          <h2 id="investigacion-title">Investigación y Extensión</h2>
        </div>
        <p>Conoce los departamentos y las iniciativas que conectan la Facultad con la comunidad</p>
      </div>

      <div class="cards">
        <article class="card">
          <h3>Departamento de Investigación</h3>
          <p>Información sobre proyectos, equipos y actividades de investigación</p>
          <a href="#contacto">Visitar departamento <span aria-hidden="true">→</span></a>
        </article>

        <article class="card">
          <h3>Departamento de Extensión</h3>
          <p>Actividades y proyectos de vinculación con la comunidad</p>
          <a href="#contacto">Conocer departamento <span aria-hidden="true">→</span></a>
        </article>

        <article class="card">
          <h3>Departamento de Lenguas</h3>
          <p>Conoce las propuestas y actividades del Departamento de Lenguas</p>
          <a href="#contacto">Conocer departamento <span aria-hidden="true">→</span></a>
        </article>
      </div>
    </div>
  </section>

  <section class="section academic-section posgrado-section" id="posgrado" aria-labelledby="posgrado-title">
    <div class="container">
      <div class="section-heading">
        <div>
          <p class="eyebrow">Formación avanzada</p>
          <h2 id="posgrado-title">Posgrado</h2>
        </div>
        <p>Conoce las propuestas de formación de posgrado de la Facultad</p>
      </div>

      <div class="cards">
        <article class="card">
          <h3>Programas de Posgrado</h3>
          <p>Información sobre programas, requisitos de admisión, planes de estudio y convocatorias</p>
          <a href="<?php echo esc_url(home_url('/posgrado/')); ?>">
            Ver información <span aria-hidden="true">→</span>
          </a>
        </article>
      </div>
    </div>
  </section>

  <section class="section container" id="calidad" aria-labelledby="calidad-title">
    <div class="section-heading">
      <div>
        <p class="eyebrow">Compromiso institucional</p>
        <h2 id="calidad-title">Calidad Institucional</h2>
      </div>
      <p>Información sobre los procesos, políticas e iniciativas orientados a la mejora continua de la Facultad</p>
    </div>

    <div class="cards">
      <article class="card">
        <span class="card-number" aria-hidden="true">✓</span>
        <h3>Evaluación y Acreditación</h3>
        <p>Información sobre mecanismos de evaluación y seguimiento institucional, Carreras Acreditadas y en procesos de evaluación</p>
      </article>

      <article class="card">
        <span class="card-number" aria-hidden="true">✓</span>
        <h3>Planes de Mejora</h3>
        <p>Información sobre planes de mejora desarrollados por las diferentes carreras de la facultad</p>
      </article>

      <article class="card">
        <span class="card-number" aria-hidden="true">✓</span>
        <h3>MECIP</h3>
        <p>Información referente a MECIP</p>
      </article>

      <article class="card">
        <span class="card-number" aria-hidden="true">✓</span>
        <h3>Seguimiento e Impacto</h3>
        <p>Actividades que impactan en la sociedad</p>
      </article>

      <article class="card">
        <span class="card-number" aria-hidden="true">✓</span>
        <h3>Documentación</h3>
        <p>Documentos y recursos institucionales disponibles para la comunidad</p>
      </article>
    </div>
  </section>

  <section class="section section-alt" id="administracion" aria-labelledby="administracion-title">
    <div class="container">
      <div class="section-heading">
        <div>
          <p class="eyebrow">Gestión institucional</p>
          <h2 id="administracion-title">Dirección de Administración</h2>
        </div>
        <p>Información sobre la gestión administrativa y los servicios de apoyo de la Facultad</p>
      </div>

      <div class="cards">
        <article class="card">
          <h3>Dirección de Administración</h3>
          <p>Conoce las áreas, servicios y procesos que acompañan el funcionamiento institucional</p>
          <a href="<?php echo esc_url(home_url('/administracion/')); ?>">
            Ver información <span aria-hidden="true">→</span>
          </a>
        </article>
      </div>
    </div>
  </section>

  <section class="section filiales-section" id="filiales" aria-labelledby="filiales-title">
    <div class="container">
      <div class="section-heading">
        <div>
          <p class="eyebrow">Presencia territorial</p>
          <h2 id="filiales-title">Filiales</h2>
        </div>
        <p>Selecciona una filial para acceder a su información</p>
      </div>

      <div class="filial-links" aria-label="Accesos a las filiales">
        <a class="filial-link" href="#contacto" aria-label="Solicitar información de Filial Coronel Bogado">
          <span>Filial Coronel Bogado</span><span aria-hidden="true">→</span>
        </a>
        <a class="filial-link" href="#contacto" aria-label="Solicitar información de Filial María Auxiliadora">
          <span>Filial María Auxiliadora</span><span aria-hidden="true">→</span>
        </a>
        <a class="filial-link" href="#contacto" aria-label="Solicitar información de Filial Mayor Otaño">
          <span>Filial Mayor Otaño</span><span aria-hidden="true">→</span>
        </a>
        <a class="filial-link" href="#contacto" aria-label="Solicitar información de Filial Natalio">
          <span>Filial Natalio</span><span aria-hidden="true">→</span>
        </a>
        <a class="filial-link" href="#contacto" aria-label="Solicitar información de Filial San Pedro del Paraná">
          <span>Filial San Pedro del Paraná</span><span aria-hidden="true">→</span>
        </a>
      </div>
    </div>
  </section>

  <section class="section section-alt" id="noticias" aria-labelledby="noticias-title">
    <div class="container">
      <div class="section-heading">
        <div>
          <p class="eyebrow">Actualidad</p>
          <h2 id="noticias-title">Noticias</h2>
        </div>
        <p>Las últimas noticias y actividades de la Facultad</p>
      </div>

      <?php
      $news_query = new WP_Query(array(
        'post_type'           => 'post',
        'post_status'         => 'publish',
        'posts_per_page'      => 5,
        'orderby'             => 'date',
        'order'               => 'DESC',
        'ignore_sticky_posts' => true,
      ));
      ?>

      <?php if ($news_query->have_posts()) : ?>
        <div class="news-carousel" data-news-carousel>
          <?php if ($news_query->post_count > 1) : ?>
            <div class="news-carousel-controls">
              <button type="button" class="news-carousel-button"
                      data-carousel-prev aria-label="Mostrar noticias anteriores">
                <span aria-hidden="true">←</span>
              </button>
              <button type="button" class="news-carousel-button"
                      data-carousel-next aria-label="Mostrar noticias siguientes">
                <span aria-hidden="true">→</span>
              </button>
            </div>
          <?php endif; ?>

          <div class="news-carousel-track" data-carousel-track
              aria-label="Últimas noticias" tabindex="0">
            <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
              <article class="news-carousel-card">
                <?php if (has_post_thumbnail()) : ?>
                  <a class="news-carousel-image" href="<?php echo esc_url(get_permalink()); ?>"
                    tabindex="-1" aria-hidden="true">
                    <?php the_post_thumbnail('large'); ?>
                  </a>
                <?php endif; ?>

                <div class="news-carousel-content">
                  <p class="news-carousel-date">
                    <?php echo esc_html(get_the_date('j \d\e F \d\e Y')); ?>
                  </p>
                  <h3>
                    <a href="<?php echo esc_url(get_permalink()); ?>">
                      <?php echo esc_html(get_the_title()); ?>
                    </a>
                  </h3>
                  <p class="news-carousel-excerpt">
                    <?php echo esc_html(huma_custom_excerpt(24)); ?>
                  </p>
                  <a class="news-carousel-link" href="<?php echo esc_url(get_permalink()); ?>">
                    Leer noticia <span aria-hidden="true">→</span>
                  </a>
                </div>
              </article>
            <?php endwhile; ?>
          </div>
        </div>
      <?php else : ?>
        <div class="news-card">
          <p>Todavía no hay noticias publicadas</p>
        </div>
      <?php endif; ?>

      <?php wp_reset_postdata(); ?>
    </div>
  </section>

  <section class="section important-links-section" id="enlaces-importantes" aria-labelledby="enlaces-title">
    <div class="container">
      <div class="section-heading">
        <div>
          <p class="eyebrow">Recursos institucionales</p>
          <h2 id="enlaces-title">Enlaces importantes</h2>
        </div>
        <p>Accede a plataformas y sitios relacionados con la Facultad</p>
      </div>

      <div class="important-links-grid">
        <a class="important-link-card"
          href="https://campusvirtual.uni.edu.py/course/index.php?categoryid=5"
          target="_blank" rel="noopener noreferrer">
          <img src="https://i0.wp.com/humanidades.uni.edu.py/wp-content/uploads/2020/08/moodle-img.png"
              alt="" loading="lazy">
          <span>Campus Virtual</span>
        </a>

        <a class="important-link-card"
          href="http://maitei.uni.edu.py/login"
          target="_blank" rel="noopener noreferrer">
          <img src="https://i0.wp.com/humanidades.uni.edu.py/wp-content/uploads/2022/02/maitei.110a812c.png"
              alt="" loading="lazy">
          <span>Proyecto MAITEI</span>
        </a>

        <a class="important-link-card"
          href="http://uni.edu.py/"
          target="_blank" rel="noopener noreferrer">
          <img src="https://i0.wp.com/humanidades.uni.edu.py/wp-content/uploads/2017/07/UNI-600x330.jpg?resize=600%2C330"
              alt="" loading="lazy">
          <span>Universidad Nacional de Itapúa</span>
        </a>

        <a class="important-link-card"
          href="http://humanidades.uni.edu.py/observatorio-de-salud-mental/"
          target="_blank" rel="noopener noreferrer">
          <img src="https://i0.wp.com/humanidades.uni.edu.py/wp-content/uploads/2019/02/OSM.jpg"
              alt="" loading="lazy">
          <span>Observatorio de Salud Mental</span>
        </a>
      </div>
    </div>
  </section>

  <section class="contact-directory section-alt" id="contacto" aria-labelledby="contacto-title">
    <div class="container">
      <div class="section-heading">
        <div>
          <p class="eyebrow">Estamos para ayudarte</p>
          <h2 id="contacto-title">Contactos Importantes</h2>
        </div>
        <p>Comunícate con el área correspondiente por teléfono o correo electrónico</p>
      </div>

      <div class="contact-directory-grid">
        <article class="contact-department">
          <h3>Secretaría General</h3>
          <a href="tel:+595981182304">0981 – 182 304</a>
          <a href="mailto:secretariageneralhuma@uni.edu.py">secretariageneralhuma@uni.edu.py</a>
          <a href="mailto:s.generalhuma@gmail.com">s.generalhuma@gmail.com</a>
        </article>

        <article class="contact-department">
          <h3>Dirección Académica</h3>
          <a href="tel:+595985100860">0985 – 100 860</a>
          <a href="mailto:d.academicahuma@uni.edu.py">d.academicahuma@uni.edu.py</a>
        </article>

        <article class="contact-department">
          <h3>Departamento Administrativo</h3>
          <a href="tel:+595973816420">0973 – 816 420</a>
          <a href="mailto:administracion@humanidades.uni.edu.py">administracion@humanidades.uni.edu.py</a>
        </article>

        <article class="contact-department">
          <h3>Departamento de Extensión e Investigación</h3>
          <a href="tel:+595981621445">0981 – 621 445</a>
          <a href="mailto:investigacionhuma@uni.edu.py">investigacionhuma@uni.edu.py</a>
        </article>

        <article class="contact-department">
          <h3>Departamento de Posgrado</h3>
          <a href="mailto:posgradohumanidades@uni.edu.py">posgradohumanidades@uni.edu.py</a>
        </article>

        <article class="contact-department">
          <h3>Departamento de Lenguas</h3>
          <a href="mailto:d.lenguas@humanidades.uni.edu.py">d.lenguas@humanidades.uni.edu.py</a>
        </article>

        <article class="contact-department">
          <h3>Aseguramiento de la Calidad</h3>
          <a href="mailto:autoevaluacionhumanidades@uni.edu.py">autoevaluacionhumanidades@uni.edu.py</a>
        </article>
      </div>

      <aside class="contact-service-notice" role="note">
        <strong>Aviso sobre la línea telefónica</strong>
        <p>
          La línea 071-207454 se encuentra temporalmente fuera de servicio.
          Por favor, comunícate con los números de celulares indicados arriba
        </p>
      </aside>
    </div>
  </section>
</main>

<?php get_footer(); ?>