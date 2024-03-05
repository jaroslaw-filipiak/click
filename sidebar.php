<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package click5
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<div class="col-md-4 widget-area" id="sidebar-area" role="complementary">

	<div class="widget" id="banners">
		<div class="box box-1">
			<a href="<?php the_permalink(20); ?>" class="d-flex align-items-center">
				<div class="icon">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/icon-email.webp" alt="icon" />
				</div>

				<div class="content">
					<h3>Tell Us About Your Case</h3>
					<p>Schedule Free Consultation</p>
				</div>
			</a>
		</div>

		<div class="box box-2">
			<a href="tel:<?php echo get_field("c5ts_phone", "option"); ?>" class="d-flex align-items-center">
				<div class="icon">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/icon-phone.webp" alt="icon" />
				</div>

				<div class="content">
					<h3>Do you have a questions?</h3>
					<p><span>Call Us Today!</span> <?php echo get_field("c5ts_phone", "option"); ?></p>
				</div>
			</a>
		</div>
	</div>

	<div class="widget-links">
		<h3>Our Services</h3>

		<ul>
			<?php wp_list_pages( array( 'child_of' => 18, 'title_li' => '' ) ); ?>
		</ul>
	</div>	

</div>