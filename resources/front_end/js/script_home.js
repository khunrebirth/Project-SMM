function config_wow() {
    new WOW().init()
}
$(function () {

config_wow();
    $(".client__navs a:first").tab('show')

    $('.box-teams-slide').owlCarousel({
        items: 4,
        nav: true,
        loop: true,
        dots: false,
        margin: 10,
        scrollPerPage: true,
        singleItem: false,
        slideBy: 4,
        lazyLoad: true,
        responsive: {
            0: {
                items: 1,
                slideBy: 1,
            },
            576: {
                items: 2,
                slideBy: 2,
            },
            768: {
                items: 3,
                slideBy: 3,
            },
            1200: {
                items: 4,
            }
        }
    });

    $(".js-scroll-contact").click(function (event) {
        event.preventDefault();
        $('html,body').animate({
            scrollTop: $("#contact").offset().top
        }, 'slow');
    });
});

$(function () {
    var optional_owl = {
        items: 1,
        nav: false,
        loop: true,
        dots: true,
        lazyLoad: true,
    };
    var select_owl_client = $('.box-slide-client-sp');
    var select_owl_portfolio = $('.box-slide-portfolio-sp');

    if ( $(window).width() < 768 ) {
        startCarousel();
    } else {
        select_owl_client.addClass('off');
        select_owl_portfolio.addClass('off');
    }
            
    $(window).resize(function() {
        if ( $(window).width() < 854 ) {
        startCarousel();
        } else {
        stopCarousel();
        }
    });
    function startCarousel(){
        select_owl_client.owlCarousel(optional_owl);
        select_owl_portfolio.owlCarousel(optional_owl);
    }
    function stopCarousel() {
        select_owl_client.trigger('destroy.owl.carousel');
        select_owl_client.addClass('off');
        select_owl_portfolio.trigger('destroy.owl.carousel');
        select_owl_portfolio.addClass('off');
    }
});
