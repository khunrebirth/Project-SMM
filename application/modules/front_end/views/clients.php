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
		menuScroll();
		function menuScroll() {
			var height_top = $('.title-client').innerHeight() + 60;
			var height_nav = $('.navbar').innerHeight();
			var height_wrap = $('.wrap-fixed-menu').innerHeight();
			var height_ele = $('.list-catagory-client').innerHeight();
			var position_footer = $('.sec-footer-sitemap').position();
			var height_ele_content = $('.sec-client').innerHeight();
			var height_doc = $( document ).height();
			// console.log(height_ele);
			$( window ).scroll(function() {
				var scroll = $(window).scrollTop();
				var scroll_fixed = scroll + 80;
				console.log(scroll + height_doc);
				if( scroll + height_doc  > position_footer.top) {
					// console.log('01//'+scroll+'/'+position_footer.top);
				}else{
					// console.log('02//'+scroll+'/'+position_footer.top);
				}

				if(scroll > height_top - 150 ) {
					$('.list-catagory-client').css({
						"top": scroll_fixed
					});
					if(!$('.list-catagory-client').hasClass('is-fixed')){
						$('.list-catagory-client').addClass('is-fixed');
					}
				}else{
					$('.list-catagory-client').removeAttr('style').removeClass('is-fixed');
				}

			});
		}
    });
</script>
