   <section id="fourSection">
     <div class="content">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

       <article>
         <h3><?php the_field('title-4'); ?></h3>
         <p><?php the_field('subtitle-4'); ?></p>
              
       </article>
       <article>
        <div class="contentElements">


          <?php if( have_rows('testimonios') ): ?>
          <?php while( have_rows('testimonios') ): the_row();

            $name = get_sub_field('name');
            $occupation = get_sub_field('occupation');
            $comment = get_sub_field('comment');
            $image = get_sub_field('image');
          ?>


            <div class="element">
                 <a href="#">
                  <i class="flaticon-commenting" aria-hidden="true"></i>
                </a>
              <?php 
              if( !empty($image) ): ?>
              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
              <?php endif; ?>
                <div class="text">
                  <h3><?php echo $name; ?></h3>
                  <h4><?php echo $occupation; ?></h4>  
                </div>
                <p>
                  “<?php echo $comment; ?>”
                </p>
            </div>  
         
        <?php endwhile; else: ?>
        <h1>no hay post</h1>
        <?php endif; ?> 

         </div>
        
         
       </article>

       <p class="btnContent">
        <a href="<?php the_field('link-4'); ?>"><button class="btnColor btn-1 btn-1d">VER MÁS</button></a>
        </p> 
     </div>
    
     <!-- <div class="controls2">
       <a class="btn-carousel" id="scrollUp" href="#">
        <i class="flaticon-arrows-1"></i>
      </a>
      <a class="btn-carousel" id="scrollDown" href="#">
        <i class="flaticon-arrows-3"></i>
      </a>
    </div>  -->


      <?php endwhile; else: ?>
      <h1>no hay post</h1>
      <?php endif; ?> 
    <!--    <p class="btnContent">
         <button class="btnColor btn-1 btn-1d">VER MÁS</button>
        </p>  -->
     </div>
   </section>