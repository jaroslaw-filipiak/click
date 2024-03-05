<?php

/**
 * @package click5
 */

if (!defined('ABSPATH')) {
	exit;
}
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
                    title="<?php echo esc_attr(get_bloginfo('name')); ?>" itemprop="url">Logo</a>
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

                <div class="quote">
                    <a href="">
                        Get A Free Quote
                    </a>
                </div>

                <div class="schedule">
                    <a href="">
                        Schedule Service
                    </a>
                </div>

            </div>
        </header>