<?php
defined( 'ABSPATH' ) || exit;

$field = $args['field'];

?>

<?php if( ! $args['column'] ) : ?>
<!-- Section -->
<section class="flexible_sizes margin__bottom-<?= $field['margin_bottom'] ?>">

    <!-- container -->
    <div class="container-fluid">

        <!-- row -->
        <div class="row">

            <!-- col -->
            <div class="col-xs-12">
<?php endif; ?>

                <!-- row -->
                <div class="flexible_sizes__row">

                    <!-- left -->
                    <div class="flexible_sizes__row-left">

                        <?php if( $field['list'] ) : ?>
                            <!-- List -->
                            <ul class="flexible_sizes__list">

                                <?php $arrays = array_reverse($field['list']); foreach ( $arrays as $item ) : ?>
                                    <li>
                                        <!-- Item -->
                                        <div class="flexible_sizes__list-item">

                                            <!-- icon -->
                                            <div class="icon">

                                                <?php if( $item['image'] ) : ?>
                                                    <img src="<?= $item['image'] ?>" alt="<?= get_bloginfo('name') ?>" title="<?= get_bloginfo('name') ?>">
                                                <?php endif; ?>

                                            </div>
                                            <!-- end icon -->

                                            <span><?= $item['text'] ?></span>

                                        </div>
                                        <!-- End Item -->
                                    </li>
                                <?php endforeach; ?>

                            </ul>
                            <!-- End List -->
                        <?php endif; ?>

                    </div>
                    <!-- end left -->

                    <!-- right -->
                    <div class="flexible_sizes__row-right">

                        <?php if( $field['title'] ) : ?>
                            <div class="flexible_sizes__title">
                                <?= $field['title'] ?>
                            </div>
                        <?php endif; ?>

                    </div>
                    <!-- end right -->

                </div>
                <!-- end row -->

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