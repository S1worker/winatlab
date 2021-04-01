<?php
defined( 'ABSPATH' ) || exit;

$field = $args['field'];

?>

<?php if( ! $args['column'] ) : ?>
    <!-- Section -->
    <section class="flexible_icons_vertical">

        <!-- container -->
        <div class="container-fluid">

            <!-- row -->
            <div class="row">

                <!-- col -->
                <div class="col-xs-12">
<?php endif; ?>

    <?php if( $field['title'] ) : ?>
        <!-- Title -->
        <h2 class="flexible_icons_vertical__title">
            <?= $field['title'] ?>
        </h2>
        <!-- End Title -->
    <?php endif; ?>

    <?php if( $field['list'] ) : ?>
        <!-- List -->
        <ul class="flexible_icons_vertical__list">

            <?php $i = 1; foreach ($field['list'] as $item) : ?>
                <li class="<?= $item['color'] ?>">
                    <!-- Icon -->
                    <div class="icon">
                        <?php if( $item['icon'] ) : ?>

                            <img
                                    src="<?= $item['icon'] ?>"
                                    alt="<?= get_bloginfo('name') ?>"
                                    title="<?= get_bloginfo('name') ?>"
                            >

                        <?php else: ?>

                            <?= $i ?>

                        <?php endif; ?>
                    </div>
                    <!-- End Icon -->
                    <!-- Text -->
                    <div class="text">
                        <?= $item['text'] ?>
                    </div>
                    <!-- End Text -->
                </li>
            <?php $i++; endforeach; ?>

        </ul>
        <!-- End Item -->
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