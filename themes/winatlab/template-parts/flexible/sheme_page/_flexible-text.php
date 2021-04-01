<?php
defined( 'ABSPATH' ) || exit;

$field = $args['field'];

?>

<!-- Content -->
<div class="sheme_page__flextext margin__bottom-<?= $field['margin_bottom'] ?> <?= $field['class'] ?>">
    <?= $field['text'] ?>

    <?php if( $field['button'] ) : ?>

        <!-- Footer -->
        <div class="sheme_page__flextext-footer">
            <a href="<?= $field['button']['url'] ?>" class="btn"><?= $field['button']['title'] ?></a>
        </div>
        <!-- End Footer -->

    <?php endif; ?>

</div>
<!-- End Content -->