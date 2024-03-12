<?php

/**
 * Template part for displaying "Peace of Mind Included with Every Service" section
 *
 *
 * 
 */

$theme_uri = get_template_directory_uri();
$img = get_field('peace_of_mind_image');
$img_default = $theme_uri . '/img/peace-of-mind-included-with-every-service.webp';
$bg = get_field('peace_of_mind_bg');
$bg_default = $theme_uri . '/img/peace-of-mind-bg.webp';

if ($bg) {
    $bg_url = $bg['url'];
}
?>

<?php if (get_field('is_peace_of_mind_section_visible')) : ?>
    <section>
        <div class="wrapper peace-of-mind" id="peace-of-mind" style="background-image: url(<?php echo $bg ? $bg_url : $bg_default ?>);">
            <div class="container-fluid">
                <div class="row d-flex flex-column-reverse flex-lg-row align-items-lg-center">
                    <div class="col-12 col-lg-6 d-flex justify-content-end justify-content-md-center peace-of-mind__img-wrapper">

                        <img class="img-fluid" loading="lazy" src="<?php echo $img ? esc_url($img['url']) : $img_default ?>" alt="<?php echo esc_attr($img['alt']); ?>">

                    </div>
                    <div class="col-12 col-lg-6 d-flex flex-column align-items-center align-items-xl-start justify-content-center peace-of-mind__content">

                        <div><?php the_field('peace_of_mind_title'); ?></div>

                        <?php if (have_rows('peace_of_mind_list_items')) : ?>

                            <ul class="list-unstyled">
                                <?php while (have_rows('peace_of_mind_list_items')) : the_row();
                                    $item = get_sub_field('item');
                                ?>

                                    <li>
                                        <img class="img-fluid" loading="lazy" src="<?php echo $theme_uri ?>/img/icons/check-icon.webp" role="presentation">
                                        <p><?php echo $item ?></p>
                                    </li>

                                <?php endwhile; ?>
                            </ul>

                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>