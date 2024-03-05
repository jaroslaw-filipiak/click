<?php
/**
 * Pagination layout.
 *
 * @package click5
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists ( 'click5_pagination' ) ) {

	function click5_pagination( $args = array(), $class = 'pagination' ) {

        if ($GLOBALS['wp_query']->max_num_pages <= 1) return;

		$args = wp_parse_args( $args, array(
			'mid_size'           => 2,
			'prev_next'          => true,
			'prev_text'          => __('&larr;', 'click5'),
			'next_text'          => __('&rarr;', 'click5'),
			'screen_reader_text' => __('Posts navigation', 'click5'),
			'type'               => 'array',
			'current'            => max( 1, get_query_var('paged') ),
		) );

        $links = paginate_links($args);

        ?>

        <nav class="pagination" aria-label="<?php echo $args['screen_reader_text']; ?>">

            <ul class="pagination py-0 my-0">

                <?php

                    foreach ( $links as $key => $link ) { ?>

                        <li class="page-item <?php echo strpos( $link, 'current' ) ? 'active' : '' ?>">

                            <?php echo str_replace( 'page-numbers', 'page-link', $link ); ?>

                        </li>

                <?php } ?>

            </ul>

        </nav>

        <?php
    }

    // add_filter( 'paginate_links', 'untrailingslashit' );
    // add_filter( 'get_pagenum_link', 'untrailingslashit' );

}

?>
