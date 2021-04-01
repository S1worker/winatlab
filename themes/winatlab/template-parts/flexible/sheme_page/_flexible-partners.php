<?php
defined( 'ABSPATH' ) || exit;

$field = $args['field'];

?>

<!-- Content -->
<div class="sheme_page__flexpartners margin__bottom-<?= $field['margin_bottom'] ?> <?= $field['class'] ?>">

    <?php if( ! empty( $field['title'] ) ) : ?>

        <!-- Title -->
        <h2 class=sheme_page__flexpartners-title">
            <?= $field['title'] ?>
        </h2>
        <!-- End Title -->

    <?php endif; ?>

    <?php
    $list = $field['partners_list'];

    if( $list ) :
    ?>

        <!-- Slider -->
        <div class="partners__slider">

            <!-- Container -->
            <div class="swiper-container">

                <!-- Wrapper -->
                <div class="swiper-wrapper">

                    <?php foreach( $list as $item ) : ?>
                        <!-- Slide -->
                        <div class="swiper-slide">

                            <!-- List > Item -->
                            <div class="partners__list-item">

                                <!-- title -->
                                <a href="<?= $item['link']['url'] ?>" class="partners__list-item--title">
                                    <?= $item['link']['title'] ?>
                                </a>
                                <!-- end title -->

                                <!-- logo -->
                                <div class="partners__list-item--logo">

                                    <?php if( $item['logo_left_image'] ) : ?>
                                        <a href="<?= $item['logo_left_link']['url'] ?>">
                                            <?php echo wp_get_attachment_image($item['logo_left_image'], 'full', false, ['alt' => get_bloginfo('name'), 'title' => get_the_title()]); ?>
                                        </a>
                                    <?php endif; ?>

                                    <?php if( $item['logo_right_image'] ) : ?>
                                        <a href="<?= $item['logo_right_link']['url'] ?>">
                                            <?php echo wp_get_attachment_image($item['logo_right_image'], 'full', false, ['alt' => get_bloginfo('name'), 'title' => get_the_title()]); ?>
                                        </a>
                                    <?php endif; ?>

                                </div>
                                <!-- end logo -->

                            </div>
                            <!-- End List > Item -->

                        </div>
                        <!-- End Slide -->
                    <?php endforeach; ?>

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