<?php
defined( 'ABSPATH' ) || exit;

/**
 * Register Taxonomies
 * @add_action
 * @init
 * @winatlab_register_taxonomies
 */
add_action( 'init', 'winatlab_register_taxonomies' );
function winatlab_register_taxonomies() {

    /**
     * Program
     */
    $labels_program = [
        "name"                  => __( 'Domaines Application', 'frank' ),
    ];

    $args = [
        "label"                 => __( 'Domaines Application', 'frank' ),
        "labels"                => $labels_program,
        "description"           => "",
        "public"                => true,
        "publicly_queryable"    => true,
        "show_ui"               => true,
        "show_in_rest"          => true,
        "rest_base"             => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive"           => true,
        "show_in_menu"          => true,
        "show_in_nav_menus"     => true,
        "delete_with_user"      => false,
        "exclude_from_search"   => false,
        "capability_type"       => "post",
        "map_meta_cap"          => true,
        "hierarchical"          => true,
        "rewrite"               => ["slug" => "program", "with_front" => true],
        "query_var"             => true,
        "menu_icon"             => "dashicons-clipboard",
        "supports"              => ["title", "editor", "thumbnail"],
    ];

    register_post_type("program", $args);


    /**
     * Production
     */
    $labels_production = [
        "name"                  => __( 'Equipement', 'frank' ),
    ];

    $args = [
        "label"                 => __( 'Equipement', 'frank' ),
        "labels"                => $labels_production,
        "description"           => "",
        "public"                => true,
        "publicly_queryable"    => true,
        "show_ui"               => true,
        "show_in_rest"          => true,
        "rest_base"             => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive"           => true,
        "show_in_menu"          => true,
        "show_in_nav_menus"     => true,
        "delete_with_user"      => false,
        "exclude_from_search"   => false,
        "capability_type"       => "post",
        "map_meta_cap"          => true,
        "hierarchical"          => true,
        "rewrite"               => ["slug" => "technologies-disponibles", "with_front" => true],
        "query_var"             => true,
        "menu_icon"             => "dashicons-clipboard",
        "supports"              => ["title", "editor", "thumbnail", "excerpt"],
    ];

    register_post_type("production", $args);


    /**
     * Partners
     */
    $labels_partners = [
        "name"                  => __( 'Partenaires', 'frank' ),
    ];

    $args = [
        "label"                 => __( 'Partenaires', 'frank' ),
        "labels"                => $labels_partners,
        "description"           => "",
        "public"                => true,
        "publicly_queryable"    => true,
        "show_ui"               => true,
        "show_in_rest"          => true,
        "rest_base"             => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive"           => true,
        "show_in_menu"          => true,
        "show_in_nav_menus"     => true,
        "delete_with_user"      => false,
        "exclude_from_search"   => false,
        "capability_type"       => "post",
        "map_meta_cap"          => true,
        "hierarchical"          => true,
        "rewrite"               => ["slug" => "partenaire", "with_front" => true],
        "query_var"             => true,
        "menu_icon"             => "dashicons-clipboard",
        "supports"              => ["title", "editor", "thumbnail", "custom-fields", "page-attributes"],
    ];

    register_post_type("partners", $args);


    /**
     * News
     */
    $labels_news = [
        "name"                  => __( 'News', 'frank' ),
    ];

    $args = [
        "label"                 => __( 'News', 'frank' ),
        "labels"                => $labels_news,
        "description"           => "",
        "public"                => true,
        "publicly_queryable"    => true,
        "show_ui"               => true,
        "show_in_rest"          => true,
        "rest_base"             => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive"           => true,
        "show_in_menu"          => true,
        "show_in_nav_menus"     => true,
        "delete_with_user"      => false,
        "exclude_from_search"   => false,
        "capability_type"       => "post",
        "map_meta_cap"          => true,
        "hierarchical"          => true,
        "rewrite"               => ["slug" => "news", "with_front" => true],
        "query_var"             => true,
        "menu_icon"             => "dashicons-clipboard",
        "supports"              => ["title", "editor", "thumbnail", "excerpt"],
        "taxonomies"            => ["category"],
    ];

    register_post_type("news", $args);

    /**
     * Our Team
     */
    $labels_team = [
        "name"                  => __( 'Our Team', 'frank' ),
    ];

    $args = [
        "label"                 => __( 'Our Team', 'frank' ),
        "labels"                => $labels_team,
        "description"           => "",
        "public"                => true,
        "publicly_queryable"    => true,
        "show_ui"               => true,
        "show_in_rest"          => true,
        "rest_base"             => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive"           => true,
        "show_in_menu"          => true,
        "show_in_nav_menus"     => true,
        "delete_with_user"      => false,
        "exclude_from_search"   => false,
        "capability_type"       => "post",
        "map_meta_cap"          => true,
        "hierarchical"          => true,
        "rewrite"               => ["slug" => "team", "with_front" => true],
        "query_var"             => true,
        "menu_icon"             => "dashicons-clipboard",
        "supports"              => ["title", "editor", "thumbnail"],
    ];

    register_post_type("team", $args);

}
