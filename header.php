<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

  <title><?php wp_title( '|', true, 'right' ); ?></title>

  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;900&display=swap" rel="stylesheet" />

  <link rel="icon" type="image/png" href="<?=get_template_directory_URI()?>/img/favicon.png" />
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  <link rel="stylesheet" href="<?=get_template_directory_URI()?>/style.css" />

  <script>
    var base_URL = '<?=site_url()?>';
    var template_URL = '<?=get_template_directory_URI()?>';
  </script>

  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-MHM7W24');</script>
  <!-- End Google Tag Manager -->

  <?php wp_head(); ?>
</head>

<body <?php body_class();?> >
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MHM7W24"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <header class="header" data-anima-tempo>
    <div class="container">
      <a href="<?=site_url()?>" class="header-logo">
        <img src="<?=get_template_directory_URI()?>/img/src/logo.svg" alt="Souza Services Brand">
      </a>

      <nav class="menu" data-menu="menu">
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu' => 'MenuTopo', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) ); ?>
      </nav>

      <div class="menu-hamb" data-menu="button">
        <span></span>
      </div>
    </div>
  </header>

  <?php if (!is_front_page()) { ?>
    <div class="inside-banner">
      <div class="container">
        <h1 class="fadeDown" data-anima-tempo><?=the_title()?></h1>
      </div>
    </div>
  <?php } ?>