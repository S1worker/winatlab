<?php
defined( 'ABSPATH' ) || exit;

$field = $args['field'];

?>

<!-- Content -->
<div class="sheme_page__flexprograms margin__bottom-<?= $field['margin_bottom'] ?> <?= $field['class'] ?>">

    <?php if( ! empty( $field['title'] ) ) : ?>

        <!-- Title -->
        <h2 class=sheme_page__flexprograms-title">
            <?= $field['title'] ?>
        </h2>
        <!-- End Title -->

    <?php endif; ?>

    <?php
    $programs = new WP_Query(
        [
            'posts_per_page'    => $field['count'],
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
                                    <?= kama_thumb_img( 'w=300 &h=220' ) ?>
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
<!-- End Content -->