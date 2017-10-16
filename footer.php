<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">
		<footer class="site-footer" id="colophon">
			<div class="row">
				<div class="col-md-4">
					<div class="profile-img">
						<div class="profile-img-inner"></div>
					</div>
				</div>
				<div class="col-md-8">
					<?php echo do_shortcode('[contact-form-7 id="65" title="Contact Me"]')?>
					<?php get_sidebar( 'footerright' ); ?>
				</div><!--col end -->

			</div><!-- row end -->

			<div class="row">
				<div class="col-md-12">
					
				</div>
			</div>
		</footer><!-- #colophon -->
	</div><!-- container end -->
</div><!-- wrapper end -->

<div class="wrapper">
	<div class="<?php echo esc_attr( $container ); ?>">
		<div class="row">
			<div class="col-md-6">
				<div class="site-info">

							Proudly powered by <a href="https://wordpress.org/">Wordpress</a>
							<!-- <span> &nbsp; | &nbsp; </span>  -->
							<br/>
							Theme based on <a href="https://understrap.com/">Understrap</a>
							
				</div><!-- .site-info -->
			</div>
			<div class="col-md-6">
				<div class="pull-right">
				  Site Designed and Developed by <a href="mailto:nate@thedaines.org">Nathaniel Daines</a>
				</div>
			</div>
		</div>
	</div>
</div>



</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

