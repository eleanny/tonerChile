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