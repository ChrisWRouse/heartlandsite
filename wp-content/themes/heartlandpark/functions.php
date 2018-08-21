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
      function heartlandpark_setup() {
        register_nav_menus(
          array(
            'main-menu' => __( 'Main Menu' ),
            'social' => __( 'Social Menu' ),
            'exta-menu' =>__('Extra Menu')
          )
        );

        wp_enqueue_style('customestyle', get_template_directory_uri().'/css/hearlandpark.css'); 

      }
      add_action( 'init', 'heartlandpark_setup' );
?>