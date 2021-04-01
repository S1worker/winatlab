<?php
defined( 'ABSPATH' ) || exit;

$field = $args['field'];

?>

<!-- section -->
<section class="partners margin__bottom-<?= $field['margin_bottom'] ?>">

    <!-- container -->
    <div class="container-fluid">

        <!-- row -->
        <div class="row">

            <!-- col -->
            <div class="col-sm-12">

                <?php if( ! empty( $field['title'] ) ) : ?>
                <!-- Headpanel -->
                <div class="partners__headpanel">

                    <!-- Title -->
                    <h2 class="h1 partners__headpanel-title">
                        <?= $field['title'] ?>
                    </h2>
                    <!-- End Title -->

                </div>
                <!-- End Headpanel -->
                <?php endif; ?>

                <?php

                $list = $field['partners_list'];

                if( $list ) :
                ?>

                    <!-- List -->
                    <ul class="partners__list row">

                        <?php foreach( $list as $item ) : ?>
                        <li>

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

                        </li>
                        <?php endforeach; ?>

                    </ul>
                    <!-- End List -->

                <?php endif; ?>

            </div>
            <!-- end col -->

        </div>
        <!-- end row -->

    </div>
    <!-- end container -->

</section>
<!-- end section -->
