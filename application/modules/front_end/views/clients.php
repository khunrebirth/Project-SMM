<!-- Title -->
<?php if ($banner) { ?>
<section class="page-title main-hero-service" style="padding:0;">
	<img class="img-fluid" src="<?php echo base_url((!smm_is_mobile()) ? 'storage/uploads/images/banners/' . unserialize($banner->img)[$lang] : 'storage/uploads/images/banners/' . unserialize($banner->img_moblie)[$lang]); ?>" alt="<?php echo unserialize($banner->img_title_alt)[$lang]; ?>">
	<div class="ttl-header-hero wow">
		<h1><?php echo unserialize($banner->title)[$lang]; ?></h1>
	</div>
</section>
<?php } ?>

<!-- Content -->
<section id="client">
    <div class="container-fluid">
        <div class="title-client" style="text-align: center; padding: 4rem;display: block;position: relative;">
			<img src="<?php echo base_url($lang == 'th' ? 'resources/front_end/images/title-cilent.png' : 'resources/front_end/images/title-cilent.png'); ?>" class="img-fluid">
        </div>
		<div class="row sec-client">
			<div class="col-12 col-lg-3 wrap-fixed-menu mb-5">
				<ul class="list-catagory-client">
					<?php foreach ($client_categories as $key => $client_category) { ?>
						<li><a class="<?php if ($key == 1) { echo 'is-active'; } ?>" href="#categoryGroup-<?php echo $client_category->id; ?>"><?php echo unserialize($client_category->title)[$lang]; ?></a></li>
					<?php } ?>
				</ul>
			</div>
			<div class="col-12 col-lg-9 wrap-logo">
				<div class="row">
					<?php foreach ($clients as $client) { ?>
						<div class="item-client col-md-3 col-12 mb-4 categoryGroup-<?php echo $client->category_id; ?>">
							<img src="<?php echo base_url('storage/uploads/images/clients/' . unserialize($client->image)[$lang]); ?>" alt="<?php echo unserialize($client->title)[$lang]; ?>" class="img-fluid img-clients">
							<span class="txt-decs-client text-center col-12 d-block"><?php echo unserialize($client->text)[$lang]; ?></span>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
    </div>
</section>

<!-- SiteMap -->
<?php include 'layouts/sitemap.php'; ?>


<!-- Push Custom Scripts -->
<script>
    $(function () {
        $(".client__navs a:first").tab('show');

		$('.list-catagory-client li a').click(function(e) {
			e.preventDefault();
			if(!$(this).hasClass('is-active')) {
				var hash = $(this).attr('href');
				var filter = hash.split("#")[1];
				if (filter == 'all') {
					$('.item-client').fadeIn( "slow" );
				} else {
					$('.item-client').fadeOut( "slow" );
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
			
		
		// menuScroll();
		
		function menuScroll() {
			if($(window).width() > 992 ){
				//set ele
				var ele_menu = $('.list-catagory-client');
				var ele_top = $('.title-client');
				var ele_foot_fix = $('.sec-footer-sitemap');
				//get val
				var height_top = ele_top.innerHeight() + 60;
				var position_footer = ele_foot_fix.position();
				var height_win = $( window ).height();
				$( window ).scroll(function() {
					var scroll = $(window).scrollTop();
					var scroll_fixed = scroll + 80;
					if(scroll > height_top - 150 ) {
						if( scroll + height_win  > position_footer.top) {
							ele_menu.css({
								"top": 'auto',
								"bottom": '0',
								"transform": 'none'
							});
						}else{
							ele_menu.css({
								"top": scroll_fixed,
								"bottom": 'auto',
								"transform": 'translate3d(0,-50%,0)'
							});
						}
						if(!ele_menu.hasClass('is-fixed')){
							ele_menu.addClass('is-fixed');
						}
					}else{
						ele_menu.removeAttr('style').removeClass('is-fixed');
					}

				});
			}
		}
    });
</script>
