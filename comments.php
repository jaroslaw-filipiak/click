<?php
/**
 * The template for displaying comments.
 *
 * @package click5
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div class="comments-area" id="comments">

	<?php if ( have_comments() ) : ?>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through. ?>
			
			<nav class="comment-navigation" id="comment-nav-above">
				
				<h1 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'click5' ); ?></h1>
				
				<?php if ( get_previous_comments_link() ) { ?>
					<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments',
					'click5' ) ); ?></div>
				<?php }
					if ( get_next_comments_link() ) { ?>
					<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;',
					'click5' ) ); ?></div>
				<?php } ?>

			</nav>

		<?php endif; ?>

		<ol class="comment-list">

			<?php
			wp_list_comments( array(
				'style'      => 'ol',
				'short_ping' => true,
			) );
			?>

		</ol>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through. ?>
			
			<nav class="comment-navigation" id="comment-nav-below">
				
				<h1 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'click5' ); ?></h1>
				
				<?php if ( get_previous_comments_link() ) { ?>
					<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments',
					'click5' ) ); ?></div>
				<?php }
					if ( get_next_comments_link() ) { ?>
					<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;',
					'click5' ) ); ?></div>
				<?php } ?>

			</nav>
			
		<?php endif;  ?>

	<?php endif;  ?>

	<?php
	// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
		?>

		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'click5' ); ?></p>

	<?php endif; ?>

	<?php comment_form(); ?>

</div>
