<?php
/**
 * Astra Child Theme
 *
 * Customizations for Dr Aurélie Denizot Nutrition.
 */

defined( 'ABSPATH' ) || exit;

/**
 * Enqueue child theme stylesheet.
 */
function drdenizot_enqueue_child_styles() {
    wp_enqueue_style(
        'drdenizot-astra-child',
        get_stylesheet_uri(),
        array( 'astra-theme-css' ),
        wp_get_theme()->get( 'Version' )
    );
}
add_action( 'wp_enqueue_scripts', 'drdenizot_enqueue_child_styles' );
