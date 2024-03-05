<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package click5
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$primary_category = get_primary_category(get_the_ID());
$primary_category = get_term($primary_category);
$featured_image   = get_the_post_thumbnail_url(get_the_ID(), 'large');
?>

<div class="news col-xl-4 col-lg-6 col-12" id="post-<?php the_ID(); ?>">
	<a href="<?php echo esc_url( get_permalink() ) ?>">
		<?php if( $featured_image ) : ?>

		<div class="photo" style="background-image: url('<?php echo $featured_image; ?>');"></div>

		<?php endif; ?>

		<div class="content">
			<div class="time-cat d-flex justify-content-between align-items-center">
				<time><?php echo get_the_date('F j, Y'); ?></time>
				<span class="category <?php echo $primary_category->slug; ?>"><?php echo $primary_category->name; ?></span>
			</div>
			
			<?php echo ( is_single() ) ? '<h3>' : '<h2>'; ?><?php the_title(); ?><?php echo ( is_single() ) ? '</h3>' : '</h2>'; ?>

			<?php $articleContentLength = ( $featured_image ) ? 22 : 80; ?>
			<p><?php echo wp_trim_words( strip_shortcodes( get_the_content() ), $articleContentLength, '...' ); ?></p>

			<div class="more">
				<div><span>Read More</span></div>
			</div>
		</div>
	</a>
</div>