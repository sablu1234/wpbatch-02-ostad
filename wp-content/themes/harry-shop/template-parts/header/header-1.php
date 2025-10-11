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
      <header>
         <div class="header__area">
            <div class="header__bottom-9 header__sticky" id="header-sticky">
               <div class="container">
                  <div class="mega-menu-wrapper p-relative">
                     <div class="row align-items-center">
                        <div class="col-xxl-3 col-xl-3 col-lg-2 col-md-4 col-sm-5 col-8">
                           <div class="logo">
                              <?php techub_header_logo();?>
                           </div>
                        </div>
                        <div class="col-xxl-7 col-xl-7 col-lg-8 d-none d-lg-block">
                           <div class="main-menu main-menu-9 main-menu-ff-space">
                              <nav id="mobile-menu">
                                  <?php sectox_header_menu();?>
                              </nav>
                              <!-- for wp -->
                              <div class="header__hamburger ml-50 d-none">
                                 <button type="button" class="hamburger-btn offcanvas-open-btn">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                 </button>
                              </div>
                           </div>
                        </div>
                        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-8 col-sm-7 col-4">
                           <div class="header__bottom-right-8 d-flex justify-content-end align-items-center">
                              <button class="cartmini-open-btn">
                                 <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.85739 19C8.33077 19 8.71453 18.6163 8.71453 18.1429C8.71453 17.6695 8.33077 17.2857 7.85739 17.2857C7.384 17.2857 7.00024 17.6695 7.00024 18.1429C7.00024 18.6163 7.384 19 7.85739 19Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M17.286 19C17.7594 19 18.1431 18.6163 18.1431 18.1429C18.1431 17.6695 17.7594 17.2857 17.286 17.2857C16.8126 17.2857 16.4288 17.6695 16.4288 18.1429C16.4288 18.6163 16.8126 19 17.286 19Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M1.00012 1H4.42869L6.72584 12.4771C6.80422 12.8718 7.0189 13.2263 7.3323 13.4785C7.64571 13.7308 8.03786 13.8649 8.44012 13.8571H16.7716C17.1738 13.8649 17.566 13.7308 17.8794 13.4785C18.1928 13.2263 18.4075 12.8718 18.4858 12.4771L19.8573 5.28571H5.28584" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                 </svg>                                             
                                 <span class="tp-item-count tp-cart__count" id="tp-cart-item"><?php echo esc_html(WC()->cart->cart_contents_count); ?></span>                                            
                              </button>
                              <div class="header__hamburger ml-50">
                                 <button type="button"  class="hamburger-btn-8 hamburger-btn-8-black offcanvas-open-btn">Menu</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- header area end -->


<?php echo get_template_part('template-parts/header/offcanvus'); ?>



 <div class="cartmini__area">
   <div class="cartmini__wrapper d-flex justify-content-between flex-column">
      <div class="cartmini__top-wrapper ">
         <div class="cartmini__top p-relative">
            <div class="cartmini__title">
               <h4>Shopping cart</h4>
            </div>
            <div class="cartmini__close">
               <button type="button" class="cartmini__close-btn cartmini-close-btn"><i class="fal fa-times"></i></button>
            </div>
         </div>
         <div class="cartmini__widget ">
            <div class="mini_shopping_cart_box"><?php woocommerce_mini_cart(); ?></div>
         </div>
         <!-- for wp -->
      </div>
   </div>
</div>