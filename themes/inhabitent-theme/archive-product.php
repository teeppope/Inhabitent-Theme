<?php
/**
 * The template for displaying archive product.
 *
 * @package inhabitent_theme_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<header class="page-header">
			<h2>Shop Stuff Filler Header</h2>
			<!--<?php the_title( '<h1 class="page-title">', '</h1>' ); ?> -->
			<p><?php the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?></p>
		</header><!-- .page-header -->
		<ul class="product-cards">
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<!-- Get image -->
					<li class="indvid-product-card">

						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail( 'large' ); ?>
						<?php endif; ?>

						<!-- get title -->
						<div class="indvid-product-card-text">
							<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

							<!-- get price -->

							<?php echo CFS()->get( 'price' );?>
							<!-- .entry-price -->
						</div>
					</li>


				<?php endwhile; ?>

				<?php the_posts_navigation(); ?>

			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>
			</ul><!-- .product-entry -->
		</main><!-- #main -->
	</div><!-- #primary -->

	<?php get_footer(); ?>
