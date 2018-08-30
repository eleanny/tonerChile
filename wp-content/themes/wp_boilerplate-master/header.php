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
     <section class="header container text-center bg-ligth p-0">
       <div class="row">
         <div class="col-sm-12 col-md-3 col-lg-3 col-xl-4 mx-auto">
           <!-- Facebook -->
           <a class="fb-ic">
             <a href="https://api.whatsapp.com/send?phone=56954700888"><i class="fab fa-whatsapp fa-2x mt-5 ml-2 text-success"></i></a>
           </a>
           <a href="">
             <a href="https://m.me/TONERCHILECL"><i class="fab fa-facebook-messenger text-primary fa-2x ml-3 mt-5 mr-5"></i></a>
           </a>
         </div>
         <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 mx-auto">
           <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Logo_TonerChile.png" class="header-logo p-0 mt-2 ml-5" width="70%" height="auto"> 
         </div>
         <div class="header-form col-sm-12 col-md-5 col-lg-5 col-xl-4 mx-auto">
           <form class="form-inline pt-5 ml-5 my-lg-0 my-xl-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
              <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Buscar</button>
           </form>
         </div>
       </div>
     </section>
      <!--Barra de Navegacion-->
      <nav class="navbar barra navbar-expand-lg navbar-white bg-primary">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Logo_TonerChile.png" class="nav-logo p-0 m-0" width="30%" height="auto">
          <form class="nav-form form-inline">
            <input class="form-control mr-sm-3" type="search" placeholder="Search" aria-label="Search">
         </form> 
          <a class="navbar-brand" href="#"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars text-white"></i>
          <!-- <span class="navbar-toggler-icon"></span> -->
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav m-auto">
                 <a class="nav-item nav-link active text-white" href="/">Inicio<span class="sr-only">(current)</span></a>
                 <a class="nav-item nav-link text-white" href="/productos/">Productos</a>
                 <a class="nav-item nav-link text-white" href="/contacto/">Contacto</a>
               </div>
          </div>
     </nav>