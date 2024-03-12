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
$link = get_field('schedule_service', 'option');

if ($link) :
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';

endif;
?>

<!-- hero -->
<section>
    <div class="wrapper d-flex align-items-end hero" id="hero" style="background-image: url('<?php echo click5_check_background(); ?>')">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3><?php echo get_field("hero_title_1"); ?></h3>
                    <h1><?php echo get_field("hero_title_2"); ?></h1>
                    <h4><?php echo get_field("hero_title_3"); ?></h4>
                </div>
            </div>
            <div class="row hero__buttons d-flex align-items-center">
                <div class="col d-flex flex-column flex-sm-row align-items-center ">
                    <a target="<?php echo esc_attr($link_target); ?>" class="hero__buttons--schedule" href="<?php echo esc_url($link_url); ?>"><?php echo esc_html($link_title); ?></a>
                    <a class="hero__buttons--call" href="tel:<?php echo get_field("c5ts_phone", "option"); ?>">Call
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
                    <h5><?php the_field('services_title_1'); ?> </h5>
                    <h3><?php the_field('services_title_2'); ?></h3>
                </div>
            </div>
            <div class="row mx-auto services__items-wrapper">

                <?php

                if (have_rows('services_items')) :
                    while (have_rows('services_items')) : the_row();
                        $icon = get_sub_field('icon');
                        $bg = get_sub_field('bg');
                        $label = get_sub_field('label');
                        $title = get_sub_field('title');
                        $excerpt = get_sub_field('excerpt');
                        $url = get_sub_field('url');
                ?>

                        <div class="services-item p-0">
                            <div class="services-item__header border" style="background-image: url('<?php echo $bg ?>')">
                                <div class="services-item__icon">
                                    <img class="img-fluid" loading="lazy" src="<?php echo $icon; ?>" role="presentation">
                                </div>
                            </div>
                            <div class="<?php echo $label ? 'services-item__body services-item__body--has-label' : 'services-item__body' ?>">
                                <?php if ($label) : ?>
                                    <p class=" services-item__label"><?php echo $label ?></h4>
                                    <?php endif; ?>
                                    <h4><?php echo $title ?></h4>
                                    <p><?php echo $excerpt ?></p>
                                    <a href="<?php echo $url ?>">Learn More</a>
                            </div>
                        </div>

                <?php endwhile;

                else :
                endif;

                ?>

            </div>
            <div class="row cta" id="cta">
                <div class="col-12 text-center">
                    <?php echo get_field("cta_heading", "option"); ?>
                </div>
                <div class="col d-flex align-items-center justify-content-center mt-2">
                    <?php $link = get_field('schedule_service', 'option'); ?>

                    <a class="cta--schedule-btn" target="<?php echo esc_attr($link_target); ?>" href="<?php echo esc_url($link_url); ?>"><?php echo esc_html($link_title); ?></a>
                    <a class="cta--call-btn" href="tel:<?php echo get_field("c5ts_phone", "option"); ?>">Call&nbsp;
                        <span><?php echo get_field("c5ts_phone", "option"); ?></span></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- textboxes repeater -->
<?php

if (have_rows('textboxes')) :

    while (have_rows('textboxes')) : the_row();

        $photo = get_sub_field('photo');
        $pre_title = get_sub_field('pre_title');
        $title = get_sub_field('title');
        $text = get_sub_field('text');
        $button = get_sub_field('button');

        $offset = get_row_index() % 2 == 0 ? 'offset-0 col-lg-6' : 'offset-2 col-lg-4';
        $align = get_row_index() % 2 == 0 ? 'd-flex justify-content-end pr-5' : NULL;
        $pt = get_row_index() % 2 == 0 ? 'pt-0' : NULL;

        if ($button) :
            $button_url = $button['url'];
            $button_title = $button['title'];
            $button_target = $button['target'] ? $button['target'] : '_self';
        endif; ?>


        <section>
            <div class="wrapper textboxes__repeater <?php echo $pt ?>" id="textboxes__<?php echo get_row_index() ?>">
                <div class="container-fluid">
                    <div class="row <?php echo get_row_index() % 2 == 0 ? 'd-flex flex-row-reverse' : 'd-flex' ?>">
                        <div class="col-12 d-flex flex-column justify-content-center <?php echo $offset ?>">
                            <h4><?php echo $pre_title ?></h4>
                            <h3><?php echo $title ?></h3>
                            <p class="roboto-light"><?php echo $text ?></p>
                            <a target="<?php echo esc_attr($button_target); ?>" href="<?php echo esc_url($button_url); ?>"><?php echo esc_html($button_title); ?></a>
                        </div>
                        <div class="col-12 col-lg-6 pl-0 <?php echo $align ?>">
                            <img class="img-fluid" loading="lazy" src="<?php echo esc_url($photo['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php
    endwhile;

else :
endif; ?>


<!-- Peace of Mind Included  with Every Service -->
<?php get_template_part('template-parts/peace-of-mind-section'); ?>

<!-- logos slider -->
<?php get_template_part('template-parts/logos-slider'); ?>

<!-- ftl -->
<section>
    <div class="wrapper ftl" id="ftl">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 ftl__col-1 ">
                    <h4><?php the_field('ftl_pre_title'); ?></h4>
                    <h3><?php the_field('ftl_title'); ?></h3>
                </div>
                <div class="col-12 col-lg-6 ftl__col-2">
                    <p class="roboto-light">
                        <?php the_field('ftl_text'); ?>
                    </p>
                    <?php $ftl_link = get_field('ftl_link'); ?>
                    <?php if ($ftl_link) : ?>
                        <a href="<?php echo esc_url($ftl_link['url']); ?>" target="<?php echo esc_attr($ftl_link['target']); ?>"><?php echo esc_html($ftl_link['title']); ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- reviews slider -->
<?php get_template_part('template-parts/reviews-slider'); ?>

<!-- service area -->
<?php get_template_part('template-parts/service-area'); ?>

<?php get_footer(); ?>