var altura = $('.navbar').offset().top;

$(window).scroll(function(){
  // Aquí va el código que se ejecuta mientras haces el scroll y debe estar fuera del $(window).ready()
  if ($(window).scrollTop() > altura){
    
     $('.navbar').addClass('fixed-top');
    }
  // Esta variable almacenaría la distancia con el top, para poder comparar y así ejecutar algún script en cierto minuto
  else{
     $('.navbar').removeClass('fixed-top');
    }
});
$(document).ready(function(){

         $(".title-products").mouseover( function(){
           $(".title-products").css({ opacity: 0.8 });
           });
         $(".title-products").mouseout(function(){
           $(".title-products").css({'background-color': '#F66D82',
            opacity: 1});
          });
           
         $(".title-services").mouseover( function(){
           $(".title-services").css({ opacity: 0.8 });
           });
         $(".title-services").mouseout(function(){
           $(".title-services").css({'background-color': '#FEBD1B',
            opacity: 1});
          });

});
