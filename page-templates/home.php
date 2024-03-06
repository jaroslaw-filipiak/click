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

$theme_uri = get_template_directory_uri();

?>

<section>
    <div class="wrapper d-flex align-items-end hero" id="hero"
        style="background-image: url('<?php echo click5_check_background(); ?>')">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3><?php echo get_field("hero_title_1"); ?></h3>
                    <h1><?php echo get_field("hero_title_2"); ?></h1>
                    <h4><?php echo get_field("hero_title_3"); ?></h4>
                </div>
            </div>
            <div class="row hero__buttons d-flex align-items-center">
                <div class="col d-flex align-items-center ">
                    <a class="hero__buttons--schedule" href="#">Schedule Service</a>
                    <a class="hero__buttons--call" href="">Call
                        <span><?php echo get_field("c5ts_phone", "option"); ?></span></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- services -->
<section>
    <div class="wrapper services" id="services">
        <div class="container-fluid mx-auto">
            <div class="row">
                <div class="col text-center">
                    <h5>Our Services</h5>
                    <h3>Comprehensive HVAC Services You Can Trust</h3>
                </div>
            </div>
            <div class="row mx-auto services__items-wrapper">
                <?php for ($i = 0; $i < 4; $i++) { ?>
                <div class="services-item p-0">
                    <div class="services-item__header border"
                        style="background-image: url('https://picsum.photos/390/300')">
                        <div class="services-item__icon">
                            <img class="img-fluid" loading="lazy"
                                src="<?php echo $theme_uri ?>/img/services/air-conditioning-icon.webp"
                                alt="air-conditioning-icon">
                        </div>
                    </div>
                    <div class="services-item__body">
                        <h4>Air Conditioning</h4>
                        <p>When you need AC installation, repair, or maintenance, we have
                            you covered.</p>
                        <a href="#">Learn More</a>
                    </div>
                </div>
                <?php } ?>
            </div>
            <div class="row services__cta">
                <div class="col-12 text-center">
                    <h3>Questions? <span> Contact Us Today!</span></h3>
                </div>
                <div class="col d-flex align-items-center justify-content-center mt-2">
                    <a class="services__cta--schedule-btn" href="#">Schedule Service</a>
                    <a class="services__cta--call-btn" href="">Call
                        <span><?php echo get_field("c5ts_phone", "option"); ?></span></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- our priority -->
<section>
    <div class="wrapper our-priority" id="our-priority">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-4 offset-2 d-flex flex-column justify-content-center ">
                    <h4>Your Home Comfort is Our Priority</h4>
                    <h3>Family-Owned </br>
                        and Customer-Focused</h3>
                    <p class="roboto-light">Here at NextGen Mechanical, we treat our customers like family.
                        We take pride in delivering the highest quality services and products possible to provide you
                        with
                        long-lasting comfort. From furnace
                        and boiler installation to ductless AC maintenance, trust us as your
                        go-to HVAC company.</p>
                    <a href="#">Learn More</a>
                </div>
                <div class="col-12 col-lg-6  pl-0">
                    <img class="img-fluid" loading="lazy"
                        src="<?php echo $theme_uri ?>/img/family-owned-and-customer-focused.webp"
                        alt="Your Home Comfort is Our Priority">
                </div>
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

<!-- ftl -->
<section>
    <div class="wrapper ftl" id="ftl">
        <div class="container">
            <div class="row">
                <div class="col ftl__col-1">
                    <h4>Special Financing With FTL</h4>
                    <h3>Special Offers and </br>
                        Financing for Your Comfort</h3>
                </div>
                <div class="coll ftl__col-2">
                    <p class="roboto-light">
                        Is money tight? Do you need financial assistance with your HVAC services? Regardless of your
                        credit
                        score, we have you covered. Our partnership with FTL provides loans from 3 months to 120 months.
                        We
                        also offer repair service financing for your peace of mind.
                    </p>
                    <a href="#">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- TODO: d-none, cleanup while refactor -->
<section>
    <?php if (have_rows("services_items")) : ?>

    <div class="wrapper d-none" id="services">
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
</section>

<!-- TODO: d-none, cleanup while refactor -->
<section>
    <?php if (have_rows("textboxes")) : ?>

    <div class="wrapper pt-0 d-none" id="textbox">
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
                    <a
                        href="<?php echo get_sub_field("button")['url']; ?>"><span><?php echo get_sub_field("button")['title']; ?></span></a>
                </div>
            </div>

            <?php endwhile; ?>
        </div>
    </div>

    <?php endif; ?>
</section>

<!-- TODO: d-none, cleanup while refactor -->
<section>
    <div class="wrapper pt-0 d-none" id="cta">
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