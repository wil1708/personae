// -------------------------------------SCRIPT START-----------------------------------------------
$(document).ready(function(){
// ---------------------------------------SCRIPT WHEELOOP----------------------------------------------
    var wheelloop = function(number) {
            if (number <= 0) {
                return 1;
            }else {
                $('.wheel').animate({
                    top: '70%',
                },500);
                $('.wheel').hide(0);
                $('.wheel').animate( {
                    top: '1%',
                },250);
                $('.wheel').show(0);
                return (number * wheelloop(number - 1));
            }
        };
    wheelloop(9600);

// ------------------------------------BURGER SCRIPT----------------------------------------------------
    $('.fa-bars').click(function() {
        $(this).hide();
        $('.fa-times, .temple, .menuText').fadeIn(1500);
    });

    $('.fa-times').click(function() {
        $('.fa-times, .temple, .menuText').hide();
        $('.fa-bars').fadeIn(1000);
    });


// ------------------------------------------SCRIPT voir ma stratégie scroll----------------------------
    var btn2 = $("#seeStrategy");

    $(window).scroll(function() {

        var scrollTop = $(this).scrollTop();
        console.log(scrollTop);
        if(scrollTop > 6400) {
            btn.fadeIn(500);
        }else {
            btn.fadeOut(500);
        }
    });

// ------------------------------------------SCRIPT ARROW SCROLL---------------------------------------
    var btn = $("#top_window");

    $(window).scroll(function() {

        var scrollTop = $(this).scrollTop();
        console.log(scrollTop);
        if(scrollTop > 6400) {
            btn.fadeIn(500);
        }else {
            btn.fadeOut(500);
        }
    });

    btn.click(function() {
        $("html,body").animate({scrollTop: 0},'slow');
    });
// ---------------------------------------SCRIPT SMOOTH ANCHOR-----------------------------------------
    $('.contactScroll').click(function () {
        var link = $(this).attr('href');
        $('html,body').animate({scrollTop: $(link).offset().top }, 750);
    })
    $('.arrowMargin1').click(function () {
        var link = $(this).attr('href');
        $('html,body').animate({scrollTop: $(link).offset().top }, 750);
    })
    $('.arrowMargin2').click(function () {
        var link = $(this).attr('href');
        $('html,body').animate({scrollTop: $(link).offset().top }, 750);
    })
    $('.arrowMargin3').click(function () {
        var link = $(this).attr('href');
        $('html,body').animate({scrollTop: $(link).offset().top }, 750);
    })
})






