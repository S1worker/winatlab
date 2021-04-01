jQuery(document).ready(function() {

    /**
     * Submit
     */
    $('.wpcf7-form').on('submit', function (e) {
        var frm = $(this),
            btn = $(frm).find('[type="submit"]'),
            btnText = $(btn).text();
        $(btn).addClass('waiting');
        $(btn).append('<span class="btn-loading"><i>.</i><i>.</i><i>.</i></span>');
        $(frm).find('input,button,select,textarea,checkbox').attr('disabled','disabled');
        document.addEventListener( 'wpcf7submit', function( event ) {
            $(btn).text(btnText);
            $(btn).removeAttr('disabled');
            $(btn).removeClass('waiting');
            $(frm).find('input,button,select,textarea')
                .removeAttr('disabled')
                .removeAttr('checked');
        });
    });

});