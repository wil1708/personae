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
// ---------------------------------------SCRIPTS------------------------------------------------------
$(document).ready(function() {
    wheelloop();
});

