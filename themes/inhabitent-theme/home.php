<?php
/**
 * The main blog posts file.
 *
 * @package inhabitent_theme_Theme
 */

get_header(); ?>


	<div id="primary" class="content-area container">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
		
				<!-- Get content -->
				<?php get_template_part( 'template-parts/content' ); ?>

			<?php endwhile; ?>
			<!-- get pagination -->
			<?php the_posts_navigation(); ?>

		<?php else : ?>
			<!-- get no content template -->
			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>
