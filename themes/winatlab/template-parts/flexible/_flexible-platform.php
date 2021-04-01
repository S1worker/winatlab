<?php
defined( 'ABSPATH' ) || exit;

$field = $args['field'];

?>

<?php if( ! $args['column'] ) : ?>
<!-- Section -->
<section class="flexible_platform margin__bottom-<?= $field['margin_bottom'] ?>">

    <!-- container -->
    <div class="container-fluid">

        <!-- row -->
        <div class="row">

            <!-- col -->
            <div class="col-xs-12">
<?php endif; ?>


                <?php if( $field['list'] ) : ?>

                    <!-- List -->
                    <ul class="flexible_platform__list row">

                        <?php foreach ( $field['list'] as $item ) : ?>
                            <li>

                                <!-- Item -->
                                <div class="flexible_platform__list-item">

                                    <div>
                                        <?= $item['text'] ?>
                                    </div>

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