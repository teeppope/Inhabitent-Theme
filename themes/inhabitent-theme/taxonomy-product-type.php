<?php
/**
 * The template for displaying archive pages.
 *
 * @package inhabitent_theme_Theme
 */
get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>
			<header class="page-header">

				<h2> <?php single_term_title(  ); ?> </h2>

				<p><?php echo term_description( $term_id, $taxonomy ) ?></p>
			</header> <!-- .page-header -->
			<ul class="product-cards">
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'product-archive' ); ?>

				<?php endwhile; ?>

				<?php the_posts_navigation(); ?>

			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>
		</ul>
	</main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>