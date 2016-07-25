<section id="firstSection">

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <?php if( have_rows('firstSection') ): ?>
    <?php while( have_rows('firstSection') ): the_row();


        $title = get_sub_field('title');
        $subtitle = get_sub_field('subtitle');
        $imagen = get_sub_field('imagen');
        $icon = get_sub_field('icon');

               ?>

    <article>

      <?php 
          if( !empty($icon) ): ?>
          <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" />
      <?php endif; ?>
      <h2><?php echo $title; ?></h2>
      <h3><?php echo $subtitle; ?></h3>
      <ul>
        
        <?php if( have_rows('taller') ): ?>  
        <?php while( have_rows('taller') ): the_row(); 

              $name = get_sub_field('name');
              $link = get_sub_field('link');
            
        ?>
        <li> 
          <a href="<?php echo $link; ?>">
            <?php echo $name; ?>
            <i class="flaticon-next"></i>
           </a>
        </li>
         
        <?php endwhile; else: ?>
        <?php endif; ?> 

      </ul>

      <?php 
          if( !empty($imagen) ): ?>
          <img src="<?php echo $imagen['url']; ?>" alt="<?php echo $imagen['alt']; ?>" />
      <?php endif; ?>
    
    </article>

    <?php endwhile; else: ?>
    <h1>No se encontraron Articulos</h1>
    <?php endif; ?>

<?php endwhile; else: ?>
<h1>no hay post</h1>
<?php endif; ?> 

       
</section>