<?php
defined( 'ABSPATH' ) || exit;

$field = $args['field'];

?>

<!-- Content -->
<div class="sheme_page__flexfaq margin__bottom-<?= $field['margin_bottom'] ?> <?= $field['class'] ?>">

    <?php if( ! empty( $field['title'] ) ) : ?>

        <!-- Title -->
        <h2 class="h1 sheme_page__flexfaq-title">
            <?= $field['title'] ?>
        </h2>
        <!-- End Title -->

    <?php endif; ?>

    <?php if( $field['list'] ) : ?>
        <!-- Accordion -->
        <ul class="accordion faq_page__accordion sheme_page__flexfaq-accordion">

            <?php foreach ( $field['list'] as $item ) : ?>
                <li>

                    <!-- Title -->
                    <h5 class="accordion-title faq_page__accordion-title">
                        <?= $item['question'] ?>
                    </h5>
                    <!-- End Title -->

                    <!-- Contant -->
                    <div class="accordion-content faq_page__accordion-content">

                        <!-- Body -->
                        <div class="accordion-content-body">
                            <?= $item['answer'] ?>
                        </div>
                        <!-- End Body -->

                    </div>
                    <!-- End Contant -->

                </li>
            <?php endforeach; ?>

        </ul>
        <!-- End Accordion -->
    <?php endif; ?>



</div>
<!-- End Content -->