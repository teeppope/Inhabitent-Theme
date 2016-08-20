<?php
/**
 * The template for displaying all single posts.
 *
 * @package inhabitent_theme_Theme
 */

get_header(); ?>

	
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<section class="hero-image">
			<?php if ( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail( 'original' ); ?>
			<?php endif; ?>
		</section>
		<section class="adventure-content">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'adventure' ); ?>

				<?php get_template_part('template-parts/content', 'socialbtns') ?>
				

			<?php endwhile; // End of the loop. ?>
		</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
