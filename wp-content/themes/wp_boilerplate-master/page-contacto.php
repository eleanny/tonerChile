<?php get_header() ?>
	<?php the_post() ?>
     <div class="container">
     <div class="row text-center">	
      <div class="col-md-6">		
         <h3 class="text-primary title p-3"><?php the_title() ?></h3>
	     <p><?php the_content(); ?></p>
	  </div>   
	  <div class="col-md-6 p-5">	
	  	 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3324.7378949295867!2d-70.82587758517988!3d-33.56018568074258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662e7780106fccb%3A0xc487d244819dfdad!2sTONERCHILE+LTDA.+Toners+Y+Recargas+ENV%C3%8DOS+XPRESS!5e0!3m2!1ses!2scl!4v1535760708636" width="400" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
	  </div>
	</div>
	</div>     
<?php get_footer() ?>