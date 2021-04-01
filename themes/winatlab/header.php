<?php
defined( 'ABSPATH' ) || exit;
/**
 * The header for our theme
 * @package winatlab
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <?php wp_head(); ?>
</head>
<body <?= body_class() ?> ontouchstart="">

    <!-- container -->
    <div id="container">

        <!-- wrapper -->
        <div class="wrapper">

            <?php
            /**
             * header_parts hook
             *
             * @hooked winatlab_header_TagHeaderOpen - 10
             * @hooked winatlab_header_TagHeaderInner - 20
             * @hooked winatlab_header_TagHeaderClose - 30
             *
             */
            do_action('header_parts');
            ?>
            <!-- CONTENT -->
            <main>