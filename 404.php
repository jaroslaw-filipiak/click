<?php
/**
 * @package click5
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<div class="wrapper d-flex align-items-end" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/img/heroes/hero.webp');" id="hero-sub">
    <div class="container">
        <div class="row">
            <div class="content col-12 text-center">
				<h3>click5 Starter Theme</h3>
                <h1>404</h1>
            </div>
        </div>
    </div> 
</div> 

<div class="wrapper" id="page-wrapper">
	<div class="container" id="content" tabindex="-1">
		<div class="row">

			<main class="wrapper col-md-8" id="main">
				<article>
					<div class="entry-content">
						<h2>Page not found</h2>
						<p>Apologies, but the page you requested could not be found.<br/>Perhaps sitemap will help.</p>

						<?php echo do_shortcode('[click5_sitemap]'); ?>
					</div>
				</article>
			</main>

			<?php get_sidebar(); ?>

        </div>
    </div>
</div>

<?php get_footer(); ?>