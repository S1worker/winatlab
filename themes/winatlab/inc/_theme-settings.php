<?php
defined( 'ABSPATH' ) || exit;
/**
* Theme Settings
*/
if ( ! function_exists( 'winatlab_setup' ) ) :

    function winatlab_setup() {

	    /**
	     * @add_theme_support
	     */
        add_theme_support( 'post-thumbnails' );

        /**
         * Remove Thumbnails
         */
        remove_image_size( 'thumbnail-100x100' );
        remove_image_size( 'thumbnail-150x150' );
        remove_image_size( 'thumbnail-300x300' );

        /**
         * REMOVE EMOJI ICONS
         */
        remove_action('wp_head', 'print_emoji_detection_script', 7);
        remove_action('wp_print_styles', 'print_emoji_styles');

        /**
         * Enable shortcodes in text widgets
         */
        add_filter('widget_text','do_shortcode');

        /**
         * Enable Except Text All Page
         */
        add_post_type_support( 'page', array('excerpt') );

    }
    winatlab_setup();

endif;

/**
 * Loads the child theme textdomain.
 */
function winatlab_child_theme_setup() {
	load_child_theme_textdomain( 'winatlab', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'winatlab_child_theme_setup' );

/**
 * SVG Upload
 * @add_filter
 * @upload_mimes
 * @winatlab_myme_types
 */
add_filter('upload_mimes', 'winatlab_myme_types', 1, 1);
function winatlab_myme_types($mime_types){
    $mime_types['svg'] = 'image/svg+xml'; // поддержка SVG
    return $mime_types;
}
/**
 * ACF Google API KEY
 * @add_action
 * @acf/init
 * @winatlab_acf_init
 */
add_action('acf/init', 'winatlab_acf_init');
function winatlab_acf_init() {
    acf_update_setting('google_api_key', 'AIzaSyCSqQeiH6f0iSnHMZ0-WMAcZKkS3dKjEqQ');
}

/**
 * Template Directory
 * @archive_template
 * @add_filter
 * @winatlab_archive_template
 */
add_filter( 'archive_template', 'winatlab_archive_template' ) ;
function winatlab_archive_template( $template ) {
    $template = TEMPLATEPATH . '/template-parts/archive.php';
    return $template;
}

/**
 * Template Directory
 * @single_template
 * @add_filter
 * @winatlab_single_template
 */
add_filter('single_template', 'winatlab_single_template' );
function winatlab_single_template($template){
    $template = TEMPLATEPATH . '/template-parts/single.php';
    return $template;

}

/**
 * Template Directory
 * @404_template
 * @add_filter
 * @winatlab_single_template
 */
add_filter('404_template', 'winatlab_404_template' );
function winatlab_404_template($template){
	$template = TEMPLATEPATH . '/template-parts/404.php';
	return $template;

}

/**
 * ADMIN PANEL: Hide Menu
 * @add_action
 * @admin_menu
 * @winatlab_remove_admin_menu_links
 */
add_action('admin_menu', 'winatlab_remove_admin_menu_links', 999);
function winatlab_remove_admin_menu_links() {

    global $menu;

    //print_r($menu);

    unset($menu[5]);

    $user = wp_get_current_user();

    if ( 'remstroy-od@yandex.ru' <> $user->user_email ) {
        remove_menu_page('edit.php');
        remove_menu_page('edit.php?post_type=acf-options-page');
        remove_menu_page('edit.php?post_type=acf-field-group');
        remove_menu_page('edit.php?post_type=shop_order');
        remove_menu_page('admin.php?page=wc-settings&tab=checkout&section=liqpay-webplus');
        remove_menu_page('wc-admin&path=/analytics/revenue');
        remove_menu_page('wpcf7');
        remove_menu_page('options-general.php');
        remove_menu_page('edit-comments.php');
        remove_menu_page('rank-math');
        remove_menu_page('smush');
        remove_menu_page('plugins.php');
        remove_menu_page('wpfront-user-role-editor-all-roles');
        remove_submenu_page('woocommerce', 'checkout_form_designer');
        remove_submenu_page('woocommerce', 'wt-woocommerce-related-products');
        remove_submenu_page('users.php', 'wpfront-user-role-editor-assign-roles');
        remove_submenu_page('edit.php?post_type=product', 'wt-woocommerce-related-products');

    }
}

/**
 * Disable Auto Update Plugins
 * @is_admin
 */
if( is_admin() ){

    remove_action( 'admin_init', '_maybe_update_core' );
    remove_action( 'admin_init', '_maybe_update_plugins' );
    remove_action( 'admin_init', '_maybe_update_themes' );
    remove_action( 'load-plugins.php', 'wp_update_plugins' );
    remove_action( 'load-themes.php', 'wp_update_themes' );
    add_filter( 'pre_site_transient_browser_'. md5( $_SERVER['HTTP_USER_AGENT'] ), '__return_true' );
}