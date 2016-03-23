(function ($) {


    // Create a clone of the menu, right next to original.
    $('.menu').addClass('original').clone().insertAfter('.menu').addClass('cloned').css('position','fixed').css('top','0').removeClass('original').hide();

    scrollIntervalID = setInterval(stickIt, 10);


    function stickIt() {

        var orgElementPos = $('.original').offset();
        orgElementTop = orgElementPos.top;

        if ($(window).scrollTop() >= (orgElementTop)) {
            if($(window).width() >= 641) {

                // scrolled past the original position; now only show the cloned, sticky element.

            // Cloned element should always have same left position and width as original element.
            orgElement = $('.original');
            coordsOrgElement = orgElement.offset();
            leftOrgElement = coordsOrgElement.left;
            widthOrgElement = orgElement.css('width');
            $('.cloned').css('left',leftOrgElement+'px').css('top',0).css('width',widthOrgElement).show();
            $('.original').css('visibility','hidden');
         }
            if($(window).width() <= 641) {
                // not scrolled past the menu; only show the original menu.
                $('.cloned').hide();
                $('.original').css('visibility','visible');
            }



            }
            else {
            // not scrolled past the menu; only show the original menu.
            $('.cloned').hide();
            $('.original').css('visibility','visible');
        }
    }



    function isMobileWidth() {
        if($(window).width() <= 641) {
            $('#navigation').addClass('is-sticky');
            $('#menu').hide();

        } else {
            $('#navigation').removeClass('is-sticky');
            $('#menu').show();
        }
    }
    isMobileWidth();

    $(window).resize(function() {
        // This will fire each time the window is resized:
        isMobileWidth();

    });

    $('#nav-icon').click(function() {
        if($('#navigation').hasClass('is-sticky')) {
            $(this).toggleClass('open');
            $('#menu').slideToggle('slow');
        }
    });





})(jQuery);