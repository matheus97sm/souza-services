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

  <link rel="icon" type="image/png" href="<?=get_template_directory_URI()?>/img/favicon.png" />
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  <link rel="stylesheet" href="<?=get_template_directory_URI()?>/style.css" />

  <?php wp_head(); ?>
</head>

<body <?php body_class();?> >
  <header class="header">
    <div class="header-container">
      <a href="<?=site_url()?>" class="header-logo">
        <img src="<?=get_template_directory_URI()?>/img/src/logo.svg" alt="Souza Services Brand">
      </a>

      <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu' => 'MenuTopo', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) ); ?>
    </div>
  </header>

  <?php if (!is_front_page()) { ?>
    <div class="inside-banner">
      <div class="container">
        <h1><?=the_title()?></h1>
      </div>
    </div>
  <?php } ?>