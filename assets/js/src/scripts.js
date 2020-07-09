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
    wheelloop(6000);

// ------------------------------------BURGER SCRIPT---------------------------------------------------
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

// ------------------------------------------SCRIPT ARROW SCROLL-----------------------------------
    var btn = $("#top_window");
    var elem = $(".h1Plan");
    if ($(window).width() > 1250) {
        $(window).scroll(function() {

            var scrollTop = $(this).scrollTop();
            console.log(scrollTop);
            if(scrollTop > 6400) {
                btn.fadeIn(500);
            }else {
                btn.fadeOut(500);
            }
            if(scrollTop > 900) {
                elem.addClass('fadeIn');
            }
            else {
                elem.removeClass('fadeIn');
            }
            if(scrollTop > 1100) {
                $('.divPlan').addClass('fadeIn');
            }
            else {
                $('.divPlan').removeClass('fadeIn');
            }
            if(scrollTop > 300) {
                $('.pilier3').addClass('slideExpandUp');
            }
            else {
                $('.pilier3').removeClass('slideExpandUp');
            }
            if(scrollTop > 300) {
                $('.pilier2').addClass('slideExpandUp');
            }
            else {
                $('.pilier2').removeClass('slideExpandUp');
            }
            if(scrollTop > 700) {
                $('.laurierW').addClass('fadeIn2');
            }
            else {
                $('.laurierW').removeClass('fadeIn2');
            }
            if(scrollTop > 1500) {
                $('.scrollVase').addClass('slideExpandUp');
            }
            else {
                $('.scrollVase').removeClass('slideExpandUp');
            }
            if(scrollTop > 2000) {
                $('.diagnosticForm').addClass('fadeIn');
            }
            else {
                $('.diagnosticForm').removeClass('fadeIn');
            }
            if(scrollTop > 1700) {
                $('#diagTotal').addClass('stretchRight');
            }
            else {
                $('#diagTotal').removeClass('stretchRight');
            }
            if(scrollTop > 2400) {
                $('.scrollCircle').addClass('slideExpandUp');
            }
            else {
                $('.scrollCircle').removeClass('slideExpandUp');
            }
            if(scrollTop > 3000) {
                $('#priorityTotal').addClass('stretchRight');
            }
            else {
                $('#priorityTotal').removeClass('stretchRight');
            }
            if(scrollTop > 3100) {
                $('.mainB2c').addClass('fadeIn');
            }
            else {
                $('.mainB2c').removeClass('fadeIn');
            }
            if(scrollTop > 4200) {
                $('.threeProducts').addClass('fadeIn');
            }
            else {
                $('.threeProducts').removeClass('fadeIn');
            }
            if(scrollTop > 4600) {
                $('.persona').addClass('fadeIn');
            }
            else {
                $('.persona').removeClass('fadeIn');
            }
            if(scrollTop > 5400) {
                $('.scrollTemple').addClass('slideExpandUp');
            }
            else {
                $('.scrollTemple').removeClass('slideExpandUp');
            }
            if(scrollTop > 5500) {
                $('#mixTotal').addClass('stretchRight');
            }
            else {
                $('#mixTotal').removeClass('stretchRight');
            }
            if(scrollTop > 6100) {
                $('.divMix').addClass('fadeIn');
            }
            else {
                $('.divMix').removeClass('fadeIn');
            }
            if(scrollTop > 6400) {
                $('.pilier').addClass('slideExpandUp');
            }
            else {
                $('.pilier').removeClass('slideExpandUp');
            }
        });
    };


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





});






