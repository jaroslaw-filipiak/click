<?php

/**
 * The template for displaying all single posts.
 *
 * @package click5
 */

if (!defined('ABSPATH')) {
	exit;
}

get_header();
$container = get_theme_mod('click5_container_type');
?>

<section>
    <div class="wrapper d-flex align-items-end"
        style="background-image: url('<?php echo click5_check_background(); ?>');" id="hero-sub">
        <div class="container">
            <div class="row ">
                <div class="content col-12 col-xl-9">
                    <h1><?php the_title(); ?></h1>

                </div>
            </div>
        </div>
    </div>
</section>

<div class="wrapper" id="single-wrapper">
    <div class="container" id="content" tabindex="-1">
        <div class="row">
            <main class="col-12" id="main">

                <?php while (have_posts()) : the_post(); ?>

                <?php get_template_part('loop-templates/content', 'single'); ?>

                <?php
					if (comments_open() || get_comments_number()) :
						comments_template();
					endif;
					?>

                <?php endwhile; ?>

                <a href="<?php the_permalink(12); ?>" class="back"><span>Back to
                        <?php echo get_the_title(12); ?></span></a>

                <?php edit_post_link(__('EDIT', 'click5'), '<p>', '</p>', null, 'btn btn-secondary btn-edit-post-link mt-5'); ?>

            </main>
        </div>
    </div>
</div>

<?php
$the_query = new WP_Query(array(
	'posts_per_page' => 3,
	'post__not_in' => array($post->ID)
));

if ($the_query->have_posts()) :
?>

<div class="wrapper" id="recent-posts">
    <div class="container">
        <div class="row">
            <div class="headline col-12 text-center">
                <h2 class="pt-0 mb-0">Recent Posts</h2>
            </div>

            <?php while ($the_query->have_posts()) : $the_query->the_post();
					$primary_category = get_primary_category(get_the_ID());
					$primary_category = get_term($primary_category);

					get_template_part('loop-templates/content', get_post_format());

				endwhile; ?>
        </div>
    </div>
</div>

<?php endif; ?>
<?php wp_reset_postdata(); ?>

<?php get_footer(); ?>