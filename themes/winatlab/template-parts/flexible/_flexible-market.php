<?php
defined( 'ABSPATH' ) || exit;

$field = $args['field'];

?>

<?php if( ! $args['column'] ) : ?>
<!-- Section -->
<section class="flexible_market margin__bottom-<?= $field['margin_bottom'] ?>">

    <!-- container -->
    <div class="container-fluid">

        <!-- row -->
        <div class="row">

            <!-- col -->
            <div class="col-xs-12">
<?php endif; ?>

                <?php if( ! empty( $field['title'] ) ) : ?>

                    <!-- Title -->
                    <h2 class="flexible_market__title margin__bottom-<?= $field['title_margin_bottom'] ?>">
                        <?= $field['title'] ?>
                    </h2>
                    <!-- End Title -->

                <?php endif; ?>

                <?php if( ! empty( $field['text'] ) ) : ?>

                    <!-- Text -->
                    <div class="flexible_market__text">
                        <?= $field['text'] ?>
                    </div>
                    <!-- End Text -->

                <?php endif; ?>

                <?php if ( $field['list'] ) : ?>

                    <!-- List -->
                    <ul class="flexible_market__list">
                        <?php foreach ( $field['list'] as $item ) : ?>
                            <li>
                                <!-- Item -->
                                <div class="flexible_market__list-item">

                                    <!-- Text -->
                                    <div class="flexible_market__list-item--text">

                                        <?= $item['text'] ?>

                                    </div>
                                    <!-- End Text -->

                                    <!-- Image -->
                                    <div class="flexible_market__list-item--image">

                                        <img
                                                src="<?= $item['image'] ?>"
                                                alt="<?= get_bloginfo('name') ?>"
                                                title="<?= get_bloginfo('name') ?>"
                                        >

                                    </div>
                                    <!-- End Image -->

                                </div>
                                <!-- End Item -->
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <!-- End List -->

                <?php endif; ?>

<?php if( ! $args['column'] ) : ?>
            </div>
            <!-- end col -->

        </div>
        <!-- end row -->

    </div>
    <!-- end container -->

</section>
<!-- End Section -->
<?php endif; ?>