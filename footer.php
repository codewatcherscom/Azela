<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Azela
 */

?>

	<footer id="colophon" class="site-footer bg-gray-700 text-gray-400 h-32 flex items-center justify-center">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'azela' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'azela' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'azela' ), 'azela', '<a href="http://codewatchers.com/en/themes/azela/">CodeWatchers</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
