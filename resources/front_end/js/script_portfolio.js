$(function () {
    $(".client__navs a:first").tab('show');

    $('.list-catagory-client li a').click(function(e){
        e.preventDefault();
        if(!$(this).hasClass('is-active')){
            var hash = $(this).attr('href');
            var filter = hash.split("#")[1];
            if(filter == 'all'){
                $('.item-client').fadeIn( "slow" );
            }else{

                $('.item-client').fadeOut( "slow" );
                $('.'+filter).fadeIn( "slow" );

                //for close slide when click on sp
                if(window.matchMedia("(max-width: 992px)").matches){
                    $('#menuService').slideToggle();
                    $('.box-head-catagory').toggleClass('is-active');
                }


            }
        }
        $('.list-catagory-client li a').removeClass('is-active');
        $(this).addClass('is-active');
    });

    $(".list-catagory-client li a").each(function( index ) {
        if ($(this).hasClass('is-active')) {
            var hash = $(this).attr('href');
            var filter = hash.split("#")[1];
            if (filter == 'all') {
                $('.item-client').fadeIn( "slow" );
            } else {
                $('.item-client').fadeOut( "slow" );
                $('.'+filter).fadeIn( "slow" );

            }
        }
    });

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
