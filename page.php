<?php

/**
 * The template for displaying all pages.
 *
 * @package click5
 */

if (!defined('ABSPATH')) {
	exit;
}

get_header();
$theme_uri = get_template_directory_uri();
?>

<section>
    <div class="wrapper d-flex align-items-end"
        style="background-image: url('<?php echo click5_check_background(); ?>');" id="hero-sub">
        <div class="container">
            <div class="row">
                <div class="content col-12">
                    <h1><?php the_title(); ?></h1>
                    <h2 class="subtitle">When you need a highly-skilled and trusted team to install
                        a new Air Conditioning System, look no further
                        than NextGen Mechanical.</h2>
                    <div class="d-flex align-items-center ">
                        <a class="btn btn__schedule" href="<?php the_permalink(20); ?>">Schedule Service</a>
                        <a class="btn btn__call-us" href="<?php the_permalink(20); ?>">Call
                            <span><?php echo get_field("c5ts_phone", "option"); ?></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="wrapper" id="page-wrapper">
        <div class="container" id="content" tabindex="-1">
            <div class="row flex-lg-nowrap">

                <main class="wrapper col-md-9" id="main">

                    <?php while (have_posts()) : the_post(); ?>

                    <?php get_template_part('loop-templates/content', 'page'); ?>

                    <?php
					if (comments_open() || get_comments_number()) :
						comments_template();
					endif;
					?>

                    <?php endwhile;  ?>

                    <?php edit_post_link(__('EDIT', 'click5'), '<p>', '</p>', null, 'btn btn-secondary btn-edit-post-link mt-5'); ?>

                </main>

                <?php get_sidebar(); ?>

            </div>
        </div>
    </div>
</section>

<section>
    <div class="container pt-5 pb-5">
        <div class=" row cta mt-0 pt-2 pb-2" id="cta">
            <div class="col-12 text-center">
                <h3 class="mt-0 pt-0">Questions? <span> Contact Us Today!</span></h3>
            </div>
            <div class="col d-flex align-items-center justify-content-center mt-2">
                <a class="cta--schedule-btn" href="#">Schedule Service</a>
                <a class="cta--call-btn" href="">Call
                    <span><?php echo get_field("c5ts_phone", "option"); ?></span></a>
            </div>
        </div>
    </div>
</section>

<!-- Peace of Mind Included  with Every Service -->
<section>
    <div class="wrapper peace-of-mind" id="peace-of-mind"
        style="background-image: url(<?php echo $theme_uri ?>/img/peace-of-mind-bg.webp);">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-6  d-flex justify-content-end pr-0">

                    <img class="img-fluid" loading="lazy"
                        src="<?php echo $theme_uri ?>/img/peace-of-mind-included-with-every-service.webp"
                        alt="peace-of-mind-included-with-every-service">

                </div>
                <div class="col-12 col-lg-6 d-flex flex-column justify-content-center " style="padding-left: 74px;">

                    <h3>Peace of Mind Included </br>
                        with Every Service</h3>

                    <ul class="list-unstyled">
                        <li>
                            <img class="img-fluid" loading="lazy"
                                src="<?php echo $theme_uri ?>/img/icons/check-icon.png" alt="checkbox icon">
                            <p>Emergency Services <span>Available 24/7</span></p>
                        </li>

                        <li>
                            <img class="img-fluid" loading="lazy"
                                src="<?php echo $theme_uri ?>/img/icons/check-icon.png" alt="checkbox icon">
                            <p>HVAC Technicians are <span>EPA-Certified</span></p>
                        </li>

                        <li>
                            <img class="img-fluid" loading="lazy"
                                src="<?php echo $theme_uri ?>/img/icons/check-icon.png" alt="checkbox icon">
                            <p><span>5-Star BBB </span>Accreditation</p>
                        </li>

                        <li>
                            <img class="img-fluid" loading="lazy"
                                src="<?php echo $theme_uri ?>/img/icons/check-icon.png" alt="checkbox icon">
                            <p><span>Free </span>Quotes</p>
                        </li>

                        <li>
                            <img class="img-fluid" loading="lazy"
                                src="<?php echo $theme_uri ?>/img/icons/check-icon.png" alt="checkbox icon">
                            <p>Financing <span>Available</span></p>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- logos -->
<section>
    <div class="wrapper logos" id="logos">
        <div class="container">
            <div class="row logos__slick">
                <img loading="lazy" class="img-fluid" src="<?php echo $theme_uri ?>/img/logos/the-unico-system.webp"
                    alt="bradford-white logo">
                <img loading="lazy" class="img-fluid" src="<?php echo $theme_uri ?>/img/logos/bradford-white.webp"
                    alt="bradford-white logo">
                <img width="" loading="lazy" class="img-fluid" src="<?php echo $theme_uri ?>/img/logos/epa.webp"
                    alt="bradford-white logo">
                <img width="" loading="lazy" class="img-fluid" src="<?php echo $theme_uri ?>/img/logos/nate.webp"
                    alt="bradford-white logo">
                <img width="" loading="lazy" class="img-fluid" src="<?php echo $theme_uri ?>/img/logos/heil.webp"
                    alt="bradford-white logo">
                <img width="" loading="lazy" class="img-fluid" src="<?php echo $theme_uri ?>/img/logos/fast.webp"
                    alt="bradford-white logo">
            </div>
        </div>
    </div>
</section>

<section>
    <?php if (!is_page(117) && have_rows("reviews", 117)) : ?>

    <div class="wrapper" style="background-image:url('<?php echo $theme_uri ?>/img/testimonials-bg.webp')" id="reviews"
        itemscope itemtype="https://schema.org/Product">

        <div class="container">
            <div class="row">
                <div class="reviews__heading col-12 text-center">
                    <h3>Our Client Testimonials</h3>
                    <h2>See What Our Customers Say</h2>
                </div>
            </div>

            <div class="row reviews">
                <?php while (have_rows("reviews", 117)) : the_row(); ?>
                <?php if (get_sub_field("homepage") && get_sub_field("homepage")[0] == 1) :

							$heading_length = strlen(get_sub_field("heading"));
							$image = get_sub_field("avatar");
							$customer = get_sub_field("customer");
							$source = get_sub_field("source");

						?>

                <div class="review" itemprop="review" itemscope itemtype="https://schema.org/Review">
                    <div class="content">
                        <img class="review__quote-icon" src="<?php echo $theme_uri ?>/img/icons/quote-icon.png"
                            role="presentation">
                        <div class="opinion" itemprop="reviewBody">
                            <h3 <?php if ($heading_length > 40) echo 'class="long-heading"'; ?>>
                                <?php echo get_sub_field("heading"); ?></h3>
                            <div><?php echo get_sub_field("review"); ?></div>
                        </div>
                        <div class="divider" style="width: 100%; border:1px solid #dee9ed;"></div>

                        <div class="review__footer">
                            <div class="review__person">
                                <div class="review__person--avatar"
                                    style="background-image:url('<?php echo esc_url($image['url']); ?>')"></div>
                                <div>
                                    <p class="review__person--name roboto-regular"><?php echo $customer ?></p>
                                    <p class="review__person--source roboto-light"><?php echo $source ?></p>
                                </div>
                            </div>
                            <div class="review__rating">
                                <img loading="lazy" src="<?php echo $theme_uri ?>/img/icons/stars.png"
                                    role="presentation">
                            </div>
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

</section>

<section>
    <div class="wrapper services-area" id="area"
        style="background-image:url('<?php echo $theme_uri ?>/img/services-area-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 ">
                    <h3>Proudly Serving </br> Our Chicagoland Area</h3>
                    <h5>Including:</h5>
                    <div class="row">
                        <div class="col">
                            <ul class="list-unstyled">
                                <li>Des Plaines</li>
                                <li>Park Ridge</li>
                                <li>Niles</li>
                                <li>Glenview</li>
                                <li>Palatine</li>
                                <li>Schaumburg</li>
                                <li>Carpentersville</li>
                                <li>Elgin</li>
                                <li>Geneva</li>
                            </ul>
                        </div>

                        <div class="col">
                            <ul class="list-unstyled">
                                <li>Aurora</li>
                                <li>Naperville</li>
                                <li>Wheaton</li>
                                <li>Downer's Grove</li>
                                <li>Addison</li>
                                <li>Bloomingdale</li>
                                <li>Elmhurst</li>
                                <li>Chicago</li>
                                <li>Oak Lawn</li>
                            </ul>
                        </div>

                        <div class="col">
                            <ul class="list-unstyled">
                                <li>Cicero</li>
                                <li>Evanston</li>
                                <li>Highland Park</li>
                                <li>Barrington</li>
                                <li>Libertyville</li>
                                <li>Lake Bluff</li>
                                <li>Vernon Hills</li>
                                <li>Buffalo Grove</li>
                                <li>Waconda</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col"></div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>