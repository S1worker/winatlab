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

                    <?php if( has_excerpt() ) : ?>

                        <!-- Excerpt -->
                        <div class="news__single-excerpt">
                            <?= the_excerpt() ?>
                        </div>
                        <!-- End Excerpt -->

                    <?php endif; ?>

                    <?php
                    $video = get_field( 'news_video', get_the_ID() );
                    if( $video ) :
                    ?>
                    <!-- Video -->
                    <div class="news__single-video videoPsevdoLink" data-video="<?= $video ?>">
                        <figure class="btn-play"></figure>
                        <img
                                src="<?= get_field( 'news_video_poster', get_the_ID() ) ?>"
                                alt="<?= get_bloginfo('name') ?>"
                                title="<?= get_bloginfo('name') ?>"
                        >
                    </div>
                    <!-- End Video -->
                    <?php endif; ?>

                </div>
                <!-- end col -->

            </div>
            <!-- end row -->

        </div>
        <!-- end container -->

        <!-- Text -->
        <div class="news__single-text">

            <!-- container -->
            <div class="container-fluid">

                <!-- row -->
                <div class="row">

                    <!-- col -->
                    <div class="col-sm-12">

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
        <!-- End Text -->

    </div>
    <!-- News -->

<?php
get_footer();
