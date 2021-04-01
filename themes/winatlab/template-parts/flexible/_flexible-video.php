<?php
defined( 'ABSPATH' ) || exit;

$field = $args['field'];

?>

<?php if( ! $args['column'] ) : ?>
<!-- Section -->
<section class="flexible_video">

    <!-- container -->
    <div class="container-fluid">

        <!-- row -->
        <div class="row">

            <!-- col -->
            <div class="col-xs-12">
<?php endif; ?>

    <!-- Content -->
    <div class="flexible_video-content">

        <?php if( !empty( $field['title'] ) ) : ?>
            <!-- Title -->
            <h2 class="flexible_video-content--title">
                <?= $field['title'] ?>
            </h2>
            <!-- End Title -->
        <?php endif; ?>

        <!-- Video -->
        <div class="flexible_video-content--video videoPsevdoLink" data-video="<?= $field['url'] ?>" <?= (!empty($field['maxwidth'])) ? 'style="margin-left:auto;margin-right:auto;max-width:'.$field['maxwidth'].'px"' : '' ?>>
            <figure class="play"></figure>
            <img
                    src="<?= $field['poster'] ?>"
                    alt="<?= get_bloginfo('name') ?>"
                    title="<?= get_bloginfo('name') ?>"
            >
        </div>
        <!-- End Video -->

        <?php if( ! empty( $field['text_after'] ) ) : ?>
            <!-- Footer -->
            <div class="flexible_video-content--footer">

                <?= $field['text_after'] ?>

            </div>
            <!-- End Footer -->
        <?php endif; ?>

    </div>
    <!-- Content -->

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