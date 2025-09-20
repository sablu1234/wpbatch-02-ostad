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



