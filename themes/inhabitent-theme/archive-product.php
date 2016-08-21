<?php
/**
 * The template for displaying product archive feed.
 *
 * @package inhabitent_theme_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<header class="shop-header">
			<h2>Shop Stuff</h2>
			<!--<?php the_title( '<h1 class="shop-title">', '</h1>' ); ?> -->
			<nav class="product-type">
				<ul class="product-type-nav">
					<?php 
					$categories = array(
						'taxonomy' => 'product-type', 
						'hide_empty' => true,
						);

					$terms = get_terms( $categories );
					?>
					
					<?php foreach ( $terms as $term ) :  ?>
						<li class="indvid-product-type"> 
							<a href="<?php echo get_term_link( $term ); ?>"> 
								<?php echo $term->name ?>
							</a>
						</li>

					<?php endforeach; ?>
				</ul>
			</nav>

		</header><!-- .shop-header -->
		
		<ul class="product-cards">
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>

					
					<?php get_template_part( 'template-parts/content', 'product-archive' ); ?>

				<?php endwhile; ?>

				<?php the_posts_navigation(); ?>

			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>
		</ul><!-- .product-entry -->
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
