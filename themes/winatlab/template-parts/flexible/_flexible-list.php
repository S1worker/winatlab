<?php
defined( 'ABSPATH' ) || exit;

$field = $args['field'];

?>

<?php if( ! $args['column'] ) : ?>
    <!-- Section -->
    <section class="flexible_list <?= $field['class'] ?>">

        <!-- container -->
        <div class="container-fluid">

            <!-- row -->
            <div class="row">

                <!-- col -->
                <div class="col-xs-12">
<?php endif; ?>

    <!-- List -->
    <ul class="flexible_list__list row margin__bottom-<?= $field['margin_bottom'] ?>">

        <?php foreach ( $field['list'] as $item ) : ?>
            <li>

                <!-- Item -->
                <div class="flexible_list__list-item">

                    <?php if( ! empty( $item['title'] ) ) : ?>
                        <!-- Title -->
                        <h5 class="flexible_list__list-item--title">
                            <?= $item['title'] ?>
                        </h5>
                        <!-- End Title -->
                    <?php endif; ?>

                    <?php if( ! empty( $item['text'] ) ) : ?>
                        <!-- Text -->
                        <div class="flexible_list__list-item--text">
                            <?= $item['text'] ?>
                        </div>
                        <!-- End Text -->
                    <?php endif; ?>

                </div>
                <!-- End Item -->

            </li>
        <?php endforeach; ?>

    </ul>
    <!-- End List -->

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