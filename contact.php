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
      <a href="tel:+1555-555-555" target="_blank">+1 555-555-555</a>
      <a href="mailto:contact@souzaservices.com" target="_blank">contact@souzaservices.com</a>
    </div>

    <div class="contact-social">
      <a href="https://instagram.com" target="_blank">
        <svg width="32" height="32" viewBox="0 0 32 32">
          <use xlink:href="#instagram"></use>
        </svg> 
      </a>
      
      <a href="https://facebook.com" target="_blank">
        <svg width="32" height="32" viewBox="0 0 32 32">
          <use xlink:href="#facebook"></use>
        </svg> 
      </a>
    </div>
  </div>
</section>

<?php get_footer();