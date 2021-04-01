<?php
defined( 'ABSPATH' ) || exit;

$field = $args['field'];
?>

<?php if(is_array($field['items'] )) : ?>

    <!-- Section -->
    <section class="faq margin__bottom-<?= $field['margin_bottom'] ?>">

    <!-- container -->
    <div class="container-fluid">

    <!-- row -->
    <div class="row">

        <!-- col -->
        <div class="col-sm-12">

            <!-- Content -->
            <h2 class="faq__title">
                <?php echo $field['title']; ?>
            </h2>
            <!-- End Content -->

                <!-- Accordion -->
                <ul class="accordion faq_page__accordion">

                    <?php foreach ($field['items'] as $index => $item){
                        ?>
                        <li>
                            <!-- Title -->
                            <h5 class="accordion-title faq_page__accordion-title">
                                <?= $item['title'] ?>
                            </h5>
                            <!-- End Title -->

                            <!-- Contant -->
                            <div class="accordion-content faq_page__accordion-content">

                                <!-- Body -->
                                <div class="accordion-content-body">
                                    <?= $item['text'] ?>
                                </div>
                                <!-- End Body -->

                            </div>
                            <!-- End Contant -->

                        </li>
                    <?php } ?>

                </ul>
                <!-- End Accordion -->

        </div>
        <!-- end col -->

    </div>
    <!-- end row -

</section>
<!-- End Section -->

<?php endif; ?>