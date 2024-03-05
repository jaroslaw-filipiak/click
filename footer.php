<?php
/**
 * The template for displaying the footer.
 *
 * @package click5
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

	<div class="wrapper" id="footer">
		<div class="container">
			<div class="row align-items-center">
				<div class="menu col-lg-7 col-md-12 order-2 order-lg-1 d-flex flex-column text-center text-lg-left">
					<?php wp_nav_menu(
						array(
							'theme_location'  => 'footer',
							'menu_class'      => 'justify-content-center justify-content-lg-start'
						)
					); ?>

					<div class="copy">
						<p>&copy; <?php echo date('Y'); ?> Company Name. All rights reserved.&nbsp; <?php click5_site_info(); ?></p>
					</div>
				</div>
				
				<div class="social-media col-lg-5 col-md-12 order-1 order-lg-2 d-flex justify-content-center justify-content-lg-end align-items-center">
					<?php wp_nav_menu(
						array(
							'theme_location'  => 'social-media'
						)
					); ?>
				</div>
			</div>
		</div>
	</div>

	<div class="d-sm-none" id="sticky-footer">
		<div class="row">
			<div class="col-sm-5 d-flex align-items-center pr-0">
				<a href="<?php the_permalink(18); ?>" class="d-flex align-items-center text-left">
					<p>Our Services</p>
				</a>
			</div>

			<div class="col-sm-2">
				<a href="tel:<?php echo get_field("c5ts_phone", "option"); ?>" class="d-flex align-items-center">
					<picture>
						<source srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/icon-sticky.webp" type="image/webp">
						<source srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/icon-sticky.png" type="image/png"> 
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/icon-sticky.png" alt="icon phone">
					</picture>					
				</a>
			</div>

			<div class="col-sm-5 d-flex justify-content-end align-items-center pl-0">
				<a href="<?php the_permalink(20); ?>" class="d-flex align-items-center text-right">
					<p>Contact Us</p>				
				</a>
			</div>
		</div>
	</div>

</div>

<?php wp_footer(); ?>

</body>
</html>