<?php
/**
 * Template Name: services
 *
 * @package WordPress
 * @subpackage matheusFonseca
 * @since matheusFonseca
 */
get_header(); ?>

<div class="services">  
  <div class="container">
    <?php
      $args = array(
        'post_parent' => 13,
        'post_type' => 'page',
        'orderby' => 'menu_order',
      );

      $child_query = new WP_Query( $args );
    ?>
    <?php while ( $child_query->have_posts() ) : $child_query->the_post(); ?>

    <a href="<?=the_permalink()?>" class="services-item">
      <img src="<?=catch_that_image(1)?>" alt="<?=the_title()?>" />
      
      <div>
        <h5><?=the_title()?></h5>
      </div>
    </a>

    <?php endwhile; ?>
  </div>
</div>

<?php get_footer();