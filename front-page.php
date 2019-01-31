<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package no-lies
 */

get_header();
?>
<!-- Slajder -->
<div class="top-slider">

  <?php
    echo do_shortcode('[smartslider3 slider=2]');
  ?>

</div>

<!-- THREE ELEMENTS -->
<div class="three-elements">
  <div class="container section-padding">
    <?php
      $posts = get_posts(array(
        'include' => 37,
        'post_type' => 'any',
        'numberposts' => 1,
        'suppress_filters' => false,
      ));
      echo apply_filters('the_content', $posts[0]->post_content);
    ?>
  </div>
</div>

<!-- INFO -->
<div class="info">
  <div class="container section-padding">
    <?php
      $posts = get_posts(array(
        'include' => 40,
        'post_type' => 'any',
        'numberposts' => 1,
        'suppress_filters' => false,
      ));
      echo apply_filters('the_content', $posts[0]->post_content);
    ?>
  </div>
</div>

<!-- STRENGTHS -->
<div class="strengths">
  <div class="container section-padding">
    <?php
      $posts = get_posts(array(
        'include' => 43,
        'post_type' => 'any',
        'numberposts' => 1,
        'suppress_filters' => false,
      ));
      echo apply_filters('the_content', $posts[0]->post_content);
    ?>
  </div>
</div>

<!-- ACTION -->
<div class="action">
  <div class="container section-padding">
    <?php
      $posts = get_posts(array(
        'include' => 74,
        'post_type' => 'any',
        'numberposts' => 1,
        'suppress_filters' => false,
      ));
      echo apply_filters('the_content', $posts[0]->post_content);
    ?>
  </div>
</div>

<?php
get_footer();