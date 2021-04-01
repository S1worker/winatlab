<?php
defined( 'ABSPATH' ) || exit;

$field = $args['field'];

?>

<!-- Content -->
<div class="sheme_page__fleximage margin__bottom-<?= $field['margin_bottom'] ?> <?= $field['class'] ?>">

    <?php if( ! empty( $field['title'] ) ) : ?>

        <!-- Title -->
        <h2 class="sheme_page__fleximage-title">
            <?= $field['title'] ?>
        </h2>
        <!-- End Title -->

    <?php endif; ?>

    <!-- Image -->
    <div class="sheme_page__fleximage-image <?= $field['position'] ?>">
        <?= wp_get_attachment_image( $field['image'], 'full' ) ?>
    </div>
    <!-- End Image -->

</div>
<!-- End Content -->