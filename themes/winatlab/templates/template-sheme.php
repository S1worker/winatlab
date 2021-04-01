<?php
/*
Template Name: Sheme
Template Post Type: page
*/

get_header();

$field = get_field( 'shpage', get_the_ID() );

?>

    <!-- Sheme Page -->
    <section class="sheme_page <?= $field['class'] ?>">

        <!-- container -->
        <div class="container-fluid">

            <!-- row -->
            <div class="row">

                <!-- col -->
                <div class="col-sm-12">

                    <?php if( ! empty( $field['title'] ) ) : ?>
                        <!-- Title -->
                        <h1 class="sheme_page__title">
                            <?= $field['title'] ?>
                        </h1>
                        <!-- End Title -->
                    <?php endif; ?>

                    <?php if( ! empty( $field['sheme'] ) ) : ?>

                        <!-- Slider -->
                        <div class="sheme__slider" data-active="<?= $field['active_slide'] ?>">

                            <!-- Container -->
                            <div class="swiper-container">

                                <!-- Wrapper -->
                                <div class="swiper-wrapper">

                                    <?php $i=1; foreach ( $field['sheme'] as $item ) : ?>

                                        <?php if( $i == 1 ) : ?>

                                            <!-- Slide -->
                                            <div class="swiper-slide">

                                                <!-- Item -->
                                                <a href="<?= $item['link']['url'] ?>" class="sheme__slider-item" data-step="<?= $i ?>">

                                                    <div>
                                                        <small><?= _e( 'Phase', 'winatlab' ) ?> <?= $i ?></small>
                                                        <span><?= $item['link']['title'] ?></span>
                                                    </div>

                                                </a>
                                                <!-- End Item -->

                                            </div>
                                            <!-- End Slide -->

                                        <?php else: ?>

                                            <!-- Slide -->
                                            <a href="<?= $item['link']['url'] ?>" class="swiper-slide">

                                                <!-- Item -->
                                                <div class="sheme__slider-item" data-step="<?= $i ?>">

                                                    <div>
                                                        <small><?= _e( 'Phase', 'winatlab' ) ?> <?= $i ?></small>
                                                        <span><?= $item['link']['title'] ?></span>
                                                    </div>

                                                </div>
                                                <!-- End Item -->

                                            </a>
                                            <!-- End Slide -->

                                        <?php endif; ?>

                                        <?php $i++; endforeach; ?>

                                </div>
                                <!-- End Wrapper -->

                                <!-- Buttons -->
                                <?php if( $field['prev_page'] ) : ?>
                                    <a href="<?= $field['prev_page']['url'] ?>" class="swiper-button-linkprev"></a>
                                <?php endif; ?>

                                <?php if( $field['next_page'] ) : ?>
                                    <a href="<?= $field['next_page']['url'] ?>" class="swiper-button-linknext"></a>
                                <?php endif; ?>
                                <!-- End Buttons -->

                            </div>
                            <!-- End Container -->

                            <!-- Row -->
                            <div class="sheme__slider-row">

                                <!-- row -->
                                <div class="row">

                                    <!-- Text -->
                                    <div class="col-sm-12 col-md-6">

                                        <!-- Left -->
                                        <div class="sheme__slider-row--left">
                                            <?= $field['text'] ?>
                                        </div>
                                        <!-- End Left -->

                                    </div>
                                    <!-- End Text -->

                                    <!-- Text -->
                                    <div class="col-sm-12 col-md-6">

                                        <!-- Right -->
                                        <div class="sheme__slider-row--right">

                                            <img
                                                    src="<?= $field['image'] ?>"
                                                    alt=""
                                                    title=""
                                            >

                                            <!-- Legend -->
                                            <ul class="sheme__slider-legend">
                                                <li>
                                                    <div>
                                                        <i class="indigo"></i>
                                                        <span><?= _e( 'Tournaire équipement', 'winatlab' ) ?></span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div>
                                                        <i class="blue"></i>
                                                        <span><?= _e( 'Partenaires', 'winatlab' ) ?></span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div>
                                                        <i class="grey"></i>
                                                        <span><?= _e( 'Expertises clients', 'winatlab' ) ?></span>
                                                    </div>
                                                </li>
                                            </ul>
                                            <!-- End Legend -->

                                        </div>
                                        <!-- End Right -->

                                    </div>
                                    <!-- End Text -->

                                </div>
                                <!-- end row -->

                            </div>
                            <!-- End Row -->

                        </div>
                        <!-- End Slider -->

                    <?php endif; ?>


                    <?php

                    if( $field['flexible'] ) :
                        foreach ($field['flexible'] as $subitem) :
                            get_template_part(
                                'template-parts/flexible/sheme_page/_flexible',
                                $subitem['acf_fc_layout'],
                                [
                                    'field' => $subitem
                                ]
                            );
                        endforeach;
                    endif;

                    ?>

                </div>
                <!-- end col -->

            </div>
            <!-- end row -->

        </div>
        <!-- end container -->

    </section>
    <!-- End Sheme Page -->

    <!-- Sheme Page Form -->
    <section class="sheme_page__form">

        <!-- container -->
        <div class="container-fluid">

            <!-- row -->
            <div class="row">

                <!-- col -->
                <div class="col-sm-12">

                    <!-- Title -->
                    <h2 class="sheme_page__form-title">
                        <?= _e( 'Inscrivez-vous à <span>Notre newsletter<span>', 'winatlab' ) ?>
                    </h2>
                    <!-- End Title -->

                    <!-- Form 377 -->
                    <div class="sheme_page__form-form">
                        <?= do_shortcode( '[contact-form-7 id="377" title="Inscrivez-vous à Notre newsletter (Sheme Page)" html_class=""]' ) ?>
                    </div>
                    <!-- End Form -->

                </div>
                <!-- end col -->

            </div>
            <!-- end row -->

        </div>
        <!-- end container -->

    </section>
    <!-- End Sheme Page Form -->

<?php
get_footer();