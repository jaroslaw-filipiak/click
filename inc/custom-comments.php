<?php
/**
 * Comment layout.
 *
 * @package click5
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


add_filter( 'comment_form_default_fields', 'click5_bootstrap_comment_form_fields' );


if ( ! function_exists( 'click5_bootstrap_comment_form_fields' ) ) {

	function click5_bootstrap_comment_form_fields( $fields ) {
		$commenter = wp_get_current_commenter();
		$req       = get_option( 'require_name_email' );
		$aria_req  = ( $req ? " aria-required='true'" : '' );
		$html5     = current_theme_supports( 'html5', 'comment-form' ) ? 1 : 0;
		$consent  = empty( $commenter['comment_author_email'] ) ? '' : ' checked="checked"';
		$fields    = array(
			'author'  => '<div class="comment-group comment-form-author">' .
			            '<input class="comment-control" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" placeholder="Name*" size="30"' . $aria_req . '></div>',
			'email'   => '<div class="comment-group comment-form-email">' .
			            '<input class="comment-control" id="email" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr( $commenter['comment_author_email'] ) . '" placeholder="Email*" size="30"' . $aria_req . '></div>',
			'url'     => '<div class="comment-group comment-form-url">' .
			            '<input class="comment-control" id="url" name="url" ' . ( $html5 ? 'type="url"' : 'type="text"' ) . ' value="' . esc_attr( $commenter['comment_author_url'] ) . '" placeholder="Website" size="30"></div>',
			'cookies' => '<div class="comment-group form-check comment-form-cookies-consent"><input class="form-check-input" id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"' . $consent . ' /> ' .
			         '<label class="form-check-label" for="wp-comment-cookies-consent">' . __( 'Save my name, email, and website in this browser for the next time I comment', 'click5' ) . '</label></div>',
		);

		return $fields;
	}
}

add_filter( 'comment_form_defaults', 'click5_bootstrap_comment_form' );



if ( ! function_exists( 'click5_bootstrap_comment_form' ) ) {

	function click5_bootstrap_comment_form( $args ) {
		$args['comment_field'] = '<div class="comment-group comment-form-comment">
	    <textarea class="comment-control" id="comment" name="comment" aria-required="true" cols="45" rows="8" placeholder="Add your comment here..."></textarea>
	    </div>';
		$args['class_submit']  = 'btn btn-secondary';
		return $args;
	}
}
