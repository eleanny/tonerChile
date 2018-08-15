<!DOCTYPE html>
<html>
<head>
	<title>Toner CHILE</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Raleway:200,800" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/mystyle.css">
 </head>
   <body>
      <div class="jumbotron m-0 p-0">
         <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Logo_TonerChile.png" class="p-0 m-0" width="10%">
      </div>
      <!--Barra de Navegacion-->
      <nav class="navbar navbar-expand-lg navbar-ligt bg-primary">
       <a class="navbar-brand" href="#"></a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
       <div class="navbar-nav ml-auto">
       <a class="nav-item nav-link active text-white" href="#">Inicio<span class="sr-only">(current)</span></a>
       <a class="nav-item nav-link text-white" href="#">Productos</a>
       <a class="nav-item nav-link text-white" href="#">Contacto</a>
     </div>
   </div>
  </nav>
  <section class="container-fluid p-0">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 slyder" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/door.jpg" alt="First slide">
       <div class="carousel-caption d-none d-md-block text-white background rounded">
         <h2 class="p-2">Recarga y Venta de Toner</h2>
         <h3 class="">Calidad, rendimiento y economia</h3>
         <button type="button" class="btn btn-primary m-3">Contáctanos!</button>
       </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 slyder" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/colors.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block text-white background rounded">
        <h2 class="p-2">Calidad garantizada</h2>
        <h3 class=" ">Tres meses de garantia</h3>
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
  <section class="encabezado bg-ligth">
     <h2 class="text-center text-dark p-5">Nuestros Productos</h2>
  </section>
  <section class="producto p-5">
    <div class="container">
       <div class="row">
         <div class="col-md-6">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/producto.jpeg" width="80%">
         </div>
         <div class="col-md-6 p-4">
           <h2 class="text-dark">El mejor cartucho</h2>
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
  <div class="encabezado">
     <h2 class="text-center text-dark p-5">Servicios</h2>
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
  