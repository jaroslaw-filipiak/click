<?php

/**
 * Template Name: Contact
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
    <div class="wrapper d-flex align-items-center"
        style="background-image: url('<?php echo click5_check_background(); ?>');" id="hero-sub">
        <div class="container">
            <div class="row">
                <div class="content col-12">
                    <h3 class="font-weight-light tracking-normal">NextGen Mechanical Heating & Cooling</h3>
                    <h1 class="title--contact"><?php the_title(); ?><br />Today!</h1>
                    <h2 class="subtitle subtitle--contact"> Rely on NextGen for
                        <span>
                            <span class="text-accent"> 5-Star</span> HVAC Service
                        </span>
                    </h2>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- contact boxes -->
<section>
    <div class="container contact-boxes">
        <div class="row">
            <!-- Phone -->
            <div class="col contact-box contact-box--phone">
                <div class="contact-box__icon">
                    <img class="img-fluid" loading="lazy" src="<?php echo $theme_uri ?>/img/icons/icon-phone.webp"
                        role="presentation">
                </div>
                <div class="contact-box__content">
                    <h4>Phone</h4>
                    <a href="tel:224-539-6895" class="roboto-regular">224-539-6895</a>
                </div>
            </div>
            <!-- Email -->
            <div class="col contact-box contact-box--email">
                <div class="contact-box__icon">
                    <img class="img-fluid" loading="lazy" src="<?php echo $theme_uri ?>/img/icons/icon-envelope.webp"
                        role="presentation">
                </div>
                <div class="contact-box__content">
                    <h4>Email</h4>
                    <a class="roboto-regular" href="mailto:info@nextgenmech.com">info@nextgenmech.com</a>
                </div>
            </div>
            <!-- Book Now -->
            <div href="tel:224-539-6895" class="col contact-box contact-box--book-now">
                <div class="contact-box__icon">
                    <img class="img-fluid" loading="lazy" src="<?php echo $theme_uri ?>/img/icons/icon-pointer.webp"
                        role="presentation">
                </div>
                <div class="contact-box__content">
                    <h4>Book Now</h4>
                    <a href="#">Schedule Service</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- form -->
<section>
    <div class="section" id="contact-wrapper">
        <div class="container">
            <div class="row wrapper">
                <div class="col-12 text-center">
                    <h1>NextGen is always here for our customers!</h1>
                    <h4 class="roboto-regular mx-auto">Fill out our contact form or reach out using any of the
                        methods below. A
                        member of our team
                        will reach out to you as soon as possible!</h4>
                </div>
                <div class="form col-12">
                    <?php echo do_shortcode('[contact-form-7 id="5" title="Contact Form"]'); ?>
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