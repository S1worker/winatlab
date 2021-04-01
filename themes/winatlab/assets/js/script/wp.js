jQuery(document).ready(function() {

    /**
     * Video
     */
    if( $('.text__style .wp-block-video').length ) {

        $( '.text__style .wp-block-video' ).each(function( index ) {

            const   $this = $(this),
                    video = $this.find('video');

            $this.append('<div class="btn-play-content"><div class="btn-play"></div></div>');

        });

        /**
         * Click Play
         */
        $(document).on('click', '.btn-play-content', function(e) {

            const   $this = $(this),
                    video = $this.parent().find('video');

            if( $this.hasClass( 'active' ) ) {
                $this.removeClass('active');
                video.get(0).pause();
            }else{
                $this.addClass('active');
                video.get(0).play();
            }




        });

    }

});