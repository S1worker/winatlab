<?php
defined( 'ABSPATH' ) || exit;
/**
 * The footer for our theme
 * @package winatlab
 */
?>
            </main>
            <!-- END CONTENT-->

        </div>
        <!-- end wrapper -->

        <?php
            /**
             * footer_parts hook
             *
             * @hooked winatlab_footer_TagFooterForm - 10
             * @hooked winatlab_footer_TagFooterOpen - 20
             * @hooked winatlab_footer_TagFooterInner - 30
             * @hooked winatlab_footer_TagFooterClose - 100
             *
             */
            do_action('footer_parts');
        ?>

    </div>
    <!-- end container -->

    <?php wp_footer(); ?>

</body>
</html>
