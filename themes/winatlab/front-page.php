<?php
defined( 'ABSPATH' ) || exit;
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package winatlab
 */
get_header();

    the_post();

    $id_home = get_option('page_on_front');

    /**
     * Home: Intro
     * @get_template_part
     */
    get_template_part('template-parts/pages/home/_home', 'intro', [ 'page_id' => $id_home ]);

    /**
     * Home: Program
     * @get_template_part
     */
    get_template_part('template-parts/pages/home/_home', 'program', [ 'page_id' => $id_home ]);

    /**
     * Home: Sheme
     * @get_template_part
     */
    get_template_part('template-parts/pages/home/_home', 'sheme', [ 'page_id' => $id_home ]);

    /**
     * Home: Production
     * @get_template_part
     */
    get_template_part('template-parts/pages/home/_home', 'production', [ 'page_id' => $id_home ]);

    /**
     * Home: Partners
     * @get_template_part
     */
    get_template_part('template-parts/pages/home/_home', 'partners', [ 'page_id' => $id_home ]);

    /**
     * Home: News
     * @get_template_part
     */
    get_template_part('template-parts/pages/home/_home', 'news', [ 'page_id' => $id_home ]);


get_footer();
