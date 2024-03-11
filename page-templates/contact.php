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
$schedule = get_field('schedule_service', 'option');
if ($schedule) :
    $schedule_url = $schedule['url'];
    $schedule_title = $schedule['title'];
    $schedule_target = $schedule['target'] ? $schedule['target'] : '_self';
endif;
?>


<!-- hero -->
<section>
    <div class="wrapper d-flex align-items-center" style="background-image: url('<?php echo click5_check_background(); ?>');" id="hero-sub">
        <div class="container">
            <div class="row">
                <div class="content col-12">
                    <h3 class="font-weight-light tracking-normal"><?php the_field('heading'); ?></h3>
                    <h1 class="title--contact"><?php the_field('title'); ?></h1>
                    <h2 class="subtitle subtitle--contact"> <?php the_field('slogan'); ?></h2>

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
                    <img class="img-fluid" loading="lazy" src="<?php echo $theme_uri ?>/img/icons/icon-phone.webp" role="presentation">
                </div>
                <div class="contact-box__content">
                    <h4>Phone</h4>
                    <a href="tel:224-539-6895" class="roboto-regular"><?php echo get_field("c5ts_phone", "option"); ?></span></a>
                </div>
            </div>
            <!-- Email -->
            <div class="col contact-box contact-box--email">
                <div class="contact-box__icon">
                    <img class="img-fluid" loading="lazy" src="<?php echo $theme_uri ?>/img/icons/icon-envelope.webp" role="presentation">
                </div>
                <div class="contact-box__content">
                    <h4>Email</h4>
                    <a class="roboto-regular" href="mailto:<?php echo get_field("c5ts_email", "option"); ?>"><?php echo get_field("c5ts_email", "option"); ?></span></a>
                </div>
            </div>
            <!-- Book Now -->
            <div href="tel:224-539-6895" class="col contact-box contact-box--book-now">
                <div class="contact-box__icon">
                    <img class="img-fluid" loading="lazy" src="<?php echo $theme_uri ?>/img/icons/icon-pointer.webp" role="presentation">
                </div>
                <div class="contact-box__content">
                    <h4>Book Now</h4>
                    <a href="<?php echo esc_url($schedule_url); ?>" target="<?php echo esc_attr($schedule_target); ?>">
                        <?php echo $schedule_title ?></a>
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
                    <h1><?php the_field('cf_title'); ?></h1>
                    <h4 class="roboto-regular mx-auto"><?php the_field('cf_subtitle'); ?></h4>
                </div>
                <div class="form col-12">
                    <?php echo do_shortcode('[contact-form-7 id="5" title="Contact Form"]'); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Peace of Mind Included  with Every Service -->
<?php get_template_part('template-parts/peace-of-mind-section'); ?>

<!-- logos slider -->
<?php get_template_part('template-parts/logos-slider'); ?>

<!-- service area -->
<?php get_template_part('template-parts/service-area'); ?>


<?php get_footer(); ?>