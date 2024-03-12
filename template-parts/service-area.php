<?php

/**
 * Template part for displaying service area section
 *
 *
 * 
 */

$theme_uri = get_template_directory_uri();
$bg = get_field('serving_area_bg', 'option');
$bg_default = $theme_uri . '/img/area.webp';

if ($bg) {
    $bg_url = $bg['url'];
}
?>

<section>
    <div class="wrapper services-area" id="area">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-7  services-area__content">
                    <h3><?php echo get_field('serving_area_title', 'option') ?></h3>
                    <h5><?php echo get_field('serving_area_word_before_list', 'option') ?></h5>
                    <div class="row">

                        <div class="col">
                            <ul class="list-unstyled">

                                <?php if (have_rows('serving_area_list_repeater', 'option')) : ?>

                                    <?php while (have_rows('serving_area_list_repeater', 'option')) : the_row();
                                        $item = get_sub_field('list_item');

                                    ?>
                                        <li><?php echo $item ?></li>

                                    <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>
                        </div>

                    </div>
                </div>
                <div class="col"></div>
            </div>
        </div>
        <img class="services-area__img" src="<?php echo $bg ? $bg_url : $bg_default ?>" alt="">
    </div>
</section>