      <!-- search popup start -->
      <div class="search__popup">
         <div class="container">
            <div class="row">
               <div class="col-xxl-12">
                  <div class="search__wrapper">
                     <div class="search__top d-flex justify-content-between align-items-center">
                        <div class="search__logo">
                           <a href="index.html">
                              <img src="assets/img/logo/logo.svg" alt="">
                           </a>
                        </div>
                        <div class="search__close">
                           <button type="button" class="search__close-btn search-close-btn"><i class="far fa-times"></i></button>
                        </div>
                     </div>
                     <div class="search__form">
                        <form method="post" action="/">
                           <div class="search__input">
                                <input name="s" type="search" value="<?php the_search_query(); ?>" placeholder="<?php esc_attr__('Search Here','techub')?>" required="">
                              <button type="submit"><i class="far fa-search"></i></button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- search popup end -->


