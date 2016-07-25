<?php  
/*
Template Name: Nosotros
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
      <div class="content two">
        <div class="text"> 
          <h1 style="color:##220e5c !important"><?php echo $title; ?></h1>
          <h3 style="color:##220e5c;"><?php echo $discriptionHead; ?></h3>
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
  <main>
  <section class="bothSections">
    <section class="firstSection">
      <article class="coach-descript">
      <?php if( have_rows('bio') ): ?>
      <?php while( have_rows('bio') ): the_row();
      $title = get_sub_field('title');
      $name = get_sub_field('name');
      $descript = get_sub_field('descript');
      $subtitle = get_sub_field('subtitle');
      $link = get_sub_field('link');
      $link2 = get_sub_field('link2');
      ?>
          <h5><?php echo $title; ?></h5>
          <h2><?php echo $name; ?></h2>
          <h4><?php echo $subtitle; ?></h4>
          <p><?php echo $descript; ?></p>
          <div class="button-2-column">

            <p class="btnContent btn-in">
              <button onclick="window.location.href='/reescribe-tu-historia-soy-persona/'" class="btnColor4 btn-1 btn-4f">Soy Persona
              </button>
            </p>
            <p class="btnContent btn-in">
              <button onclick="window.location.href='<?php echo $link2; ?>'" class="btnColor4 btn-1 btn-4f">Soy empresa
              </button>
            </p>
          </div> 
        <?php endwhile; else: ?>
        <h1>no hay post</h1>
        <?php endif; ?>            
      </article>
    </section>

     <section class="secondSection">
        <div class="content">
          <article>
            <ul>
            <?php if( have_rows('skills') ): ?>
            <?php while( have_rows('skills') ): the_row();
            $skillTitle = get_sub_field('skillTitle');
             $skill = get_sub_field('skill');
            ?>
              <li><i class="flaticon-check-box"></i>
                  <strong><?php echo $skillTitle; ?></strong> <br>
                  <span><?php echo $skill; ?></span>
              </li>
              <?php endwhile; else: ?>
              <h1>no hay post</h1>
              <?php endif; ?>  
            </ul>
          </article>
        </div>
     </section>
   </section>
</main>
<section class="thirdSection">
        <div class="content">
        <?php if( have_rows('certificaciones') ): ?>
        <?php while( have_rows('certificaciones') ): the_row();
         $title = get_sub_field('title');
         $descript = get_sub_field('descript');
        ?>
            <article>
              <p>
               <img src="<?php bloginfo('template_url')?>/assets/img/ribbon.png" alt="">
              </p>
               <h3><?php echo $title; ?></h3>
               <p><?php echo $descript; ?></p>
            </article>
            <article>             
              <div class="logosImg">
              <?php if( have_rows('images') ): ?>
              <?php while( have_rows('images') ): the_row();
               $image = get_sub_field('image');
              ?>
                  <img src="<?php echo $image; ?>" alt="">
                 <?php endwhile; else: ?>
                <h1>no hay post</h1>
                <?php endif; ?>  
               </div>
             </article>
           <?php endwhile; else: ?>
          <h1>no hay post</h1>
          <?php endif; ?>  
        </div>
    </section>
    <section id="fiveSection">
      <div class="content">
        <article class="article-five">
         <?php if( have_rows('cita') ): ?>
          <?php while( have_rows('cita') ): the_row();
           $frase = get_sub_field('frase');
          ?>
             <img src="<?php bloginfo('template_url')?>/assets/img/nosotros2.jpg" alt="">
             <p><?php echo $frase; ?><br>
            <img src="<?php bloginfo('template_url')?>/assets/img/firma2.png" alt="">
             </p>
          <?php endwhile; else: ?>
          <h1>no hay post</h1>
          <?php endif; ?> 

        </article>
      </div>
    </section>
<?php endwhile; else: ?>
<h1>no hay post</h1>
<?php endif; ?> 

<?php include (TEMPLATEPATH. '/testimoniales.php'); ?>

<?php get_footer(); ?>
