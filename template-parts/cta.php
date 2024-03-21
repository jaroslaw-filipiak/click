<?php

/**
 * Template part for displaying CTA buttons 
 * used in page.php + home.php
 *
 * 
 */

$theme_uri = get_template_directory_uri();
$is_frontpage = is_front_page();
$schedule = get_field('schedule_service', 'option');
if ($schedule) :
    $schedule_url = $schedule['url'];
    $schedule_title = $schedule['title'];
    $schedule_target = $schedule['target'] ? $schedule['target'] : '_self';
endif;

?>

<section class="cta--page">
    <div class="container pt-5 pb-5">
        <div class="row cta mt-0 pt-2 pb-2" id="cta">
            <div class="col-12 text-center">
                <h3 class="mt-0 pt-0">Questions? <span> Contact Us Today!</span></h3>
            </div>
            <div class="col d-flex align-items-start justify-content-center mt-2 mt-lg-0">
                <a class="cta--schedule-btn" href="<?php echo esc_url($schedule_url); ?>" target="<?php echo esc_attr($schedule_target); ?>"> <?php echo $schedule_title ?></a>
                <a class="cta--call-btn" href="tel:<?php echo get_field("c5ts_phone", "option"); ?>">Call&nbsp;
                    <span><?php echo get_field("c5ts_phone", "option"); ?></span></a>
            </div>
        </div>
    </div>
</section>