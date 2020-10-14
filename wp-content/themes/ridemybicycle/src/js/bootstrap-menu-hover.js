/**
 * 
 */

(function( $ ){
    /**
     * Makes an element dropdown on hover
     */
    $(".btn-group, .dropdown").hover(
        function () {
            $('>.dropdown-menu', this).stop(true, true).fadeIn("fast");
            $(this).addClass('open');
        },
        function () {
            $('>.dropdown-menu', this).stop(true, true).fadeOut("fast");
            $(this).removeClass('open');
        }
    );
    

    /**
     * Makes the dropdown clickable
     */
    $('.navbar .dropdown > a').click(function(){
        location.href = this.href;
    });
})(jQuery);