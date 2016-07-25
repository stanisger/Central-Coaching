<?php  
/*
Template Name: Ser coach
*/
 ?>

<?php get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<!--**HEAD**-->   
 <section id="eyecatcher" class="eyecatcher-in">
    <?php if( have_rows('head') ): ?>
    <?php while( have_rows('head') ): the_row();
    $title = get_sub_field('title');
    $discriptionHead = get_sub_field('discriptionHead');
    $image = get_sub_field('image');
    ?>
     <div class="content two four">
        <div class="text"> 
          <h1><?php echo $title; ?></h1>
          <h3><?php echo $discriptionHead; ?></h3>
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
  <!--**HEAD**-->  


<section id="resumeCoach">
<?php if( have_rows('descript') ): ?>
    <?php while( have_rows('descript') ): the_row();
    $title = get_sub_field('title');
    $discriptionTaller = get_sub_field('discriptionTaller');
    ?>
 <div class="content">
   <article>
     <h2><?php echo $title; ?></h2>
     <h3><?php echo $discriptionTaller; ?></h3> 
   </article>
     <?php if( have_rows('modulo') ): ?>
      <?php while( have_rows('modulo') ): the_row();
      $title = get_sub_field('title');
      ?>
     <article>
     <h3><?php echo $title; ?></h3>
       <ul>
         <?php if( have_rows('temas') ): ?>
        <?php while( have_rows('temas') ): the_row();
        $tema = get_sub_field('tema');
        ?>
            <li><?php echo $tema; ?></li>
          <?php endwhile; else: ?>
          <?php endif; ?> 

       </ul>
     </article>
    <?php endwhile; else: ?>
    <?php endif; ?> 
  </div>
  <?php endwhile; else: ?>
  <?php endif; ?>    
</section>
<section id="InfoCoach">
      <?php if( have_rows('informacion') ): ?>
      <?php while( have_rows('informacion') ): the_row();
      ?>
      <div class="content">
        <article>
          <div class="content">
            <?php if( have_rows('duracion') ): ?>
            <?php while( have_rows('duracion') ): the_row();
            $date = get_sub_field('date');
            ?>
                <h4>Duración</h4>
                <p><?php echo $date; ?></p>
            <?php endwhile; else: ?>
            <h1>no hay post</h1>
            <?php endif; ?>   
          </div>  
        </article>
        <span class="line"></span>
        <article>
        <div class="content">
          <h4>Cada mes</h4>
           <ul>
            <?php if( have_rows('tiempo') ): ?>
            <?php while( have_rows('tiempo') ): the_row();
            $date = get_sub_field('date');
            ?>
                 <li><?php echo $date; ?></li>
             <?php endwhile; else: ?>
            <?php endif; ?> 

         </ul>
        </div> 
        </article>
      <span class="line"></span>
       <article>
          <div class="content"> 
          <?php if( have_rows('parners') ): ?>
            <?php while( have_rows('parners') ): the_row();
            $date = get_sub_field('date');
             $logo = get_sub_field('logo');
            ?>  
                  <h4>Membresía</h4>
                  <p><?php echo $date; ?></p>
                 <figure>  
                   <img src="<?php echo $logo; ?>" alt="">
                </figure>  
              <?php endwhile; else: ?>
            <h1>no hay post</h1>
            <?php endif; ?>  
          </div>   
        </article>
      </div>
      <?php endwhile; else: ?>
      <?php endif; ?> 
</section>
<section id="modulos">
<div class="content">
    <?php if( have_rows('modulos') ): ?>
    <?php while( have_rows('modulos') ): the_row();
    ?>  
      <!-- article -->
         <?php if( have_rows('imagen') ): ?>
          <?php while( have_rows('imagen') ): the_row();
          $img = get_sub_field('img');
          ?> 
             <article style="background: url(<?php echo $img; ?>);"></article>
         <?php endwhile; else: ?>
         <h1>no hay post</h1>
         <?php endif; ?>  
       <!-- article --> 
  
       <!-- article -->
          <?php if( have_rows('modulo') ): ?>
          <?php while( have_rows('modulo') ): the_row();
            $title = get_sub_field('title');
          ?>   
          <article>
            <h2><?php echo $title; ?></h2>
            <ul>
              <?php if( have_rows('temas') ): ?>
              <?php while( have_rows('temas') ): the_row();
                $numero = get_sub_field('numero');
                $tema = get_sub_field('tema');
               ?>   
                <li>
                 <span class="numeros"><?php echo $numero; ?></span>
                  <p><?php echo $tema; ?></p>
                </li>
                <?php endwhile; else: ?>
               <h1>no hay post</h1>
               <?php endif; ?> 
             <li>
            </ul>
          </article>
        <?php endwhile; else: ?>
         <?php endif; ?> 
     <!-- article -->


     <!-- article -->
          <?php if( have_rows('modulo2') ): ?>
            <?php while( have_rows('modulo2') ): the_row();
              $title2 = get_sub_field('title2');
            ?>   
            <article>
              <ul>
                <?php if( have_rows('temas2') ): ?>
                <?php while( have_rows('temas2') ): the_row();
                  $numero2 = get_sub_field('numero2');
                  $link22 = get_sub_field('link22');
                  $tema2 = get_sub_field('tema2');
                 ?>   
                  <li>
                   <span class="numeros"><?php echo $numero2; ?></span>
                    <p><?php echo $tema2; ?></p>
                  </li>
                  <?php endwhile; else: ?>
                 <h1>no hay post</h1>
                 <?php endif; ?> 
               
              </ul> 

          
            </article>
          <?php endwhile; else: ?>
           <?php endif; ?> 

                 <!-- article -->


      <!-- article -->
         <?php if( have_rows('imagen2') ): ?>
          <?php while( have_rows('imagen2') ): the_row();
          $img = get_sub_field('img');
          ?> 
               <article style="background: url(<?php echo $img; ?>);"></article>
         <?php endwhile; else: ?>
         <?php endif; ?>   
      
      <article>
       <p class="btnContent btn-want" style="text-align:left; margin-left:8%;">
                  <a href="<?php the_field('linko'); ?>"><button class="btnColor btn-1 btn-1d" style="margin:30px 0;">INSCRÍBETE</button></a>
              </p> 

      </article>

     <!-- article -->



  <?php endwhile; else: ?>
  <?php endif; ?> 
  </div>
</section>

<?php endwhile; else: ?>
<?php endif; ?> 

<?php include (TEMPLATEPATH. '/testimoniales.php'); ?>

<?php get_footer(); ?>
