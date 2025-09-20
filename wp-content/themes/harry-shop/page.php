<?php get_header();?>

 
<section class="tp-page-area pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12 col-xl-8 col-lg-8">
                        <div class="tp-page-wrapper">

                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <?php the_title();?>
                                    <?php the_content();?>
                            <?php endwhile; else : ?> 
                                                <p><?php _e( 'No Page Posts To Display.' ); ?></p>
                            <?php endif; ?> 
                        </div>
                    </div>
                </div>
            </div>
        </section>


<?php get_footer();