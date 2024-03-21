<?php

/**
 * @package click5
 */

if (!defined('ABSPATH')) {
	exit;
}

get_header();

$link = get_field('schedule_service', 'option');

if ($link) :
	$link_url = $link['url'];
	$link_title = $link['title'];
	$link_target = $link['target'] ? $link['target'] : '_self';

endif;

?>

<!-- hero -->
<section>
    <div class="wrapper d-flex align-items-end align-items-lg-center align-items-xl-end hero" id="hero"
        style="background-image: url('<?php echo click5_check_background(); ?>')">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <h1>404 Not Found</h1>
                    <h4>Apologies, but the page you requested could not be found.<br />
                        Perhaps sitemap will help.</h4>
                </div>
            </div>
            <div class="row hero__buttons d-flex align-items-center">
                <div class="col d-flex flex-column flex-sm-row align-items-center">
                    <a target="<?php echo esc_attr($link_target); ?>" class="hero__buttons--schedule"
                        href="<?php echo esc_url($link_url); ?>"><?php echo esc_html($link_title); ?></a>
                    <a class="hero__buttons--call" href="tel:<?php echo get_field("c5ts_phone", "option"); ?>">Call
                        <span><?php echo get_field("c5ts_phone", "option"); ?></span></a>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="wrapper" id="page-wrapper">
    <div class="container" id="content" tabindex="-1">
        <div class="row">

            <main class="wrapper col-md-8" id="main">
                <article>
                    <div class="entry-content">
                        <h2>Page not found</h2>
                        <p>Apologies, but the page you requested could not be found.<br />Perhaps sitemap will help.</p>

                        <?php echo do_shortcode('[click5_sitemap]'); ?>
                    </div>
                </article>
            </main>

            <?php get_sidebar(); ?>

        </div>
    </div>
</div>

<?php get_footer(); ?>