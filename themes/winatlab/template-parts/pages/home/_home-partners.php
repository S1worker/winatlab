<?php 
/*
 * Home: Intro
 */
defined( 'ABSPATH' ) || exit;
?>

<?php if( ! get_field( 'partners_hide', $args['page_id'] ) ) : ?>
<!-- section -->
<section class="partners">

    <!-- container -->
    <div class="container-fluid">

        <!-- row -->
        <div class="row">

            <!-- col -->
            <div class="col-sm-12">

                <!-- Headpanel -->
                <div class="partners__headpanel">

                    <?php if( ! empty( get_field( 'partners_subtitle', $args['page_id'] ) ) ) : ?>

                        <!-- SubTitle -->
                        <h5 class="partners__headpanel-subtitle">
                            <span><?= get_field( 'partners_subtitle', $args['page_id'] ) ?></span>
                        </h5>
                        <!-- End SubTitle -->

                    <?php endif; ?>

                    <?php if( ! empty( get_field( 'partners_title', $args['page_id'] ) ) ) : ?>

                        <!-- Title -->
                        <h2 class="h1 partners__headpanel-title">
                            <?= get_field( 'partners_title', $args['page_id'] ) ?>
                        </h2>
                        <!-- End Title -->

                    <?php endif; ?>

                    <?php if( ! empty( get_field( 'partners_text', $args['page_id'] ) ) ) : ?>

                        <!-- Text -->
                        <div class="partners__headpanel-text">
                            <?= get_field( 'partners_text', $args['page_id'] ) ?>
                        </div>
                        <!-- End Text -->

                    <?php endif; ?>

                </div>
                <!-- End Headpanel -->

                <?php
                $list = get_field( 'partners_list', $args['page_id'] );

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

                <?php if( ! empty( get_field( 'partners_link', $args['page_id'] ) ) ) : ?>

                    <!-- Link -->
                    <div class="partners__link">

                        <a href="<?= get_field( 'partners_link', $args['page_id'] )['url'] ?>" class="btn">
                            <?= get_field( 'partners_link', $args['page_id'] )['title'] ?>
                        </a>

                    </div>
                    <!-- End Link -->

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