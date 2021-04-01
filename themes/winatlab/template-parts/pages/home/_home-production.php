<?php 
/*
 * Home: Intro
 */
defined( 'ABSPATH' ) || exit;
?>

<?php if( ! get_field( 'production_hide', $args['page_id'] ) ) : ?>
<!-- section -->
<section class="production">

    <!-- container -->
    <div class="container-fluid">

        <!-- row -->
        <div class="row">

            <!-- col -->
            <div class="col-sm-12">

                <!-- Headpanel -->
                <div class="production__headpanel">

                    <?php if( $args['title'] ) : ?>

                        <!-- Title -->
                        <h2 class="h1 production__headpanel-title">
                            <?= $args['title'] ?>
                        </h2>
                        <!-- End Title -->

                    <?php else: ?>

                        <?php if( ! empty( get_field( 'production_title', $args['page_id'] ) ) ) : ?>

                            <!-- Title -->
                            <h2 class="h1 production__headpanel-title">
                                <?= get_field( 'production_title', $args['page_id'] ) ?>
                            </h2>
                            <!-- End Title -->

                        <?php endif; ?>

                        <?php if( ! empty( get_field( 'production_text', $args['page_id'] ) ) ) : ?>

                            <!-- Text -->
                            <div class="production__headpanel-text">
                                <?= get_field( 'production_text', $args['page_id'] ) ?>
                            </div>
                            <!-- End Text -->

                        <?php endif; ?>

                    <?php endif; ?>

                </div>
                <!-- End Headpanel -->

                <?php
                $productions = new WP_Query(
                    [
                        'posts_per_page'    => get_field( 'production_count', $args['page_id'] ),
                        'post_type'         => 'production',
                        'post_status'       => 'publish',
                    ]
                );
                if( $productions->have_posts() ) :
                ?>

                    <!-- Slider -->
                    <div class="production__slider">

                        <!-- Container -->
                        <div class="swiper-container">

                            <!-- Wrapper -->
                            <div class="swiper-wrapper">

                                <?php while ( $productions->have_posts() ) : $productions->the_post(); ?>
                                    <!-- Slide -->
                                    <div class="swiper-slide">

                                        <!-- Item -->
                                        <a href="<?= get_the_permalink() ?>" class="production__list-item">

                                            <!-- Item > Image -->
                                            <div class="production__list-item--image">
                                                <?= kama_thumb_img( 'w=200 &h=200 &alt=' . get_bloginfo('name') . ' &title=' . get_the_title() ) ?>
                                            </div>
                                            <!-- End Item > Image -->

                                            <!-- Item > Title -->
                                            <span class="production__list-item--title">
                                                <?= get_the_title() ?>
                                            </span>
                                            <!-- End Item > Title -->

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