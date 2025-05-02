<!doctype html>
<html <?php language_attributes();?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head();?>
</head>

<body>

       <!-- Start Search Popup Section -->
       <div class="search-popup">
        <button class="close-search style-two"><span class="flaticon-multiply"><i class="far fa-times-circle"></i></span></button>
        <button class="close-search"><i class="fa-light fa-arrow-up"></i></button>
        <form method="post" action="#">
            <div class="form-group">
                <input type="search" name="search-field" value="" placeholder="Search Here" required="">
                <button type="submit"><i class="fal fa-search"></i></button>
            </div>
        </form>
    </div>
    <!-- Start Search Popup Section -->


    <!-- tp-offcanvus-area-start -->
    <div class="tpoffcanvas-area">
        <div class="tpoffcanvas">
            <div class="tpoffcanvas__close-btn">
                <button class="close-btn"><i class="fal fa-times"></i></button>
            </div>
            <div class="tpoffcanvas__logo">
                <a href="index.html">
                    <img src="assets/img/logo/logo.png" alt="">
                </a>
            </div>
            <div class="tpoffcanvas__title">
                <p>Techub is the partner of choice for many of the world’s leading enterprises. We help businesses development.</p>
            </div>
            <div class="tp-main-menu-mobile d-xl-none"></div>
            <div class="tpoffcanvas__contact-info">
                <div class="tpoffcanvas__contact-title">
                    <h5>Contact us</h5>
                </div>
                <ul>
                    <li>
                        <i class="fa-solid fa-location-dot"></i>
                        <a href="https://www.google.com/maps/@23.8223586,90.3661283,15z" target="_blank">Manchester 21, Zurich, CH</a>
                    </li>
                    <li>
                        <i class="fas fa-envelope"></i>
                        <a href="mailto:techubinfo@mail.com"><span class="__cf_email__">techubinfo@mail.com</span></a>
                    </li>
                    <li>
                        <i class="fa-solid fa-phone-flip"></i>
                        <a href="tel:+48555223224">(+00) 678 345 98568</a>
                    </li>
                </ul>
            </div>
            <div class="tpoffcanvas__social">
                <div class="social-icon">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="body-overlay"></div>
    <!-- tp-offcanvus-area-end -->

    <!-- header area start -->
    <header class="tp-header-height">
        <div class="tp-header-top tp-header-5-top pt-10 pb-10 pl-110 pr-110 d-none d-xl-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="tp-header-top-address tp-header-5-top-address">
                            <span><i class="fa-thin fa-location-dot"></i><a href="https://www.google.com/maps/@41.6758525,-86.2531698,18.17z"> Manchester 21, Zurich, CH</a></span>
                            <span><i class="fa-light fa-envelope"></i> <a href="mailto:techubinfo@mail.com">techubinfo@mail.com</a></span>
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
                                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-pinterest"></i></a>
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