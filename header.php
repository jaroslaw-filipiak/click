<?php

/**
 * @package click5
 */

if (!defined('ABSPATH')) {
    exit;
}

$theme_uri = get_template_directory_uri();
$logo = get_field('logo', 'options');
$schedule = get_field('schedule_service', 'option');
$quote = get_field('get_a_free_quote', 'option');
if ($schedule) :
    $schedule_url = $schedule['url'];
    $schedule_title = $schedule['title'];
    $schedule_target = $schedule['target'] ? $schedule['target'] : '_self';
endif;

if ($quote) :
    $quote_url = $quote['url'];
    $quote_title = $quote['title'];
    $quote_target = $quote['target'] ? $quote['target'] : '_self';
endif;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <meta name="designer" content="click5 Interactive LLC - www.click5interactive.com" />

    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $theme_uri ?>/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $theme_uri ?>/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $theme_uri ?>/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo $theme_uri ?>/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php echo $theme_uri ?>/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <div class="site" id="page">
        <?php if (get_field("hello_bar_enable", "options") == 1) : ?>

        <div id="hello-bar">
            <a href="<?php echo get_field("hello_bar_url", "options") ?>">
                <?php echo get_field("hello_bar_text", "options") ?>
            </a>
        </div>

        <?php endif; ?>

        <header
            class="sticky-top d-flex justify-content-between align-items-center<?php echo (get_field("hello_bar_enable", "options") == 1) ? ' hello-bar' : ''; ?>"
            id="header" itemscope itemtype="http://schema.org/WebSite">
            <a class="skip-link sr-only sr-only-focusable"
                href="#content"><?php esc_html_e('Skip to content', 'click5'); ?></a>

            <div class="logo">
                <a rel="home" href="<?php echo esc_url(home_url('/')); ?>"
                    title="<?php echo esc_attr(get_bloginfo('name')); ?>" itemprop="url">
                    <?php if (!empty($logo)) : ?>
                    <img loading="lazy" src="<?php echo esc_url($logo['url']); ?>"
                        alt="<?php echo esc_attr($logo['alt']); ?>" />
                    <?php endif;  ?>
                </a>
            </div>

            <div class="navigation d-flex justify-content-end align-items-center">
                <nav class="navbar navbar-expand-xl">
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                        data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                        aria-label="<?php esc_attr_e('Toggle navigation', 'click5'); ?>">
                        <span class="icon-bar top-bar"></span>
                        <span class="icon-bar middle-bar"></span>
                        <span class="icon-bar bottom-bar"></span>
                    </button>

                    <?php wp_nav_menu(
                        array(
                            'theme_location'  => 'primary',
                            'container_class' => 'collapse navbar-collapse',
                            'container_id'    => 'navbarNavDropdown',
                            'menu_class'      => 'navbar-nav ml-auto',
                            'fallback_cb'     => '',
                            'menu_id'         => 'main-menu',
                            'depth'           => 3,
                            'walker'          => new click5_WP_Bootstrap_Navwalker(),
                        )
                    ); ?>
                </nav>

                <div class="phone">
                    <a href="tel:<?php echo get_field("c5ts_phone", "option"); ?>">
                        <i class="fa-solid fa-phone"></i>
                        <?php echo get_field("c5ts_phone", "option"); ?>
                    </a>
                </div>

                <div class="cta__buttons d-none d-xl-flex align-items-center justify-content-center">

                    <div class="quote">
                        <a href="<?php echo esc_url($quote_url); ?>" target="<?php echo esc_attr($quote_target); ?>">
                            <?php echo $quote_title ?>
                        </a>
                    </div>

                    <div class="schedule">
                        <a href="<?php echo esc_url($schedule_url); ?>"
                            target="<?php echo esc_attr($schedule_target); ?>">
                            <?php echo $schedule_title ?>
                        </a>
                    </div>

                </div>
            </div>
        </header>