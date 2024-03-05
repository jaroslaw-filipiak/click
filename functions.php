<?php
/**
 * click5 functions and definitions
 *
 * @package click5
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$click5_includes = array(
	'/theme-settings.php',
	'/setup.php',
	'/widgets.php',
	'/enqueue.php',
	'/template-tags.php',
	'/pagination.php',
	'/hooks.php',
	'/extras.php',
	'/custom-comments.php',
	'/class-wp-bootstrap-navwalker.php'
);

foreach ( $click5_includes as $file ) {
	$filepath = locate_template( '/inc' . $file );
	if ( ! $filepath ) {
		trigger_error( sprintf( 'Error locating /inc%s for inclusion', $file ), E_USER_ERROR );
	}
	require_once $filepath;
}
