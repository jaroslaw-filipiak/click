<?php
/**
 * Custom hooks.
 *
 * @package click5
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

if ( ! function_exists( 'click5_site_info' ) ) {
    function click5_site_info() {
        $site_info = sprintf(
            '<a href="%1$s" target="_blank">%2$s</a>',
            esc_url( __( 'https://www.click5interactive.com/', 'click5' ) ),
            sprintf(
                esc_html__( '%s', 'click5' ), 'Website by <span>click5 Interactive</span>'
            )
        );

        echo $site_info;
    }
}