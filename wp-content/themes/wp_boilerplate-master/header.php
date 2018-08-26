<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
	   <title>Toner CHILE</title>
	   <meta charset="<?php bloginfo('charset') ?>">
	   <meta name="viewport" content="width=device-width, initial-scale=1">
     <?php wp_head(); ?>
  </head>
  <body>
    <div class="container rounded bg-white p-0">
     <section class="header jumbotron text-center bg-white p-0">
       <div class="row">
         <div class="col-md-4">
           <!-- Facebook -->
           <a class="fb-ic">
             <a href="https://api.whatsapp.com/send?phone=56954700888"><i class="fab fa-whatsapp fa-3x mt-5 text-success"></i></a>
           </a>
           <a href="">
             <a href="https://m.me/TONERCHILECL"><i class="fab fa-facebook-messenger text-primary fa-3x ml-3 mt-5 mr-5"></i></a>
           </a>
         </div>
         <div class="col-md-4">
           <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Logo_TonerChile.png" class="header-logo p-0 m-0" width="60%" height="auto"> 
         </div>
         <div class="col-md-4">
           <form class="form-inline pt-5 ml-5 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
           </form>
         </div>
       </div>
     </section>
      <!--Barra de Navegacion-->
      <nav class="navbar barra navbar-expand-lg navbar-white bg-primary">
          <a class="navbar-brand" href="#"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav m-auto">
                 <a class="nav-item nav-link active text-white" href="http://localhost:8888/home/">Inicio<span class="sr-only">(current)</span></a>
                 <a class="nav-item nav-link text-white" href="http://localhost:8888/productos/">Productos</a>
                 <a class="nav-item nav-link text-white" href="http://localhost:8888/contacto/">Contacto</a>
               </div>
          </div>
     </nav>