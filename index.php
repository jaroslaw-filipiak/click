<?php

/**
 * The main template file.
 *
 * @package click5
 */

if (!defined('ABSPATH')) {
	exit;
}

get_header();
?>

<div class="wrapper d-flex align-items-end" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/img/heroes/hero.webp');" id="hero-sub">
	<div class="container">
		<div class="row">
			<div class="content col-12 text-center">
				<h3>click5 Starter Theme</h3>
				<h1>Our Blog</h1>
			</div>
		</div>
	</div>
</div>

<div class="wrapper" id="index-wrapper">
	<div class="container" id="content" tabindex="-1">
		<div class="row">

			<?php if (have_posts()) : ?>

				<?php while (have_posts()) : the_post(); ?>

					<?php get_template_part('loop-templates/content', get_post_format());	?>

				<?php endwhile; ?>

			<?php endif; ?>

			<?php click5_pagination(); ?>

		</div>
	</div>
</div>

<?php get_footer(); ?>


<!-- TODO: 
spacja przy buttonach ✔
podstroy hero default 
podstrony zdjęcie
podstrony hero bez sego subheadingu 
rwd 
zip code drukowanymi
State select , 51 stanów
title settings 
buttony sqlka nie załapała
import pliku xml
add readme.md
-->