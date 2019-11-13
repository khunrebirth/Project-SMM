$(function () {

    /** Config Page **/
    // Tippy
    tippy('.btn-tooltip', {
        interactive: true,
        theme: 'light',
        trigger: 'click',
        content: document.getElementById('template').innerHTML,
        animation: 'fade',
        placement: "top",
        arrow: true,
    });

    // Owl Carousel
    $('.wrap-slide-port').owlCarousel({
        items: 5,
        nav: true,
        loop: true,
        dots: false,
        margin: 15,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplaySpeed: 1000,
        responsive: {
            0: {
                items: 3,
                nav: false,
            },
            576: {
                items: 3,
                nav: true,
            },
            1000: {
                items: 5
            }
        }
    });
});
