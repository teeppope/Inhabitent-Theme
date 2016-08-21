<?php
/**
 * The template for displaying  product archive.
 *
 * @package inhabitent_theme_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<header class="shop-header">
			<h2>Latest Adventures</h2>

		</header><!-- .shop-header -->
		
		<div class="adventure-grid">
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>

					
				<div class="adventure-grid-item">

						<div class="thumbnail-wrapper">
							<?php if ( has_post_thumbnail() ) : ?>
								<?php the_post_thumbnail( 'original' ); ?>
							<?php endif; ?>
						</div>
						
					<div class="overlay">
					</div>

					<div class="adventure-grid-content">
						<?php the_title( sprintf( '<h2 class="adventure-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
						<a href="<?php the_permalink(); ?>">
							<button class="btn-light">
								Read Entry
							</button>
						</a>	
					</div>
				</div>


				<?php endwhile; ?>

				<?php the_posts_navigation(); ?>

			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>
		</div><!-- .product-entry -->
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
