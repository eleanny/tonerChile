<?php get_header(); ?>
  <section class="container-fluid p-0">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 slyder" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/door.jpg" alt="First slide">
       <div class="carousel-caption d-none d-md-block text-white background rounded">
         <h2 class="pt-5">Recarga y Venta de Toner</h2>
         <h3 class="">Calidad, rendimiento y economia</h3>
         <button type="button" class="btn btn-primary m-3">Contáctanos!</button>
       </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 slyder" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/colors.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block text-white background rounded">
        <h2 class="pt-5 text-dark">Calidad garantizada</h2>
        <h3 class=" text-dark">Tres meses de garantia</h3>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 slyder" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/colors.jpg" alt="Third slide">
    </div>
    </div>
     <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  </div>
  </section>
  <section class="title bg-ligth">
     <h3 class="text-center text-dark p-5">Productos</h3>
  </section>
  <section class="producto p-5">
    <div class="container">
       <div class="row">
         <div class="col-md-6">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/producto.jpeg" width="80%">
         </div>
         <div class="col-md-6 p-4">
           <h4 class="text-dark">El mejor cartucho</h4>
           <p class="pt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
           tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
           quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
           consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
           cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
           proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
         </div>
       </div>
        
    </div>
  </section>
  <div class="title">
     <h3 class="text-center text-dark p-5">Servicios</h3>
  </div>
  <div class="container text-center services">
     <div class="row">
        <div class="col-md-4 p-5">
          <i class="fas fa-2x fa-wrench text-warning"></i>
          <h4>Servicio tecnico de impresoras</h4>
          <p>Reparamos tu impresora y la dejamos como nueva.</p>
          
        </div>
        <div class=" col-md-4 p-5">
          <i class="fas fa-2x fa-exchange-alt text-success"></i>
          <h4>Recarga de Toner</h4>
          <p>Tenemos una gran variedad de toner</p>
        </div>
       <div class="col-md-4 p-5">
         <i class="fas fa-2x fa-shopping-cart text-info"></i>
         <h4>Venta de Toner</h4>
         <p>contamos con toner para las marcas</p>
       </div>
     </div>
   </div>
  <?php get_footer(); ?>
  