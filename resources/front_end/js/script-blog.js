$(function() {
    //for menu service and respons
    $('.box-head-catagory').click(function(e){
        e.preventDefault();
        var slide_item = $(this).attr('href');
        $(slide_item).slideToggle();
        $(this).toggleClass('is-active');
    });
    $( window ).resize(function() {
        if(window.matchMedia("(min-width: 992px)").matches){
            $('#menuService').show();
            $('.box-head-catagory').removeClass('is-active');
        }else{
            $('#menuService').hide();
        }
    });
});

$(document).ready(function() {
    $('.list-catagory-client').scrollToFixed({
        marginTop: $('.navbar').outerHeight() + 30,
        limit: function() {
            var limit = $('.wrap-fixed-menu').offset().top + ( $('.wrap-fixed-menu').innerHeight() - $('.list-catagory-client').innerHeight());
            return limit;
        },
        removeOffsets: true,
    });
});
