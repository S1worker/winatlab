<?php
/*
Template Name: FAQ Page
Template Post Type: page
*/

get_header();
?>

<!-- FAQ -->
<div class="faq_page">

    <!-- container -->
    <div class="container-fluid">

        <!-- row -->
        <div class="row">

            <!-- col -->
            <div class="col-sm-12">

                <!-- Content -->
                <div class="faq_page__content">

                    <?php echo the_content(); ?>

                </div>
                <!-- End Content -->

                <?php if( have_rows( 'faq_list', get_the_ID() ) ) : ?>
                    <!-- Accordion -->
                    <ul class="accordion faq_page__accordion">

                        <?php while ( have_rows( 'faq_list', get_the_ID() ) ) : the_row(); ?>
                            <li>

                                <!-- Title -->
                                <h5 class="accordion-title faq_page__accordion-title">
                                    <?= get_sub_field('title') ?>
                                </h5>
                                <!-- End Title -->

                                <!-- Contant -->
                                <div class="accordion-content faq_page__accordion-content">

                                    <!-- Body -->
                                    <div class="accordion-content-body">
                                        <?= get_sub_field('text') ?>
                                    </div>
                                    <!-- End Body -->

                                </div>
                                <!-- End Contant -->

                            </li>
                        <?php endwhile; ?>

                    </ul>
                    <!-- End Accordion -->
                <?php endif; ?>

            </div>
            <!-- end col -->

        </div>
        <!-- end row -->

    </div>
    <!-- end container -->

    <?php
    /**
     * Home: Production
     * @get_template_part
     */
    get_template_part(
        'template-parts/pages/home/_home',
        'production',
        [
            'page_id' => get_option('page_on_front'),
            'title' => __( 'Découvrez nos <span>machines</span>', 'winatlab' ),
        ]
    );
    ?>

</div>
<!-- End FAQ -->

<?php
get_footer();