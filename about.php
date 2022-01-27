<?php
/**
 * Template Name: about
 *
 * @package WordPress
 * @subpackage matheusFonseca
 * @since matheusFonseca
 */
get_header(); ?>

<?php if( have_rows('about') ):
while( have_rows('about') ): the_row(); 

$subtitle = get_sub_field('subtitle');
$title = get_sub_field('title');
$text = get_sub_field('text');
?>
<section class="about">
  <div class="container">
    <div class="home-about-img fadeUp" data-animar>
      <img src="<?=get_template_directory_URI()?>/img/src/about.jpg" alt="About Souza Services" />
    </div>

    <div class="home-about-text fadeUp" data-animar>
      <strong><?=$subtitle?></strong>
      <h2><?=$title?></h2>

      <div>
        <?=$text?>
      </div>

      <img 
        src="<?=get_template_directory_URI()?>/img/src/wave.svg" 
        alt="About Souza Services" 
        class="home-about-wave" 
      />
    </div>
  </div>

  <img 
    src="<?=get_template_directory_URI()?>/img/src/brand.svg" 
    alt="Souza Services Brand" 
    class="home-about-logo" 
  />
</section>
<?php endwhile; ?>
<?php endif; ?>

<?php if( have_rows('mission') ):
while( have_rows('mission') ): the_row(); 

$title = get_sub_field('title');
$text = get_sub_field('text');
?>
<section class="mission">
  <div class="container">
    <div class="fadeUp" data-animar>
      <h2><?=$title?></h2>
      <p><?=$text?></p>
    </div>
  </div>
</section>
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer();