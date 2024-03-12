<?php

/**
 * Template part for displaying reviews slider
 *
 *
 * 
 */

$theme_uri = get_template_directory_uri();

?>

<section>
    <?php if (!is_page(117) && have_rows("reviews", 117)) : ?>

    <div class="wrapper" style="background-image:url('<?php echo $theme_uri ?>/img/testimonials-bg.webp')" id="reviews"
        itemscope itemtype="https://schema.org/Product">

        <div class="container">
            <div class="row">
                <div class="reviews__heading col-12 text-center">
                    <h3><?php the_field('testimonials_pre_title'); ?></h3>
                    <h2><?php the_field('testimoials_title'); ?></h2>
                </div>
            </div>

            <div class="row reviews">
                <?php while (have_rows("reviews", 117)) : the_row(); ?>
                <?php if (get_sub_field("homepage") && get_sub_field("homepage")[0] == 1) :

                            $heading_length = strlen(get_sub_field("heading"));
                            $image = get_sub_field("avatar");
                            $customer = get_sub_field("customer");
                            $source = get_sub_field("source");

                        ?>

                <div class="review" itemprop="review" itemscope itemtype="https://schema.org/Review">
                    <div class="content">
                        <img class="review__quote-icon" src="<?php echo $theme_uri ?>/img/icons/quote-icon.webp"
                            role="presentation">
                        <div class="opinion" itemprop="reviewBody">
                            <h3 <?php if ($heading_length > 40) echo 'class="long-heading"'; ?>>
                                <?php echo get_sub_field("heading"); ?></h3>
                            <div><?php echo get_sub_field("review"); ?></div>
                        </div>
                        <div class="divider" style="width: 100%; border:1px solid #dee9ed;"></div>

                        <div class="review__footer">
                            <div class="review__person">
                                <div class="review__person--avatar"
                                    style="background-image:url('<?php echo esc_url($image['url']); ?>')"></div>
                                <div>
                                    <p class="review__person--name roboto-regular"><?php echo $customer ?></p>
                                    <p class="review__person--source roboto-light"><?php echo $source ?></p>
                                </div>
                            </div>
                            <div class="review__rating">
                                <img class="img-fluid" loading="lazy"
                                    src="<?php echo $theme_uri ?>/img/icons/stars.webp" role="presentation">
                            </div>
                        </div>

                        <div class="overview" itemprop="author" itemscope itemtype="https://schema.org/Person">
                            <p><strong itemprop="name"><?php echo get_sub_field("customer_info"); ?></strong></p>
                        </div>
                    </div>
                </div>

                <?php endif; ?>
                <?php endwhile; ?>

            </div>
        </div>
    </div>

    <?php endif; ?>

</section>