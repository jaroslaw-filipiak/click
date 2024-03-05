<?php

/**
 * Template Name: Home
 *
 * @package click5
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

get_header();
?>

<div class="wrapper d-flex align-items-end" id="hero" style="background-image: url('<?php echo click5_check_background(); ?>')">
	<div class="container">
		<div class="row">
			<div class="content col-12 text-center">
				<h3><?php echo get_field("hero_title_1"); ?></h3>
				<h1><?php echo get_field("hero_title_2"); ?></h1>
			</div>
		</div>
	</div>
</div>

<div class="section" id="banners">
	<div class="container">
		<div class="row no-gutters">
			<div class="box box-1 col-md-6 col-12">
				<a href="<?php the_permalink(20); ?>" class="d-flex align-items-center">
					<div class="icon">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icons/icon-email.webp?v=1.2" alt="icon" />
					</div>

					<div class="content">
						<h3>Tell Us About Your Case</h3>
						<p>Schedule Free Consultation</p>
					</div>
				</a>
			</div>

			<div class="box box-2 col-md-6 col-12">
				<a href="tel:<?php echo get_field("c5ts_phone", "option"); ?>" class="d-flex align-items-center">
					<div class="icon">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icons/icon-phone.webp" alt="icon" />
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

<div class="wrapper" id="about">
	<div class="container">
		<div class="row">
			<div class="headline col-md-5 col-12">
				<h2><?php echo get_field("about_title"); ?></h2>
			</div>

			<div class="content col-md-7 col-12">
				<?php echo get_field("about_text"); ?>

				<a href="<?php echo get_field("about_button")['url']; ?>"><span><?php echo get_field("about_button")['title']; ?></span></a>
			</div>
		</div>
	</div>
</div>

<?php if (have_rows("services_items")) : ?>

	<div class="wrapper" id="services">
		<div class="container">
			<div class="row">
				<div class="home-headline col-12 text-center">
					<h3><?php echo get_field("services_title_1"); ?></h3>
					<h2><?php echo get_field("services_title_2"); ?></h2>
				</div>
			</div>

			<div class="row no-gutters">
				<?php while (have_rows("services_items")) : the_row(); ?>

					<div class="box col-xl-3 col-sm-6 col-12">
						<a href="<?php echo get_sub_field("url"); ?>">
							<div class="icon">
								<img src="<?php echo get_sub_field("icon"); ?>?v=1.2" alt="icon" />
							</div>

							<div class="content">
								<h2><?php echo get_sub_field("title"); ?></h2>
							</div>
						</a>
					</div>

				<?php endwhile; ?>
			</div>
		</div>
	</div>

<?php endif; ?>
<?php if (have_rows("textboxes")) : ?>

	<div class="wrapper pt-0" id="textbox">
		<div class="container">
			<?php while (have_rows("textboxes")) : the_row(); ?>

				<div class="row align-items-center">
					<div class="photo col-lg-6 col-12 order-2 order-lg-1">
						<div>
							<?php echo wp_get_attachment_image(get_sub_field("photo"), 'large', '', array('loading' => 'lazy')); ?>
						</div>
					</div>

					<div class="content col-lg-6 col-12 order-1 order-lg-2">
						<h2><?php echo get_sub_field("title"); ?></h2>
						<?php echo get_sub_field("text"); ?>
						<a href="<?php echo get_sub_field("button")['url']; ?>"><span><?php echo get_sub_field("button")['title']; ?></span></a>
					</div>
				</div>

			<?php endwhile; ?>
		</div>
	</div>

<?php endif; ?>

<div class="wrapper pt-0" id="cta">
	<div class="container">
		<div class="row">
			<div class="content col-12 text-center">
				<h3>Questions? We Can Help! Contact Us Today!</h3>
				<h2>Questions? We Can Help! Contact Us Today!</h2>

				<div class="buttons d-flex justify-content-center align-items-center">
					<a href="<?php the_permalink(20); ?>" class="schedule">Schedule a Consultation</a>
					<a href="tel:<?php echo get_field("c5ts_phone", "option"); ?>" class="phone"><span>Call Us
							Now</span> <?php echo get_field("c5ts_phone", "option"); ?></a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="wrapper box" id="faq-wrapper">
	<div class="container">
		<div class="row">
			<div class="home-headline col-12 text-center">
				<h3>Questions? We Can Help</h3>
				<h2>Frequently Asked Questions</h2>
			</div>

			<dl id="accordion" class="questions mb-0" itemscope itemtype="https://schema.org/FAQPage">
				<?php $i = 1;
				while (have_rows('questions', 103)) : the_row(); ?>
					<?php if (get_sub_field("homepage") && get_sub_field("homepage")[0] == 1) : ?>

						<div class="card<?php echo ($i == 1) ? ' active' : ''; ?>" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
							<dt class="card-header" id="heading-<?php echo $i; ?>">
								<h3 data-toggle="collapse" data-target="#faq-<?php echo $i; ?>" aria-expanded="<?php echo ($i == 1) ? 'true' : 'false'; ?>" aria-controls="collapse-<?php echo $i; ?>" itemprop="name">
									<?php echo get_sub_field('question'); ?></h3>
							</dt>

							<dd id="faq-<?php echo $i; ?>" class="collapse mb-0<?php echo ($i == 1) ? ' show' : ''; ?>" aria-labelledby="heading-<?php echo $i; ?>" data-parent="#accordion">
								<div class="card-body" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
									<div class="entry-content" itemprop="text"><?php echo get_sub_field('answer'); ?></div>
								</div>
							</dd>
						</div>

					<?php $i++;
					endif; ?>
				<?php endwhile; ?>
			</dl>

			<div class="more col-12 text-center">
				<a href="<?php the_permalink(103); ?>">Read All FAQs</a>
			</div>
		</div>
	</div>
</div>

<?php if (!is_page(117) && have_rows("reviews", 117)) : ?>

	<div class="wrapper" id="reviews" itemscope itemtype="https://schema.org/Product">
		<div class="d-none">
			<span itemprop="name" content="click5 Interactive"></span>
			<link itemprop="image" href="#">
			<div itemprop="address" itemscope="" itemtype="https://schema.org/PostalAddress">
				<span itemprop="streetAddress">351 West Hubbard Street</span>
				<span itemprop="addressLocality">Chicago</span>
				<span itemprop="addressRegion">IL</span>
				<span itemprop="postalCode">60654</span>
				<span itemprop="addressCountry">US</span>
			</div>
			<span itemprop="telephone"><?php echo get_field("c5ts_phone", "option"); ?></span>
			<div itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating">
				<span itemprop="ratingValue">5</span>/5 based on <span itemprop="reviewCount"><?php echo count(get_field("reviews", 117)); ?></span> reviews
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="home-headline col-12 text-center">
					<h3>Lorem Ipsum Dolor Sit Amet</h3>
					<h2>Client Testimonials</h2>
				</div>
			</div>

			<div class="row reviews">
				<?php while (have_rows("reviews", 117)) : the_row(); ?>
					<?php if (get_sub_field("homepage") && get_sub_field("homepage")[0] == 1) : ?>

						<div class="review" itemprop="review" itemscope itemtype="https://schema.org/Review">
							<div class="content">
								<div class="opinion" itemprop="reviewBody">
									<?php echo get_sub_field("review"); ?>
								</div>

								<div class="overview" itemprop="author" itemscope itemtype="https://schema.org/Person">
									<p><strong itemprop="name"><?php echo get_sub_field("customer_info"); ?></strong></p>
								</div>
							</div>
						</div>

					<?php endif; ?>
				<?php endwhile; ?>

			</div>
		</div>
	</div>

<?php endif; ?>

<?php get_footer(); ?>