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
          <li><a href="<?php echo esc_url(home_url('')); ?>">Información Institucional</a></li>
          <li><a href="<?php echo esc_url(home_url('')); ?>">Carreras</a></li>
          <li><a href="<?php echo esc_url(home_url('')); ?>">Investigación</a></li>
          <li><a href="<?php echo esc_url(home_url('')); ?>">Normativas</a></li>
          <li><a href="<?php echo esc_url(home_url('')); ?>">MECIP</a></li>
          <li><a href="<?php echo esc_url(home_url('')); ?>">Departamento de Lenguas</a></li>
          <li><a href="<?php echo esc_url(home_url('')); ?>">Contacto</a></li>
        </ul>
      </div>

      <div class="sidebar-box">
        <h3>Enlaces Externos</h3>
        <ul>
          <li>
            <a class="important-link-card"
              href="https://campusvirtual.uni.edu.py/course/index.php?categoryid=5"
              target="_blank" rel="noopener noreferrer">
              <img src="https://i0.wp.com/humanidades.uni.edu.py/wp-content/uploads/2020/08/moodle-img.png"
                  alt="" loading="lazy">
              <span>Campus Virtual</span>
            </a>
          </li>
           <li>
            <a class="important-link-card"
              href="http://maitei.uni.edu.py/login"
              target="_blank" rel="noopener noreferrer">
              <img src="https://i0.wp.com/humanidades.uni.edu.py/wp-content/uploads/2022/02/maitei.110a812c.png"
                  alt="" loading="lazy">
              <span>Proyecto MAITEI</span>
            </a>
          </li>
           <li>
            <a class="important-link-card"
              href="http://uni.edu.py/"
              target="_blank" rel="noopener noreferrer">
              <img src="https://i0.wp.com/humanidades.uni.edu.py/wp-content/uploads/2017/07/UNI-600x330.jpg?resize=600%2C330"
                  alt="" loading="lazy">
              <span>Universidad Nacional de Itapúa</span>
            </a>
          </li>
           <li>
            <a class="important-link-card"
              href="http://humanidades.uni.edu.py/observatorio-de-salud-mental/"
              target="_blank" rel="noopener noreferrer">
              <img src="https://i0.wp.com/humanidades.uni.edu.py/wp-content/uploads/2019/02/OSM.jpg"
                  alt="" loading="lazy">
              <span>Observatorio de Salud Mental</span>
            </a>
          </li>
        </ul>
      </div>
    </aside>
  </div>
</main>

<?php get_footer(); ?>