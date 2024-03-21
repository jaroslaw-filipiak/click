<?php

/**
 * The main template file.
 *
 * @package click5
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<section>
    <div class="wrapper d-flex align-items-end" style="background-image: url('<?php echo click5_check_background(); ?>');" id="hero-sub">
        <div class="container">
            <div class="row ">
                <div class="content col-12 col-xl-9">
                    <h1>Our Blog</h1>

                </div>
            </div>
        </div>
    </div>
</section>

<div class="wrapper" id="index-wrapper">
    <div class="container" id="content" tabindex="-1">
        <div class="row">

            <?php if (have_posts()) : ?>

                <?php while (have_posts()) : the_post(); ?>

                    <?php get_template_part('loop-templates/content', get_post_format());    ?>

                <?php endwhile; ?>

            <?php endif; ?>

            <?php click5_pagination(); ?>

        </div>
    </div>
</div>

<?php get_footer(); ?>