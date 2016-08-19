<?php
/**
 * Template part for displaying results in search pages.
 *
 * @package inhabitent_theme_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="search-result-header">
		<?php the_title( sprintf( '<h2 class="page-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type()) : ?>
		
		<div class="search-result-meta">
			<?php inhabitent_theme_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php inhabitent_theme_posted_by(); ?>
		</div><!-- .search-result-meta -->
		
		<?php endif; ?>
	</header><!-- .search-result-header -->

	<div class="search-result-summary">
		<?php the_excerpt(); ?>
	</div><!-- .search-result-summary -->
</article><!-- #post-## -->
