<?php

/**
 * Template part for displaying logos / slick slider
 *
 *
 * 
 */

$theme_uri = get_template_directory_uri();

?>

<section>
    <div class="wrapper logos" id="logos">
        <div class="container">
            <div class="row logos__slick">
                <?php
                $images = get_field('logotypes_gallery', 'option');
                if ($images) : ?>

                <?php foreach ($images as $image) : ?>

                <img loading="lazy" class="img-fluid" src="<?php echo esc_url($image['url']); ?>"
                    alt="<?php echo esc_attr($image['alt']); ?>">

                <?php endforeach; ?>

                <?php endif; ?>

            </div>
        </div>
    </div>
</section>