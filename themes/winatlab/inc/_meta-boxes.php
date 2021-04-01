<?php
defined( 'ABSPATH' ) || exit;

/**
 * Add Meta Box
 * @add_meta_boxes
 * @winatlab_post_meta
 */
add_action( 'add_meta_boxes', 'winatlab_post_meta', 10 );
function winatlab_post_meta(){

    add_meta_box(
        'news_popular',
        __( 'Attached articles', 'winatlab' ),
        'winatlab_news_popular_callback',
        'news',
        'side',
        'core'
    );
}
/**
 * Meta Save
 * @save_post
 */
add_action( 'save_post', 'winatlab_meta_boxes_save_postdata' );
function winatlab_meta_boxes_save_postdata( $post_id ) {

    if ( ( isset ( $_POST['news_popular'] ) ) && ( ! wp_verify_nonce( $_POST['winatlab_nonce'], basename( __FILE__ ) ) ) )
        return;

    if ( ( isset ( $_POST['news_favorite'] ) ) && ( ! wp_verify_nonce( $_POST['winatlab_nonce'], basename( __FILE__ ) ) ) )
        return;

    if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE )
        return;

    if( ! current_user_can( 'edit_post', $post_id ) )
        return;

    if( isset( $_POST['news_popular'] ) ) {
        update_post_meta( $post_id, 'news_popular', 'yes' );
    } else {
        update_post_meta( $post_id, 'news_popular', '' );
    }

    if( isset( $_POST['news_favorite'] ) ) {
        update_post_meta( $post_id, 'news_favorite', 'yes' );
    } else {
        update_post_meta( $post_id, 'news_favorite', '' );
    }

}

/**
 * Meta Html Popular and Favorite
 * @winatlab_news_popular_callback
 */
function winatlab_news_popular_callback( $post, $meta ){

    wp_nonce_field( basename( __FILE__ ), 'winatlab_nonce' );
    $value = get_post_meta( $post->ID );
    ?>
    <div style="padding: 8px 0 0 0">

        <div style="margin-bottom: 12px">
            <h5>
                <?= _e( 'Attach an article?', 'winatlab' ) ?>
            </h5>
            <input
                    type="checkbox"
                    name="news_popular"
                    id="news_popular"
                    value="yes"
                <?= ( $value['news_popular'] ) ? checked( $value['news_popular'][0], 'yes' ) : '' ?>
            />
            <?= _e( 'Yes', 'winatlab' ) ?>
            <small style="display: block; opacity: .75; font-size: 13px;padding: 5px 0 0 0">
                <?= _e( 'Check if you want to pin the article', 'winatlab' ) ?>
            </small>
        </div>

        <div>
            <h5>
                <?= _e( 'Popular article?', 'winatlab' ) ?>
            </h5>
            <input
                    type="checkbox"
                    name="news_favorite"
                    id="news_favorite"
                    value="yes"
                <?= ( $value['news_favorite'] ) ? checked( $value['news_favorite'][0], 'yes' ) : '' ?>
            />
            <?= _e( 'Yes', 'winatlab' ) ?>
            <small style="display: block; opacity: .75; font-size: 13px;padding: 5px 0 0 0">
                <?= _e( 'Mark if this is a popular article', 'winatlab' ) ?>
            </small>
        </div>

    </div>
    <?php
}

/**
 * Add Columns
 * manage_{$taxonomy}_posts_columns
 */
add_filter('manage_news_posts_columns', 'taxonomy_add_columns');
function taxonomy_add_columns($columns) {

    $columns['popular'] = __('Popular', 'winatlab');
    $columns['favorite'] = __('Favorite', 'winatlab');

//    return array_merge ( $columns, array (
//        'name' => __ ('name'),
//        'designation' => __ ( 'Designation' ),
//        'image'   => __ ( 'Image' ),
//        'date' => __('Date')
//    ) );

    return $columns;

}

/**
 * Add Columns
 * Content
 * manage_{$taxonomy}_posts_custom_column
 */
add_action( 'manage_news_posts_custom_column', 'taxonomy_column_content', 10, 3);
function taxonomy_column_content( $column, $post_id ){

    switch ( $column ) :
        case 'popular' :
            $value = get_post_meta( $post_id, 'news_popular', true );
            echo $value;
            break;
        case 'favorite' :
            $value = get_post_meta( $post_id, 'news_favorite', true );
            echo $value;
            break;
    endswitch;

}
