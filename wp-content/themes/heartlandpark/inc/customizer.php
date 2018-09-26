<?php
/**
 * Heartland_Park: Customizer
 *
 * @package WordPress
 * @subpackage Heartland_Park
 * @since 1.0
 */

function heartland_customize_register($wp_customize) {
	//Showcase Section
	$wp_customize->add_section('heartlandpark_showcase', array(
		'title' => __('Showcase', 'heartlandpark'), 
		'description' => sprintf(__('Options for showcase', 'heartlandpark')),
		'priority' => 130,
	));

	$wp_customize->add_setting('showcase_image', array(
		'default' => get_bloginfo('template_directory').'/img/hero-1.jpg',
		'type' => 'theme_mod',
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image', array(
		'label' => __('Showcase Image', 'heartlandpark'),
		'section' => 'heartlandpark_showcase',
		'settings' => 'showcase_image',
		'priority' => 1
	)));

	$wp_customize->add_setting('showcase_video', array(
		'default' => get_bloginfo('template_directory').'/assets/video/heartland2.mp4',
		'type' => 'theme_mod',
	));

	$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'showcase_video', array(
		'label' => _( 'Showcase Background Video', 'theme_textdomain' ),
		'section' => 'heartlandpark_showcase',
		'mime_type' => 'video',
	  )));
	  

	$wp_customize->add_setting('showcase_heading', array(
		'default' => __('Fastest Track in the World', 'heartlandpark'),
		'type' => 'theme_mod'
	));

	$wp_customize->add_control('showcase_heading', array(
		'label' => __('Heading', 'heartlandpark'),
		'section' => 'heartlandpark_showcase',
		'priority' => 2
	));

	$wp_customize->add_setting('showcase_text', array(
		'default' => __('Strap your self in for excitment of top fuel dragracing at our world record holding track', 'heartland'),
		'type' => 'theme_mod',
	));

	$wp_customize->add_control('showcase_text', array(
		'label' => __('Text', 'heartlandpark'),
		'section' => 'heartlandpark_showcase',
		'priority' => 3,
	));

	$wp_customize->add_setting('button_url', array(
		'default' => _x('http://test.com', 'heartlandpark'),
		'type' => 'theme_mod',
	));

	$wp_customize->add_control('button_url', array(
		'label' => __('Button Link', 'heartlandpark'),
		'section' => 'heartlandpark_showcase',
		'priority' => 4,
	));

	$wp_customize->add_setting('button_text', array(
		'default' => _x('Read More', 'heartlandpark'),
		'type' => 'theme_mod',
	));

	$wp_customize->add_control('button_text', array(
		'label' => __('Button Text', 'heartlandpark'),
		'section' => 'heartlandpark_showcase',
		'priority' => 5,
	));
}

add_action('customize_register', 'heartland_customize_register');

?>