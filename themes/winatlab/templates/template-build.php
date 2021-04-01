<?php
/*
Template Name: Build Page
Template Post Type: page, post, partners
*/

get_header();
?>

<!-- Build -->
<div class="build <?= get_field( 'flexible_class', get_the_ID() ) ?> padding-top-<?= get_field( 'flexible_padding_top', get_the_ID() ) ?>">

    <!--    --><?//= get_template_part(
    //        'template-parts/partials/_partial',
    //        'pagehead',
    //        [
    //                'class' => 'pagehead__centered'
    //        ]
    //    ); ?>

    <?php
    $flexible = get_field( 'flexible', get_the_ID() );

    if( $flexible ) :
        foreach ($flexible as $item) :
            get_template_part(
                'template-parts/flexible/_flexible',
                $item['acf_fc_layout'],
                [
                    'field' => $item
                ]
            );
        endforeach;
    endif;

    ?>

</div>
<!-- Build -->

<?php
get_footer();