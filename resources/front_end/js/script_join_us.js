$(function () {
    $("a.fancybox").fancybox({ 
        animationEffect : 'fade'
    }).attr('data-fancybox', 'group1');

    $('.vdo-fancybox').fancybox({
        youtube : {
            controls : 0,
            showinfo : 0
        },
        vimeo : {
            color : 'f00'
        }
    });
});
