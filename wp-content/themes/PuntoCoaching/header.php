<!DOCTYPE html>

<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<!-- <meta charset="UTF-8"> -->
	<title>
        <?php if (is_home () ) { echo bloginfo('name'); }
         elseif ( is_category() ) { the_field('seoTitle'); echo ' | ' ; echo bloginfo('name'); }
         elseif (is_page()) { bloginfo('name'); echo ' | ' ; echo the_field('seoTitle'); }
         else { wp_title('',true); } ?>
  </title>
	 <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
   <meta name="google-site-verification" content="6BLDNGBNjg49W84t9fXBBmnOFoYEuA2kTrKBdGMe-1E" />
   <meta name="description" content="En Central Coaching trabajamos por la profesionalización del Coaching Ontológico a través de nuestro diplomado con certificación internacional por la ICMF (International Coaching and Mentoring Federation).">
    <meta name="keywords" content="coaching, coaching ontologico, coacheo, coach ontologico, curso de coaching, curso coaching, curso de coaching ontologico, coaching personal, superacion personal, desarrollo personal, desarrollo humano, ICMF, International Coaching and Mentoring Federation, inteligencia emocional, trabajo en equipo">
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
  <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url')?>/assets/img/favicon.ico">
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,300,600,700,900,200italic,300italic,400italic,700italic,900italic|Raleway:400,900italic,800italic,700italic,600italic,500italic,400italic,300italic,200italic,100italic,900,800,700,600,500,300,200,100' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
  <!-- CODIGO DE GOOGLE ANALYTICS -->
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    
    ga('create', 'UA-80355310-1', 'auto');
    ga('require', 'displayfeatures');
    ga('send', 'pageview');
  </script>
  <!-- Facebook Pixel Code -->
  <!-- Facebook Pixel Code -->
  <script>
  !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
  n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
  document,'script','https://connect.facebook.net/en_US/fbevents.js');

  fbq('init', '1802329433330090');
  fbq('track', "PageView");</script>
  <noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=1802329433330090&ev=PageView&noscript=1"
  /></noscript>
  <!-- End Facebook Pixel Code -->
</head>
<body>
  <?php 
    function checkUrl(){
      $url= $_SERVER["REQUEST_URI"];
      return  $url;
    }
    if('/gracias/' == checkUrl()):
  ?>
      <!-- Google Code for Formulario Conversion Page -->
      <script type="text/javascript">
        /* <![CDATA[ */
        var google_conversion_id = 878557595;
        var google_conversion_language = "en";
        var google_conversion_format = "3";
        var google_conversion_color = "ffffff";
        var google_conversion_label = "egTfCOeKlGgQm_P2ogM";
        var google_remarketing_only = false;
        /* ]]> */
      </script>
      <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
      </script>
      <noscript>
        <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/878557595/?label=egTfCOeKlGgQm_P2ogM&amp;guid=ON&amp;script=0"/>
        </div>
      </noscript>

      <!-- CONVERTION FACEBOOK -->
      <script>fbq('track', 'CompleteRegistration');</script>

  <?php endif; ?>
 <header>
   <nav>
    <div class="nav-wrapper">
  
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand-logo">
      <img src="<?php bloginfo('template_url')?>/assets/img/central-coaching.jpg" alt="Central Coaching">
        <img class="hidden" src="<?php bloginfo('template_url')?>/assets/img/logoSmall.jpg" alt="punto-coaching">
      </a>
      <a href="#" data-activates="mobile-demo" class="button-collapse">
        <i class="fa fa-bars" aria-hidden="true"></i>
      </a>

      <?php
            
        $args = array(
          'theme_location' => 'top-bar',
          'depth'    => 0,
          'container'  => false,
          'menu_class'   => 'right hide-on-med-and-down',
          // 'menu_id'   => 'mobile-demo',
          'walker'   => new BootstrapNavMenuWalker()
        );

        wp_nav_menu($args);
      
      ?>

      <?php
            
        $args = array(
          'theme_location' => 'top-bar',
          'depth'    => 0,
          'container'  => false,
          'menu_class'   => 'side-nav',
          'menu_id'   => 'mobile-demo',
          'walker'   => new BootstrapNavMenuWalker()
        );

        wp_nav_menu($args);
      
      ?>
      
    </div>
   </nav>
  </header>