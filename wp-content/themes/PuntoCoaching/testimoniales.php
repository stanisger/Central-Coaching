
<section id="fourSection">
  <?php query_posts( array( 'category_name' => 'testimonio', 'post_type' => 'Testimoniales' ) );  ?>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

     <div class="content">
       <article>
         <h3><?php the_title(); ?></h3>
         <p><?php the_field('description'); ?></p> 
       </article>
       <article class="owl-carousel">
        <?php if( have_rows('testimonial') ): ?>
        <?php while( have_rows('testimonial') ): the_row();
            $nombre = get_sub_field('nombre');
            $puesto = get_sub_field('puesto');
            $descript = get_sub_field('descript');
            $image = get_sub_field('image');
          ?>
        <div class="contentElements item">
            <div class="element">
                 <a href="#">
                  <i class="flaticon-commenting" aria-hidden="true"></i>
                </a>
                 <?php 
                if( !empty($image) ): ?>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                <?php endif; ?>
                <div class="text">
                  <h3><?php echo $nombre; ?></h3>
                  <h4><?php echo $puesto; ?></h4>  
                </div>
                <p>
                 <?php echo $descript; ?>
                </p>
            </div>  
         </div>

          <?php endwhile; else: ?>
          <h1>no hay post</h1>
          <?php endif; ?> 
                
       </article>
       
     </div>
     <?php endwhile; else: ?>
          <h1>no hay post</h1>
          <?php endif; ?> 
                
   </section>

