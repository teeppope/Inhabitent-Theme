<?php
/**
 * The template for displaying all single products .
 *
 * @package inhabitent_theme_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<h1>Build out the single product page here</h1>
		<?php while ( have_posts() ) : the_post(); ?>


			<!-- can use the below but would need to create the markup in the template-parts folder -->
			<?php //get_template_part( 'template-parts/content', 'single' ); ?>

			<!-- Can take the content-single markup from template parts and strip out the parts we don't need for the product content. WIll need to restructure the page-->

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<!-- use the below for getting thumbnail on other pages. -->
					<?php if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail( 'large' ); ?>
					<?php endif; ?>

					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					
				</header><!-- .entry-header -->

				<div class="entry-content">
				<?php echo CFS()->get( 'price' );?>
				<?php the_content(); ?>

				</div><!-- .entry-content -->
			</article><!-- #post-## -->

		<?php endwhile; // End of the loop. ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>