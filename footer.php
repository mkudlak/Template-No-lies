<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package no-lies
 */

?>

	</div><!-- #content -->
	<footer id="colophon" class="site-footer">
		<div class="site-footer-widget">
			<?php get_sidebar('footer');?>
		</div>
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://headway.pl/', 'no-lies' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'no-lies' ), 'Headway' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'No-lies' ), 'No-lies', '<a href="http://mkudlak.com/">Mkudlak</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
