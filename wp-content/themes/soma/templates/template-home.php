<?php 
    /*  Template Name: Home  */
?>
<!--    HERO-->
<section id="hero">
  <div class="container">
    <div class="row">
      <div class="col-md-12 hero-content" style="margin-bottom: 18%;">
        <div class="owl-carousel owl-theme">
          <div class="carousel-element">
            <h1>Mantenimiento</h1>
          </div>
          <div class="carousel-element">
            <h1>Lorem</h1>
          </div>
          <div class="carousel-element">
            <h1>Ipsum</h1>
          </div>
        </div>
        <h2>
          <span>Fácil</span>. Intuitivo
          <br> Inteligente
        </h2>
        <button type="button" class="btn btn-outline-light" style="width: auto;">
          Ver Video
        </button>

      </div>
      <div class="col-lg-12 text-center">
        <div class="btn-group btn-group-justified btn-group-responsive">
          <button type="button" class="btn btn-primary">
          <div class="hero-icon sheet"></div>            
            Solicita una cotización
          </button>
          <button type="button" class="btn btn-primary">
            <div class="hero-icon pc"></div>
            Solicita una demostración
          </button>
      
          <button type="button" class="btn btn-primary">
            <div class="hero-icon player"></div>
            Regístrate en nuestro WEBINAR
          </button>
          <button type="button" class="btn btn-primary" style="">
            <div class="hero-icon user"></div>
            ¿Quiéres ser un representante de ventas?
          </button>
        </div>
      </div>
      <div class="hero-padding">
        <br>
      </div>
    </div>
  </div>
</section>
<!--   Fin HERO-->

<!--    Info-->
<section id="info">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-center">
          Software #1
          <br> En mantenimiento aeronáutico
        </h1>
      </div>
    </div>
    <div class="row">  
      <div class="col-md-4 elem text-center info-content">
        <img src="wp-content/themes/soma/assets/images/2017/12/plane.png">
        <?php 
                        // the query
                        $args = array(
                            'post_type' => 'info',
                            'posts_per_page' => 1,
                            'cat' => 1
                        );
                        $query = new WP_Query($args);
                        if ( $query->have_posts() ) {
                            while ( $query->have_posts() ) {
                                $query->the_post(); ?>
        <h1>
          <?php echo get_the_content() ?>
        </h1>
        <?php  } ?>
        <?php
                            
                            /* Restore original Post Data */
                            wp_reset_postdata();
                        }
                    ?>
          <p>Aeronaves
            <br> Controladas
          </p>
      </div>
      <div class=" col-md-4 elem text-center info-content">
        <img src="wp-content/themes/soma/assets/images/2017/12/boardingpass.png">
        <?php 
                        // the query
                        $args = array(
                            'post_type' => 'info',
                            'posts_per_page' => 1,
                            'cat' => 2
                        );
                        $query = new WP_Query($args);
                        if ( $query->have_posts() ) {
                            while ( $query->have_posts() ) {
                                $query->the_post(); ?>
        <h1>
          <?php echo get_the_content() ?>
        </h1>
        <?php  } ?>
        <?php
                            
                            /* Restore original Post Data */
                            wp_reset_postdata();
                        } else {
                            // no posts found
                        }
                    ?>
          <p>Vuelos
            <br> Registrados
          </p>
      </div>
      <div class="col-md-4 elem text-center info-content">
        <img src="wp-content/themes/soma/assets/images/2017/12/engine.png">
        <?php 
                        // the query
                        $args = array(
                            'post_type' => 'info',
                            'posts_per_page' => 1,
                            'cat' => 3
                        );
                        $query = new WP_Query($args);
                        if ( $query->have_posts() ) {
                            while ( $query->have_posts() ) {
                                $query->the_post(); ?>
        <h1>
          <?php echo get_the_content() ?>
        </h1>
        <?php  } ?>
        <?php
                            
                            /* Restore original Post Data */
                            wp_reset_postdata();
                        } else {
                            // no posts found
                        }
                    ?>
          <p>Componentes
            <br> en inventario
          </p>
      </div>
    </div>
  </div>
</section>
<!--   Fin Info-->

<!-- Soluciones -->
<section id="soluciones">
  <div class="container">
    <div class="row">
      <div class="col-md-12" style="height: 10%">
        <h1 class="text-center">
          Nuestras Soluciones
        </h1>
      </div>
      <div class="col-md-4 text-left">
        <img src="wp-content/themes/soma/assets/images/2018/01/white-soluciones-user.png">
      </div>
      <div class="col-md-4 text-center">
        <img src="wp-content/themes/soma/assets/images/2018/01/white-soluciones-plane.png">
      </div>
      <div class="col-md-4 text-right">
        <img src="wp-content/themes/soma/assets/images/2018/01/white-solucionessheet.png">
      </div>
      <div class="col-md-6">
        <p class=" text-center">
          Mantenimineto,
          <br> ingenieria
          <br> y confiabilidad
        </p>
      </div>
      <div class="col-md-6 text-center">
        <p class=" text-center">
          Compras
          <br> e Inventario
          <br> de Componentes
        </p>
      </div>
      <div class="col-md-4 text-left">
        <p class=" text-center">
          Producción
          <br> Web / Movil App
        </p>
      </div>
      <div class="col-md-4 text-center">
        <p class=" text-center">
          Operaciones
          <br> de Vuelos
        </p>
      </div>

      <div class="col-md-4 text-right">
        <p class=" text-center">
          Control
          <br> de Vencimiento
          <br> de Documentos
        </p>
      </div>
      <div class="col-md-6 text-center">
        <img src="wp-content/themes/soma/assets/images/2018/01/white-soluciones-config.png">
      </div>
      <div class="col-md-6 text-center">
        <img src="wp-content/themes/soma/assets/images/2018/01/white-soluciones-house.png">
      </div>
    </div>
  </div>
</section>
<!-- Fin Soluciones-->

<!--    Servicios-->
<section id="servicios">
  <div class="container">
    <div class="row">

      <div class="col-md-12">
        <h1 class="text-center">
          Servicios
        </h1>
        <p class="text-center">
          Aproveche al máximo sus operaciones de mantenimiento de aeronaves
        </p>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-2">
        <div class="card first" style="width: 20rem;">
          <div class="top-rectangle blue"></div>
          <div class="card-body">
            <h4 class="card-title">Alojamiento en la nube</h4>
            <p class="card-text">
              SOMA ofrece nuestra suite de productos RAAS tanto como una instalación interna tradicional.
            </p>
            <a href="servicios" class="btn btn-outline-primary" style="width: auto;">
              Ver más
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-2">
        <div class="card" style="width: 20rem;">
          <div class="top-rectangle orange"></div>
          <div class="card-body">
            <h4 class="card-title">Migración de datos de aviones</h4>
            <p class="card-text">
              SOMA ofrece migración de datos de aeronaves, configuración y servicios de actualización .
            </p>
            <a href="servicios" class="btn btn-outline-primary" style="width: auto;">
              Ver más
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-2">
        <div class="card" style="width: 20rem;">
          <div class="top-rectangle blue"></div>
          <div class="card-body">
            <h4 class="card-title">Entrenamiento del sistema del usuario final</h4>
            <p class="card-text">
              SOMA ofrece servicios de capacitación para usuarios finales para implementaciones.
            </p>
            <a href="servicios" class="btn btn-outline-primary" style="width: auto;">
              Ver más
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-2">
        <div class="card" style="width: 20rem;">
          <div class="top-rectangle orange"></div>
          <div class="card-body">
            <h4 class="card-title">Implementación Gestión de Proyectos</h4>
            <p class="card-text">
              Independientemente de si es un operador de inicio o una operación heredada, la implementación.
            </p>
            <a href="servicios" class="btn btn-outline-primary" style="width: auto;">
              Ver más
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-2">
        <div class="card" style="width: 20rem;">
          <div class="top-rectangle blue"></div>
          <div class="card-body">
            <h4 class="card-title">Proyecto de Investigación y Desarrollo</h4>
            <p class="card-text">
              Tanto para clientes nuevos como para clientes existentes, SOMA ofrece habilidades de analista.
            </p>
            <a href="servicios" class="btn btn-outline-primary" style="width: auto;">
              Ver más
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--   Fin Servicios-->


<!--    whatis-->
<section id="whatis">
  <div class="background"></div>
  <div class="container">
    <div class="row">
    <div class="col-md-1 d-lg-none"></div>      
      <div class="col-lg-6 col-sm-12 col-md-10">
        <h1 class="text-left">
          ¿Qué es Soma?
        </h1>
        <p class="text-left">
          SOMA es un Software Aeronáutico SaaS, Web & App móvil que se adapta a las necesidades de la industria. Desde una escuela
          de vuelo, taxi aéreo o taller de servicio MRO, hasta una Aerolínea Comercial.
        </p>
        <a href="wp-content/themes/soma/assets/pdf/pdf.pdf" class="btn pres">Descargar presentacion</a>
        <a href="#" class="btn demo">Prueba Soma gratis</a>
        <a href="#" class="btn coti">Solicita una cotizacion</a>
        <a href="https://itunes.apple.com/us/app/soma-software/id1259982451?mt=8">
          <img border="0" alt="W3Schools" src="wp-content/themes/soma/assets/images/2018/01/601-i-9279142277-d-544-e-8.png">
        </a>
      </div>
      <div class="col-md-5 d-none d-lg-block">
        <img src="wp-content/themes/soma/assets/images/2018/01/apple-devices.png" alt="">
      </div>
    </div>
  </div>
</section>
<!--   Fin whatis-->

<!--    Socios-->
<section id="socios">
  <div class="background"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-1 d-lg-none"></div>  
      <div class="col-sm-12 col-lg-6 col-md-10">
        <h1 class="text-left">
          Socios estratégicos
        </h1>
        <p class="text-left">
          <span>Teravision Technologies</span>, empresa con más de 15 años de expereincia en desarrollo de software, con oficinas
          en Caracas y Bogotá y que cuenta con más de 140 programadores.
          <br>
          <span>HangarCentral.com</span>, la comunidad aeronáutica más grande de latinoamérica, la cual cuenta con más de 50.000
          usuarios registrados.
        </p>
      </div>
      <div class="col-lg-6 col-md-12 text-center">
        <div class="brand">
          <div class="text-center">
            <div class="a"></div>
            <img src="wp-content/themes/soma/assets/images/2018/01/logo-tera.png">
            <h3 class="text-center">
              teravisiontech.com
            </h3>
          </div>
          <div class="text-center">
            <div class="b"></div>
            <img src="wp-content/themes/soma/assets/images/2018/01/logo-hangar-central.png" alt="">
            <h3 class="text-center">
              hangarcentral.com
            </h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--   Fin Socios-->

<!--    Testimonios-->
<section id="testimonios">
  <div class="background1"></div>
  <div class="background2"></div>
  <div class="container">
    <div class="row owl-carousel owl-theme">
      <div class="col-lg-12">
        <h1>
          Testimonios
        </h1>
        <div class="carousel-element">
          <img src="wp-content/themes/soma/assets/images/2018/01/3710.png" alt="">
        </div>
        <div class="carousel-element">
          <img src="wp-content/themes/soma/assets/images/2018/01/media_check.jpg" alt="">
        </div>

      </div>
    </div>
  </div>
</section>
<!--   Fin Testimonios-->

<!--    contacto-->
<section id="webinar">
  <div class="background"></div>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-11 offset-md-1 col-lg-5">
          <h1>webinar</h1>
          <a class="btn" href="#">Regístrate</a>
          <h4>Próximo webinar:</h4>
          <p>25 de Septiembre 2017</p>
          <h4>Último webinar:</h4>
          <p>Control de inventario, compras,
            <br> cotizaciones y documentos.</p>
        </div>
        <div class="col-md-12 col-lg-7">
          <h1 class="text-center">Últimos post</h1>
          <div class="latest">
            <div>
              <h3>CemAir Elige RAAS</h3>
              <p>Enfrentando desafíos típicos de la
                <br> operación de flota, CemAir…</p>
              <a class="tags" href="#">Aerolineas</a>
              <a class="tags" href="#">Flota</a>
              <a class="tags" href="#">RAAS</a>
              <br><br>
              <a class="more" href="#">Leer más</a>
            </div>
            <div>
              <h3>Hawai'i Island Air selecciona RAAS</h3>
              <p>Enfrentando desafíos típicos de la
                <br> operación de flota, CemAir ha…</p>
              <a class="tags" href="#">Aerolineas</a>
              <a class="tags" href="#">Flota</a>
              <a class="tags" href="#">RAAS</a>
              <br><br>              
              <a class="more" href="#">Leer más</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</section>
<!--   Fin contacto-->

</div>