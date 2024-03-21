<?php

/**
 * Template part for displaying service area section
 *
 *
 * 
 */

$theme_uri = get_template_directory_uri();
$frontpage_id = get_option('page_on_front');
$is_contact_page = is_page('contact');
$bg = get_field('serving_area_bg', $frontpage_id);
$bg_default = $theme_uri . '/img/area.webp';

if ($bg) {
    $bg_url = $bg['url'];
    $bg_alt = $bg['alt'];
}
?>

<section>
    <div class="wrapper <?php echo $is_contact_page ? 'services-area services-area__contact' : 'services-area' ?>" id="area">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl-7  services-area__content">
                    <h3><?php echo get_field('serving_area_title', $frontpage_id) ?></h3>
                    <h5><?php echo get_field('serving_area_word_before_list', $frontpage_id) ?></h5>
                    <div class="row">
                        <div class="col">
                            <ul class="list-unstyled">

                                <?php if (have_rows('serving_area_list_repeater', $frontpage_id)) : ?>

                                    <?php while (have_rows('serving_area_list_repeater', $frontpage_id)) : the_row();
                                        $item = get_sub_field('list_item');

                                    ?>
                                        <li><?php echo $item ?></li>

                                    <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>

                        </div>
                    </div>
                    <div class="col"></div>
                </div>
            </div>

        </div>
        <img loading="lazy" class="services-area__img" src="<?php echo $bg ? $bg_url : $bg_default ?>" alt="<?php echo $bg ?  $bg_alt : 'Image presenting our services area map' ?>">
</section>