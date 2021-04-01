<?php 
/*
 * Home: Intro
 */
defined( 'ABSPATH' ) || exit;
?>

<?php if( ! get_field( 'program_hide', $args['page_id'] ) ) : ?>
<!-- section -->
<section class="program">

    <!-- container -->
    <div class="container-fluid">

        <!-- row -->
        <div class="row">

            <!-- col -->
            <div class="col-sm-12">

                <!-- Headpanel -->
                <div class="program__headpanel">

                    <?php if( ! empty( get_field( 'program_title', $args['page_id'] ) ) ) : ?>

                        <!-- Title -->
                        <h2 class="h1 program__headpanel-title">
                            <?= get_field( 'program_title', $args['page_id'] ) ?>
                        </h2>
                        <!-- End Title -->

                    <?php endif; ?>

                    <?php if( ! empty( get_field( 'program_text', $args['page_id'] ) ) ) : ?>

                        <!-- Title -->
                        <div class="program__headpanel-text">
                            <?= get_field( 'program_text', $args['page_id'] ) ?>
                        </div>
                        <!-- End Title -->

                    <?php endif; ?>


                </div>
                <!-- End Headpanel -->

                <?php
                $programs = new WP_Query(
                    [
                        'posts_per_page'    => get_field( 'program_count', $args['page_id'] ),
                        'post_type'         => 'program',
                        'post_status'       => 'publish',
                    ]
                );
                if( $programs->have_posts() ) :
                ?>

                    <!-- Slider -->
                    <div class="program__slider">

                        <!-- Container -->
                        <div class="swiper-container">

                            <!-- Wrapper -->
                            <div class="swiper-wrapper">

                                <?php while ( $programs->have_posts() ) : $programs->the_post(); ?>
                                    <!-- Slide -->
                                    <div class="swiper-slide">

                                        <!-- Item -->
                                        <div class="program__list-item">

                                            <!-- Item > Image -->
                                            <div class="program__list-item--image">
                                                <?= kama_thumb_img( 'w=300 &h=220 &alt=' . get_bloginfo('name') . ' &title=' . get_the_title() ) ?>
                                            </div>
                                            <!-- End Item > Image -->

                                            <!-- Item > Title -->
                                            <span class="program__list-item--title">
                                                <?= get_the_title() ?>
                                            </span>
                                            <!-- End Item > Title -->

                                        </div>
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