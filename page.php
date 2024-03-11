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
$schedule = get_field('schedule_service', 'option');
if ($schedule) :
    $schedule_url = $schedule['url'];
    $schedule_title = $schedule['title'];
    $schedule_target = $schedule['target'] ? $schedule['target'] : '_self';
endif;
?>

<section>
    <div class="wrapper d-flex align-items-end"
        style="background-image: url('<?php echo click5_check_background(); ?>');" id="hero-sub">
        <div class="container">
            <div class="row">
                <div class="content col-12">
                    <h1><?php the_title(); ?></h1>

                    <h2 class="subtitle">
                        <?php the_field('page_subheading'); ?>
                    </h2>

                    <div class="d-flex align-items-center ">
                        <a class="btn btn__schedule" href="<?php echo esc_url($schedule_url); ?>"
                            target="<?php echo esc_attr($schedule_target); ?>"> <?php echo $schedule_title ?></a>
                        <a class="btn btn__call-us"
                            href="tel:<?php echo get_field("c5ts_phone", "option"); ?>">Call&nbsp;
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

<!-- CTA -->
<?php get_template_part('template-parts/cta'); ?>

<!-- Peace of Mind Included  with Every Service -->
<?php get_template_part('template-parts/peace-of-mind-section'); ?>

<!-- logos slider -->
<?php get_template_part('template-parts/logos-slider'); ?>

<!-- reviews slider -->
<?php get_template_part('template-parts/reviews-slider'); ?>

<!-- service area -->
<?php get_template_part('template-parts/service-area'); ?>


<?php get_footer(); ?>