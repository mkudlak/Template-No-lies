<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package no-lies
 */

get_header();
?>
<header class="entry-header">
	<?php $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), array(5000, 1000), false, '')?>
	<div class="entry-img" style="background: url(<?php echo $src[0]?>;">
		<div class="container">
			<div class="entry-title">
				<?php the_title('<h1 class="entry-title-header">', '</h1>'); ?>
			</div>
		</div>
	</div>
</header>

<div id="primary" class="content-area">
	<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();