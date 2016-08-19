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

//Fixes the taxonomy archive pages not showing the main loop
function namespace_add_custom_types( $query ) {
  if ( is_tax('product-type') && !is_admin() && $query->is_main_query() && empty( $query->query_vars['suppress_filters'] ) ) {
    $query->set( 'post_type', 'product' );
      
    }
    return $query;
}
add_filter( 'pre_get_posts', 'namespace_add_custom_types' );


/**
 * Customize excerpt length and style.
 *
 * @param  string The raw post content.
 * @return string
 */
function red_wp_trim_excerpt( $text ) {
    $raw_excerpt = $text;
    
    if ( '' == $text ) {
        // retrieve the post content
        $text = get_the_content('');
        
        // delete all shortcode tags from the content
        $text = strip_shortcodes( $text );
        
        $text = apply_filters( 'the_content', $text );
        $text = str_replace( ']]>', ']]&gt;', $text );
        
        // indicate allowable tags
        $allowed_tags = '<p>,<a>,<em>,<strong>,<blockquote>,<cite>';
        $text = strip_tags( $text, $allowed_tags );
        
        // change to desired word count
        $excerpt_word_count = 50;
        $excerpt_length = apply_filters( 'excerpt_length', $excerpt_word_count );
        
        // create a custom "more" link
        $excerpt_end = '<span>[...]</span><p><a href="' . get_permalink() . '" class="read-more">Read more &rarr;</a></p>'; // modify excerpt ending
        $excerpt_more = apply_filters( 'excerpt_more', ' ' . $excerpt_end );
        
        // add the elipsis and link to the end if the word count is longer than the excerpt
        $words = preg_split( "/[\n\r\t ]+/", $text, $excerpt_length + 1, PREG_SPLIT_NO_EMPTY );
        
        if ( count( $words ) > $excerpt_length ) {
            array_pop( $words );
            $text = implode( ' ', $words );
            $text = $text . $excerpt_more;
        } else {
            $text = implode( ' ', $words );
        }
    }
    
    return apply_filters( 'wp_trim_excerpt', $text, $raw_excerpt );
}
remove_filter( 'get_the_excerpt', 'wp_trim_excerpt' );
add_filter( 'get_the_excerpt', 'red_wp_trim_excerpt' );






