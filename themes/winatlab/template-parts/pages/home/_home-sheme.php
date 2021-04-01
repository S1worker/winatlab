<?php 
/*
 * Home: Sheme
 */
defined( 'ABSPATH' ) || exit;
?>

<?php if( ! get_field( 'sheme_hide', $args['page_id'] ) ) :
    $legend_position_class = isset($args['legend_position']) && !empty($args['legend_position']) ? 'sheme__slider-legend sheme__slider-legend-' .trim($args['legend_position']) : 'sheme__slider-legend';
    $title_class = isset($args['title_font_size']) && !empty($args['title_font_size']) ? 'h1 sheme__headpanel-title sheme__headpanel-title-'.trim($args['title_font_size']).'px' : 'h1 sheme__headpanel-title';
    ?>
<!-- section -->
<section class="sheme">

    <!-- container -->
    <div class="container-fluid">

        <!-- row -->
        <div class="row">

            <!-- col -->
            <div class="col-sm-12">

                <!-- Headpanel -->
                <div class="sheme__headpanel">

                    <?php
                    $title = ( $args['title'] ) ? $args['title'] : get_field( 'sheme_title', $args['page_id'] );
                    ?>

                    <?php if( ! empty( $title ) ) : ?>

                        <!-- Title -->
                        <h2 class="<?php echo $title_class ?>">
                            <?= $title ?>
                        </h2>
                        <!-- End Title -->

                    <?php endif; ?>

                </div>
                <!-- End Headpanel -->

                <!-- Slider -->
                <div class="sheme__slider">

                    <?php
                    if ( is_front_page() && is_home() ) :
                        $list = get_field( 'sheme_list', $args['page_id'] );
                    else:
                        $list = $args['list'];
                    endif;
                    ?>
                    <?php if( $list ) : ?>

                        <!-- Container -->
                        <div class="swiper-container">

                            <!-- Wrapper -->
                            <div class="swiper-wrapper">

                                <?php $i=1; foreach ( $list as $item ) : ?>

                                    <?php if( $i == 1 ) : ?>

                                        <!-- Slide -->
                                        <div class="swiper-slide">

                                            <!-- Item -->
                                            <a href="<?= $item['title']['url'] ?>" class="sheme__slider-item" data-step="<?= $i ?>">

                                                <div>
                                                    <small><?= _e( 'Phase', 'winatlab' ) ?> <?= $i ?></small>
                                                    <span><?= $item['title']['title'] ?></span>
                                                </div>

                                            </a>
                                            <!-- End Item -->

                                        </div>
                                        <!-- End Slide -->

                                    <?php else: ?>

                                        <!-- Slide -->
                                        <a href="<?= $item['title']['url'] ?>" class="swiper-slide">

                                            <!-- Item -->
                                            <div class="sheme__slider-item" data-step="<?= $i ?>">

                                                <div>
                                                    <small><?= _e( 'Phase', 'winatlab' ) ?> <?= $i ?></small>
                                                    <span><?= $item['title']['title'] ?></span>
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
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                            <!-- End Buttons -->

                        </div>
                        <!-- End Container -->

                        <!-- List -->
                        <ul class="sheme__slider-phase">

                            <?php
                            $i=1; foreach ( $list as $item ) : ?>

                                <li data-step="<?= $i ?>" class="<?= ($i == 1) ? 'active' : '' ?>">
                                    <?php
                                    if (isset($item['type']) && $item['type'] == 'text') {
                                        echo $item['text'];
                                    } else { ?>
                                        <img
                                                src="<?= $item['image'] ?>"
                                                alt="<?= get_bloginfo('name') ?>"
                                                title="<?= get_bloginfo('name') ?>"
                                                style="<?= $item['image_style'] ?>"
                                        >
                                   <?php }
                                    ?>
                                </li>

                            <?php $i++; endforeach; ?>

                        </ul>
                        <!-- End List -->

                    <?php else: ?>

                        <!-- Container -->
                        <div class="swiper-container">

                            <!-- Wrapper -->
                            <div class="swiper-wrapper">

                                <!-- Slide -->
                                <div class="swiper-slide">

                                    <!-- Item -->
                                    <a href="<?= the_permalink(102) ?>" class="sheme__slider-item" data-step="1">

                                        <div>
                                            <small><?= _e( 'Phase', 'winatlab' ) ?> 1</small>
                                            <span><?= _e( 'Validation préliminaire', 'winatlab' ) ?></span>
                                        </div>

                                    </a>
                                    <!-- End Item -->

                                </div>
                                <!-- End Slide -->

                                <!-- Slide -->
                                <a href="<?= the_permalink(103) ?>" class="swiper-slide">

                                    <!-- Item -->
                                    <div class="sheme__slider-item" data-step="2">

                                        <div>
                                            <small><?= _e( 'Phase', 'winatlab' ) ?> 2</small>
                                            <span><?= _e( 'R&D', 'winatlab' ) ?></span>
                                        </div>

                                    </div>
                                    <!-- End Item -->

                                </a>
                                <!-- End Slide -->

                                <!-- Slide -->
                                <a href="<?= home_url( 'production' ) ?>" class="swiper-slide">

                                    <!-- Item -->
                                    <div class="sheme__slider-item" data-step="3">

                                        <div>
                                            <small><?= _e( 'Phase', 'winatlab' ) ?> 3</small>
                                            <span><?= _e( 'Hall pilote', 'winatlab' ) ?></span>
                                        </div>

                                    </div>
                                    <!-- End Item -->

                                </a>
                                <!-- End Slide -->

                                <!-- Slide -->
                                <a href="<?= the_permalink(104) ?>" class="swiper-slide">

                                    <!-- Item -->
                                    <div class="sheme__slider-item" data-step="4">

                                        <div>
                                            <small><?= _e( 'Phase', 'winatlab' ) ?> 4</small>
                                            <span><?= _e( 'Industrialisation', 'winatlab' ) ?></span>
                                        </div>

                                    </div>
                                    <!-- End Item -->

                                </a>
                                <!-- End Slide -->

                            </div>
                            <!-- End Wrapper -->

                            <!-- Buttons -->
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                            <!-- End Buttons -->

                        </div>
                        <!-- End Container -->

                        <!-- List -->
                        <ul class="sheme__slider-phase">
                            <li data-step="1" class="active">
                                <img
                                        src="<?= TEMPLATE_PATH ?>/assets/images/sheme-phase-1.svg"
                                        alt="<?= get_bloginfo('name') ?>"
                                        title="<?= get_bloginfo('name') ?>"
                                >
                            </li>
                            <li data-step="2">
                                <img
                                        src="<?= TEMPLATE_PATH ?>/assets/images/sheme-phase-2.svg"
                                        alt="<?= get_bloginfo('name') ?>"
                                        title="<?= get_bloginfo('name') ?>"
                                >
                            </li>
                            <li data-step="3">
                                <img
                                        src="<?= TEMPLATE_PATH ?>/assets/images/sheme-phase-3.svg"
                                        alt="<?= get_bloginfo('name') ?>"
                                        title="<?= get_bloginfo('name') ?>"
                                >
                            </li>
                            <li data-step="4">
                                <img
                                        src="<?= TEMPLATE_PATH ?>/assets/images/sheme-phase-4.svg"
                                        alt="<?= get_bloginfo('name') ?>"
                                        title="<?= get_bloginfo('name') ?>"
                                >
                            </li>
                        </ul>
                        <!-- End List -->

                    <?php endif; ?>

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
                <!-- End Slider -->

                <?php
                if( array_key_exists('button', $args) ) :
                    if( $args['button'] ) :
                        echo sprintf('<div class="sheme__footer"><a href="%s" class="btn">%s</a></div>',
                            $args['button']['url'],
                            $args['button']['title']
                        );
                    endif;
                endif;
                ?>

            </div>
            <!-- end col -->

        </div>
        <!-- end row -->

    </div>
    <!-- end container -->

</section>
<!-- end section -->
<?php endif; ?>