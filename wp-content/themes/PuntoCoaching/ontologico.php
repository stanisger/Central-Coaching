<?php  
/*
Template Name: Ontologico
*/
 ?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


  <section id="eyecatcher" class="eyecatcher-in">
    <?php if( have_rows('head') ): ?>
    <?php while( have_rows('head') ): the_row();
      $title = get_sub_field('title');
      $image = get_sub_field('image');
      ?>

        <div class="content two four">
          <div class="text">
          <h1><?php echo $title; ?></h1>
          
          </div>    
          <div class="degrade"></div>
          <?php 
          if( !empty($image) ): ?>
          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
          <?php endif; ?>
        </div>

    <?php endwhile; else: ?>
    <?php endif; ?> 
  </section>

<section id="resume" class="it">
 <div class="content">

   <?php if( have_rows('resume') ): ?>
    <?php while( have_rows('resume') ): the_row();
      $title = get_sub_field('title');
      $subtitle = get_sub_field('subtitle');
      $image = get_sub_field('image');
      $descript = get_sub_field('descript');
      ?>
   <article   style=" background: url(<?php echo $image; ?>);">  
   </article>
   <article style="background-color:#eee;">
    <div>
     <h2 style="font-size:33px;"><?php echo $title; ?></h2>
      <h3><?php echo $subtitle; ?></h3> 
        <?php echo $descript; ?>
      
     </div>
       
   </article>
    
    <?php endwhile; else: ?>
    <?php endif; ?> 
  </div> 
</section>

<section id="resumeCoach" style="padding-top:0 !important;">
 <div class="content">
   <article>
   </article>


    <?php if( have_rows('ontologico') ): ?>
    <?php while( have_rows('ontologico') ): the_row();
      $title = get_sub_field('title');
      $descript = get_sub_field('descript');
      $link = get_sub_field('link');
      ?>

       <article>
       <h3><?php echo $title; ?></h3>
         <?php echo $descript; ?>
       </article>
  
    <?php endwhile; else: ?>
    <?php endif; ?> 

   <p class="btnContent onto">
    <a href="<?php echo $link; ?>"><button class="btnColor btn-1 btn-1d">INSCRÍBETE</button></a>
    </p> 
  </div> 
</section>


<?php endwhile; else: ?>
<?php endif; ?> 

<?php include (TEMPLATEPATH. '/testimoniales.php'); ?>


<?php get_footer(); ?>
