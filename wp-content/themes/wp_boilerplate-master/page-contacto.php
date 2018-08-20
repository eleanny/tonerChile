<?php get_header() ?>
	<?php the_post() ?>
     <div class="container">
	    <h3 class="pl-5 pt-4 text-info"><?php the_title() ?></h3>
	    <p><?php the_content(); ?></p>
     </div>
<?php get_footer() ?>