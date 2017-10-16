<?php
/**
 * Sidebar setup for footer full.
 *
 * @package understrap
 */

$container   = get_theme_mod( 'understrap_container_type' );

?>

<?php if ( is_active_sidebar( 'footerright' ) ) : ?>

	<div class="<?php echo esc_attr( $container ); ?>" id="" tabindex="-1">
				<?php dynamic_sidebar( 'footerright' ); ?>
	</div>

<?php endif; ?>
