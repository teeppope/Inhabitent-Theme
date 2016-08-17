<?php
/**
 * The template for displaying the about page.
 *Template Name: About Page
 * @package inhabitent_theme_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<section class="hero-about">
			<header class="entry-header">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</header><!-- .entry-header -->
		</section>
		<?php while ( have_posts() ) : the_post(); ?>

			
			<?php //get_template_part( 'template-parts/content', 'page' ); ?>
			
			<?php echo CFS()->get( 'hero_image' );?>

			<?php echo CFS()->get( 'our_story' );?>
			<?php echo CFS()->get( 'our_team' );?>


		<?php endwhile; // End of the loop. ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>