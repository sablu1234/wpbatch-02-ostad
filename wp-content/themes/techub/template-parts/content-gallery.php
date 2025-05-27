<?php 


$post_format_gallery = function_exists('get_field') ? get_field('post_format_gallery') : '';

// var_dump($post_format_gallery);

?>

<article id="post-<?php the_ID();?>" <?php post_class('tp-postbox-item mb-50');?>>
    <?php if(!empty($post_format_gallery)) :?>

        <div class="swiper tp-post-slider fix">
            <div class="swiper-wrapper">

                <?php foreach($post_format_gallery as $item) : ?>

                    <div class="swiper-slide">
                        <div class="tp-postbox-thumb p-relative">
                                <img src="<?php echo esc_url($item['url']);?>" alt="<?php echo esc_url($item['alt']);?>">
                        </div>
                    </div>
                <?php endforeach;?>
                
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