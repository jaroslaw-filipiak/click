<?php
/**
 * Single post partial template.
 *
 * @package click5
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$categories = get_the_category(get_the_ID());
?>

<article <?php post_class('news'); ?> id="post-<?php the_ID(); ?>">
	<div class="d-flex justify-content-between align-items-center">
		<div class="categories">
			<?php foreach($categories as $category) : ?>
			<span class="category"><a href="/category/<?php echo $category->slug; ?>"><?php echo $category->name; ?></a></span>
			<?php endforeach; ?>
		</div>

		<div class="read-time d-flex align-items-center">
			<i class="far fa-clock"></i>
			<?php echo get_reading_time(get_the_content()); ?>
		</div>
	</div>

	<?php the_title( '<h1 class="post-title">', '</h1>' ); ?>

	<div class="author">
		<p>Published by <?php echo get_the_author(); ?> <time>on <?php echo get_the_date('F j, Y'); ?></time></p>
	</div>

	<?php if(get_the_post_thumbnail_url(get_the_ID(), 'large')) : ?>
	<div class="photo" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>');"></div>
	<?php endif; ?>

	<div class="entry-content">
		<?php the_content(); ?>
	</div>
</article>