<?php
/**
 * Template Name: Reviews
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

<div class="wrapper" id="page-wrapper" itemscope itemtype="https://schema.org/Product">
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
			<span itemprop="ratingValue">5</span>/5 based on <span itemprop="reviewCount"><?php echo count( get_field('reviews') ); ?></span> reviews
		</div>
	</div>

	<div class="container" id="content" tabindex="-1">
		<div class="row">
			<main class="wrapper col-md-8" id="main">

				<?php if ( !empty( get_the_content() ) ) : while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'loop-templates/content', 'page' ); ?>

				<?php endwhile; endif; ?>

                <?php while(have_rows('reviews')) : the_row(); ?>

					<div class="review-item entry-content">
						<div class="review" itemprop="review" itemscope itemtype="https://schema.org/Review">
							<div itemprop="reviewBody">
								<?php echo get_sub_field("review"); ?> 
							</div>
							
							<div class="overview" itemprop="author" itemscope itemtype="https://schema.org/Person">
								<strong>~ <span itemprop="name"><?php echo get_sub_field("customer"); ?></span></strong> <?php echo get_sub_field("customer_info"); ?>
							</div>
						</div>
					</div>

                <?php endwhile; ?>

				<?php edit_post_link( __( 'EDIT', 'click5' ), '<p>', '</p>', null, 'btn btn-secondary btn-edit-post-link mt-5' ); ?>

			</main>	

            <?php get_sidebar(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>