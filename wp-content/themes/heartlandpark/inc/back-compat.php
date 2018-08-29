<?php
/**
 * Heartland_Park back compat functionality
 *
 * Prevents Heartland_Park from running on WordPress versions prior to 4.7,
 * since this theme is not meant to be backward compatible beyond that and
 * relies on many newer functions and markup changes introduced in 4.7.
 *
 * @package WordPress
 * @subpackage Heartland_Park
 * @since Heartland_Park 1.0
 */

/**
 * Prevent switching to Heartland_Park on old versions of WordPress.
 *
 * Switches to the default theme.
 *
 * @since Heartland_Park 1.0
 */
function heartlandpark_switch_theme() {
	switch_theme( WP_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action( 'admin_notices', 'heartlandpark_upgrade_notice' );
}
add_action( 'after_switch_theme', 'heartlandpark_switch_theme' );

/**
 * Adds a message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * Heartland_Park on WordPress versions prior to 4.7.
 *
 * @since Heartland_Park 1.0
 *
 * @global string $wp_version WordPress version.
 */
function heartlandpark_upgrade_notice() {
	$message = sprintf( __( 'Heartland_Park requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'heartlandpark' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );
}

/**
 * Prevents the Customizer from being loaded on WordPress versions prior to 4.7.
 *
 * @since Heartland_Park 1.0
 *
 * @global string $wp_version WordPress version.
 */
function heartlandpark_customize() {
	wp_die( sprintf( __( 'Heartland_Park requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'heartlandpark' ), $GLOBALS['wp_version'] ), '', array(
		'back_link' => true,
	) );
}
add_action( 'load-customize.php', 'heartlandpark_customize' );

/**
 * Prevents the Theme Preview from being loaded on WordPress versions prior to 4.7.
 *
 * @since Heartland_Park 1.0
 *
 * @global string $wp_version WordPress version.
 */
function heartlandpark_preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die( sprintf( __( 'Heartland_Park requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'heartlandpark' ), $GLOBALS['wp_version'] ) );
	}
}
add_action( 'template_redirect', 'heartlandpark_preview' );
