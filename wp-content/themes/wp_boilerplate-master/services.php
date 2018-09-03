<section class="title title-services m-4">
     <h3 class="text-center text-white p-5">Servicios</h3>
  </section>
  <div class="container text-center py-3">
        
        <div class="row">
           <?php query_posts('posts_per_page=3&post_type=servicio'); ?>
           <?php if(have_posts()): while(have_posts()): the_post(); ?>
               <div class="col-md-4 py-5">
                 <?php $iconos = ['wrench','exchange-alt','shopping-cart']; ?>
                 <?php $colores = ['text-warning','text-success','text-info']; ?>
                 <?php foreach($iconos as $icons): ?>
                  <?php if(get_post_meta(get_the_ID(), $icons,true)): ?>
                      <i class="service-fas fas fa-2x fa-<?php echo $icons; ?>  <?php echo $colores[2]; ?>"></i>
                     <h3 class="text-secondary"><?php the_title(); ?></h3>
                     <p><?php the_content(); ?></p>
               </div>
           <?php endif; ?>
           <?php endforeach; ?>
          <?php endwhile; endif;?>
       </div>
 </div>