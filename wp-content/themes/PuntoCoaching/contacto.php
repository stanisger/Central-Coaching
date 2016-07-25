<?php  
/*
Template Name: Contacto
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
      </div>
    <?php endwhile; else: ?>
    <h1>no hay post</h1>
    <?php endif; ?>   
  </section>
  <!--**HEAD**-->  
  <section class="contact">
    <article class="contactFirst">
      <ul>
      <?php if( have_rows('dates') ): ?>
      <?php while( have_rows('dates') ): the_row();
      $direccion = get_sub_field('direccion');
      $email2 = get_sub_field('email2');
      $phone = get_sub_field('phone');
      $phonelink = get_sub_field('phonelink');
      $link = get_sub_field('link');
      ?>
        <li><i class="flaticon-tool"></i>
        <strong>Dirección</strong> <br>
        <span><?php echo $direccion; ?></span>
        </li>
       
        <li>
        <i class="flaticon-note"></i><strong>Email</strong> <br><span><?php echo $email2; ?> 
        </span>
        </li>
        
        <li>
        <i class="material-icons phone-contact">phone</i><strong>Teléfono</strong><br>
        <span>
            <a href="tel:<?php echo $phonelink; ?>"><?php echo $phone; ?></a>
        </span>
        </li>
        <li>
          <a href="<?php echo $link; ?>" target="_blank">
           <i class="flaticon-social"></i><strong>/CentralCoachingOficial</strong>
           </a> 
        </li>
        <?php endwhile; else: ?>
        <h1>no hay post</h1>
        <?php endif; ?> 
      </ul>
    </article>

  <article class="contactForm">
    <h2>Contáctanos</h2>
        <div class="row">
    

    <form class="col s12" action="javascript:void(0);">
      <div class="row">
          <div class="input-field col s12 m12">
            <input name="nombre" id="nombre" type="text" class="validate" required>
            <label for="nombre">Nombre</label>
          </div>
          <div class="input-field col s12 m12">
            <input name="email" id="e-mail" type="email" class="validate" required>
            <label for="e-mail">E-mail</label>
          </div>
          <div class="input-field col s12 m4">
            <input name="telefono" id="telefono" type="text" class="validate" required>
            <label for="telefono">Teléfono</label>
          </div>
          
           <div class="input-field col s12 m8">
            <input name="curso_taller" id="kindOf" type="text" class="validate" required>
            <label for="kindOf">Nombre del Curso o Taller</label>
          </div>
          
          <div class="input-field col s12 m12">
            <input name="comentarios" id="comentarios" type="text" class="validate" >
            <label for="comentarios">Comentarios</label>
          </div>
          
           <div class="col s12">
            <p class="btnContent btn-in btn-contact">
              <button type="submit" class="btnColorZ btn-1 btn-1z">Enviar</button>
            </p>
          </div>

      </div>
      
    </form>
  </div>
  </article>
</section>

  <section class="contact-map">
    <div class="white"></div>
  <div class="map">
    <iframe src="<?php the_field('map'); ?>" width="100%" height="400"></iframe>
  </div>
  </section>

<?php endwhile; else: ?>
<h1>no hay post</h1>
<?php endif; ?> 
<?php get_footer(); ?>
<script>
  $(document).ready(function() {
    $('form.s12').submit(function(){
        var params = {
                nombre: $("#nombre").val(),
                email: $("#e-mail").val(),
                telefono: $("#telefono").val(),
                curso_taller:$("#kindOf").val(),
                comentarios:$("#comentarios").val()
            };
        $('p.btnContent').children('button').html('Enviando ...')
        $.ajax({
          url: '<?php echo esc_url( home_url( '/' ) ); ?>phpmailer/send_mail.php',
          type: 'POST',
          data: params,
          success: function (data) {
            window.location = '<?php echo esc_url( home_url( '/' ) ); ?>/gracias';
          }
        });     
    });
  });
</script>
