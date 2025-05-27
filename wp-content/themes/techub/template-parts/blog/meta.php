<div class="tp-postbox-meta mb-35">
    <span class="mr-35"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><i class="fa-light fa-circle-user"></i><?php echo esc_html('By','techub')?> <?php the_author();?></a></span>
    <span class="mr-35"><a href="<?php comments_link(); ?>"><i class="fal fa-comments"></i> <?php comments_number(); ?></a></span>
    <span>
        <a href="<?php the_permalink(); ?>"><i class="fal fa-calendar"></i> <?php echo get_the_date(); ?></a>
    </span>
</div>