<?php get_header(); ?>
  <?php get_template_part('carousel'); ?>
  <section class="title title-products m-4">
     <h3 class="text-center text-dark p-5">Nuestro Producto</h3>
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
  <div class="title title-services m-4">
     <h3 class="text-center text-dark p-5">Servicios</h3>
  </div>
  <div class="container text-center py-3">
     <div class="row">
        <div class="col-md-4 py-5">
          <i class="fas fa-2x fa-wrench text-warning"></i>
          <h4>Servicio tecnico de impresoras</h4>
          <p>Reparamos tu impresora y la dejamos como nueva.</p>
          
        </div>
        <div class=" col-md-4 py-5">
          <i class="fas fa-2x fa-exchange-alt text-success"></i>
          <h4>Recarga de Toner</h4>
          <p>Contamos con la mejor tinta para toners.</p>
        </div>
       <div class="col-md-4 py-5">
         <i class="fas fa-2x fa-shopping-cart text-info"></i>
         <h4>Venta de Toner</h4>
         <p>Toner compatible con todas las marcas de impresora.</p>
       </div>
     </div>
   </div>
<?php get_template_part('slyder'); ?>
<?php get_footer(); ?>
  