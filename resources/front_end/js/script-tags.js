$(function() {
	$('.list-catagory-client li a').click(function(e){
		e.preventDefault();
		if(!$(this).hasClass('is-active')){
			var hash = $(this).attr('href');
			var filter = hash.split("#")[1];
			if(filter == 'all'){
				$('.item-blog').fadeIn( "slow" );
			}else{
				$('.item-blog').fadeOut( "slow" );
				$('.'+filter).fadeIn( "slow" );
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
});
