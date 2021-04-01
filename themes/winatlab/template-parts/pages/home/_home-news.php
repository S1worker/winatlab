<?php 
/*
 * Home: Intro
 */
defined( 'ABSPATH' ) || exit;
?>

<?php if( ! get_field( 'news_hide', $args['page_id'] ) ) : ?>
<!-- section -->
<section class="news">

    <!-- container -->
    <div class="container-fluid">

        <!-- row -->
        <div class="row">

            <!-- col -->
            <div class="col-sm-12">

                <!-- Headpanel -->
                <div class="news__headpanel">

                    <?php if( ! empty( get_field( 'news_title', $args['page_id'] ) ) ) : ?>

                        <!-- Title -->
                        <h2 class="h1 news__headpanel-title">
                            <?= get_field( 'news_title', $args['page_id'] ) ?>
                        </h2>
                        <!-- End Title -->

                    <?php endif; ?>

                    <?php if( ! empty( get_field( 'news_text', $args['page_id'] ) ) ) : ?>

                        <!-- Text -->
                        <div class="news__headpanel-text">
                            <?= get_field( 'news_text', $args['page_id'] ) ?>
                        </div>
                        <!-- End Text -->

                    <?php endif; ?>


                </div>
                <!-- End Headpanel -->

                <?php
                $news = new WP_Query(
                    [
                        'posts_per_page'    => get_field( 'news_count', $args['page_id'] ),
                        'post_type'         => 'news',
                        'post_status'       => 'publish',
                    ]
                );
                if( $news->have_posts() ) :
                ?>

                    <!-- Slider -->
                    <div class="news__slider">

                        <!-- Container -->
                        <div class="swiper-container">

                            <!-- Wrapper -->
                            <div class="swiper-wrapper">

                                <?php while ( $news->have_posts() ) : $news->the_post(); ?>
                                    <!-- Slide -->
                                    <div class="swiper-slide">

                                        <!-- Item -->
                                        <a href="<?= get_the_permalink() ?>" class="news__list-item">

                                            <!-- Item > Image -->
                                            <div class="news__list-item--image">
                                                <?= kama_thumb_img( 'w=400 &h=300 &alt=' . get_bloginfo('name') . ' &title=' . get_the_title() ) ?>
                                            </div>
                                            <!-- End Item > Image -->

                                            <!-- Item > Title -->
                                            <span class="news__list-item--title">
                                                <?= get_the_title() ?>
                                            </span>
                                            <!-- End Item > Title -->

                                            <?php
                                            $cat = get_the_category();
                                            if( $cat ) :
                                            ?>
                                                <!-- Item > Cat -->
                                                <p class="news__list-item--category">
                                                    <em><?= _e( 'Categorie', 'winatlab' ) ?></em> - <?= $cat[0]->name ?>
                                                </p>
                                                <!-- End Item > Cat -->
                                            <?php endif; ?>

                                        </a>
                                        <!-- End Item -->

                                    </div>
                                    <!-- End Slide -->
                                <?php endwhile; wp_reset_postdata(); ?>

                            </div>
                            <!-- End Wrapper -->

                        </div>
                        <!-- End Container -->

                        <!-- Controls -->
                        <div class="swiper-controls">

                            <!-- Buttons -->
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                            <!-- End Buttons -->

                        </div>
                        <!-- End Controls -->

                    </div>
                    <!-- End Slider -->

                <?php endif; ?>

            </div>
            <!-- end col -->

        </div>
        <!-- end row -->

    </div>
    <!-- end container -->

</section>
<!-- end section -->
<?php endif; ?>