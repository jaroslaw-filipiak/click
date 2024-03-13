<?php

/**
 * click5 enqueue scripts
 *
 * @package click5
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

if (!function_exists('click5_scripts')) {

	function click5_scripts()
	{

		$the_theme = wp_get_theme();
		$theme_version = $the_theme->get('Version') . '.' . esc_attr(wp_rand(1, 10000));

		wp_enqueue_style('bootstrap-styles', get_stylesheet_directory_uri() . '/css/bootstrap.min.css', array(), $theme_version);
		wp_enqueue_style('lightbox', get_stylesheet_directory_uri() . '/css/lightbox.css', array(), $theme_version);
		wp_enqueue_style('slick', get_stylesheet_directory_uri() . '/css/slick.css', array(), $theme_version);
		wp_enqueue_style('click5-theme', get_stylesheet_directory_uri() . '/css/theme.css', array(), $theme_version);
		wp_enqueue_style('click5-style', get_stylesheet_uri(), array(), $theme_version);

		wp_enqueue_style('click5-dev', get_stylesheet_directory_uri() . '/dist/css/main.css', array(), $theme_version);

		wp_enqueue_script('jquery');

		wp_register_script('recaptcha-scripts', get_template_directory_uri() . '/js/recaptcha.js', array(), $theme_version, true);
		wp_enqueue_script('recaptcha-scripts');
		wp_localize_script(
			'recaptcha-scripts',
			'click5_recaptcha',
			array(
				'sitekey' => get_field("recaptcha_sitekey", "option")
			)
		);

		wp_enqueue_script('bootstrap-scripts', get_template_directory_uri() . '/js/bootstrap.min.js', array(), $theme_version, true);
		wp_enqueue_script('modal-video-scripts', get_template_directory_uri() . '/js/jquery.modal-video.min.js', array(), $theme_version, true);
		wp_enqueue_script('mask-scripts', get_template_directory_uri() . '/js/jquery.masked-input.min.js', array(), $theme_version, true);
		wp_enqueue_script('lightbox-scripts', get_template_directory_uri() . '/js/lightbox.js', array(), $theme_version, true);
		wp_enqueue_script('slick-scripts', get_template_directory_uri() . '/js/slick.min.js', array(), $theme_version, true);
		wp_enqueue_script('click5-theme-scripts', get_template_directory_uri() . '/js/theme.js', array(), $theme_version, true);

		if (is_singular() && comments_open() && get_option('thread_comments')) {
			wp_enqueue_script('comment-reply');
		}

		wp_dequeue_style('wp-block-library');
		wp_dequeue_style('classic-theme-styles');
	}
}

add_action('wp_enqueue_scripts', 'click5_scripts', 99);

function font_awesome_higher_priority()
{
	$the_theme = wp_get_theme();
	$theme_version = $the_theme->get('Version') . '.' . esc_attr(wp_rand(1, 10000));

	wp_enqueue_script('fontawesome-scripts', 'https://kit.fontawesome.com/840348a411.js', array(), $theme_version, false);

	add_filter('style_loader_tag', 'set_high_priority', 10, 2);
}

function set_high_priority($tag, $handle)
{
	if ('font-awesome' === $handle) {
		$tag = str_replace("rel='stylesheet'", "rel='stylesheet' as='style' onload=\"this.onload=null;this.rel='stylesheet'\"", $tag);
	}

	return $tag;
}

add_action('wp_enqueue_scripts', 'font_awesome_higher_priority', 1);
