 <div class="slider">
    <ul class="slides">
      <?php if( have_rows('slide') ): ?>
      <?php while( have_rows('slide') ): the_row();
        $subtitle = get_sub_field('subtitle');
        $title = get_sub_field('title');
        $descript = get_sub_field('descript');
        $image = get_sub_field('image');
        $link = get_sub_field('link');
        ?>
      <li>
        <img src="<?php echo $image; ?>"> <!-- random image -->
        <div class="caption center-align">
        <span><?php echo $subtitle; ?></span>
          <h3><?php echo $title; ?></h3>
          <h5 >
            <?php echo $descript; ?>
          </h5>
           <p class="btnContent">

          <a href="<?php echo $link; ?>"><button class="btnColor2 btn-1 btn-1c">CONOCE MÁS</button></a>
        </p>          
        </div>
      </li>
      <?php endwhile; else: ?>
      <?php endif; ?> 
    </ul>
  </div>