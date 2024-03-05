<?php
/**
 * Template Name: Contact
 *
 * @package click5
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

<div class="wrapper d-flex align-items-end" style="background-image: url('<?php echo click5_check_background(); ?>');" id="hero-sub">
    <div class="container">
        <div class="row">
            <div class="content col-12 text-center">
                <h3>click5 Starter Theme</h3>
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
    </div> 
</div> 

<div class="section d-none" id="banners">
	<div class="container">
		<div class="row no-gutters">
			<div class="box box-1 col-md-6 col-12">
				<a data-scroll="#contact-wrapper" class="d-flex align-items-center">
					<div class="icon">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/icon-email.webp" alt="icon" />
					</div>

					<div class="content">
						<h3>Tell Us About Your Website</h3>
						<p>Schedule Free Consultation</p>
					</div>
				</a>
			</div>

			<div class="box box-2 col-md-6 col-12">
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
	</div>
</div>

<div class="wrapper" id="contact-intro">
	<div class="container">
		<div class="row">
            <div class="box col-md-6 col-12">
                <div class="icon">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/icon-location.webp?v=1.2" alt="icon" />
                </div>

                <div class="content">
                    <h2>click5 Starter Theme</h2>
                    <address><?php echo get_field("c5ts_address", "option"); ?></address>
                </div>
            </div>

            <div class="box col-md-6 col-12">
                <div class="icon">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/icon-phone.webp?v=1.2" alt="icon" />
                </div>

                <div class="content">
                    <h2>Contact Us Today!</h2>
                    <a href="tel:<?php echo get_field("c5ts_phone", "option"); ?>" class="phone"><?php echo get_field("c5ts_phone", "option"); ?></a>
                    <p>Talk to a specialist</p>
                </div>
            </div>
		</div>
    </div>
</div>

<div class="section" id="contact-wrapper">
	<div class="container">
		<div class="row wrapper">
			<div class="home-headline col-12 text-center">
				<h3>CONTACT US TODAY!</h3>
				<h1>Questions? We Can Help!</h1>
			</div>

			<div class="form col-12">
				<?php echo do_shortcode('[contact-form-7 id="5" title="Contact Form"]'); ?>
			</div>
		</div>
    </div>
</div>

<div class="contact-map">
	<iframe src="<?php echo get_field("c5ts_map", "option"); ?>" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<?php get_footer(); ?>
