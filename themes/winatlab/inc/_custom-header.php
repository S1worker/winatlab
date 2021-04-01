<?php
defined( 'ABSPATH' ) || exit;
/**
 * @winatlab_header_TagHeaderOpen
*/
add_action( 'header_parts', 'winatlab_header_TagHeaderOpen', 10 );
function winatlab_header_TagHeaderOpen() {
	?>
  	<!-- HEADER -->
    <header class="header">
	<?php
};
/**
 * @winatlab_header_TagHeaderInner
*/
add_action( 'header_parts', 'winatlab_header_TagHeaderInner', 20 );
function winatlab_header_TagHeaderInner() {
	?>
    <?php
    $translations   = wpm_get_languages();
    $currentLang    = wpm_get_language();
    ?>
    <!-- Mobile Row -->
    <div class="header__mobile">

        <!-- container -->
        <div class="container-fluid">

            <!-- row -->
            <div class="row">

                <!-- col -->
                <div class="col-xs-12">

                    <!-- Row -->
                    <div class="header__mobile-row">

                        <?php
                        /*
                         * Args Nav Menu
                         */
                        $args = array(
                            'theme_location'    => 'header-menu-mobile',
                            'container'         => '',
                            'container_class'   => '',
                            'menu_class'        => 'header__mobile-nav',
                            'items_wrap'        => '<ul class="%2$s">%3$s</ul>'
                        );
                        wp_nav_menu($args);
                        ?>

                        <!-- Lang -->
                        <div class="header__mobile-lang">

                            <!-- button -->
                            <button type="button" class="langDropdown">
                                <?= $currentLang ?>
                            </button>
                            <!-- end button -->

                            <!-- list -->
                            <ul>
                                <?php foreach ($translations as $code => $translation) : ?>
                                    <li class="<?= ($currentLang == $code) ? 'active' : '' ?>">
                                        <a href="<?= esc_url(wpm_translate_current_url($code)) ?>">
                                            <span><?= $code ?></span>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                            <!-- end list -->

                        </div>
                        <!-- End Lang -->

                    </div>
                    <!-- End Row -->

                </div>
                <!-- end col -->

            </div>
            <!-- end row -->

        </div>
        <!-- end container -->

    </div>
    <!-- End Mobile Row -->

    <!-- container -->
    <div class="container-fluid">

        <!-- row -->
        <div class="row">

            <!-- col -->
            <div class="col-xs-12">

                <!-- Row -->
                <div class="header__row">

                    <!-- Row > Left -->
                    <div class="header__row-left">

                        <!-- logo -->
                        <a href="<?= home_url() ?>" class="header__logo">
                            <img
                                    src="<?= get_theme_mod( 'logo' ) ?>"
                                    alt="<?= get_bloginfo('name') ?>"
                                    title="<?= get_bloginfo('name') ?>"
                            >
                        </a>
                        <!-- end logo -->

                    </div>
                    <!-- End Row > Left -->

                    <!-- Row > Right -->
                    <div class="header__row-right">

                        <?php
                        /*
                         * Args Nav Menu
                         */
                        $args = array(
                            'theme_location'    => 'header-menu',
                            'container'         => 'nav',
                            'container_class'   => 'header__nav',
                            'menu_class'        => 'header__nav-list',
                            'items_wrap'        => '<ul class="%2$s">%3$s</ul>'
                        );
                        wp_nav_menu($args);
                        ?>

                        <!-- Lang -->
                        <ul class="header__lang">
                            <?php foreach ($translations as $code => $translation) : ?>
                                <li class="<?= ($currentLang == $code) ? 'active' : '' ?>">

                                    <?php if( $currentLang == $code ) : ?>
                                        <span><?= $code ?></span>
                                    <?php else: ?>

                                        <a href="<?= esc_url(wpm_translate_current_url($code)) ?>">
                                            <span><?= $code ?></span>
                                        </a>

                                    <?php endif; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        <!-- End Lang -->

                    </div>
                    <!-- End Row > Right -->

                    <!-- Btn Mobile -->
                    <button class="header__btnmobile">
                        <span data-title="<?= _e( 'Close', 'winatlab' ) ?>">
                            <b><?= _e( 'Menu', 'winatlab' ) ?></b>
                        </span>
                        <div>
                            <i></i>
                            <i></i>
                            <i></i>
                        </div>
                    </button>
                    <!-- End Btn Mobile -->

                </div>
                <!-- End Row -->

            </div>
            <!-- end col -->

        </div>
        <!-- end row -->

    </div>
    <!-- end container -->

    <!-- Mobile Menu -->
    <div class="header__mobilemenu">

        <!-- Header -->
        <div class="header__mobilemenu-header">

            <?php
            /*
             * Args Nav Menu
             */
            $args = array(
                'theme_location'    => 'header-menu',
                'container'         => '',
                'container_class'   => '',
                'menu_class'        => 'header__mobilemenu-list',
                'items_wrap'        => '<ul class="%2$s">%3$s</ul>'
            );
            wp_nav_menu($args);
            ?>

            <!-- Phone -->
            <div class="header__mobilemenu-phone">
                <?php
                $phone = get_field( 'set_phone', 'theme_settings' );
                if( $phone['tel'] ) :
                    ?>
                    <!-- Tel -->
                    <a href="tel:<?= $phone['tel'] ?>">
                        <svg width="23" height="24" viewBox="0 0 23 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M21.1841 15.8002C19.7662 15.8002 18.3753 15.5704 17.0578 15.1148C16.4164 14.885 15.6862 15.0624 15.2612 15.5099L12.6494 17.566C9.65513 15.8969 7.73879 13.9013 6.15858 10.7929L8.07878 8.13211C8.56173 7.62816 8.7356 6.89038 8.52696 6.20098C8.09037 4.81815 7.86629 3.36678 7.86629 1.89122C7.86629 0.84704 7.05107 -0.00362396 6.0504 -0.00362396H1.81589C0.815219 0.000407618 0 0.851071 0 1.89525C0 14.0827 9.50445 24.0004 21.1841 24.0004C22.1848 24.0004 23 23.1497 23 22.1056V17.695C23 16.6508 22.1848 15.8002 21.1841 15.8002Z" fill="#0069B4"/>
                        </svg>
                        <?= $phone['tel'] ?>
                    </a>
                    <!-- End Tel -->
                <?php endif; ?>
            </div>
            <!-- End Phone -->

        </div>
        <!-- End Header -->

        <?php get_template_part('template-parts/partials/_partial', 'socials', [ 'class' => 'header__mobilemenu-socials' ]) ?>

    </div>
    <!-- End Mobile Menu -->

	<?php
};
/**
 * @winatlab_header_TagHeaderClose
*/
add_action( 'header_parts', 'winatlab_header_TagHeaderClose', 30 );
function winatlab_header_TagHeaderClose() {
	?>
  	</header>
  	<!-- END HEADER -->
	<?php
};
