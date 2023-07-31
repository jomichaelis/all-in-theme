<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package all-in-theme
 */

?>

<footer id="colophon" class="site-footer">
	<div class="site-info">
		<a href="<?php echo esc_url( __( '/impressum', 'all-in-theme' ) ); ?>">
			Impressum
		</a>
		<span class="sep">•</span>
		<a href="<?php echo esc_url( __( '/datenschutz', 'all-in-theme' ) ); ?>">
			Datenschutzerklärung
		</a>
	</div><!-- .site-info -->
</footer><!-- #colophon -->

<?php