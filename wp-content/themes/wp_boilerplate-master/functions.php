<?php
// Estilos CSS
  function dl_enqueue_style() {
  $theme_data = wp_get_theme();
/* Registrar estilos y bootstrap*/
   wp_register_style('icons', 'https://use.fontawesome.com/releases/v5.0.13/css/all.css', null, $theme_data->get( '5.0.13' ));
   wp_register_style('fonts', 'https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet', null, $theme_data->get( '1.0.1' ));
   wp_register_style('bootstrap_css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css', null, $theme_data->get( '4.1.1' ));
   wp_register_style('style', get_parent_theme_file_uri('/assets/css/style.css'), null, $theme_data->get( '1.0' ));
/* llamar estilos */
   wp_enqueue_style( 'icons');
   wp_enqueue_style( 'fonts');
   wp_enqueue_style( 'bootstrap_css');
   wp_enqueue_style( 'style' );
  }

   add_action( 'wp_enqueue_scripts', 'dl_enqueue_style' );

  function dl_enqueue_scripts() {
    $theme_data = wp_get_theme();
    /* Registrar scripts */
     wp_enqueue_script( 'jQuery_js', 'https://code.jquery.com/jquery-3.3.1.slim.min.js');
     wp_enqueue_script( 'google', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyD9g9f9fsMPAFdFx0XGUfhmsBWI0gYGK4U&callback=initMap');
     wp_enqueue_script( 'pooper_js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js');
     wp_enqueue_script( 'bootstrap_js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js');
     wp_register_script('app', get_parent_theme_file_uri('/assets/js/lib/app.js'), null , '1.0' , true);

    /* llamar scripts */
     wp_enqueue_script( 'jQuery_js' );
     wp_enqueue_script( 'google' );
     wp_enqueue_script( 'pooper_js' );
     wp_enqueue_script( 'bootstrap_js' );
     wp_enqueue_script( 'app' );
   }
  add_action( 'wp_enqueue_scripts', 'dl_enqueue_scripts' );

  function yourtheme_setup() {
     add_theme_support( 'wc-product-gallery-zoom' );
     add_theme_support( 'wc-product-gallery-lightbox' );
     add_theme_support( 'wc-product-gallery-slider' );
    }
    add_action( 'after_setup_theme', 'yourtheme_setup' );

?>