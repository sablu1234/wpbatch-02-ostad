<?php
$address_text = get_theme_mod('address_text','Manchester 21, Zurich, CH');
$address_url = get_theme_mod('address_url','#');
$email_address = get_theme_mod('email_address','techubinfo@mail.com');

?>


    
    <!-- header area start -->
    <header class="tp-header-height">
        <div class="tp-header-top tp-header-5-top pt-10 pb-10 pl-110 pr-110 d-none d-xl-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="tp-header-top-address tp-header-5-top-address">
                            <?php if(!empty($address_text)) : ?>
                            <span><i class="fa-thin fa-location-dot"></i><a href="https://www.google.com/maps/@41.6758525,-86.2531698,18.17z"> <?php echo $address_text; ?></a></span>
                            <?php endif;?>

                            <?php if(!empty($email_address)) : ?>
                            <span><i class="fa-light fa-envelope"></i> <a href="mailto:<?php echo $email_address;?>"><?php echo $email_address;?></a></span>
                            <?php endif;?>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="tp-header-top-right d-flex justify-content-end">
                            <div class="tp-header-top-menu">
                                <ul>
                                    <li><a href="faq.html">Faq <span>/</span></a></li>
                                    <li><a href="service.html">Service <span>/</span></a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                            <div class="tp-header-top-social">
                                <?php techub_header_social();?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="header-sticky" class="tp-header-bottom">
            <div class="tp-header-area">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-4 col-md-4 col-6">
                            <div class="logo">
                                <a href="index.html"><img src="<?php echo get_template_directory_uri() ?>/assets/img/logo/</a>logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-6 d-none d-xl-block">
                            <div class="main-menu main-menu-5">
                                <nav class="tp-main-menu-content">
                                    <ul>
                                        <li class="has-dropdown"><a class="color-active" href="index.html">Home</a></li>
                                        <li class="has-dropdown"><a href="#">Pages</a>
                                            <ul class="submenu tp-submenu">
                                                <li><a href="about.html">About Us</a></li>
                                                <li><a href="team.html">Our Team</a></li>
                                                <li><a href="team-details.html">Team Details</a></li>
                                                <li><a href="portfolio.html">Our Portfolio</a></li>
                                                <li><a href="portfolio-details.html">Portfolio Details</a></li>
                                                <li><a href="error.html">Error</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="portfolio.html">Portfolio</a></li>
                                        <li class="has-dropdown"><a href="service.html">Services</a>
                                            <ul class="submenu tp-submenu">
                                                <li><a href="service.html">Our Service</a></li>
                                                <li><a href="service-details.html">Service Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown"><a href="blog.html">Blog</a>
                                            <ul class="submenu tp-submenu">
                                                <li><a href="blog-sideber.html">Blog Sidebar</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-8 col-md-8 col-6">
                            <div class="tp-header-right d-flex justify-content-end align-items-center">

                                <!-- header search button -->
                                <div class="tp-header-search search-box-outer d-none d-md-block">
                                    <button><i class="flaticon-search"></i></button>
                                </div>

                                <!-- header button -->
                                <div class="tp-header-button d-none d-lg-block">
                                    <a class="tp-header-btn" rel="noreferrer" href="contact.html" target="_blank"><span>Get a Quete</span></a>
                                </div>

                                <!-- header mobile menu ber -->
                                <div class="tp-header-menu-ber">
                                    <button class="d-xl-none tp-header-5-bar tp-menu-bar"><i class="fa-solid fa-bars"></i></button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header area end -->

    
<?php echo get_template_part('template-parts/header/header-search'); ?>
<?php echo get_template_part('template-parts/header/offcanvus'); ?>