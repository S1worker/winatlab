<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package winatlab
 */

get_header();

/**
 * Load Template
 * Load Single Post Type
 */
if( is_page_template('templates/template-build.php') ) :

    load_template( locate_template('templates/template-build.php') );

else:

    get_template_part( 'template-parts/single', get_post_type() );

endif;

get_footer();
