<?php
/**
 * Template Name: about
 *
 * @package WordPress
 * @subpackage matheusFonseca
 * @since matheusFonseca
 */
get_header(); ?>

<section class="about">
  <div class="container">
    <div class="home-about-img">
      <img src="<?=get_template_directory_URI()?>/img/src/about.jpg" alt="About Souza Services" />
    </div>

    <div class="home-about-text">
      <strong>Souza Services</strong>
      <h2>About Us</h2>

      <div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam vel lorem eget ex semper vulputate. Aliquam nec iaculis quam. Quisque ullamcorper libero quis feugiat hendrerit. Praesent luctus eu massa vel ornare. Sed quis iaculis erat. Vivamus sollicitudin, urna eget placerat vulputate, odio tellus placerat lectus, non volutpat tortor diam sed turpis. Sed eget pharetra risus. </p>
        <p>Nunc laoreet sapien placerat lobortis feugiat. Etiam a purus dolor. In pellentesque non risus in pharetra. Nullam pharetra diam non maximus egestas. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla facilisi.</p>
      </div>

      <a href="<?=site_url()?>/about" class="cta cta-white">About Us</a>

      <img 
        src="<?=get_template_directory_URI()?>/img/src/wave.svg" 
        alt="About Souza Services" 
        class="home-about-wave" 
      />
    </div>
  </div>

  <img 
    src="<?=get_template_directory_URI()?>/img/src/logo.svg" 
    alt="Souza Services Brand" 
    class="home-about-logo" 
  />
</section>

<section class="mission">
  <div class="container">
    <div>
      <h2>Our mission</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam vel lorem eget ex semper vulputate. Aliquam nec iaculis quam. Quisque ullamcorper libero quis feugiat hendrerit. Praesent luctus eu massa vel ornare. Sed quis iaculis erat. Vivamus sollicitudin, urna eget placerat vulputate, odio tellus placerat lectus, non volutpat tortor diam sed turpis. Sed eget pharetra risus. </p>
    </div>
    
    <div>
      <h2>Our vision</h2>
      <p>Nunc laoreet sapien placerat lobortis feugiat. Etiam a purus dolor. In pellentesque non risus in pharetra. Nullam pharetra diam non maximus egestas. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla facilisi.</p>
    </div>
  </div>
</section>

<?php get_footer();