<?php
/**
 * Template Name: FAQs
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
			<main class="wrapper col-md-8" id="main">

				<?php if ( !empty( get_the_content() ) ) : while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'loop-templates/content', 'page' ); ?>

				<?php endwhile; endif; ?>

				<article id="faq-wrapper" itemscope itemtype="https://schema.org/FAQPage">
					<dl id="accordion" class="questions my-0">

					<?php if(have_rows('questions')) : ?>
						<?php $i = 1; while(have_rows('questions')) : the_row(); ?>

						<div class="card<?php echo ($i == 1) ? ' active' : ''; ?>" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
							<dt class="card-header" id="heading-<?php echo $i; ?>">
								<h2 data-toggle="collapse" data-target="#faq-<?php echo $i; ?>" aria-expanded="<?php echo ($i == 1) ? 'true' : 'false'; ?>" aria-controls="collapse-<?php echo $i; ?>" itemprop="name">
									<?php echo get_sub_field('question'); ?>
								</h2>
							</dt>

							<dd id="faq-<?php echo $i; ?>" class="collapse<?php echo ($i == 1) ? ' show' : ''; ?>" aria-labelledby="heading-<?php echo $i; ?>" data-parent="#accordion">
								<div class="card-body" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
									<div class="entry-content" itemprop="text">
										<?php echo get_sub_field('answer'); ?>
									</div>
								</div>
							</dd>
						</div>

						<?php $i++; endwhile; ?>
					<?php endif; ?>

					</dl>
				</article>

				<?php edit_post_link( __( 'EDIT', 'click5' ), '<p>', '</p>', null, 'btn btn-secondary btn-edit-post-link mt-5' ); ?>

			</main>
			
			<?php get_sidebar(); ?>		
		</div>
	</div>
</div>

<?php get_footer(); ?>