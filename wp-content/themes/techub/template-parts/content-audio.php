<article id="post-<?php the_ID();?>" <?php post_class('tp-postbox-item mb-50');?>>
    <?php if(has_post_thumbnail()) :?>
    <div class="tp-postbox-thumb p-relative">
        <a href="<?php the_permalink();?>">
            <?php the_post_thumbnail();?>
        </a>
        <div class="tp-postbox-date-text">
            <span><?php the_time( 'd' ); ?> <br> <?php the_time( 'M' ); ?></span>
        </div>
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