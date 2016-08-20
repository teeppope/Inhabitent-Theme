<?php
/**
* Template part for product archives.
*
* @package inhabitent_theme_Theme
*/
?>

<li class="indvid-product-card">

	<div class="indvid-product-image">
		<a href="<?php echo get_permalink() ?>">
			<?php if ( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail( 'large' ); ?>
			<?php endif; ?>
		</a>
	</div>
	<!-- get title -->
	<div class="indvid-product-card-text">
	
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php echo CFS()->get( 'price' );?>
		<!-- .entry-price -->
	</div>
</li>

