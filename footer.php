<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

<footer class="footer">
  <div class="container">
    <a href="<?=site_url()?>" class="footer-logo">
      <img src="<?=get_template_directory_URI()?>/img/src/logo-white.svg" alt="Souza Services Brand" />  
    </a>

    <div class="sitemap">
      <h3>Sitemap</h3>

      <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu' => 'MenuTopo', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) ); ?>
    </div>

    <div class="footer-contact">
      <h3>Contact</h3>

      <div class="footer-contact-info">
        <a href="tel:(704)846-2855" target="_blank">(704) 846-2855</a>
        <a href="mailto:souza.servicesusa@gmail.com" target="_blank">souza.servicesusa@gmail.com</a>
      </div>

      <div class="footer-contact-social">
        <a href="https://www.instagram.com/souza.services/" target="_blank">
          <svg width="32" height="32" viewBox="0 0 32 32">
            <use xlink:href="#instagram"></use>
          </svg> 
        </a>
        
        <!-- <a href="https://www.facebook.com/Souza-Service-Home-Cleaning-103678182135363/" target="_blank">
          <svg width="32" height="32" viewBox="0 0 32 32">
            <use xlink:href="#facebook"></use>
          </svg> 
        </a> -->
      </div>
    </div>
  </div>

  <div class="copyright">
    <div class="container">
      <p>Copyright © www.souzacleaning.com 2022. All rights reserved.</p>
    </div>
  </div>
</footer>

<div style="display: none;">
  <?php include 'svg.php'; ?>
</div>

<script src="<?=get_template_directory_URI()?>/app/app.js"></script>

<?php wp_footer(); ?>

</body>
</html>