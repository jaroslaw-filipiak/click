<?php
/**
 * Declaring widgets
 *
 * @package click5
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

add_action( 'widgets_init', 'click5_widgets_init' );

if ( ! function_exists( 'click5_widgets_init' ) ) {

	function click5_widgets_init() {
		register_sidebar( array(
			'name'          => __( 'Right Sidebar', 'click5' ),
			'id'            => 'right-sidebar',
			'description'   => __( 'Right sidebar widget area', 'click5' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
	}
}
