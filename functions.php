<?php
/**
 * WebberZone 2023 functions and definitions
 *
 * @package WZ_Theme_2023
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enqueue child styles.
 */
function wz23_enqueue_styles() {
	wp_enqueue_style( 'webberzone-2023-styles', get_stylesheet_directory_uri() . '/style.min.css', array(), KADENCE_VERSION );
	wp_enqueue_style( 'wz23-fa', get_stylesheet_directory_uri() . '/assets/css/fontawesome.min.css', array(), KADENCE_VERSION );
	wp_enqueue_style( 'wz23-fa-brands', get_stylesheet_directory_uri() . '/assets/css/brands.min.css', array( 'wz23-fa' ), KADENCE_VERSION );
	wp_enqueue_style( 'wz23-fa-solid', get_stylesheet_directory_uri() . '/assets/css/solid.min.css', array( 'wz23-fa' ), KADENCE_VERSION );
}
add_action( 'wp_enqueue_scripts', 'wz23_enqueue_styles' );

/**
 * Update Kadence default options.
 *
 * @param array $options Default options array.
 * @return array Updated default options array.
 */
function wz23_update_kadence_options( $options ) {
	$options['base_font']['family']    = '"Lato", "Helvetica Neue", Arial, sans-serif';
	$options['heading_font']['family'] = '"Raleway", "Helvetica Neue", Arial, sans-serif';

	return $options;
}
add_filter( 'kadence_theme_options_defaults', 'wz23_update_kadence_options' );
