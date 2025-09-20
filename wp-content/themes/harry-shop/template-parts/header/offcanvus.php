<?php

use ParagonIE\Sodium\Core\Curve25519\Ge\P2;

$header_side_logo = get_theme_mod('header_side_logo', get_template_directory_uri().'/assets/img/logo/logo.png');

$header_side_content = get_theme_mod('header_side_content',__('Techub is the partner of choice for many of the world’s leading enterprises. We help businesses development.','techub'));

$header_side_address_text = get_theme_mod('header_side_address_text',__('Manchester 21, Zurich, CH','techub'));

$header_side_address_url = get_theme_mod('header_side_address_url',__('#','techub'));

$header_side_email_address = get_theme_mod('header_side_email_address',__('techubinfo@mail.com','techub'));

$header_side_phone = get_theme_mod('header_side_phone',__('(+00) 678 345 98568','techub'));

$header_side_info_switch = get_theme_mod('header_side_info_switch',false);

$header_side_social_info_switch = get_theme_mod('header_side_social_info_switch',false);

?>


    <!-- offcanvas area start -->
      <div class="offcanvas__area offcanvas__area-1">
         <div class="offcanvas__wrapper">
            <div class="offcanvas__shape">
               <img class="offcanvas__shape-1" src="assets/img/shape/offcanvas-shape-1.png" alt="">
            </div>
            <div class="offcanvas__close">
               <button class="offcanvas__close-btn offcanvas-close-btn">
                  <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M11 1L1 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                     <path d="M1 1L11 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                 </svg>
               </button>
            </div>
            <div class="offcanvas__content">
               <div class="offcanvas__top mb-70 d-flex justify-content-between align-items-center">
                  <div class="offcanvas__logo logo">
                     <a href="index.html">
                        <img src="assets/img/logo/logo-black.svg" alt="logo">
                     </a>
                  </div>
               </div>
               <div class="mobile-menu fix d-lg-none"></div>
               
               <div class="offcanvas__btn">
                  <a href="contact.html" class="tp-btn-offcanvas">Getting Started <i class="fa-regular fa-chevron-right"></i></a>
               </div>
               <div class="offcanvas__social">
                  <h3 class="offcanvas__social-title">Follow :</h3>
                  <a href="#"><i class="fab fa-facebook-f"></i></a>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="#"><i class="fab fa-youtube"></i></a>
                  <a href="#"><i class="fab fa-linkedin"></i></a>
               </div>
               <div class="offcanvas__contact">
                  <p class="offcanvas__contact-call"><a href="tel:+964-742-44-763">+964 742 44 763</a></p>
                  <p class="offcanvas__contact-mail"><a href="mailto:info@harry.com">info@harry.com</a></p>
               </div>
            </div>
         </div>
      </div>
      <div class="body-overlay"></div>
      <!-- offcanvas area end -->


    <!-- tp-offcanvus-area-start -->
    <div class="tpoffcanvas-area d-none">
        <div class="tpoffcanvas">
            <div class="tpoffcanvas__close-btn">
                <button class="close-btn"><i class="fal fa-times"></i></button>
            </div>

            <?php if(!empty($header_side_logo)) : ?>
            <div class="tpoffcanvas__logo">
                <a href="<?php echo home_url('/'); ?>">
                    <img src="<?php echo esc_url($header_side_logo); ?>" alt="">
                </a>
            </div>
            <?php endif;?>

            <?php if(!empty($header_side_info_switch)) : ?>
            <div class="tpoffcanvas__title">
                <p><?php echo esc_html($header_side_content); ?></p>
            </div>
            <?php endif;?>

            <div class="tp-main-menu-mobile d-xl-none"></div>

            <?php if(!empty($header_side_info_switch)) : ?>
            <div class="tpoffcanvas__contact-info">
                <div class="tpoffcanvas__contact-title">
                    <h5><?php esc_html('Contact us', 'techub') ?></h5>
                </div>
                <ul>
                <?php if(!empty($header_side_address_url)) : ?>
                    <li>
                        <i class="fa-solid fa-location-dot"></i>
                        <a href="<?php echo esc_url($header_side_address_url); ?>" target="_blank"><?php echo esc_html($header_side_address_text); ?></a>
                    </li>
                    <?php endif;?>

                    <?php if(!empty($header_side_email_address)) : ?>
                    <li>
                        <i class="fas fa-envelope"></i>
                        <a href="mailto:<?php echo esc_attr($header_side_email_address); ?>"><span class="__cf_email__"><?php echo esc_url($header_side_email_address); ?></span></a>
                    </li>
                    <?php endif;?>

                    <?php if(!empty($header_side_phone)) : ?>
                    <li>
                        <i class="fa-solid fa-phone-flip"></i>
                        <a href="tel:+<?php echo esc_attr($header_side_phone); ?>"><?php echo esc_html($header_side_phone); ?></a>
                    </li>
                    <?php endif;?>

                </ul>
            </div>

            <?php if(!empty($header_side_social_info_switch)) : ?>
            <div class="tpoffcanvas__social">
                <div class="social-icon">
                    <?php techub_header_social(); ?>
                </div>
            </div>
            <?php endif;?>

            <?php endif;?>
            
        </div>
    </div>
    <div class="body-overlay"></div>
    <!-- tp-offcanvus-area-end -->