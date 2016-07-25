<?php  
/*
Template Name: Persona
*/
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<!--**HEAD**-->  
<section id="eyecatcherIn">
  <?php if( have_rows('head') ): ?>
  <?php while( have_rows('head') ): the_row();
  $title = get_sub_field('title');
  $discriptionHead = get_sub_field('discriptionHead');
  $image = get_sub_field('image');
  ?>
    <div class="content">
      <div class="text">
        <h2>Soy Persona</h2>
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


<!--**CONTENIDO**-->
<section id="Info"> 	
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
    <?php endwhile; else: ?>
    <h1>no hay post</h1>
    <?php endif; ?> 
  </div>
</section>
<!--**SECTION 1**-->  
<section id="resume">
  <?php if( have_rows('learning') ): ?>
  <?php while( have_rows('learning') ): the_row();
  $image = get_sub_field('image');
  ?>
  <div class="content">
        <article   
           style="background: url('<?php echo $image; ?>');">  
        </article>
        <?php if( have_rows('learningText') ): ?>
        <?php while( have_rows('learningText') ): the_row();
        $title = get_sub_field('title');
        $title2 = get_sub_field('title2');
        $text = get_sub_field('text');
        $link = get_sub_field('link');
        ?>
        <article>
          <h2><?php echo $title; ?></h2>
          <ul>
            <?php if( have_rows('puntos') ): ?>
            <?php while( have_rows('puntos') ): the_row();
                $punto = get_sub_field('punto');
            ?>
               <li><?php echo $punto; ?></li>
            <?php endwhile; else: ?>
            <h1>no hay post</h1>
            <?php endif; ?> 
          </ul>
          <h2><?php echo $title2; ?></h2>
          <p><?php echo $text; ?></p>
          <p class="btnContent">
            <button onclick="window.location.href='<?php echo $link; ?>'" class="btnColor btn-1 btn-1d">INSCRÍBETE</button>
          </p> 
        </article>
        <?php endwhile; else: ?>
        <h1>no hay post</h1>
        <?php endif; ?>  
  </div> <strong></strong>
  <?php endwhile; else: ?>
  <h1>no hay post</h1>
  <?php endif; ?> 
</section>
<!--**CONTENIDO**-->
<?php endwhile; else: ?>
<h1>no hay post</h1>
<?php endif; ?> 

<?php include (TEMPLATEPATH. '/testimoniales.php'); ?>


<?php get_footer(); ?>
