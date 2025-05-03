<?php

function techub_header_social(){
    $header_facebook_url = get_theme_mod('header_facebook_url','#');
    $header_instagram_url = get_theme_mod('header_instagram_url','#');
    $header_twitter_url = get_theme_mod('header_twitter_url','#');
    $header_pinterest_url = get_theme_mod('header_pinterest_url','#');
    ?>
     <?php if(!empty($header_facebook_url)) : ?>
    <a href="<?php echo $header_facebook_url; ?>"><i class="fa-brands fa-facebook"></i></a>
    <?php endif;?>
    <?php if(!empty($header_instagram_url)) : ?>
    <a href="<?php echo $header_instagram_url; ?>"><i class="fa-brands fa-instagram"></i></a>
    <?php endif;?>
    <?php if(!empty($header_twitter_url)) : ?>
    <a href="<?php echo $header_twitter_url; ?>"><i class="fa-brands fa-twitter"></i></a>
    <?php endif;?>
    <?php if(!empty($header_pinterest_url)) : ?>
    <a href="<?php echo $header_pinterest_url; ?>"><i class="fa-brands fa-pinterest"></i></a>
    <?php endif;?>

<?php }