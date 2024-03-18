<?php

/**
 * Template part for displaying "Peace of Mind Included with Every Service" section
 *
 *
 * 
 */

$theme_uri = get_template_directory_uri();
$frontpage_id = get_option('page_on_front');
$img = get_field('peace_of_mind_image', $frontpage_id);
$img_default = $theme_uri . '/img/peace-of-mind-included-with-every-service.webp';
$bg = get_field('peace_of_mind_bg', $frontpage_id);
$bg_default = $theme_uri . '/img/logo_bg_on_dark_blue.jpg';

if ($bg) {
    $bg_url = $bg['url'];
}
?>

<section>
    <div class="wrapper peace-of-mind" id="peace-of-mind" style="background-image: url(<?php echo $bg ? $bg_url : $bg_default ?>);">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-12 col-lg-6 peace-of-mind__photo">
                    <div style="background-image: url('<?php echo $img ? esc_url($img['url']) : $img_default ?>')">
                    </div>
                </div>
                <div class="col-12 col-lg-6 peace-of-mind__content">

                    <div><?php the_field('peace_of_mind_title', $frontpage_id); ?></div>

                    <?php if (have_rows('peace_of_mind_list_items', $frontpage_id)) : ?>

                        <ul class="list-unstyled">
                            <?php while (have_rows('peace_of_mind_list_items', $frontpage_id)) : the_row();
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