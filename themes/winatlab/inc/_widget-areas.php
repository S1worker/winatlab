<?php
defined( 'ABSPATH' ) || exit;
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 * @add_action
 * @widgets_init
 * @winatlab_widgets_init
 */
add_action( 'widgets_init', 'winatlab_widgets_init' );
function winatlab_widgets_init() {

    /**
     * Footer: Меню
     * @register_sidebar
     */
    register_sidebar( array(
        'name'          => esc_html__( 'Footer: Меню Left', 'winatlab' ),
        'id'            => 'footer-menu-left',
        'class'         => '',
        'description'   => esc_html__( 'Add widgets here.', 'winatlab' ),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h5>',
        'after_title'   => '</h5>',
        'before_sidebar' => '<div>',
        'after_sidebar'  => '</div>',
    ) );



}

