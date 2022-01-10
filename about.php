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
    <div class="home-about-img fadeUp" data-animar>
      <img src="<?=get_template_directory_URI()?>/img/src/about.jpg" alt="About Souza Services" />
    </div>

    <div class="home-about-text fadeUp" data-animar>
      <strong>Souza Services</strong>
      <h2>About Us</h2>

      <div>
        <p>Souza Services was born from the desire to provide its customers with the experience of having their home cleaned by a trained and experienced team, always prioritizing personalized service according to their real needs. Thanks to our attention and focus on details, the company has been providing excellent service in the Charlotte area.</p>
        <p>We understand that the routine is full of commitments and often stressful. For this reason, we have come with a mission to facilitate and take over this task: the cleaning of your home. This way you can guarantee to use your time for what really matters, such as having more free time with your family or simply having more time to focus on your work. Whatever your goal is when you delegate this task to us, we are ready to surprise you!</p>
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

<section class="mission">
  <div class="container">
    <div class="fadeUp" data-animar>
      <h2>Our mission</h2>
      <p>An amazing cleaning service with a focus on details. Our clients will leave the housekeeping to extremely skilled and reliable professionals. Our mission is to ensure the best experience for those who trust our services. </p>
    </div>
    
    <!-- <div class="fadeUp" data-animar>
      <h2>Our vision</h2>
      <p>Nunc laoreet sapien placerat lobortis feugiat. Etiam a purus dolor. In pellentesque non risus in pharetra. Nullam pharetra diam non maximus egestas. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla facilisi.</p>
    </div> -->
  </div>
</section>

<?php get_footer();