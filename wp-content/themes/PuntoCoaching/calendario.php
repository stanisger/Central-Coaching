<?php  
/*
Template Name: Calendario
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
    <h1>no hay post</h1>
    <?php endif; ?>   
  </section>
  <!--**HEAD**-->  

<section id="titleIn">
     <div class="content">
      <h1>Cursos y <strong>Diplomados</strong></h1>
     </div>
 </section>
    <section id="InfoCalendar">
    <div class="content">
    <article>
        <div class="content">
          <i class="flaticon-business-presentation"></i>
          <h4>Nombre del curso</h4>
          
        </div>  
      </article>
      <article>
        <div class="content">
          <i class="flaticon-time"></i>
          <h4>Fecha</h4>
          
        </div>  
      </article>
      <article>
      <div class="content">
        <i class="flaticon-tool"></i>
        <h4>Lugar</h4>
     
      </div> 
      </article>
      <article>
      <div class="content">
        <i class="flaticon-clock-circular-outline"></i>
        <h4>Duración</h4>
      
      </div>   
      </article>
      <article>
      <div class="content">
        <i class="flaticon-multiple-users-silhouette"></i>
        <h4>Capacidad</h4>
      
       </div>    
      </article> 
      <article></article>
    </div>
</section>
<div class="calendar">
      <?php if( have_rows('calendar') ): ?>
          <?php while( have_rows('calendar') ): the_row();
          $title = get_sub_field('title');
          $fecha = get_sub_field('fecha');
          $lugar = get_sub_field('lugar');
          $duracion = get_sub_field('duracion');
          $capacidad = get_sub_field('capacidad');
          $link = get_sub_field('link');
          ?>
                <article>
                  <div class="content">
                      <span><?php echo $title; ?></span>
                      <span><?php echo $fecha; ?></span>
                      <span><?php echo $lugar; ?></span>
                      <span><?php echo $duracion; ?></span>
                      <span><?php echo $capacidad; ?></span>
                      <span><a href="<?php echo $link; ?>">INSCRÍBETE > </a></span>
                    </div>
                </article>


               <?php endwhile; else: ?>
              <h1>no hay post</h1>
              <?php endif; ?>    

  </div>

<section id="calendarIn">
    <div class="content">
    <?php if( have_rows('calendar') ): ?>
          <?php while( have_rows('calendar') ): the_row();
          $title = get_sub_field('title');
          $fecha = get_sub_field('fecha');
          $lugar = get_sub_field('lugar');
          $duracion = get_sub_field('duracion');
          $capacidad = get_sub_field('capacidad');
          $link = get_sub_field('link');
          ?>
          <article>
           <div class="content">
              <span><?php echo $fecha; ?></span>
              <span> <a href="<?php echo $link; ?>">
                      INSCRÍBETE  >
                  </a>
              </span>
              <h2><?php echo $title; ?></h2>
              <div class="info">
                <div class="dates">
                  <i class="flaticon-location-pin"></i>
                  <p><?php echo $lugar; ?></p>
                </div>
                <div class="dates">
                  <i class="flaticon-clock-circular-outline"></i>
                  <p><?php echo $duracion; ?></p>
                </div>
                <div class="dates">
                  <i class="flaticon-multiple-users-silhouette"></i>
                  <p><?php echo $capacidad; ?></p>
                </div>
              </div>
            </div>
          </article>
      <?php endwhile; else: ?>
      <h1>no hay post</h1>
      <?php endif; ?> 
    </div>
   <div class="degradate"></div>
</section>



<?php endwhile; else: ?>
<h1>no hay post</h1>
<?php endif; ?> 

<?php include (TEMPLATEPATH. '/testimoniales.php'); ?>

<?php get_footer(); ?>
