<?php 


$post_format_url = function_exists('get_field') ? get_field('post_format_url') : '';


?>

<article id="post-<?php the_ID();?>" <?php post_class('tp-postbox-item mb-50');?>>
    <?php if(has_post_thumbnail()) :?>
    <div class="tp-postbox-thumb p-relative ratio ratio-16x9">
    <?php echo wp_oembed_get($post_format_url); ?>
    </div>
    <?php endif;?>

    <div class="tp-postbox-content">
        <?php echo get_template_part('template-parts/blog/meta');?>
        <h3 class="tp-postbox-title">
            <a href="<?php the_permalink();?>"><?php the_title();?></a>
        </h3>
        <div class="tp-postbox-text">
            <?php the_excerpt();?>
        </div>
        <?php echo get_template_part('template-parts/blog/button');?>
    </div>
</article>