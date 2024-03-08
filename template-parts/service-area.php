<?php

/**
 * Template part for displaying service area section
 *
 *
 * 
 */

$theme_uri = get_template_directory_uri();
$bg = get_field('serving_area_bg', 'option');
$bg_default = $theme_uri . '/img/services-area-bg.webp';

if ($bg) {
    $bg_url = $bg['url'];
}
?>

<section>
    <div class="wrapper services-area" id="area" style="background-image:url('<?php echo $bg ? $bg_url : $bg_default ?>')">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-7">
                    <h3><?php echo get_field('serving_area_title', 'option') ?></h3>
                    <h5><?php echo get_field('serving_area_word_before_list', 'option') ?></h5>
                    <div class="row">
                        <?php if (have_rows('serving_area_columns_repeater', 'option')) : ?>

                            <!-- parent repeater -->
                            <?php while (have_rows('serving_area_columns_repeater', 'option')) : the_row();
                                $column = get_sub_field('column');
                            ?>
                                <div class="col">
                                    <ul class="list-unstyled">
                                        <!-- child repeater -->
                                        <?php if (have_rows('list')) : ?>

                                            <?php while (have_rows('list')) : the_row();
                                                $item = get_sub_field('item');

                                            ?>
                                                <li><?php echo $item ?></li>

                                            <?php endwhile; ?>
                                    </ul>
                                <?php endif; ?>
                                </div>
                            <?php endwhile; ?>

                        <?php endif; ?>
                    </div>
                </div>
                <div class="col"></div>
            </div>
        </div>
    </div>
</section>