<?php
/**
 * The template for displaying all single product content .
 *
 * @package inhabitent_theme_Theme
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<!-- use the below for getting thumbnail on other pages. -->
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php echo CFS()->get( 'price' );?>
		<?php the_content(); ?>

	</div><!-- .entry-content -->
</article><!-- #post-## -->


