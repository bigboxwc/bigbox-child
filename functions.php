<?php
/**
 * BigBox theme modifications and enhancement.
 *
 * @since 1.0.0
 *
 * @package BigBox
 * @category Bootstrap
 * @author Spencer Finnell
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Enqueue child theme style.css
 *
 * Parent base styles are always loaded unless dequeued.
 *
 * @since 1.0.0
 */
function bigbox_child_enqueue_styles() {
	$parent = bigbox_get_theme_name();

	wp_enqueue_style( 'bigbox-child', get_stylesheet_directory_uri() . '/style.css', [ $parent ], 20180422 );

	// Uncomment the line below to avoid loading the parent styles.
	// wp_dequeue_script( $parent );
}
add_action( 'wp_enqueue_scripts', 'bigbox_child_enqueue_styles' );

/**
 * Load translation files from the theme root if they exist.
 *
 * @since 1.0.0
 */
function bigbox_child_load_textdomain() {
	load_child_theme_textdomain( 'bigbox' );
}
add_action( 'after_setup_theme', 'bigbox_child_load_textdomain' );
