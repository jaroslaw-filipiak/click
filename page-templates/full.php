<?php

/**
 * Template Name: Full Width
 *
 * @package click5
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

get_header();

$link = get_field('schedule_service', 'option');

if ($link) :
	$link_url = $link['url'];
	$link_title = $link['title'];
	$link_target = $link['target'] ? $link['target'] : '_self';

endif;

?>

<!-- hero -->
<section>
	<div class="wrapper d-flex align-items-end" style="background-image: url('<?php echo click5_check_background(); ?>');" id="hero-sub">
		<div class="container">
			<div class="row">
				<div class="content col-12 col-xl-9">
					<h1><?php the_title(); ?></h1>

					<div class="row hero__buttons d-flex align-items-center">
						<div class="col d-flex flex-column flex-sm-row align-items-center">
							<a target="<?php echo esc_attr($link_target); ?>" class="hero__buttons--schedule" href="<?php echo esc_url($link_url); ?>"><?php echo esc_html($link_title); ?></a>
							<a class="hero__buttons--call" href="tel:<?php echo get_field("c5ts_phone", "option"); ?>">Call
								<span><?php echo get_field("c5ts_phone", "option"); ?></span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="wrapper" id="page-wrapper">
	<div class="container" id="content" tabindex="-1">
		<div class="row">

			<main class="col-lg-10 col-12 mx-auto" id="main">

				<?php while (have_posts()) : the_post(); ?>

					<?php get_template_part('loop-templates/content', 'page'); ?>

					<?php
					if (comments_open() || get_comments_number()) :
						comments_template();
					endif;
					?>

				<?php endwhile;  ?>

			</main>

		</div>
	</div>
</div>

<?php get_footer(); ?>