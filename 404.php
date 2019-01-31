<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package no-lies
 */

get_header();
?>

<section class="error-404 not-found">

	<div class="page-content">
		<p>
			<?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below?', 'no-lies' ); ?>
		</p>

	</div><!-- .page-content -->
</section><!-- .error-404 -->


<?php
get_footer();