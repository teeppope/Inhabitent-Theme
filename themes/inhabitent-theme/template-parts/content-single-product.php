<?php
/**
 * The template for displaying all single product content .
 *
 * @package inhabitent_theme_Theme
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="indvid-product-page">
	
		<div class="product-image-container">

			<?php if ( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail( 'large' ); ?>
			<?php endif; ?>

		</div>

		<div class="product-description-container">

			<?php the_title( '<h1 class="product-title">', '</h1>' ); ?>

			<div class="product-content">
				<p class="product-price">	
					<?php echo CFS()->get( 'price' );?>
				</p>
				
				<?php the_content(); ?>

			</div><!-- .product-content -->
			
			<?php get_template_part('template-parts/content', 'socialbtns') ?>

		</div>
	</div>
</article><!-- #post-## -->


