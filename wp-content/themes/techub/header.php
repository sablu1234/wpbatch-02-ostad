<!doctype html>
<html <?php language_attributes();?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head();?>
</head>

<body <?php body_class();?> >

<?php echo get_template_part('template-parts/header/header-1'); ?>


<?php


do_action('techub_header_before');
