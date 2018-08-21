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
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<title><?php bloginfo('name');?> | <?php is_front_page() ? bloginfo('description') : wp_title(); ?></title>
<meta charset="<?php bloginfo( 'charset' ); ?>">

<meta property="description" content="<?php bloginfo('description')?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="blog-masthead">
    <div class="container">
    <?php  wp_nav_menu( array( 'theme_location' => 'main-menu' ) );?>
    </div>
</div>

