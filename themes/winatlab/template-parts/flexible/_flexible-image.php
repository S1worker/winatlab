<?php
defined( 'ABSPATH' ) || exit;

$field = $args['field'];

?>

<?php if( ! $args['column'] ) : ?>
<!-- Section -->
<section class="flexible_image margin__bottom-<?= $field['margin_bottom'] ?>">

    <!-- container -->
    <div class="container-fluid">

        <!-- row -->
        <div class="row">

            <!-- col -->
            <div class="col-xs-12">
<?php endif; ?>

                <?php if( ! empty( $field['title'] ) ) : ?>

                    <h2 class="flexible_image-title margin__bottom-<?= $field['title_margin_bottom'] ?> <?= ( $args['column'] ) ? $field['class'] : '' ?>">
                        <?= $field['title'] ?>
                    </h2>

                <?php endif; ?>

                <?php if( 'single' == $field['type'] ) : ?>

                    <!-- Item -->
                    <div class="flexible_image-item <?= $field['position'] ?>">
                        <img
                                src="<?= $field['image'] ?>"
                                alt="<?= get_bloginfo('name') ?>"
                                title="<?= get_bloginfo('name') ?>"
                        >
                    </div>
                    <!-- End Item -->
                <?php endif; ?>
                <?php if ( 'list' == $field['type'] ) : ?>

                    <!-- List -->
                    <ul class="flexible_image-list">
                        <?php foreach ( $field['list'] as $image ) : ?>
                            <li>
                                <img
                                        src="<?= $image['image'] ?>"
                                        alt="<?= get_bloginfo('name') ?>"
                                        title="<?= get_bloginfo('name') ?>"
                                >
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