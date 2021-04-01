<?php
defined( 'ABSPATH' ) || exit;

/**
 * Register jQuery
 * @add_action
 * @wp_enqueue_scripts
 * @winatlab_jquery
 */
add_action( 'wp_enqueue_scripts', 'winatlab_jquery' );
function winatlab_jquery() {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', TEMPLATE_PATH . '/assets/js/src/jquery/jquery.js', false, '3.4.1', false );
    wp_enqueue_script( 'jquery' );
}
/**
 * CSS files
 * @add_action
 * @wp_enqueue_scripts
 * @winatlab_styles
 */
add_action( 'wp_enqueue_scripts', 'winatlab_styles' );
function winatlab_styles() {
	/**
	 * Enqueue Style
	 * @wp_enqueue_style
	 */
    wp_enqueue_style( 'fonts-ibm-winatlab', 'https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@100;200;300;400;500;600;700&display=swap', [], null );
    wp_enqueue_style( 'fonts-karla-winatlab', 'https://fonts.googleapis.com/css2?family=Karla:ital@0;1&display=swap', [], null );
    wp_enqueue_style( 'bundle-winatlab', TEMPLATE_PATH . '/assets/css/bundle.css', [], '2.2.4' );

//    $css_path = glob(dirname(dirname(__FILE__)) . '/assets/dist/css/*.css');
//
//    if( $css_path ) :
//        foreach ($css_path as $file) :
//
//            $filename = basename($file);
//            $filename_id = strstr($filename,'_',true);
//
//            wp_enqueue_style( $filename_id . '-winatlab', TEMPLATE_PATH . '/assets/dist/css/' . $filename, [], '1.0.0' );
//
//        endforeach;
//    endif;

}
/**
 * JS files
 * @add_action
 * @wp_enqueue_scripts
 * @winatlab_scripts
 */
add_action( 'wp_enqueue_scripts', 'winatlab_scripts' );
function winatlab_scripts() {

	/**
	 * Enqueue Script
	 * @wp_enqueue_script
	 */

    wp_enqueue_script( 'bundle-frank', TEMPLATE_PATH . '/assets/js/bundle.js', ['jquery'], '1.1.2', true );

//    $js_path = glob(dirname(dirname(__FILE__)) . '/assets/dist/js/*.js');
//
//    rsort($js_path);
//
//    if( $js_path ) :
//        foreach ($js_path as $file) :
//
//            $filename = basename($file);
//            $filename_id = strstr($filename,'.',true);
//
//            wp_enqueue_script( $filename_id . '-winatlab', TEMPLATE_PATH . '/assets/dist/js/' . $filename, [], '1.0.0', true );
//
//        endforeach;
//    endif;

}

/**
 * Remove CSS
 * @wp_enqueue_scripts
 * @winatlab_dequeue_style
 * @wp_dequeue_style
 * @wp_dequeue_script
 */
add_action( 'wp_enqueue_scripts', 'winatlab_dequeue_style' );
function winatlab_dequeue_style() {

    /*
     * Contact Form
     */
    wp_dequeue_style( 'contact-form-7' );
	/*
	 * JS
	 */
    wp_deregister_script( 'wp-embed' );
    wp_dequeue_script( 'wp-embed-js' );
	wp_dequeue_script( 'wc_price_slider' );
	wp_dequeue_script( 'wc-chosen' );
	wp_dequeue_script( 'prettyPhoto' );
	wp_dequeue_script( 'prettyPhoto-init' );
	wp_dequeue_script( 'jquery-blockui' );
	wp_dequeue_script( 'jquery-placeholder' );
	wp_dequeue_script( 'fancybox' );
	wp_dequeue_script( 'jqueryui' );
	wp_dequeue_script( 'flexslider' );
	wp_dequeue_script( 'zoom' );
	wp_dequeue_script( 'photoswipe' );
    wp_dequeue_style( 'dashicons' );
    wp_dequeue_style( 'tawcvs-frontend' );
    wp_dequeue_style( 'dashicons' );
}

