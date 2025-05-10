<?php get_header();?>

      <section class="tp-postbox-area pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-8 col-xl-8 col-lg-8">
                        <div class="tp-postbox-wrapper">


                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                           <?php get_template_part('template-parts/content', get_post_format());?>
                            <?php endwhile; else : ?> 
                            <p><?php _e( 'No Posts To Display.' ); ?></p>
                            <?php endif; ?> 

                     
                     
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4">
                        <div class="sidebar__wrapper">
                            <div class="sidebar__widget sidebar__widget-theme-bg mb-30">
                                <div class="sidebar__widget-content">
                                    <div class="sidebar__search">
                                        <form action="#">
                                            <div class="sidebar__search-input-2">
                                                <input type="text" placeholder="Search here">
                                                <button type="submit"><i class="far fa-search"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar__widget mb-30">
                                <h3 class="sidebar__widget-title">Our Latest Post</h3>
                                <div class="sidebar__widget-content">
                                    <div class="sidebar__post">
                                        <div class="rc__post mb-5 d-flex align-items-center">
                                            <div class="rc__post-thumb mr-20">
                                                <a href="blog-details.html"><img src="<?php echo get_template_directory_uri();?>/assets/img/blog/details-sm-1-1.jpg" alt=""></a>
                                            </div>
                                            <div class="rc__post-content">
                                                <div class="rc__meta">
                                                    <span><i class="fa-thin fa-comments"></i>
                                                        02 Comments </span>
                                                </div>
                                                <h3 class="rc__post-title">
                                                    <a href="blog-details.html">It’s easy to buildup
                                                        business with us</a>
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="rc__post mb-5 d-flex align-items-center active">
                                            <div class="rc__post-thumb mr-20">
                                                <a href="blog-details.html"><img src="<?php echo get_template_directory_uri();?>/assets/img/blog/details-sm-1-2.jpg" alt=""></a>
                                            </div>
                                            <div class="rc__post-content">
                                                <div class="rc__meta">
                                                    <span><i class="fa-thin fa-comments"></i>
                                                        02 Comments </span>
                                                </div>
                                                <h3 class="rc__post-title">
                                                    <a href="blog-details.html">Make your life easy
                                                        with rambo banking</a>
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="rc__post d-flex align-items-center">
                                            <div class="rc__post-thumb mr-20">
                                                <a href="blog-details.html"><img src="<?php echo get_template_directory_uri();?>/assets/img/blog/details-sm-1-3.jpg" alt=""></a>
                                            </div>
                                            <div class="rc__post-content">
                                                <div class="rc__meta">
                                                    <span><i class="fa-thin fa-comments"></i>
                                                        02 Comments </span>
                                                </div>
                                                <h3 class="rc__post-title">
                                                    <a href="blog-details.html">Strategy for norway
                                                        peion fund global</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar__widget mb-30">
                                <h3 class="sidebar__widget-title">Catagories</h3>
                                <div class="sidebar__widget-content">
                                    <ul>
                                        <li><a href="blog-details.html">Artificial intelligence<span><i class="fa-sharp fa-solid fa-arrow-right"></i></span></a></li>
                                        <li class="active"><a href="blog-details.html">Cloud service<span><i class="fa-sharp fa-solid fa-arrow-right"></i></span></a></li>
                                        <li><a href="blog-details.html">Business<span><i class="fa-sharp fa-solid fa-arrow-right"></i></span></a></li>
                                        <li><a href="blog-details.html">Cyber data<span><i class="fa-sharp fa-solid fa-arrow-right"></i></span></a></li>
                                        <li><a href="blog-details.html">Technolgy service<span><i class="fa-sharp fa-solid fa-arrow-right"></i></span></a></li>
                                        <li><a href="blog-details.html">Web development<span><i class="fa-sharp fa-solid fa-arrow-right"></i></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar__widget sidebar__widget-last mb-30">
                                <h3 class="sidebar__widget-title">Tag</h3>
                                <div class="sidebar__widget-content">
                                    <div class="tagcloud">
                                        <a href="#">Loans</a>
                                        <a href="#">Financial</a><br>
                                        <a href="#">Standards</a>
                                        <a href="#">Bangking</a>
                                        <a href="#">Agent</a>
                                        <a href="#">Economy</a>
                                        <a href="#">Marketing</a>
                                        <a href="#">Debit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>



<?php get_footer();