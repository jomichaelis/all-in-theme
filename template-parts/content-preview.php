<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package all-in-theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!-- CONTENT-PREVIEW.PHP -->
	<header class="entry-header">
		<div class="entry-preview-header">
			<div class="entry-preview-title-wrapper">
				<?php
				if ( is_singular() ) :
					the_title( '<h1 class="entry-preview-title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-preview-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;
				?>
			</div>
			<?php
			if ( 'post' === get_post_type() ) :
				?>
				<div class="entry-meta">
					<?php
					all_in_theme_posted_on();
					?>
				</div><!-- .entry-meta -->
			<?php endif; ?>
			</div>
	</header><!-- .entry-header -->

	<?php //all_in_theme_post_thumbnail(); ?>

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<footer class="entry-footer">
		<?php all_in_theme_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
