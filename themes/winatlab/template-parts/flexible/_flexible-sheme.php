<?php
defined( 'ABSPATH' ) || exit;

$field = $args['field'];

?>

<!-- Section -->
<section class="flexible_sheme margin__bottom-<?= $field['margin_bottom'] ?> <?= $field['class'] ?>">

    <?php
    get_template_part('template-parts/pages/home/_home',
        'sheme',
        [
            'page_id'         => get_option('page_on_front'),
            'title'           => $field['title'],
            'button'          => $field['button'],
            'list'            => $field['list'],
            'legend_position' => $field['legend_position'],
            'title_font_size' => $field['title_font_size'],
        ]);

    ?>

</section>
<!-- End Section -->