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

    var coord = {
	        santiago: {
	        	lat: -33.4488897,
	        	lng: -70.6692655
	        },
	        concepcion: {
	        	lat: -36.8282,
	        	lng: -73.0514
	        },
	        arica: {
	        	lat: -18.4833,
	        	lng: -70.3333
	        }
         };

         function initMap(city) {
  	         var map;
             map = new google.maps.Map(document.getElementById('map'), {
             center: {lat: -18.4833 , lng: -70.3333 },
             zoom: 8
            });
             var marker = new google.maps.Marker({

             position: {lat: latitud, lng: longitud},
             map: map
            });
        }
         $.ajax({
            url: 'https://cors-anywhere.herokuapp.com/https://maps.googleapis.com/maps/api/js?key=AIzaSyD9g9f9fsMPAFdFx0XGUfhmsBWI0gYGK4U&callback=initMap',
            method: 'GET'
         }).then(function(){
         	initMap('santiago');
         } );

         $(".title").mouseover( function(){
           $(".title").css("background-color", "lightgray");
          });
         $(".title").mouseout(function(){
           $(".title").css("background-color", "lightgray");
          });
           
 

});
