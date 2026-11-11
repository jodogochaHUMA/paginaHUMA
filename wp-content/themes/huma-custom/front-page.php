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
      <h2 id="acerca-title">Acerca de la Facultad.</h2>
    </div>
    <div class="intro-copy">
      <p>El 30 de diciembre de 1998 se crea la primera carrera nacional de Bilingüismo Guaraní – Castellano, en aquel tiempo, de la Facultad de Humanidades y Cultura Guaraní.</p>
      <p>El 15 de febrero del año 2003 se puso a consideración del país los primeros graduados Licenciados en Bilingüismo Guaraní-Castellano, al mismo tiempo de inaugurarse el Campus Universitario de Encarnación.</p>
      <p>En el 2004, la Facultad de Humanidades, Ciencias Sociales y Cultura Guaraní crea la carrera de Ciencias de la Educación con Énfasis en Ciencias Sociales, Ciencias Básicas y Matemáticas.</p>
      <p>Al inicio del 2008, la Facultad de Humanidades, Ciencias Sociales y Cultura Guaraní habilita nuevas carreras de Licenciatura en Ciencias Sociales con Énfasis en Trabajo Social y Relaciones Internacionales.</p>
      <p>Actualmente esta Unidad Académica ha diversificado su oferta académica ya que además de la Licenciatura de Bilingüismo Guaraní – Castellano cuenta con las carreras de Licenciatura en Ciencias Sociales, Educación, Lengua Inglesa, Psicología y otras especializaciones.</p>
    </div>
  </section>

  <section class="section academic-section" id="academico" aria-labelledby="academico-title">
    <div class="container">
      <div class="section-heading">
        <div>
          <p class="eyebrow">Académico</p>
          <h2 id="academico-title">Formación académica.</h2>
        </div>
        <p>Conoce las propuestas de formación de grado y posgrado de la Facultad.</p>
      </div>

      <div class="cards">
        <article class="card" id="formacion-grado">
          <span class="card-number" aria-hidden="true">01</span>
          <h3>Formación Académica de Grado</h3>
          <p>Información sobre carreras, perfiles de egreso, planes de estudio y requisitos de admisión.</p>
          <a href="#contacto">Consultar información <span aria-hidden="true">→</span></a>
        </article>

        <article class="card" id="formacion-posgrado">
          <span class="card-number" aria-hidden="true">02</span>
          <h3>Formación Académica de Posgrado</h3>
          <p>Espacio para conocer programas de especialización, maestrías y formación avanzada.</p>
          <a href="#contacto">Consultar información <span aria-hidden="true">→</span></a>
        </article>

        <article class="card">
          <span class="card-number" aria-hidden="true">03</span>
          <h3>Curso Probatorio de Admisión</h3>
          <p>Conoce el proceso de admisión y presenta tu postulación.</p>
          <a href="#contacto">Consultar información <span aria-hidden="true">→</span></a>
        </article>
      </div>
    </div>
  </section>

  <section class="community" id="investigacion" aria-labelledby="investigacion-title">
    <div class="community-inner container">
      <div class="section-heading">
        <div>
          <p class="eyebrow">Conocimiento y comunidad</p>
          <h2 id="investigacion-title">Investigación y Extensión.</h2>
        </div>
        <p>Conoce los departamentos y las iniciativas que conectan la Facultad con la comunidad.</p>
      </div>

      <div class="cards">
        <article class="card">
          <span class="card-number" aria-hidden="true">01</span>
          <h3>Departamento de Investigación</h3>
          <p>Información sobre proyectos, equipos y actividades de investigación.</p>
          <a href="#contacto">Visitar departamento <span aria-hidden="true">→</span></a>
        </article>

        <article class="card">
          <span class="card-number" aria-hidden="true">02</span>
          <h3>Extensión</h3>
          <p>Actividades y proyectos de vinculación con la comunidad.</p>
          <a href="#contacto">Conocer extensión <span aria-hidden="true">→</span></a>
        </article>

        <article class="card">
          <span class="card-number" aria-hidden="true">03</span>
          <h3>Departamento de Lenguas</h3>
          <p>Conoce las propuestas y actividades del Departamento de Lenguas.</p>
          <a href="#contacto">Conocer departamento <span aria-hidden="true">→</span></a>
        </article>
      </div>
    </div>
  </section>

  <section class="section container" id="calidad" aria-labelledby="calidad-title">
    <div class="section-heading">
      <div>
        <p class="eyebrow">Compromiso institucional</p>
        <h2 id="calidad-title">Calidad Institucional.</h2>
      </div>
      <p>Información sobre los procesos, políticas e iniciativas orientados a la mejora continua de la Facultad.</p>
    </div>

    <div class="cards">
      <article class="card">
        <span class="card-number" aria-hidden="true">✓</span>
        <h3>Mejora continua</h3>
        <p>Espacio para publicar objetivos, acciones y avances de calidad institucional.</p>
      </article>

      <article class="card">
        <span class="card-number" aria-hidden="true">✓</span>
        <h3>Evaluación</h3>
        <p>Información sobre mecanismos de evaluación y seguimiento institucional.</p>
      </article>

      <article class="card">
        <span class="card-number" aria-hidden="true">✓</span>
        <h3>Transparencia</h3>
        <p>Documentos y recursos institucionales disponibles para la comunidad.</p>
      </article>
    </div>
  </section>

  <section class="section section-alt" id="noticias" aria-labelledby="noticias-title">
    <div class="container">
      <div class="section-heading">
        <div>
          <p class="eyebrow">Actualidad</p>
          <h2 id="noticias-title">Noticias.</h2>
        </div>
        <p>Actividades, anuncios y novedades de la Facultad.</p>
      </div>

      <div class="news-card">
        <p>Próximamente se publicarán aquí las noticias y actividades de la Facultad.</p>
      </div>
    </div>
  </section>

  <section class="section filiales-section" id="filiales" aria-labelledby="filiales-title">
    <div class="container">
      <div class="section-heading">
        <div>
          <p class="eyebrow">Presencia territorial</p>
          <h2 id="filiales-title">Filiales.</h2>
        </div>
        <p>Selecciona una filial para acceder a su información.</p>
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

  <section class="contact section-alt" id="contacto" aria-labelledby="contacto-title">
    <div class="container">
      <p class="eyebrow">Estamos para escucharte</p>
      <h2 id="contacto-title">Contacto.</h2>
      <p>Si necesitas información sobre carreras, admisiones, investigación o extensión, podrás comunicarte con la Facultad.</p>
      <a class="button" href="mailto:secretariageneralhuma@uni.edu.py">Solicitar información</a>
    </div>
  </section>
</main>

<?php get_footer(); ?>