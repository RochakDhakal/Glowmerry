<?php

/**
 * Function PHP
 **/

if ( ! defined( 'GLOWMERRY_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'GLOWMERRY_VERSION', wp_get_theme()->get( 'Version' ) );
}
define( 'GLOWMERRY_DEBUG', defined( 'WP_DEBUG' ) && WP_DEBUG === true );
define( 'GLOWMERRY_DIR', trailingslashit( get_template_directory() ) );
define( 'GLOWMERRY_URL', trailingslashit( get_template_directory_uri() ) );
if ( ! function_exists( 'glowmerry_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since walker_fse 1.0.0
	 *
	 * @return void
	 */
	function glowmerry_support() {
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );
		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'post-thumbnails' );
		// Enqueue editor styles.
		add_editor_style( 'style.css' );
	}

endif;
add_action( 'after_setup_theme', 'glowmerry_support' );

/**
 * Enqueue Style.css
 **/
function glowmerry_style() {
	wp_enqueue_style(
		'glowmerry-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'glowmerry_style' );

/**
 * Enqueue assets scripts for both backend and frontend
 */
function glowmerry_block_style() {
	wp_enqueue_style( 'glowmerry-block-style', get_template_directory_uri() . '/assets/css/block.css', array(), GLOWMERRY_VERSION, 'all' );
	wp_enqueue_script( 'glowmerry-aos-script', get_template_directory_uri() . '/assets/js/aos.js', array( 'jquery' ), GLOWMERRY_VERSION, true );
	wp_enqueue_style( 'glowmerry-aos-style', get_template_directory_uri() . '/assets/css/aos.css', array(), GLOWMERRY_VERSION, 'all' );
	wp_enqueue_script( 'glowmerry-scripts', get_template_directory_uri() . '/assets/js/glowmerry-scripts.js', array( 'jquery' ), GLOWMERRY_VERSION, true );
}
add_action( 'enqueue_block_assets', 'glowmerry_block_style' );

/**
 * Enqueue admin style
 **/
function glowmerry_admin_style() {
	$hello_notice_current_screen = get_current_screen();
	if ( ! empty( $_GET['page'] ) && 'about-glowmerry' === $_GET['page'] || $hello_notice_current_screen->id === 'themes' || $hello_notice_current_screen->id === 'dashboard' ) {
		wp_enqueue_style( 'glowmerry-admin-style', get_template_directory_uri() . '/assets/css/admin-style.css', array(), GLOWMERRY_VERSION, 'all' );
	}
}
add_action( 'admin_enqueue_scripts', 'glowmerry_admin_style' );

/**
 * Load core file.
 */
require_once get_template_directory() . '/inc/core/init.php';

/**
 * Load welcome page file.
 */
require_once get_template_directory() . '/inc/admin/welcome-notice.php';

/**
 * WooCommerce Theme Support.
 */
function glowmerry_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'glowmerry_add_woocommerce_support' );
