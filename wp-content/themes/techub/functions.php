<?php

function techub_theme_support(){
    add_theme_support( 'post-thumbnails' );
    /** automatic feed link*/
    add_theme_support( 'automatic-feed-links' );
    /** tag-title **/
    add_theme_support( 'title-tag' );
      /** HTML5 support **/
      add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
        /** refresh widgest **/
    add_theme_support( 'customize-selective-refresh-widgets' );
    /** post format **/
    add_theme_support( 'post-formats', array(
        'aside',
        'gallery',
        'video',
        'audio',
        'gallery',
        'quote',
        ) );

        register_nav_menus( array(
	    	'main-menu' => __( 'Main Menu', 'techub' ),
		) );

}
add_action( 'after_setup_theme', 'techub_theme_support' );




include_once get_template_directory() . '/inc/common/scripts.php';
include_once get_template_directory() . '/inc/template-function.php';
include_once get_template_directory() . '/inc/nav-walker.php';




if ( class_exists( 'Kirki' ) ) {
	function techub_load_kirki_file() {
		// Kirki include
		include_once get_template_directory() . '/inc/techub-kirki.php';
	}
	add_action( 'after_setup_theme', 'techub_load_kirki_file' );
}

