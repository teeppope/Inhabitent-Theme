<?php
/**
 * The template for displaying the about page.
 *Template Name: About Page
 * @package inhabitent_theme_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				
				<?php get_template_part( 'template-parts/content', 'page' ); ?>
				
				<?php echo CFS()->get( 'hero_image' );?>
				<!-- Trying to get hero image -->
				<?php if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail( 'original' ); ?>
				<?php endif; ?>

				<?php echo CFS()->get( 'our_story' );?>
				<?php echo CFS()->get( 'our_team' );?>


			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>