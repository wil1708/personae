// -------------------------------------FUNCTIONS LIST-----------------------------------------------
function wheelloop() {
    $('.wheel').animate({
        top: '70%',
    },500);
    $('.wheel').hide(0);
    $('.wheel').animate( {
        top: '1%',
    },250);
    $('.wheel').show(0);
    wheelloop();
};
// ---------------------------------------SCRIPT WHEELOOP------------------------------------------------------



// ------------------------------------------SCRIPT ARROW SCROLL-----------------------------------------------
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

wheelloop();


