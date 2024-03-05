<?php
/**
 * The template for displaying all pages.
 *
 * @package click5
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
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

			<main class="wrapper col-md-8" id="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'loop-templates/content', 'page' ); ?>

					<?php
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					?>

				<?php endwhile;  ?>

				<?php edit_post_link( __( 'EDIT', 'click5' ), '<p>', '</p>', null, 'btn btn-secondary btn-edit-post-link mt-5' ); ?>

			</main>
			
			<?php get_sidebar(); ?>
		
		</div>
	</div>
</div>

<?php get_footer(); ?>