<?php
/*
 * Partial: Socials
 */
defined( 'ABSPATH' ) || exit;
?>
<?php
$socials = get_field( 'set_socials', 'theme_settings' );
if( $socials['list'] ) :
    ?>
    <!-- Socials -->
    <ul class="<?= ( $args['class'] ) ? $args['class'] : 'socials' ?>">
        <?php foreach ( $socials['list'] as $social ) : ?>
            <li>
                <a href="<?= $social['link'] ?>" target="_blank">

                    <?php if( 'image' == $social['icon_type'] ) : ?>
                        <img
                                src="<?= $social['icon'] ?>"
                                alt="<?= get_bloginfo('name') ?>"
                                title="<?= get_bloginfo('name') ?>"
                                class="svg"
                        >
                    <?php else: ?>
                        <?= $social['icon_svg'] ?>
                    <?php endif; ?>

                </a>
            </li>
        <?php endforeach; ?>
    </ul>
    <!-- End Socials -->
<?php endif; ?>