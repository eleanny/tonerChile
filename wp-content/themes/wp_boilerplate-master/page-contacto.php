<?php get_header() ?>
	<?php the_post() ?>
     <div class="container">
     	<div class="row">
     	 <div class="col-md-6">	
	         <h3 class="text-info title"><?php the_title() ?></h3>
	         <p><?php the_content(); ?></p>
	     </div>
	     <div class="col-md-6" id="map">
	     	
	     </div>
	    </div>
     </div>
<?php get_footer() ?>