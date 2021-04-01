<?php
defined( 'ABSPATH' ) || exit;

/**
 * Options page
 */
if (function_exists('acf_add_options_page')) {

    /**
     * Theme Settings
     */
    acf_add_options_page(array(
        'page_title'    => __('Theme Settings', 'winatlab'),
        'menu_title'    => __('Theme Settings', 'winatlab'),
        'menu_slug'     => 'theme_settings',
        'capability'    => 'edit_posts',
        'position'      => '15.54',
        'post_id'       => 'theme_settings',
        'icon_url'      => 'dashicons-schedule',
        'redirect'      => false
    ));

}

/**
 * @param $toolbars
 * @return mixed
 */
add_filter('acf/fields/wysiwyg/toolbars' , 'winatlab_acf_editor_toolbars');
function winatlab_acf_editor_toolbars( $toolbars ) {


//    echo '< pre >';
//    print_r($toolbars);
//    echo '< /pre >';
//    die;

    $toolbars['Full'] = array();
    $toolbars['Full'][1] = array('bold', 'italic', 'underline', 'bullist', 'numlist', 'alignleft', 'aligncenter', 'alignright', 'alignjustify', 'link', 'unlink', 'hr', 'spellchecker', 'wp_more', 'wp_adv' );
    $toolbars['Full'][2] = array('fontweightselect', 'styleselect', 'formatselect', 'fontselect', 'fontsizeselect', 'forecolor', 'pastetext', 'removeformat', 'charmap', 'outdent', 'indent', 'undo', 'redo', 'wp_help' );


    // remove the 'Basic' toolbar completely (if you want)
    //unset( $toolbars['Basic' ] );

    // return $toolbars - IMPORTANT!
    return $toolbars;
}



/**
 * @param $init
 * @return mixed
 */
function winatlab_mce( $init ) {
    $init['fontsize_formats'] = "12px 13px 14px 16px 18px 21px 23px 24px 28px 32px 36px 38px 39px 40px 50px 60px 70px";
    return $init;
}
add_filter('tiny_mce_before_init', 'winatlab_mce');

