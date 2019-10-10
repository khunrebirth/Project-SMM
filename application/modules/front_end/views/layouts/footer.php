<footer class="container-fluid text-center">
    <p>&copy; 2019 บริษัท โซเซียล มีเดีย มาสเตอร์ จำกัด All right reserved.</p>
</footer>

<!-- Custom JS -->
<script>
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
        //
        // $(".navbar .nav-link").on('click', function (e) {
        //     e.preventDefault()
        //     let position = $($(this).attr("href")).offset().top
        //     $("body, html").animate({
        //         scrollTop: position
        //     }, 500)
        // })
    });

</script>

</body>
</html>
