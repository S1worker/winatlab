jQuery(document).ready(function() {

    /**
     * Accordion
     */
    if( $('.accordion').length ) {

        /**
         * Click
         */
        $(document).on('click', '.accordion-title', function(e) {

            const   $this = $(this),
                    $li = $this.parent();

            if( $li.hasClass( 'active' ) ) {
                $li.removeClass('active');
            }else{
                $('.accordion').find('.active').removeClass('active');
                $li.addClass('active');
            }

        });

    }

});