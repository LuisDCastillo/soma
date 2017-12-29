<?php 
    /*  Template Name: Home  */
?>
<div class="mainContainer">
<!--    HERO-->
    <section id="hero">
        <div class="container">
            <div class="row">
                <div class="col-md-12 hero-content">
                    <div class="owl-carousel owl-theme">
                        <div class="carousel-element"><h1>Mantenimiento</h1></div>
                        <div class="carousel-element"><h1>Lorem</h1></div>
                        <div class="carousel-element"><h1>Ipsum</h1></div>
                    </div>
                    <h2>
                        <span>Fácil</span>. Intuitivo<br>
                        Inteligente
                    </h2>
                    <button type="button" class="btn btn-outline-light" style="width: auto;">
                        Ver Video
                    </button>
                </div>
                <div class="col-md-12">
                    <div class="btn-group btn-group-justified my-btn-group-responsive">
                        <button type="button" class="btn btn-primary">
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
                        <button type="button" class="btn btn-primary">
                            <div class="hero-icon user"></div>                        
                            ¿Quiéres ser un representante de ventas?
                        </button>
                    </div>
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
                        Software #1<br>
                        En mantenimiento aeronáutico
                    </h1>
                </div>
                <div class="col-md-4 elem text-center info-content">
                    <img src="http://localhost/somawordpress/wp-content/uploads/2017/12/plane.png">
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
                                 <h1><?php echo get_the_content() ?></h1>
                                <?php  } ?>
                                <?php
                            
                            /* Restore original Post Data */
                            wp_reset_postdata();
                        }
                    ?>
                    <p>Aeronaves<br>
                        Controladas
                    </p>
                </div>
                <div class=" col-md-4 elem text-center info-content">
                    <img src="http://localhost/somawordpress/wp-content/uploads/2017/12/boardingpass.png">
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
                                 <h1><?php echo get_the_content() ?></h1>
                                <?php  } ?>
                                <?php
                            
                            /* Restore original Post Data */
                            wp_reset_postdata();
                        } else {
                            // no posts found
                        }
                    ?>
                    <p>Vuelos<br>
                        Registrados
                    </p>
                </div>
                <div class="col-md-4 elem text-center info-content">
                    <img src="http://localhost/somawordpress/wp-content/uploads/2017/12/engine.png">
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
                                 <h1><?php echo get_the_content() ?></h1>
                                <?php  } ?>
                                <?php
                            
                            /* Restore original Post Data */
                            wp_reset_postdata();
                        } else {
                            // no posts found
                        }
                    ?>
                    <p>Componentes<br>
                        en inventario
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
                <div class="col-md-12">
                    <h1 class="text-center">
                        Nuestras Soluciones
                    </h1>
                </div>
            <div class="col-md-4">
                <img src="http://localhost/somawordpress/wp-content/uploads/2017/12/page-,-4.png"> 
            </div>
            <div class="col-md-4">
                <img src="http://localhost/somawordpress/wp-content/uploads/2017/12/page-,.png">  
            </div>
            <div class="col-md-4">
                <img src="http://localhost/somawordpress/wp-content/uploads/2017/12/page-1-1.png">    
            </div>
            <br>           
            <div class="col-md-6">
                <p class=" text-center">
                    Mantenimineto,<br>
                    ingenieria <br>
                    y confiabilidad
                </p>
            </div>
            <div class="col-md-6 text-center">
                <p class=" text-center">
                    Compras<br>
                    e Inventario <br>
                    de Componentes
                </p>
            </div>
            <div class="col-md-4 text-center">
                <p class=" text-center">
                    Producción<br>
                    Web / Movil App
                </p>
            </div>
            <div class="col-md-4 text-center">
                <p class=" text-center">
                    Operaciones<br>
                    de Vuelos
                </p>
            </div>

            <div class="col-md-4 text-center">
                <p class=" text-center">
                    Control<br>
                    de Vencimiento <br>
                    de Documentos
                </p>
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
                            <button type="button" class="btn btn-outline-primary" style="width: auto;">
                                Ver más
                            </button>
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
                            <button type="button" class="btn btn-outline-primary" style="width: auto;">
                                Ver más
                            </button>
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
                            <button type="button" class="btn btn-outline-primary" style="width: auto;">
                                Ver más
                            </button>
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
                            <button type="button" class="btn btn-outline-primary" style="width: auto;">
                                Ver más
                            </button>
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
                            <button type="button" class="btn btn-outline-primary" style="width: auto;">
                                Ver más
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--   Fin Servicios-->   


<!--    whatis-->
    <section id="whatis">
        ¿Qué es Soma?
    </section>
<!--   Fin whatis--> 

<!--    Socios-->
    <section id="socios">
        Socios
    </section>
<!--   Fin Socios-->

<!--    Testimonios-->
    <section id="Testimonios">
        Testimonios
    </section>
<!--   Fin Testimonios--> 

<!--    contacto-->
    <section id="contacto">
        Contáctanos
    </section>
<!--   Fin contacto-->   

</div>