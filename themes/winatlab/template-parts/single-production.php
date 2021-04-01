<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package winatlab
 */

get_header();

?>

    <!-- News -->
    <div class="news__single">

        <!-- container -->
        <div class="container-fluid">

            <!-- row -->
            <div class="row">

                <!-- col -->
                <div class="col-sm-12">

                    <!-- Title -->
                    <h1 class="news__single-title">
                        <?= _e( 'Article', 'winatlab' ) ?> <span><?= the_title() ?></span>
                    </h1>
                    <!-- End Title -->

                    <!-- Text -->
                    <div class="text__style">
                        <?= the_content() ?>
                    </div>
                    <!-- End Text -->

                </div>
                <!-- end col -->

            </div>
            <!-- end row -->

        </div>
        <!-- end container -->

    </div>
    <!-- News -->

<?php
get_footer();
