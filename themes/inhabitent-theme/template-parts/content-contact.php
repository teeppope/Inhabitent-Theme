<?php
/**
 * Template part for displaying contact content in page.php.
 *
 * @package inhabitent_theme_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="contact-header">
		<?php the_title( '<h1 class="contact-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
	<p>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2603.685610843556!2d-123.14041864872081!3d49.26340457995586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548673c79e1ac4fb%3A0x7edde857c28340ba!2sRED+Academy!5e0!3m2!1sen!2sca!4v1471492863028" width="760" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
	</p>

	<div class="contact-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
