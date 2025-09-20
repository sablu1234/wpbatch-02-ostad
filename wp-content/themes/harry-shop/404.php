<?php get_header();?>

<section class="tp-error-area pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tp-error-wrapper text-center">
                    <div class="tp-error-thumb">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/error/error.png" alt="">
                    </div>
                    <h3 class="tp-error-title wow fadeInUp">Sorry We Can't Find That Page! </h3>
                    <div class="tp-error-btn wow fadeInUp">
                        <a class="tp-header-btn" rel="noreferrer" href="<?php echo home_url('/'); ?>" ><span>Back To Home</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer();