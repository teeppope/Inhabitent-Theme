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


			<ul class="product-card-list">
				<?php 
				$categories = array(
					'taxonomy' => 'product-type', 
					'hide_empty' => true,
					);

				$terms = get_terms( $categories );
				print_r($terms);

				?>
				
				<?php foreach ( $terms as $term ) : setup_postdata( $term ); ?>
					<li> 
						
						<h3><?php echo $term->name ?></h3>
						<p><?php echo $term->description?></p>
						<!-- Make Button for read more -->
						<button><a href="<?php the_permalink(); ?>"> <?php single_term_title( 'taxonomy' );?> 
							<?php echo $term->name . ' Stuff'?>
						</a></button>
					</li>

				<?php endforeach; wp_reset_postdata(); ?>
			</ul>




		</section>



		<section class="journal-cards">
			<h1>Hello This is The journal card area</h1>
			
			<ul class="journal-card-list">
				<?php 
				$args = array(
					'posts_per_page' => 3,
					);
				$front_page_blog_posts = get_posts($args);
				?>
				
				<?php foreach ( $front_page_blog_posts as $post ) : setup_postdata( $post ); ?>
					<li> 
						<!--  // Gets the post thumbnail MIGHT NEED TO WRAP EACH part in divs well see -->

						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail( 'medium' ); ?>
						<?php endif; ?>

						<!-- Gets post metadata -->

						<?php inhabitent_theme_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php inhabitent_theme_posted_by(); ?>

						<!-- get post title -->
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

						<!-- Make Button for read more -->
						<button><a href="<?php the_permalink(); ?>">Read Entry</a></button>
					</li>

				<?php endforeach; wp_reset_postdata(); ?>
			</ul>

		</section>



		<section class="adventure-grid">
			<h1>Hello This is The adventure grid area</h1>

			<ul class="adventure-grid-list">
				<?php 
				$args = array(
					// 'post_type' => 'adventure',
					'posts_per_page' => 4,
					);
				$front_page_blog_posts = get_posts($args);
				?>
				
				<?php foreach ( $front_page_blog_posts as $post ) : setup_postdata( $post ); ?>
					<li> 
						<!--  // Gets the post thumbnail MIGHT NEED TO WRAP EACH part in divs well see -->

						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail( 'medium' ); ?>
						<?php endif; ?>

						<!-- Gets post metadata -->



						<!-- get post title -->
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

						<!-- Make Button for read more -->
						<button><a href="<?php the_permalink(); ?>">Read more</a></button>
					</li>

				<?php endforeach; wp_reset_postdata(); ?>
			</ul>






		</section>



		<h1>Build homepage structure here</h1>
		<!-- PUt super custom layout Here , BELOW IS EXAMPLE POSTS-->
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'page' ); ?>

		<?php endwhile; // End of the loop. ?>
	</main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>
