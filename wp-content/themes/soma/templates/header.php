<header class="banner">
  <div class="container">
    <a class="brand" href="#">
      <img src="http://localhost/somawordpress/wp-content/uploads/2018/01/logo.png" alt="">
    </a> 
    <nav class="nav-primary text-right">
      <a href="#soluciones">Soluciones</a>
      <a href="#servicios">Servicios</a>
      <a href="#whatis">¿Qué es Soma?</a>
      <a href="#webinar">Blog</a>
      <a href="#">Contacto</a>
      <a href="#">Soporte</a>
      <a href="#">Login</a>
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </nav>
  </div>
</header>
