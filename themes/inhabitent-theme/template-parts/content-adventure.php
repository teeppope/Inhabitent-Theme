<?php
/**
 * Template part for displaying single adventure posts.
 *
 * @package inhabitent_theme_Theme
 */
?>


<header class="entry-header">

	<?php the_title( '<h1 class="page-title">', '</h1>' ); ?>

	<div class="adventure-meta">
		<p><?php inhabitent_theme_posted_by(); ?></p>
	</div><!-- .entry-meta -->
</header><!-- .entry-header -->

<div class="entry-content">

	<?php the_content(); ?>

</div><!-- .entry-content -->