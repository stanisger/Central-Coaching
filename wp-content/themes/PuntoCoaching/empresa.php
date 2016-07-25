<?php  
/*
Template Name: Empresa
*/
 ?>

<?php get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<!--**HEAD**-->  
<section id="eyecatcherInEmpresa">
  <?php if( have_rows('head') ): ?>
  <?php while( have_rows('head') ): the_row();
  $title = get_sub_field('title');
  $discriptionHead = get_sub_field('discriptionHead');
  $image = get_sub_field('image');
  ?>
    <div class="content">
      <div class="text">
        <h2>Soy Empresa</h2>
        <h1><?php echo $title; ?></h1>
        <p><?php echo $discriptionHead; ?></p>
      </div>  
      <div class="degrade"></div>
       <?php 
          if( !empty($image) ): ?>
          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
      <?php endif; ?>
    </div>
  <?php endwhile; else: ?>
  <h1>no hay post</h1>
  <?php endif; ?>   
</section>
<!--**HEAD**-->


<section id="InfoEmpresa">
    <div class="content">
      <?php if( have_rows('talleres') ): ?>
      <?php while( have_rows('talleres') ): the_row();

        $name = get_sub_field('name');
        $text = get_sub_field('text');
        $icon = get_sub_field('icon');
     ?>
      <article>
        <div class="content">
          <i class="<?php echo $icon; ?>"></i>
          <h4><?php echo $name; ?></h4>
          <p><?php echo $text; ?></p>
        </div>  
      </article>

    <!--   <span class="line"></span> -->

    <?php endwhile; else: ?>
    <h1>no hay post</h1>
    <?php endif; ?> 


    </div>
</section>


<section id="resumeEmpresa">
     <div class="content">
      <article> 
        <h3><?php the_field('resume-subtitle'); ?></h3>
        <h2><?php the_field('resume-title'); ?></h2>
      </article>
      
      <article>
       
       <div class="contentAside">
        <?php if( have_rows('curses') ): ?>
        <?php while( have_rows('curses') ): the_row();

            $title = get_sub_field('title');
            $text = get_sub_field('text');
            $img2 = get_sub_field('img2');
        ?>
        
        <aside>

            <?php 
              if( !empty($img2) ): ?>
              <img src="<?php echo $img2['url']; ?>" alt="<?php echo $img2['alt']; ?>" />
            <?php endif; ?>
 
            <h3><?php echo $title; ?></h3>
            <div class="text">
              <?php echo $text; ?>
            </div>
               
        </aside>

        <?php endwhile; else: ?>
        <h1>no hay post</h1>
        <?php endif; ?> 

       </div> 
         <p class="btnContent">
               <a href="<?php the_field('link'); ?>"><button class="btnColor btn-1 btn-1d">INSCRÍBETE</button></a>
        </p> 
      </article>
     </div> 
</section>



<?php endwhile; else: ?>
<h1>no hay post</h1>
<?php endif; ?> 


<?php include (TEMPLATEPATH. '/testimoniales.php'); ?>


<?php get_footer(); ?>