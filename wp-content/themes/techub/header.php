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

<?php do_action('techub_header_before');


// do_action('my_action');

// echo apply_filters('my_filter','this is text','hello');