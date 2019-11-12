<style>
	@media (max-width: 992px) { 
		.title-client {
			padding: 5rem 0 2rem !important;
		}
	}
</style>

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
        <div class="title-client" style="text-align: center; padding: 4rem;">
			<img src="<?php echo base_url($lang == 'th' ? 'resources/front_end/images/our-port.png' : 'resources/front_end/images/our-port.png'); ?>" class="img-fluid d-none d-md-block mx-auto">
			<img src="<?php echo base_url($lang == 'th' ? 'resources/front_end/images/our-port_sp.png' : 'resources/front_end/images/our-port_sp.png'); ?>" class="img-fluid d-block d-md-none mx-auto">
        </div>
		<div class="row sec-client">
			<div class="col-12 col-lg-3 mb-5 wrap-fixed-menu">
				<ul class="list-catagory-client">
					<li class="ttl-list-catagory">
						<img src="<?php echo base_url('resources/front_end/images/service-menu.png');?>" alt="">
					</li>
					<?php foreach ($portfolio_categories as $key => $portfolio_category) { ?>
						<li>
							<a class="<?php if ($key == 5) { echo 'is-active'; } ?>" href="#categoryGroup-<?php echo $portfolio_category->id; ?>">
								<figure>
									<img src="<?php echo base_url('storage/uploads/images/portfolios/'.unserialize($portfolio_category->icon)[$lang]); ?>" alt="">
								</figure>	
								<span><?php echo unserialize($portfolio_category->title)[$lang]; ?></span>
							</a>
						</li>
					<?php } ?>
				</ul>
			</div>
			<div class="col-12 col-lg-9 wrap-logo">
				<div class="row">
					<?php foreach ($portfolios as $portfolio) { ?>
						<div class="item-client col-md-4 col-6 mb-4 categoryGroup-<?php echo $portfolio->category_id; ?>">
							<img src="<?php echo base_url('storage/uploads/images/portfolios/' . unserialize($portfolio->image)[$lang]); ?>" alt="<?php echo unserialize($portfolio->title)[$lang]; ?>" class="img-fluid img-clients">
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

					// $('html,body').animate({
					// 	scrollTop: $(".wrap-logo").offset().top - $('.navbar').innerHeight()
					// }, 'slow');
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
</script>
<script>
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
</script>
