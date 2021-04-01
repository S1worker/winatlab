<?php
defined( 'ABSPATH' ) || exit;

$field = $args['field'];

?>
<!-- Section -->
<section class="flexible_team margin__bottom-<?= $field['margin_bottom'] ?>">

    <!-- container -->
    <div class="container-fluid">

        <!-- row -->
        <div class="row">

            <!-- col -->
            <div class="col-xs-12">

                <?php if( ! empty( $field['title'] ) ) : ?>

                    <!-- Title -->
                    <h2 class="flexible_team__title">
                        <?= $field['title'] ?>
                    </h2>
                    <!-- End Title -->

                <?php endif; ?>

                <?php
                $team = new WP_Query(
                    [
                        'posts_per_page'    => $field['count'],
                        'post_type'         => 'team',
                        'post_status'       => 'publish',
                    ]
                );
                if( $team->have_posts() ) :
                ?>

                    <!-- List -->
                    <ul class="flexible_team__list row">

                        <?php while ( $team->have_posts() ) : $team->the_post(); ?>

                            <li>

                                <!-- Item -->
                                <div class="flexible_team__list-item">

                                    <!-- Image -->
                                    <div class="flexible_team__list-item--image">
                                        <?php
                                        if( has_post_thumbnail() ) echo kama_thumb_img( 'w=120 &h=120' );
                                        ?>
                                    </div>
                                    <!-- End Image -->

                                    <!-- Title -->
                                    <span><?= the_title() ?></span>
                                    <!-- End Title -->

                                    <!-- Content -->
                                    <div class="flexible_team__list-item--content">
                                        <?= the_content() ?>
                                    </div>
                                    <!-- End Content -->

                                </div>
                                <!-- End Item -->

                            </li>

                        <?php endwhile; wp_reset_postdata(); ?>

                    </ul>
                    <!-- End List -->

                <?php endif; ?>

            </div>
            <!-- end col -->

        </div>
        <!-- end row -->

    </div>
    <!-- end container -->

</section>
<!-- End Section -->