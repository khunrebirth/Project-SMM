<!-- Title -->
<?php if ($banner) { ?>
<section class="page-title main-hero-service" style="padding:0;">
	<img class="img-fluid" src="<?php echo base_url('storage/uploads/images/banners/' . unserialize($banner->img)[$lang]); ?>" alt="<?php echo unserialize($banner->img_title_alt)[$lang]; ?>">
	<div class="ttl-header-hero wow">
		<h1><?php echo unserialize($banner->title)[$lang]; ?></h1>
	</div>
</section>
<?php } ?>

<!-- Content -->
<section id="client">
    <div class="container-fluid">
        <div class="title-client" style="text-align: center; padding: 4rem;">
			<img src="<?php echo base_url($lang == 'th' ? 'resources/front_end/images/title-cilent.png' : 'resources/front_end/images/title-cilent.png'); ?>" alt="" class="img-fluid">
        </div>
		<div class="row sec-client">
			<div class="col-12 col-lg-3 mb-5">
				<ul class="list-catagory-client">
					<li><h3 class="ttl-catagory-client text-center">catagory</h3></li>
					<li><a href="#all">0001</a></li>
					<li><a href="#col-md-3">0002</a></li>
					<li><a href="#col-md-4">0003</a></li>
					<li><a href="">0004</a></li>
					<li><a href="">0005</a></li>
					<li><a href="">0006</a></li>
					<li><a href="">0007</a></li>
					<li><a href="">0008</a></li>
					<li><a href="">0009</a></li>
					<li><a href="">0010</a></li>

				</ul>
			</div>
			<div class="col-12 col-lg-9 wrap-logo">
				<?php foreach ($clients as $client) { ?>
					<?php if (count($client['clients']) > 0) { ?>
						<div class="wrap-client-slide">
							<?php 
								$counter = 0;
								$totle_client = count($client['clients']);
							?>
							<?php foreach ($client['clients'] as $key => $client_specific) { ?>

								<?php $count_point = ($client_specific['category_id'] == 1) ? 12 : 8; ?>

								<?php if ($counter == 0) { ?>
									<div class="row">
								<?php } ?>
										<div class="item-client col-md-4 mb-4">
											<img src="<?php echo base_url('storage/uploads/images/clients/' . $client_specific['img']) ?>" alt="<?php echo $client_specific['title']; ?>" class="img-fluid img-clients">
											<!-- <span class="txt-decs-client text-center col-12 d-block">ใช้บริการXXX,XXX,XXX</span> -->
										</div>
								<?php $counter++; ?>
								<?php if ($counter == $count_point) { ?>
									</div>
									<?php $counter = 0; ?>
								<?php } else { if ($key == ($totle_client - 1)) { ?>
									</div>
								<?php } } ?>
							<?php } ?>
						</div>
					<?php } ?>
				<?php } ?>
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

		// $('.wrap-client-slide').owlCarousel({
        //     items: 1,
        //     nav: false,
        //     loop: true,
        //     dots: true,
        //     margin: 15,
        //     autoplay: false,
        //     autoplayTimeout: 2000,
        //     autoplaySpeed: 1000,
        // });

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
				}
			}
			$('.list-catagory-client li a').removeClass('is-active');
			$(this).addClass('is-active');
		});
    });
</script>
