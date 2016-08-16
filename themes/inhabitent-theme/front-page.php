<!-- Build The html for the front home page here 
	remember to include the head, footer, and maybe sidebar, check design comps
	will need space for the blog cards, adventure card
-->
<?php
/**
 * The template for displaying all pages.
 *
 * @package inhabitent_theme_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">

	<main id="main" class="site-main" role="main">
	<section class="hero-area">
		<?php //if ( has_post_thumbnail() ) : ?>
			<?php //the_post_thumbnail( 'original' ); ?>
		<?php //endif; ?>
		<img src="<?php echo get_template_directory_uri(). "/images/logos/inhabitent-logo-full.svg"?>">
	</section>
	<section class="product-cards">
		<h1>Hello This is The products card area</h1>
	</section>
	<section class="journal-cards">
		<h1>Hello This is The journal card area</h1>
	</section>
	<section class="adventure-grid">
		<h1>Hello This is The adventure grid area</h1>
	</section>
		<h1>Build homepage structure here</h1>
		<!-- PUt super custom layout Here , BELOW IS EXAMPLE POSTS-->
		<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>
	</main><!-- #main -->
</div><!-- #primary --


<?php get_footer(); ?>
