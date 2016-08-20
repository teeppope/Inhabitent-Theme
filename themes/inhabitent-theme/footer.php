<?php
/**
 * The template for displaying the footer.
 *
 * @package inhabitent_theme_Theme
 */

?>
<!--  MIGHT WANT TO COME BACK AND ADD A WIDGET TO THE FOOTER FOR THE BUSINESS HOURS, IF NOT REMOVE THIS COMMENT -->
</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="ftr-section container">
		<div class="contact">
			<h3>Contact Info</h3>
			<p>
				<i class="fa fa-envelope"></i>
				<a href="mailto:info@inhabitent.com">info@inhabitent.com</a>
			</p>
			<p>
				<i class="fa fa-phone"></i>
				778-456-7891
			</p>
			<p>
				<i class="fa fa-facebook-square"></i>
				<i class="fa fa-twitter-square"></i>
				<i class="fa fa-google-plus-square"></i>
			</p>

		</div>


		<div class="hours">
		<h3>Business Hours</h3>
			<p>
				<span class="day-of-week">Monday-Friday:</span>
				9am - 5pm
			</p>
			<p>
				<span class="day-of-week">Saturday:</span>
				10am - 2pm
			</p>
			<p>
				<span class="day-of-week">Sunday:</span>
				Closed
			</p>
		</div>

		<div class="logo">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<img src="<?php echo get_template_directory_uri(). "/images/logos/inhabitent-logo-text.svg" ?>"  alt="Inhabitent Logo" ?>
			</a>
		</div>
		
		<div class="site-info">
			<div class="container">
				<p class="copy-right">
					Copyright &#169; 2016 Inhabitent
				</p>
			</div>
			<!-- <a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( esc_html( 'Proudly powered by %s' ), 'WordPress' ); ?></a> -->
		</div><!-- .site-info -->
	</div>
	
</footer><!-- #colophon -->
</div><!-- #page -->


<!-- leave this function in, it puts all the javascript into the theme -->
<?php wp_footer(); ?>

</body>
</html>
