<?php get_header();?>

<div style="width: 100%;background: lightgray;">
<?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post();?>
    <a class="no-decoration" href="<?php the_permalink();?>">
        <h1 class="header-text"><?php the_title();?></h1>
    </a>
    <p class="blog-post-meta"><?php the_time('Fj, Y g:i a')?></p>
    <div class="post-thumbnail">
    <?php if(has_post_thumbnail()) :?>
        <?php the_post_thumbnail();?>
    <?php endif;?>
    </div>
    <p class="body-text"><?php the_excerpt();?></p>
    <?php endwhile;?>
    <?php else : ?>
        <p><?php __('No Posts Found');?></p>
    <?php endif; ?>
<?php echo do_shortcode('[maxgallery id="110"]')?>
</div>
<?php get_footer();?>