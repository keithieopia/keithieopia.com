(function($){
    $('.tooltip').each(function() {
        $(this).mouseenter(function(){
            $(this).find('.tooltip-text').fadeIn('slow');
        })
        .mouseleave(function(){
            $(this).find('.tooltip-text').fadeOut('slow');
        });
    });
})(jQuery);
