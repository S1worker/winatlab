<?php
defined( 'ABSPATH' ) || exit;

$field = $args['field'];

?>

<!-- Content -->
<div class="sheme_page__flexproduction margin__bottom-<?= $field['margin_bottom'] ?> <?= $field['class'] ?>">

    <?php if( ! empty( $field['title'] ) ) : ?>

        <!-- Title -->
        <h2 class=sheme_page__flexproduction-title">
            <?= $field['title'] ?>
        </h2>
        <!-- End Title -->

    <?php endif; ?>

    <?php
    $productions = new WP_Query(
        [
            'posts_per_page'    => $field['count'],
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
                                    <?= kama_thumb_img( 'w=200 &h=200' ) ?>
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
<!-- End Content -->