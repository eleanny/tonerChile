<?php get_header() ?>
	<?php the_post() ?>
	<div class="container">
		<?php the_post_thumbnail(array(50,50)); ?>
	    <h3 class="text-center p-3"><?php the_title() ?></h3>
	    <?php the_content(); ?>
	</div>
	

<?php get_footer() ?>