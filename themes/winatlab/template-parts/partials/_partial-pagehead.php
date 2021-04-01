<?php
/*
 * Partial: Page Head
 */
defined( 'ABSPATH' ) || exit;
?>
<!-- Section -->
<section class="pagehead <?= $args['class'] ?> <?= get_field( 'page_title_align', get_the_ID() ) ?>">

    <!-- container -->
    <div class="container-fluid">

        <!-- row -->
        <div class="row">

            <!-- col -->
            <div class="col-xs-12">

                <!-- Title -->
                <h1 class="pagehead__title">
                    <?php
                    if( ! empty( get_field( 'page_title', get_the_ID() ) ) ) :

                        echo get_field( 'page_title', get_the_ID() );

                    else:

                        the_title();

                    endif;
                    ?>
                </h1>
                <!-- End Title -->

                <?php if( ! empty( get_field( 'page_excerpt', get_the_ID() ) ) ) : ?>

                    <!-- Excerpt -->
                    <div class="pagehead__excerpt">
                        <?= get_field( 'page_excerpt', get_the_ID() ) ?>
                    </div>
                    <!-- End Excerpt -->

                <?php endif; ?>

            </div>
            <!-- end col -->

        </div>
        <!-- end row -->

    </div>
    <!-- end container -->

</section>
<!-- End Section -->