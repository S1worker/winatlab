<?php
defined( 'ABSPATH' ) || exit;

$field = $args['field'];

?>

<?php if( ! $args['column'] ) : ?>
    <!-- Section -->
    <section class="flexible_number__list">

        <!-- container -->
        <div class="container-fluid">

            <!-- row -->
            <div class="row">

                <!-- col -->
                <div class="col-xs-12">
<?php endif; ?>

    <!-- List -->
    <ol class="flexible_number__list-list">

        <?php foreach ( $field['list'] as $item ) : ?>
            <li>
                <?= $item['text'] ?>
            </li>
        <?php endforeach; ?>

    </ol>
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