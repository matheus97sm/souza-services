<?php
/**
 * Template Name: blog
 *
 * @package WordPress
 * @subpackage matheusFonseca
 * @since matheusFonseca
 */
get_header(); ?>

<section class="blog">
  <div class="container">
    <? query_posts( array( 'post_type' => 'post', 'posts_per_page' => '5', 'cat' => '1' ) );  ?>
    <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>

    <div class="blog-card" href="<?=the_permalink()?>">
      <a href="<?=the_permalink()?>" class="blog-img">
        <img src="<?=catch_that_image(2)?>" alt="<?=the_title()?>" />
      </a>

      <div class="blog-text">
        <h3><?=the_title()?></h3>

        <p><?=the_field('resume')?></p>

        <a href="<?=the_permalink()?>" class="cta cta-red">
          read more
        </a>
      </div>
    </div>

    <?php endwhile; ?>
    <?php endif; ?>
  </div>
</section>

<?php get_footer();