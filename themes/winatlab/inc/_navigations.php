<?php
defined( 'ABSPATH' ) || exit;
/**
* Navigations
 * @register_nav_menus
*/

/**
 * Register our menu.
 */
register_nav_menus( array(
	'header-menu'           => esc_html__( 'Header: Menu', 'winatlab' ),
    'header-menu-mobile'    => esc_html__( 'Header: Menu Mobile', 'winatlab' ),
    'footer-menu-left'      => esc_html__( 'Footer: Menu Left', 'winatlab' ),
    'footer-menu-center'    => esc_html__( 'Footer: Menu Center', 'winatlab' ),
    'footer-menu-right'     => esc_html__( 'Footer: Menu Right', 'winatlab' ),
    'footer-menu-bottom'    => esc_html__( 'Footer: Menu Bottom', 'winatlab' ),
));
