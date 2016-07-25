<section id="treeSection">
      <div class="content">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <article>
          <h4><?php the_field('subtitle-3'); ?></h4>
          <h2><?php the_field('title-3'); ?></strong></h2>
          <h3><?php the_field('phrase-3'); ?></h3>
          <p>
            <?php the_field('text-3'); ?>
          </p>
          <p class="btnContent">
            <a href="<?php the_field('link-3'); ?>"><button class="btnColor2 btn-1 btn-1c">CONOCE MÁS</button></a>
          </p> 
        </article>

        <article>
         <!--  <img src="assets/img/central-coaching-jaime-nunez.jpg" alt="Central Coaching Jaime Nuñez"> -->
        </article>
    <?php endwhile; else: ?>
        <?php endif; ?> 

      </div>
   </section>