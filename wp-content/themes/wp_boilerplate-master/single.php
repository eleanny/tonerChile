<?php get_header() ?>
    <div class="container p-3">
      <?php the_post() ?>
	  <h3><?php the_title() ?></h3>
	  <?php the_post_thumbnail() ?>
	  <?php the_content(); ?>	
    </div>
    
<?php get_footer() ?>