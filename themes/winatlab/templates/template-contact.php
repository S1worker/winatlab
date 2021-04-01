<?php
/*
Template Name: Contact Page
Template Post Type: page
*/

get_header();
?>

<!-- Contact -->
<section class="contact_page">

    <!-- container -->
    <div class="container-fluid">

        <!-- row -->
        <div class="row">

            <!-- col -->
            <div class="col-sm-12">

                <!-- Content -->
                <div class="contact_page__content">

                    <?php echo the_content(); ?>

                </div>
                <!-- End Content -->

            </div>
            <!-- end col -->

        </div>
        <!-- end row -->

    </div>
    <!-- end container -->

</section>
<!-- End Contact -->

<?php
get_footer();