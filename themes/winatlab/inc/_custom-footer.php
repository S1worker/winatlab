<?php
defined( 'ABSPATH' ) || exit;
/**
 * @winatlab_footer_TagFooterOpen
*/
add_action( 'footer_parts', 'winatlab_footer_TagFooterOpen', 20 );
function winatlab_footer_TagFooterOpen() {
	?>
  	<!-- FOOTER -->
  	<footer class="footer">
	<?php
};
/**
 * @winatlab_footer_TagFooterInner
*/
add_action( 'footer_parts', 'winatlab_footer_TagFooterInner', 30 );
function winatlab_footer_TagFooterInner() {
	?>

    <!-- Top -->
    <div class="footer__top">

        <!-- container -->
        <div class="container-fluid">

            <!-- row -->
            <div class="row">

                <!-- col -->
                <div class="col-xs-12">

                    <!-- Row -->
                    <div class="footer__row">

                        <!-- Row > Left -->
                        <div class="footer__row-left">

                            <!-- logo -->
                            <a href="<?= home_url() ?>" class="footer__logo">
                                <img
                                        src="<?= get_theme_mod( 'logo_footer' ) ?>"
                                        alt="<?= get_bloginfo('name') ?>"
                                        title="<?= get_bloginfo('name') ?>"
                                >
                            </a>
                            <!-- end logo -->

                            <p>
                                <?php
                                echo sprintf( '%s <a href="%s" target="_blank">%s</a>',
                                    __( 'Go back to', 'winatlab' ),
                                    'http://www.tournaire.fr',
                                    'Tournaire.fr'
                                )
                                ?>
                            </p>

                        </div>
                        <!-- End Row > Left -->

                        <!-- Row > Center -->
                        <div class="footer__row-center">

                            <?php
                            /*
                             * Args Nav Menu
                             */
                            $args = array(
                                'theme_location'    => 'footer-menu-left',
                                'container'         => '',
                                'container_class'   => '',
                                'menu_class'        => 'footer__nav',
                                'items_wrap'        => '<ul class="%2$s">%3$s</ul>'
                            );
                            wp_nav_menu($args);
                            ?>

                            <?php
                            /*
                             * Args Nav Menu
                             */
                            $args = array(
                                'theme_location'    => 'footer-menu-center',
                                'container'         => '',
                                'container_class'   => '',
                                'menu_class'        => 'footer__nav',
                                'items_wrap'        => '<ul class="%2$s">%3$s</ul>'
                            );
                            wp_nav_menu($args);
                            ?>

                            <?php
                            /*
                             * Args Nav Menu
                             */
                            $args = array(
                                'theme_location'    => 'footer-menu-right',
                                'container'         => '',
                                'container_class'   => '',
                                'menu_class'        => 'footer__nav',
                                'items_wrap'        => '<ul class="%2$s">%3$s</ul>'
                            );
                            wp_nav_menu($args);
                            ?>

                        </div>
                        <!-- End Row > Center -->

                        <!-- Row > Right -->
                        <div class="footer__row-right">

                            <?php get_template_part('template-parts/partials/_partial', 'socials', [ 'class' => 'footer__socials' ]) ?>

                            <?php
                            $phone = get_field( 'set_phone', 'theme_settings' );
                            if( $phone['tel'] ) :
                            ?>
                                <!-- Tel -->
                                <a href="tel:<?= $phone['tel'] ?>" class="footer__tel">
                                    <?= $phone['tel'] ?>
                                </a>
                                <!-- End Tel -->
                            <?php endif; ?>
                        </div>
                        <!-- End Row > Right -->

                    </div>
                    <!-- End Row -->

                </div>
                <!-- end col -->

            </div>
            <!-- end row -->

        </div>
        <!-- end container -->

    </div>
    <!-- End Top -->

    <!-- Bottom -->
    <div class="footer__bottom">

        <!-- container -->
        <div class="container-fluid">

            <!-- row -->
            <div class="row">

                <!-- col -->
                <div class="col-xs-12">

                    <?php
                    /*
                     * Args Nav Menu
                     */
                    $args = array(
                        'theme_location'    => 'footer-menu-bottom',
                        'container'         => '',
                        'container_class'   => '',
                        'menu_class'        => 'footer__nav-bottom',
                        'items_wrap'        => '<ul class="%2$s">%3$s</ul>'
                    );
                    wp_nav_menu($args);
                    ?>

                </div>
                <!-- end col -->

            </div>
            <!-- end row -->

        </div>
        <!-- end container -->

    </div>
    <!-- End Bottom -->

	<?php
};
/**
 * @winatlab_footer_TagFooterClose
*/
add_action( 'footer_parts', 'winatlab_footer_TagFooterClose', 100 );
function winatlab_footer_TagFooterClose() {
	?>
  	</footer>
  	<!-- END FOOTER -->
	<?php
};
