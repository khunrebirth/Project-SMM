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
        <!-- tab -->
        <div class="row justify-content-center">
            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-8">
                <!-- Nav tabs -->
                <ul class="nav nav-fill client__navs bg-gray pt-2 pb-2">
					<?php foreach ($client_categories as $client_category) { ?>
						<li class="nav-item">
							<a class="nav-link client__navs--border--right pt-0 pb-0" id="pills-<?php echo $client_category->id; ?>-tab" data-toggle="pill" href="#pills-<?php echo $client_category->id; ?>" role="tab" aria-controls="pills-<?php echo $client_category->id; ?>"><?php echo unserialize($client_category->title)[$lang]; ?></a>
						</li>
					<?php } ?>
                </ul>
            </div>
        </div>
        <!-- content tab-->
        <div class="tab-content" id="pills-tabContent">
			<?php foreach ($clients as $client) { ?>
				<div class="tab-pane fade" id="pills-<?php echo $client['category_id']; ?>" role="tabpanel" aria-labelledby="pills-<?php echo $client['category_id']; ?>-tab">
					<?php if (count($client['clients']) > 0) { ?>
						<div class="my-3 wrap-client-slide owl-carousel owl-theme">
							<?php 
								$counter = 0;
								$totle_client = count($client['clients']);
							?>
							<?php foreach ($client['clients'] as $key => $client_specific) { ?>

								<?php $count_point = ($client_specific['category_id'] == 1) ? 12 : 8; ?>

								<?php if ($counter == 0) { ?>
									<div class="row">
								<?php } ?>
										<div class="col-md-<?php if ($client_specific['category_id'] == 1) { echo '2'; } else { echo '3'; } ?> my-3">
											<img src="<?php echo base_url('storage/uploads/images/clients/' . $client_specific['img']) ?>" alt="<?php echo $client_specific['title']; ?>" class="img-fluid img-clients">
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
				</div>
			<?php } ?>
        </div>
    </div>
</section>

<!-- SiteMap -->
<?php include 'layouts/sitemap.php'; ?>


<!-- Push Custom Scripts -->
<script>
    $(function () {
        $(".client__navs a:first").tab('show');

		$('.wrap-client-slide').owlCarousel({
            items: 1,
            nav: false,
            loop: true,
            dots: true,
            margin: 15,
            autoplay: false,
            autoplayTimeout: 2000,
            autoplaySpeed: 1000,
        });
    });
</script>
