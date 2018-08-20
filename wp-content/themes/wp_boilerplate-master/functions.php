<?php
// Estilos CSS
  function dl_enqueue_style() {
  $theme_data = wp_get_theme();
/* Registrar estilos y bootstrap*/
   wp_register_style('bootstrap_css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css', null, $theme_data->get( '4.1.1' ));
   wp_register_style('style', get_parent_theme_file_uri('/assets/css/mystyle.css'), null, $theme_data->get( '1.0' ));
   wp_register_style('icons', 'https://use.fontawesome.com/releases/v5.0.13/css/all.css', null, $theme_data->get( '4.1.1' ));
/* llamar estilos */
   wp_enqueue_style( 'icons');
   wp_enqueue_style( 'bootstrap_css');
   wp_enqueue_style( 'style' );
  }

   add_action( 'wp_enqueue_scripts', 'dl_enqueue_style' );

  function dl_enqueue_scripts() {
    $theme_data = wp_get_theme();
    /* Registrar scripts */
     wp_register_script('bootstrap_js', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', array('jquery') , '3.3.1' , true);
     wp_register_script('app', get_parent_theme_file_uri('/assets/lib/js/app.js'), null , '1.0' , true);

    /* llamar scripts */

     wp_enqueue_script( 'bootstrap_js' );
     wp_enqueue_script( 'app' );
   }
  add_action( 'wp_enqueue_scripts', 'dl_enqueue_scripts' );
  add_action( 'after_setup_theme', 'yourtheme_setup' );
 
function yourtheme_setup() {
  add_theme_support( 'wc-product-gallery-zoom' );
  add_theme_support( 'wc-product-gallery-lightbox' );
  add_theme_support( 'wc-product-gallery-slider' );
}
?>