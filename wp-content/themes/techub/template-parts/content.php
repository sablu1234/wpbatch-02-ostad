<article class="tp-postbox-item mb-50">
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
        <div class="tp-postbox-meta mb-35">
            <span class="mr-35"><a href="#"><i class="fa-light fa-circle-user"></i>By Bulbul</a></span>
            <span><a href="#"><i class="fal fa-comments"></i> 02 Comments</a></span>
            <span><?php the_time( 'd F Y' ); ?></span>
        </div>
        <h3 class="tp-postbox-title">
            <a href="<?php the_permalink();?>"><?php the_title();?></a>
        </h3>
        <div class="tp-postbox-text">
            <?php the_excerpt();?>
        </div>
        <div class="tp-postbox-read">
            <a class="tp-btn" rel="noreferrer" href="<?php the_permalink();?>" target="_blank"><span>Read More</span></a>
        </div>
    </div>
</article>