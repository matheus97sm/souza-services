<?php
/**
 * Template Name: home
 *
 * @package WordPress
 * @subpackage matheusFonseca
 * @since matheusFonseca
 */
get_header(); ?>

<section class="home-banner">
  <div class="container">
    <div class="home-banner-text fadeUp" data-anima-tempo>
      <h1>Efficient, careful cleaning and customized to what you really need.</h1>
      <p>Our biggest goal is to provide you and your family with excellent cleaning, so you can enjoy the comfort of your home.</p>

      <div class="home-banner-buttons">
        <a href="<?=site_url()?>/services" class="cta cta-red">SERVICES</a>
        <a href="<?=site_url()?>/contact" class="cta cta-white">GET A QUOTE</a>
      </div>

      <div class="line" data-animar></div>
    </div>

    <div class="home-banner-img" data-anima-tempo>
      <div class="grey-box"></div>
      <div class="orange-box"></div>
      <img src="<?=get_template_directory_URI()?>/img/src/banner.png" alt="Souza Services Website" />
    </div>
  </div>
</section>

<section class="our-reviews">
  <div class="container">
    <div class="our-review-title fadeUp" data-animar>
      <h2>Our</br> clients say</h2>
    </div>

    <div class="reviews fadeUp" data-animar>
      <? query_posts( array( 'post_type' => 'reviews', 'posts_per_page' => '9' ) );  ?>
      <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>

      <div class="review" data-stars="<?=the_field('stars')?>">
        <h4><?=the_title()?></h4>
        <p><?=the_content()?></p>

        <div class="review-stars"></div>
      </div>

      <?php endwhile; ?>
      <?php endif; ?>

      <div class="reviews-buttons">
        <button class="reviews-left">
          <img src="<?=get_template_directory_URI()?>/img/src/arrow.svg" alt="Reviews" />
        </button>
        
        <button class="reviews-right">
          <img src="<?=get_template_directory_URI()?>/img/src/arrow.svg" alt="Reviews" />
        </button>
      </div>
    </div>
  </div>
</section>

<section class="home-services">
  <div class="container">
    <div class="home-services-title fadeUp" data-animar>
      <h2>The services
      we provide with
      perfection</h2>
    </div>

    <?php
      $args = array(
        'post_parent' => 13,
        'post_type' => 'page',
        'orderby' => 'menu_order',
        'meta_key' => 'featured',
        'meta_value' => true
      );

      $child_query = new WP_Query( $args );
    ?>
    <?php while ( $child_query->have_posts() ) : $child_query->the_post(); ?>

    <div class="home-services-item fadeUp" data-animar>
      <div class="home-services-item-img">
        <img src="<?=get_template_directory_URI()?>/img/src/service-1.png" alt="<?=the_title()?>" />
      </div>

      <h5><?=the_title()?></h5>
      <p><?=the_field('resume')?></p>
      <a href="<?=the_permalink()?>" class="cta-white cta">See more</a>
    </div>

    <?php endwhile; ?>
  </div>

  <a href="<?=the_permalink()?>" class="cta-red cta fadeUp" data-animar>All services</a>
</section>

<section class="home-about">
  <div class="container">
    <div class="home-about-img fadeUp" data-animar>
      <img src="<?=get_template_directory_URI()?>/img/src/about.jpg" alt="About Souza Services" />
    </div>

    <div class="home-about-text">
      <strong class="fadeUp" data-animar>Souza Services</strong>
      <h2 class="fadeUp" data-animar>About Us</h2>

      <div class="fadeUp" data-animar>
        <p>Souza Services was born from the desire to provide its customers with the experience of having their home cleaned by a trained and experienced team, always prioritizing personalized service according to their real needs. Thanks to our attention and focus on details, the company has been providing excellent service in the Charlotte area.</p>
        <p>We understand that the routine is full of commitments and often stressful. For this reason, we have come with a mission to facilitate and take over this task: the cleaning of your home. This way you can guarantee to use your time for what really matters, such as having more free time with your family or simply having more time to focus on your work. Whatever your goal is when you delegate this task to us, we are ready to surprise you!</p>
      </div>

      <a href="<?=site_url()?>/about" class="cta cta-white fadeUp" data-animar>About Us</a>

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

<? query_posts( array( 'post_type' => 'post', 'posts_per_page' => '5', 'cat' => '1' ) );  ?>
<?php if ( have_posts() ) : ?>
<section class="home-blog">
  <div class="container">
    <h2 class="fadeUp" data-animar>Last blog posts</h2>

    <div class="home-blog-wrapper">
      <div class="home-blog-buttons"></div>

      <div class="home-blog-posts">
        <?php while ( have_posts() ) : the_post(); ?>

        <div class="home-blog-card">
          <a href="<?=the_permalink()?>" class="home-blog-img">
            <img src="<?=catch_that_image(2)?>" alt="<?=the_title()?>" />
          </a>

          <div class="home-blog-text">
            <h3><?=the_title()?></h3>

            <p><?=the_field('resume')?></p>

            <a href="<?=the_permalink()?>" class="cta cta-red">
              read more
            </a>
          </div>
        </div>

        <?php endwhile; ?>
      </div>

      <img
        src="<?=get_template_directory_URI()?>/img/src/wave.svg" 
        alt="Souza Services Blog" 
        class="home-blog-wave"
      />
    </div>
  </div>
</section>
<?php endif; ?>

<?php get_footer();