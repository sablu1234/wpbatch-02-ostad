<?php
$address_text = get_theme_mod('address_text',__('Manchester 21, Zurich, CH','techub'));
$address_url = get_theme_mod('address_url',__('#','techub'));
$email_address = get_theme_mod('email_address',__('techubinfo@mail.com','techub'));
$header_top_switch = get_theme_mod('header_top_switch', false);
$header_right_side_switch = get_theme_mod('header_right_side_switch', false);

$header_button_text = get_theme_mod('header_button_text',__('Get a Quete','techub'));
$header_button_url = get_theme_mod('header_button_url',__('#','techub'));

$menu_col = $header_right_side_switch == true ? '6' : '10 text-end';

?>


    
    <!-- header area start -->
    <header class="tp-header-height">
    <?php if(!empty($header_top_switch)) : ?>
        <div class="tp-header-top tp-header-5-top pt-10 pb-10 pl-110 pr-110 d-none d-xl-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="tp-header-top-address tp-header-5-top-address">
                            <?php if(!empty($address_text)) : ?>
                            <span><i class="fa-thin fa-location-dot"></i><a href="<?php echo esc_url($address_url);?>"> <?php echo esc_html($address_text); ?></a></span>
                            <?php endif;?>

                            <?php if(!empty($email_address)) : ?>
                            <span><i class="fa-light fa-envelope"></i> <a href="mailto:<?php echo esc_attr($email_address);?>"><?php echo esc_html($email_address);?></a></span>
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
        <?php endif;?>

        <div id="header-sticky" class="tp-header-bottom">
            <div class="tp-header-area">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-4 col-md-4 col-6">
                            <div class="logo">
                                <?php techub_header_logo();?>
                            </div>
                        </div>
                        <div class="col-xl-<?php echo esc_attr($menu_col); ?> d-none d-xl-block">
                            <div class="main-menu main-menu-5">
                                <nav class="tp-main-menu-content">

                                <?php sectox_header_menu();?>

                                   
                                </nav>
                            </div>
                        </div>

                        <?php if(!empty($header_right_side_switch)) : ?>
                        <div class="col-xl-4 col-lg-8 col-md-8 col-6">
                            <div class="tp-header-right d-flex justify-content-end align-items-center">

                                <!-- header search button -->
                                <div class="tp-header-search search-box-outer d-none d-md-block">
                                    <button><i class="flaticon-search"></i></button>
                                </div>

                                <?php if(!empty($header_button_text)) : ?>
                                <!-- header button -->
                                <div class="tp-header-button d-none d-lg-block">
                                    <a class="tp-header-btn" rel="noreferrer" href="<?php echo esc_url($header_button_url); ?>" target="_blank"><span><?php echo esc_html($header_button_text); ?></span></a>
                                </div>
                                <?php endif;?>

                                <!-- header mobile menu ber -->
                                <div class="tp-header-menu-ber">
                                    <button class="d-xl-none tp-header-5-bar tp-menu-bar"><i class="fa-solid fa-bars"></i></button>
                                </div>

                            </div>
                        </div>
                        <?php endif;?>

                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header area end -->

    
<?php echo get_template_part('template-parts/header/header-search'); ?>
<?php echo get_template_part('template-parts/header/offcanvus'); ?>



