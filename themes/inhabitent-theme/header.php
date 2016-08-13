<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!-- Leave the below function, this puts the stylesheets into the site -->
	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<!-- <p class="site-description"><?php bloginfo( 'description' ); ?></p>  MAKE SURE TO GET RID OF THIS --> 
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php echo get_template_directory_uri(). "/images/logos/inhabitent-logo-tent.svg" ?>" width="50px" height="50px" alt="" ?>
					</a>
				</div><!-- .site-branding -->


				<nav id="site-navigation" class="main-navigation" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				
					<?php //get_search_form(); ?>
				</nav><!-- #site-navigation -->
				<form role="search" method="get" class="search-form" aria-controls="primary-menu" aria-expanded="false">
					<fieldset>
						<a href="#" class="search-toggle" aria-hidden="true">
							<i class="fa fa-search"></i>
						</a>
					</fieldset>
					
				</form>

				<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"> 
						<span class="icon-search" aria-hidden="true">
							<i class="fa fa-search"></i>
						</span>
						<?php //esc_html( 'Primary Menu' ); ?>
						
					</button> -->

			</header><!-- #masthead -->

			<div id="content" class="site-content">
