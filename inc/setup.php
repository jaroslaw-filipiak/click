<?php
/**
 * Theme basic setup.
 *
 * @package click5
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

add_action( 'after_setup_theme', 'click5_setup' );

if ( ! function_exists ( 'click5_setup' ) ) {

	function click5_setup() {
		
		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'title-tag' );

		register_nav_menus( array(
			'primary' => __( 'Primary Menu', 'click5' ),
			'footer' => __( 'Footer Menu', 'click5' ),
			'social-media' => __( 'Social Media Menu', 'click5' ),
		) );

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		add_theme_support( 'post-thumbnails' );

		add_theme_support( 'customize-selective-refresh-widgets' );

		add_theme_support( 'post-formats', array(
			'aside',
			'image',
			'video',
			'quote',
			'link',
		) );

	}
}
