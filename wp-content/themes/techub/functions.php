<?php

function techub_theme_support(){
    add_theme_support( 'post-thumbnails' );


	/**
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on harry, use a find and replace
	 * to change 'harry' to the name of your theme in all the template files.
	 */

	load_theme_textdomain( 'techub', get_template_directory() . '/languages' );


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

    remove_theme_support( 'widgets-block-editor' );

}
add_action( 'after_setup_theme', 'techub_theme_support' );


/**
 * Add a sidebar.
 */
function techub_widgets_init() {


	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'techub' ),
		'id'            => 'blog-sidebar',
		'description'   => __( 'Widgets in this area will be shown on blog sidebar', 'techub' ),
		'before_widget' => '<div id="%1$s" class="sidebar__widget mb-30 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="sidebar__widget-title">',
		'after_title'   => '</h3>',
	) );


	register_sidebar( array(
		'name'          => __( 'Footer Widget 01', 'techub' ),
		'id'            => 'footer-widget-1',
		'description'   => __( 'Widgets in this area will be shown on footer widget 01 column', 'techub' ),
		'before_widget' => '<div id="%1$s" class="tp-footer-widget footer-cols-1 pr-75 tp-footer-widget-cutm-pdg-4 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="tp-footer-title tp-footer-4-title">',
		'after_title'   => '</h4>',
	) );
  
	register_sidebar( array(
		'name'          => __( 'Footer Widget 02', 'techub' ),
		'id'            => 'footer-widget-2',
		'description'   => __( 'Widgets in this area will be shown on footer widget 02 column', 'techub' ),
		'before_widget' => '<div id="%1$s" class="tp-footer-widget tp-footer-4-widget footer-cols-2 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="tp-footer-title tp-footer-4-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Widget 03', 'techub' ),
		'id'            => 'footer-widget-3',
		'description'   => __( 'Widgets in this area will be shown on footer widget 03 column', 'techub' ),
		'before_widget' => '<div id="%1$s" class="tp-footer-widget tp-footer-4-widget footer-cols-3 pl-50 tp-footer-widget-cutm-pdg-3 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="tp-footer-title tp-footer-4-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Widget 04', 'techub' ),
		'id'            => 'footer-widget-4',
		'description'   => __( 'Widgets in this area will be shown on footer widget 04 column', 'techub' ),
		'before_widget' => '<div id="%1$s" class="tp-footer-widget footer-cols-4 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="tp-footer-title tp-footer-4-title">',
		'after_title'   => '</h4>',
	) );

}
add_action( 'widgets_init', 'techub_widgets_init' );








include_once get_template_directory() . '/inc/common/scripts.php';
include_once get_template_directory() . '/inc/template-function.php';
include_once get_template_directory() . '/inc/nav-walker.php';
include_once get_template_directory() . '/inc/breadcrumb.php';
include_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';
include_once get_template_directory() . '/inc/add_plugin.php';




if ( class_exists( 'techub' ) ) {
	function techub_load_kirki_file() {
		// Kirki include
		include_once get_template_directory() . '/inc/techub-kirki.php';
	}
	add_action( 'after_setup_theme', 'techub_load_kirki_file' );
}






/**
 * Fix ACF "Translation loading too early" notice
 * and prevent Elementor editor conflict.
 */
add_action('init', function() {
    // Check if ACF is active
    if ( function_exists('load_plugin_textdomain') && function_exists('acf') ) {
        load_plugin_textdomain('acf', false, dirname(plugin_basename(__FILE__)) . '/lang/');
    }
});

