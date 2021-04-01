<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package winatlab
 */

get_header();

?>
<!-- Build -->
<div class="build production__page">

    <!-- container -->
    <div class="container-fluid">

        <!-- row -->
        <div class="row">

            <!-- col -->
            <div class="col-sm-12">

                <!-- Title -->
                <h1 class="build__title">
                    <?= _e('Les équipements<br> <span>WiNatLab</span>', 'winatlab'); ?>
                </h1>
                <!-- End Title -->

                <!-- List -->
                <ul class="production__list row">

                    <?php while ( have_posts() ) : the_post(); ?>

                        <li>

                            <!-- Item -->
                            <div class="production__list-item">

                                <!-- Header -->
                                <a href="<?= get_the_permalink() ?>" class="production__list-item--header">

                                    <!-- Item > Image -->
                                    <div class="production__list-item--image">
                                        <?= kama_thumb_img( 'w=300 &h=300' ) ?>
                                    </div>
                                    <!-- End Item > Image -->

                                    <!-- Item > Title -->
                                    <span class="production__list-item--title">
                                        <?= get_the_title() ?>
                                    </span>
                                    <!-- End Item > Title -->

                                    <?php if( has_excerpt() ) : ?>
                                    <!-- Item > Excerpt -->
                                    <div class="production__list-item--excerpt">
                                        <?= the_excerpt() ?>
                                    </div>
                                    <!-- End Item > Excerpt -->
                                    <?php endif; ?>

                                </a>
                                <!-- End Header -->

                                <!-- Footer -->
                                <div class="production__list-item--footer">
                                    <a href="<?= get_the_permalink() ?>" class="btn btn-sm btn-opacity">
                                        <?= _e( 'En savoir plus', 'winatlab' ) ?>
                                    </a>
                                </div>
                                <!-- End Footer -->

                            </div>
                            <!-- End Item -->

                        </li>

                    <?php endwhile; ?>

                </ul>
                <!-- End List -->

                <!-- Footer -->
                <div class="production__page-footer">
                    <a href="<?= get_the_permalink( 11 ) ?>" class="btn">
                        <?= _e( 'Contact', 'winatlab' ) ?>
                    </a>
                </div>
                <!-- End Footer -->

            </div>
            <!-- end col -->

        </div>
        <!-- end row -->

    </div>
    <!-- end container -->

</div>
<!-- Build -->
<?php
get_footer();
