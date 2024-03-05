<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package click5
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


if ( ! function_exists ( 'click5_posted_on' ) ) {
	function click5_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		
		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( 'F jS, Y' ) ),
			esc_html( get_the_date( 'F jS, Y' ) )
		);
		$posted_on   = apply_filters(
			'click5_posted_on', sprintf(
				'<span class="posted-on">%1$s %2$s</span>',
				esc_html_x( '', 'post date', 'click5' ),
				apply_filters( 'click5_posted_on_time', $time_string ) 
			)
		);
		$byline      = apply_filters(
			'click5_posted_by', sprintf(
				'<span class="byline"> %1$s<span class="author vcard"> %3$s</span></span>',
				$posted_on ? esc_html_x( 'by', 'post author', 'click5' ) : esc_html_x( 'Posted by', 'post author', 'click5' ),
				esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
				esc_html( get_the_author() )
			)
		);
		echo $posted_on . $byline;
	}
}


if ( ! function_exists ( 'click5_entry_footer' ) ) {
	function click5_entry_footer() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'click5' ) );
			if ( $categories_list && click5_categorized_blog() ) {
				/* translators: %s: Categories of current post */
				printf( '<span class="cat-links">' . esc_html__( 'Posted in %s', 'click5' ) . '</span>', $categories_list ); // WPCS: XSS OK.
			}
			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html__( ', ', 'click5' ) );
			if ( $tags_list ) {
				/* translators: %s: Tags of current post */
				printf( '<span class="tags-links">' . esc_html__( 'Tagged %s', 'click5' ) . '</span>', $tags_list ); // WPCS: XSS OK.
			}
		}
		if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<span class="comments-link">';
			comments_popup_link( esc_html__( 'Leave a comment', 'click5' ), esc_html__( '1 Comment', 'click5' ), esc_html__( '% Comments', 'click5' ) );
			echo '</span>';
		}
		edit_post_link(
			sprintf(
				/* translators: %s: Name of current post */
				esc_html__( 'Edit %s', 'click5' ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			),
			'<span class="edit-link">',
			'</span>'
		);
	}
}
