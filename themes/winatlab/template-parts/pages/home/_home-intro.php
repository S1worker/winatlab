<?php 
/*
 * Home: Intro
 */
defined( 'ABSPATH' ) || exit;
?>

<?php if( ! get_field( 'intro_hide', $args['page_id'] ) ) : ?>
<!-- section -->
<section class="intro">

    <!-- container -->
    <div class="container-fluid">

        <!-- row -->
        <div class="row">

            <!-- col -->
            <div class="col-sm-12 col-md-6">

                <!-- Text -->
                <div class="intro__text">

                    <?= get_field( 'intro_text', $args['page_id'] ) ?>

                    <?php if( get_field( 'intro_link', $args['page_id'] ) ) : ?>
                        <!-- Link -->
                        <a href="<?= get_field( 'intro_link', $args['page_id'] )['url'] ?>" class="btn intro__text-link">
                            <?= get_field( 'intro_link', $args['page_id'] )['title'] ?>
                        </a>
                        <!-- End Link -->
                    <?php endif; ?>

                </div>
                <!-- End Text -->

            </div>
            <!-- end col -->

            <!-- col -->
            <div class="col-sm-12 col-md-6">

                <?php if( get_field( 'intro_image', $args['page_id'] ) ) : ?>

                    <?php echo wp_get_attachment_image(get_field( 'intro_image', $args['page_id'] ), 'full', false, ['alt' => get_bloginfo('name'), 'title' => get_the_title(), 'class' => 'intro__image']); ?>

                <?php endif; ?>

            </div>
            <!-- end col -->

        </div>
        <!-- end row -->

    </div>
    <!-- end container -->

</section>
<!-- end section -->
<?php endif; ?>