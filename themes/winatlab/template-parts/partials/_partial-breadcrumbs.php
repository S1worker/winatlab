<?php
/*
 * Partial: Breadcrumbs
 */
defined( 'ABSPATH' ) || exit;
?>

<?php if (function_exists('rank_math_the_breadcrumbs')) : ?>
<!-- Section -->
<section class="breadcrumb">

    <!-- container -->
    <div class="container-fluid">

        <!-- row -->
        <div class="row">

            <!-- col -->
            <div class="col-xs-12">

                <?= rank_math_the_breadcrumbs() ?>

            </div>
            <!-- end col -->

        </div>
        <!-- end row -->

    </div>
    <!-- end container -->

</section>
<!-- End Section -->
<?php endif; ?>