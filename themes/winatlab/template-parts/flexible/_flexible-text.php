<?php
defined( 'ABSPATH' ) || exit;

$field = $args['field'];
$button = $field['button'];
?>

<?php if( ! empty( $field['content'] ) ) : ?>

    <!-- Section -->
    <section class="flexible_text margin__bottom-<?= $field['margin_bottom'] ?> <?= $field['class'] ?>">

        <?php if( ! $args['column'] ) : ?>
        <!-- container -->
        <div class="container-fluid">

            <!-- row -->
            <div class="row">

                <!-- col -->
                <div class="col-xs-12 <?= ($args['column']) ? $args['class'] : '' ?>">
        <?php endif; ?>

                    <?php if( ! empty( $field['title'] ) ) : ?>
                        <!-- Title -->
                        <h2 class="flexible_text-title">
                            <?= $field['title'] ?>
                        </h2>
                        <!-- End Title -->
                    <?php endif; ?>

                    <!-- Content -->
                    <div class="flexible_text-content">
                        <?= $field['content'];

                        echo (isset($button['url'])) ? sprintf('<div class="btnWrap"><a href="%1$s" target="%2$s" class="btn btn-alt">%3$s</a></div>',
                            $button['url'],
                            ($button['target']) ? $button['target'] : '_self',
                            $button['title']) : '';
                        ?>
                    </div>
                    <!-- End Content -->

        <?php if( ! $args['column'] ) : ?>
                </div>
                <!-- end col -->

            </div>
            <!-- end row -->

        </div>
        <!-- end container -->
        <?php endif; ?>

    </section>
    <!-- End Section -->

<?php endif; ?>