<?php

/**
 * Template Name:  Service parent page
 *
 * @package click5
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header();

$theme_uri = get_template_directory_uri();
$schedule = get_field('schedule_service', 'option');
$has_subtitle = get_field('page_subheading');

if ($schedule) :
    $schedule_url = $schedule['url'];
    $schedule_title = $schedule['title'];
    $schedule_target = $schedule['target'] ? $schedule['target'] : '_self';
endif;

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
            <div class="row ">
                <div class="<?php echo $has_subtitle ? 'content content--has-subtitle' : 'content'  ?> col-12 col-xl-9">
                    <h1><?php the_title(); ?></h1>

                    <?php if ($has_subtitle) : ?>
                        <h2 class="subtitle">
                            <?php echo the_field('page_subheading'); ?>
                        </h2>

                    <?php endif; ?>

                    <div class="row hero__buttons d-flex align-items-center">
                        <div class="col d-flex flex-column flex-sm-row align-items-center">
                            <a target="<?php echo esc_attr($schedule_target); ?>" class="hero__buttons--schedule" href="<?php echo esc_url($schedule_url); ?>"><?php echo $schedule_title ?></a>
                            <a class="hero__buttons--call" href="tel:<?php echo get_field("c5ts_phone", "option"); ?>">Call
                                <span><?php echo get_field("c5ts_phone", "option"); ?></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- services + cta -->
<section>
    <div class="wrapper services" id="services">
        <div class="container-fluid mx-auto">
            <div class="mx-auto services__items-wrapper">

                <?php
                $services_parent_id = get_the_ID();

                $args = array(
                    'post_type' => 'page',
                    'post_parent' => $services_parent_id,
                    'orderby' => 'menu_order',
                    'order' => 'ASC',
                    'posts_per_page' => -1
                );

                $child_pages_query = new WP_Query($args);


                if ($child_pages_query->have_posts()) :
                    while ($child_pages_query->have_posts()) : $child_pages_query->the_post();
                        $bg_url = get_the_post_thumbnail_url();
                        $link = get_the_permalink();
                ?>

                        <!-- loop -->
                        <a href="<?php echo $link ?>" class="services-item">
                            <div class="services-item__inner">
                                <div class="services-item__header" style="background-image: url('<?php echo $bg_url ?>')"></div>
                                <div class="services-item__body">
                                    <h4><?php the_title() ?></h4>
                                    <button class="services-item__btn" href="<?php echo $link ?>">More</button>
                                </div>
                            </div>
                        </a>
                        <!-- loop -->

                <?php endwhile;
                    wp_reset_postdata();
                endif;
                ?>

            </div>
            <div class="row cta" id="cta">
                <div class="col-12 text-center">
                    <?php echo get_field("cta_heading", "option"); ?>
                </div>
                <div class="col d-flex flex-column-reverse flex-md-row align-items-center justify-content-center mt-2">
                    <?php $link = get_field('schedule_service', 'option'); ?>

                    <a class="cta--schedule-btn" target="<?php echo esc_attr($link_target); ?>" href="<?php echo esc_url($link_url); ?>"><?php echo esc_html($link_title); ?></a>
                    <a class="cta--call-btn" href="tel:<?php echo get_field("c5ts_phone", "option"); ?>">Call&nbsp;
                        <span><?php echo get_field("c5ts_phone", "option"); ?></span></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Peace of Mind Included  with Every Service -->
<?php get_template_part('template-parts/peace-of-mind-section'); ?>

<!-- logos slider -->
<?php get_template_part('template-parts/logos-slider'); ?>

<!-- reviews slider -->
<?php get_template_part('template-parts/reviews-slider'); ?>

<!-- service area -->
<?php get_template_part('template-parts/service-area'); ?>


<?php get_footer(); ?>