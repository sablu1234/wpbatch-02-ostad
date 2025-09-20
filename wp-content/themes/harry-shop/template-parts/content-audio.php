<?php 


$post_format_url = function_exists('get_field') ? get_field('post_format_url') : '';

$has_tag_class = has_tag() ? 'text-lg-end' : '';


?>

<?php if(is_single()) :?>

<article id="post-<?php the_ID();?>" <?php post_class('tp-postbox-item mb-50');?>>

            <?php if(has_post_thumbnail()) :?>
            <div class="tp-postbox-thumb p-relative ratio ratio-16x9">
            <?php echo wp_oembed_get($post_format_url); ?>
            </div>
            <?php endif;?>

    <div class="tp-postbox-content">
         <?php echo get_template_part('template-parts/blog/meta');?>

        <h3 class="tp-postbox-title"><?php the_title();?></h3>

        <div class="tp-postbox-details-text">
            <?php the_content();?>
        </div>
    </div>
</article>

<div class="tp-postbox-details-share-wrapper">
    <div class="row">
        <?php if(has_tag()) : ?>
            <div class="col-lg-6 col-md-6">
                <div class="tp-postbox-details-tag">
                    <span><?php echo esc_html__('Tag:','techub'); ?></span>
                    <?php techub_tags();?>
                </div>
            </div>
        <?php endif;?>

        <div class="col-lg-6 col-md-6">
            <div class="tp-postbox-details-share <?php echo esc_attr($has_tag_class);?>">
                <span><?php echo esc_html__('Share:','techub'); ?></span>

                <a href="https://www.linkedin.com/shareArticle?url=<?php the_permalink(); ?>" target="_blank">

                <i class="fa-brands fa-linkedin-in"></i>

                </a>

                <a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" target="_blank">

                <i class="fab fa-twitter"></i>

                </a>

                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank">

                <i class="fab fa-facebook-f"></i>

                </a>

            </div>
        </div>
    </div>
</div>

<?php else: ?>

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

<?php endif; ?>