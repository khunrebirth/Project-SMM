$(function () {
    $.Thailand({
        database: ""+window.base_url+"resources/front_end/js/jquery.Thailand.js/database/db.json",

        $district: $('#demo1 [name="addr_district"]'),
        $amphoe: $('#demo1 [name="addr_amphoe"]'),
        $province: $('#demo1 [name="addr_province"]'),
        $zipcode: $('#demo1 [name="addr_zip"]'),

        onDataFill: function(data){
            console.info('Data Filled', data);
        },

        onLoad: function(){
            console.info('Autocomplete is ready!');
            $('#loader, .demo').toggle();
        }
    });

    $("a.fancybox").fancybox({
        animationEffect: 'fade'
    }).attr('data-fancybox', 'group1');

    $('.carousel').carousel('pause');

    $('.btn-next').on('click', function () {
        $('.carousel').carousel('next');
        $('.carousel').carousel('pause');
        $(".modal").animate({ scrollTop: 0}, 600);
    });

    $('.btn-prev').on('click', function () {
        $('.carousel').carousel('prev');
        $('.carousel').carousel('pause');
        $(".modal").animate({ scrollTop: 0}, 600);
    });

    $('.inp_date_01').datepicker({
        uiLibrary: 'bootstrap4'
    });

    $('.inp_date_02').datepicker({
        uiLibrary: 'bootstrap4'
    });
});
