<?php
/**
 * Template Name: contact
 *
 * @package WordPress
 * @subpackage matheusFonseca
 * @since matheusFonseca
 */
get_header(); ?>

<section class="contact">
  <div class="container">
    <?php echo do_shortcode('[contact-form-7 id="61" title="Contact"]'); ?>

    <div class="contact-info">
      <h3>Contact</h3>

      <div class="contact-info-box">
        <a href="tel:(704)846-2855" target="_blank">(704) 846-2855</a>
        <a href="mailto:souza.servicesusa@gmail.com" target="_blank">souza.servicesusa@gmail.com</a>
      </div>

      <div class="contact-social">
        <a href="https://www.instagram.com/souza.services/" target="_blank">
          <svg width="32" height="32" viewBox="0 0 32 32">
            <use xlink:href="#instagram"></use>
          </svg> 
        </a>
        
        <a href="https://www.facebook.com/Souza-Service-Home-Cleaning-103678182135363/" target="_blank">
          <svg width="32" height="32" viewBox="0 0 32 32">
            <use xlink:href="#facebook"></use>
          </svg> 
        </a>
      </div>
    </div>
  </div>
</section>

<?php get_footer();