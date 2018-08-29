<?php
/**
 * Heartland_Park functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Heartland_Park
 * @since 1.0
 */

/**
 * Heartland_Park only works in WordPress 4.7 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.7-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function heartlandpark_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/heartlandpark
	 * If you're building a theme based on Heartland_Park, use a find and replace
	 * to change 'heartlandpark' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'heartlandpark' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );


	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'main_nav'    => __( 'Main Nav', 'heartlandpark' ),
		'social' => __( 'Social Links Menu', 'heartlandpark' ),
	) );
	
}
add_action( 'after_setup_theme', 'heartlandpark_setup' );
