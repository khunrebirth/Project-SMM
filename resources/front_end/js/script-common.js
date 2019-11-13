function config() {
    new WOW().init()

    $(".navbar").toggleClass('scrolled', $(this).scrollTop() > $(".navbar").height())
}

$(function () {

    /******************
     * Config
     * ****************/
    config()


    /******************
     * Event
     * ****************/

    $(document).scroll(function () {
        $(".navbar").toggleClass('scrolled', $(this).scrollTop() > $(".navbar").height())
        if ($(".navbar-collapse").hasClass('show')) {
            $(".navbar").addClass('scrolled')
        }
    })

    $(".navbar-toggler").on('click', function() {
        if ($(window).scrollTop() == 0) {
            if ($(".navbar-collapse").hasClass('show')) {
                $(".navbar").removeClass('scrolled')

            } else {
                $(".navbar").addClass('scrolled')
            }
        }
    })
});
