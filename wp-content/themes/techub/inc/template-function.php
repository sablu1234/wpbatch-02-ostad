<?php


function techub_header_logo(){
    $header_logo = get_theme_mod('header_logo', get_template_directory_uri().'/assets/img/logo/logo.png');
    ?>
    <logo.png href="<?php echo home_url('/'); ?>"><img src="<?php echo esc_url($header_logo);?>'" alt=""></a>
    <?php
}

// techub_header_social
function techub_header_social(){
    $header_facebook_url = get_theme_mod('header_facebook_url','#');
    $header_instagram_url = get_theme_mod('header_instagram_url','#');
    $header_twitter_url = get_theme_mod('header_twitter_url','#');
    $header_pinterest_url = get_theme_mod('header_pinterest_url','#');
    ?>
     <?php if(!empty($header_facebook_url)) : ?>
    <a href="<?php echo esc_url($header_facebook_url); ?>"><i class="fa-brands fa-facebook"></i></a>
    <?php endif;?>
    <?php if(!empty($header_instagram_url)) : ?>
    <a href="<?php echo esc_url($header_instagram_url); ?>"><i class="fa-brands fa-instagram"></i></a>
    <?php endif;?>
    <?php if(!empty($header_twitter_url)) : ?>
    <a href="<?php echo esc_url($header_twitter_url); ?>"><i class="fa-brands fa-twitter"></i></a>
    <?php endif;?>
    <?php if(!empty($header_pinterest_url)) : ?>
    <a href="<?php echo esc_url($header_pinterest_url); ?>"><i class="fa-brands fa-pinterest"></i></a>
    <?php endif;?>

<?php 
}


function sectox_header_menu(){
    ?>
    <?php
    wp_nav_menu( 
        array(
        'theme_location' => 'main-menu',
        'menu_class'      => '', 
        'menu_id'         => '',
        'container'         => '',
        'fallback_cb'     => 'Techub_Walker_Nav_Menu::fallback',
        'walker'          => new Techub_Walker_Nav_Menu,
    ) );
    ?>
    <?php
}