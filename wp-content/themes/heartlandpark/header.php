<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Heartland_Park
 * @since 1.0
 * @version 1.0
 */
?>


<!DOCTYPE html>
<html <?php language_attributes();?> class="no-js no-svg">
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="<?bloginfo('description');?>">
    <meta name="keywords" content="<?bloginfo('keywords');?>">
    <title>
        <?php bloginfo('name'); ?> | 
        <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>
    <link rel="icon" type="image/png" href="<?php bloginfo('template_url');?>/assets/img/heartland-favicon.png">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/assets/css/main.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">  
    <?php wp_head();?>
</head>
<body <?php body_class(); ?>>

    <div class="grid">
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
    </div>

    <header class="navbar" role="banner">
        <div class="container">
            <div class="flex-container nav-container align-items-center justify-content-sb">  
                <img src="<?php bloginfo('template_url');?>/assets/img/logo/heartland-motorsports-park-logo.svg" class="align-item-center" alt="Heartland Motorsports Park Logo" width="175" height="72.13"> 
                <nav class="main-nav" role="navigation">        
                        <?php 
                            wp_nav_menu(array(
                                'menu'            => 'main_nav',
                                'theme_location'  => 'main_nav',
                                'depth'           => 2,
                                'container'       => '', 
                                'container_class' => '',
                                'menu_class'      => 'nav-items',                            
                            ));
                        ?>       
                </nav>
                <a href="#" class="no-decoration"><button class="cta-button"><p class="button-text">Sign Up</p></button></a>
            </div>
        </div> 
    </header>