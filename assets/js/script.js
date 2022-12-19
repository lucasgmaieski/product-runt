
// menu
$(document).ready(function(){
    $('#nav-icon2').click(function(){
        $(this).toggleClass('open');
        $('#navbarSupportedContent').toggleClass('show-menu');
    });
    $('.menu-item-has-children').hover(function(){
        $('.menu-item-has-children').toggleClass('show-sub-menu');
    });
});