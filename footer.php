<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Heartland_Park
 * @since 1.0
 * @version 1.2
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="wrap">
       <p>&copy <?php echo Date('Y');?> - <?php bloginfo('name');?></p> 
    </div><!-- .wrap -->
</footer><!-- #colophon -->
<?php wp_footer(); ?>

</body>
</html>
