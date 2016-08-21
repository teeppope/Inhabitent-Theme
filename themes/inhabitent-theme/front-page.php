<!-- Build The html for the front home page here 
	remember to include the head, footer, and maybe sidebar, check design comps
	will need space for the blog cards, adventure card
-->
<?php
/**
 * The template for displaying all pages.
 *Template Name: Front Page
 * @package inhabitent_theme_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">

	<main id="main" class="site-main" role="main">
		<section class="hero-area">

			<img src="<?php echo get_template_directory_uri(). "/images/logos/inhabitent-logo-full.svg"?>">

		</section>



		<section class="shop-cards container">
			<h2>Shop Stuff</h2>
			<ul class="shop-card-list">
				<?php 
				$categories = array(
					'taxonomy' 		=> 'product-type', 
					'hide_empty' 	=> true,
					);

				$terms = get_terms( $categories );
				?>
				
				<?php foreach ( $terms as $term ) :  ?>
					<li class="indvid-shop-card"> 
						
						<img src="<?php echo get_template_directory_uri(). "/images/product-type-icons/" .$term->slug. ".svg" ?> " alt=" ">


						<p><?php echo $term->description?></p>
						
						<a href="<?php echo get_term_link( $term ); ?>"> 
							<button class="btn-green">
								<?php echo $term->name . ' Stuff'?>
							</button>
						</a>

					</li>

				<?php endforeach; ?>
			</ul>

		</section> <!-- product cards -->

		<section class="journal-cards container">
			<h2>Inhabitent Journal</h2>
			
			<ul class="journal-card-list">
				<?php 
					$args = array(
						'posts_per_page' => 3,
						);
					$front_page_blog_posts = get_posts($args);
				?>
				
				<?php foreach ( $front_page_blog_posts as $post ) : setup_postdata( $post ); ?>
					<li class="indvid-journal-card"> 
						<!--  // Gets the post thumbnail MIGHT NEED TO WRAP EACH part in divs well see -->

						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail( 'large' ); ?>
						<?php endif; ?>

						<!-- Gets post metadata -->
						<div class="journal-card-content">
							<p>
								<?php inhabitent_theme_posted_on(); ?> / 
								<?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>
							</p>

							<!-- get post title -->
							<a class="journal-card-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

							<!-- Make Button for read more -->
							<a href="<?php the_permalink(); ?>">
								<button class="btn-dark">
									Read Entry
								</button>
							</a>
						</div>
					</li>

				<?php endforeach; wp_reset_postdata(); ?>
			</ul>

		</section> <!-- Journal Cards -->

		<section class="adventure-feed container">
			<h2>Latest Adventures</h2>

			<ul class="adventure-feed-list">
				<?php 
				$args = array(
					'post_type' => 'adventure',
					'posts_per_page' => 4,
					'order' => 'ASC'
					);
				$front_page_adventure_posts = get_posts($args);
				?>
				
				<?php foreach ( $front_page_adventure_posts as $post ) : setup_postdata( $post ); ?>
					<li class="indvid-adventure-box"> 
					
						<div class="adventure-image-wrapper">
							<?php if ( has_post_thumbnail() ) : ?>
								<?php the_post_thumbnail( 'original' ); ?>
							<?php endif; ?>
						</div>
							<div class="overlay">
					</div>

						<!-- get post title -->
						<h2 class="adventure-title">
							<a href="<?php the_permalink(); ?>">
							<?php the_title(); ?></a>
						</h2>

						<!-- Make Button for read more -->
						<a href="<?php the_permalink(); ?>" >
							<button class="btn-light">
								Read more
							</button>
						</a>
					</li>

				<?php endforeach; wp_reset_postdata(); ?>
				<a href="<?php echo get_post_type_archive_link( 'adventure' ); ?>">
					<button class="btn-green">
						More Adventures
					</button>
				</a>
			</ul>
		

		</section> <!-- #adventure grid -->

	</main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>
