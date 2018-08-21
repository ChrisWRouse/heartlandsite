<?php

/**
 * Tallgrass functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Tallgrass
 * @since 1.0
 */

/**
 * Tallgrass Seventeen only works in WordPress 4.7 or later.
 */
      function tallgrass_setup() {
        register_nav_menus(
          array(
            'main-menu' => __( 'Main Menu' ),
            'social' => __( 'Social Menu' ),
            'exta-menu' =>__('Extra Menu')
          )
        );

        wp_enqueue_style('customestyle', get_template_directory_uri().'/css/tallgrass.css'); 

      }
      add_action( 'init', 'tallgrass_setup' );
?>