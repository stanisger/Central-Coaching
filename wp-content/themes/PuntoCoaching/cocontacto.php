<?php  
/*
Template Name: gracias
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
        <img src="<?php echo $image; ?>" alt="">
      </div>
    <?php endwhile; else: ?>
    <h1>no hay post</h1>
    <?php endif; ?>   
  </section>
  <!--**HEAD**-->  
<?php endwhile; else: ?>
<h1>no hay post</h1>
<?php endif; ?> 
<?php get_footer(); ?>

