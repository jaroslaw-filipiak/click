<?php
/**
 * Template Name: Full Width
 *
 * @package click5
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

<div class="wrapper d-flex align-items-end" style="background-image: url('<?php echo click5_check_background(); ?>');" id="hero-sub">
    <div class="container">
        <div class="row">
            <div class="content col-12 text-center">
				<h3>click5 Starter Theme</h3>
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
    </div> 
</div> 

<div class="wrapper" id="page-wrapper">
	<div class="container" id="content" tabindex="-1">
		<div class="row">

			<main class="col-lg-10 col-12 mx-auto" id="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'loop-templates/content', 'page' ); ?>

					<?php
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					?>

				<?php endwhile;  ?>

			</main>

        </div>
    </div>
</div>

<?php get_footer(); ?>