<?php
defined( 'ABSPATH' ) || exit;

$field = $args['field'];

?>

<?php if( $field['content'] ) : ?>

    <!-- Column -->
    <div class="flexible_column <?= $field['class'] ?> margin__bottom-<?= $field['margin_bottom'] ?>">

        <!-- container -->
        <div class="container-fluid">

            <!-- row -->
            <div class="row">

                <?php
                krsort($field['content']);
                foreach ( $field['content'] as $item ) :

                    echo '<div class="col-xs-12 col-md-' . $field['count'] . '">';

                        get_template_part(
                            'template-parts/flexible/_flexible',
                            $item['acf_fc_layout'],
                            [
                                'field'     => $item,
                                'column'    => true,
                            ]
                        );

                    echo '</div>';

                endforeach;
                ?>

            </div>
            <!-- end row -->

        </div>
        <!-- end container -->

    </div>
    <!-- End Column -->

<?php endif; ?>