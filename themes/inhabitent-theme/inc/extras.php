<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package inhabitent_theme_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function inhabitent_theme_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'inhabitent_theme_body_classes' );


/* CHANGES the login logo*/
function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-text-dark.svg);
            background-size: 300px 53px;
            padding-bottom: 30px;
            height: 53px;
            width: 300px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );


// Change default url to direct to homepage of the website
function inhabitent_login_url(){
	return home_url();
}
add_filter('login_headerurl', 'inhabitent_login_url' );

// Filter tool tip name to say company name
function inhabitent_title_url(){
	return 'Inhabitent Supply Co.';
}
add_filter('login_headertitle','inhabitent_title_url');

// Adjusting archive page loop for products

function inhabitent_modify_product_archive_query( $query ) {
    // target main query on the products archive area
    if ( is_post_type_archive( 'product' ) && !is_admin() && $query->is_main_query() ) {

        // Display 16 posts for a custom post type called 'movie'
        $query->set( 'posts_per_page', 16 );
        $query->set( 'orderby', 'title' );
        $query->set( 'order', 'ASC' );
        
    }

}
add_action('pre_get_posts', 'inhabitent_modify_product_archive_query');

// About HERO IMAGE function
function inhabitent_hero_image_styles() {
        //checking for page template
        if( ! is_page_template('page-about.php')){
            return;
        }
            $hero_image = CFS()->get( 'header_image' );
            //checking to see if variable is empty or not.
            if( ! $hero_image){
                return;
            } 
            
            $custom_css = "
                    .hero-about{
                        width: 100vw;
                        height: 100vh;
                        background: 
                            linear-gradient( to bottom, rgba(0,0,0, 0.5), rgba(0,0,0, 0.5)),
                            url({$hero_image});
                        background-size: cover;
                    }";
            wp_add_inline_style( 'inhabitent-theme-style', $custom_css );

}
add_action( 'wp_enqueue_scripts', 'inhabitent_hero_image_styles' );






