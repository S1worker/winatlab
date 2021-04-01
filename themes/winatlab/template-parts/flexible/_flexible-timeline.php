<?php
defined( 'ABSPATH' ) || exit;

$field = $args['field'];

?>

<?php if( $field['list'] ) : ?>

    <!-- Section -->
    <section class="flexible_timeline">

        <!-- container -->
        <div class="container-fluid">

            <!-- row -->
            <div class="row">

                <!-- col -->
                <div class="col-xs-12">

                    <?php foreach ( $field['list'] as $item ) : ?>

                        <!-- Row -->
                        <div class="flexible_timeline-row">

                            <!-- Title -->
                            <h5 class="flexible_timeline-row--title">
                                <span><?= $item['title'] ?></span>
                            </h5>
                            <!-- End Title -->

                            <?php if( $item['time'] ) : ?>

                                <!-- List -->
                                <ul class="flexible_timeline-row--list">
                                    <?php echo ( 'right' == $item['position'] ) ? '<li class="position"></li>' : ''; ?>
                                    <?php foreach ( $item['time'] as $subitem ) : ?>
                                        <li>
                                            <!-- Item -->
                                            <div class="flexible_timeline-row--list---item">
                                                <span><?= $subitem['year'] ?></span>
                                                <?= $subitem['text'] ?>
                                            </div>
                                            <!-- End Item -->
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                                <!-- End List -->

                            <?php endif; ?>

                        </div>
                        <!-- End Row -->

                    <?php endforeach; ?>

                </div>
                <!-- end col -->

            </div>
            <!-- end row -->

        </div>
        <!-- end container -->

    </section>
    <!-- End Section -->

<?php endif; ?>