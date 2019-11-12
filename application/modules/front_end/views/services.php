<!-- CSS Libraries -->
<script src="https://unpkg.com/popper.js@1"></script>
<script src="https://unpkg.com/tippy.js@5"></script>
<link rel="stylesheet" href="https://unpkg.com/tippy.js@5/dist/backdrop.css" />

<!-- Push Custom Style -->
<style>
	.sec-service-port {
		/* background-color: #eee; */
		width: 100%;
		margin: 0 !important;
	}

	.sec-service-port--inner {
		max-width: 1440px;
		margin: 0 auto;
	}

	.wrap-slide-port {
		padding: 0;
		height: 100%;
		position: relative;
	}

	@media (min-width: 576px) {
		.wrap-slide-port {
			padding: 0 45px;
		}
	}

	@media (min-width: 768px) {
		.wrap-slide-port {
			padding: 0 45px;
		}
	}

	@media (min-width: 992px) {
		.wrap-slide-port {
			padding: 0 45px;
		}
	}

	@media (min-width: 1200px) {
		.wrap-slide-port {
			padding: 0 45px;
		}
	}

	.wrap-slide-port .item {
		height: 100%;
		display: flex;
		justify-content: center;
		align-items: center;
	}

	.wrap-slide-port .owl-item,
	.wrap-slide-port .owl-stage,
	.wrap-slide-port .owl-stage-outer {
		height: 100%;
	}

	.wrap-slide-port .owl-nav {
		position: absolute;
		top: 10%;
		-webkit-transform: translate3d(0, -50%, 0);
		transform: translate3d(0, -50%, 0);
		width: 100%;
		left: 0;
	}

	.wrap-slide-port .owl-nav .owl-prev,
	.wrap-slide-port .owl-nav .owl-next {
		position: absolute;
		width: 31px;
		height: 36px;
		background-color: #fff !important;
		transition: all 0.3s;
		-webkit-transition: all 0.3s;
		-moz-transition: all 0.3s;
		-ms-transition: all 0.3s;
		-o-transition: all 0.3s;
	}

	.wrap-slide-port .owl-nav .owl-prev:focus,
	.wrap-slide-port .owl-nav .owl-next:focus {
		outline: none;
	}

	.wrap-slide-port .owl-nav .owl-prev:hover,
	.wrap-slide-port .owl-nav .owl-next:hover {
		opacity: 0.7;
	}

	.wrap-slide-port .owl-nav .owl-prev span,
	.wrap-slide-port .owl-nav .owl-next span {
		display: none;
	}

	.wrap-service-content {
		max-width: 1440px;
		margin: 0 auto;
	}

	.ttl-service-01,
	.ttl-service-02 {
		color: #127dbc;
		margin-bottom: 10px;
		padding-top: 20px;
	}

	.ttl-service-01 {
		font-size: 2rem;
	}

	.ttl-service-02 {
		font-size: 1.5rem;
	}

	@media (max-width: 576px) {
		.ttl-service-01,
		.ttl-service-02 {
			font-size: 1.15rem;
			margin-bottom: 10px;
			padding-top: 20px;
		}
	}

	@media (min-width: 768px) {
		.ttl-service-01,
		.ttl-service-02 {
			font-size: 1.15rem;
			margin-bottom: 20px;
			padding: 0;
		}
	}

	@media (min-width: 992px) {
		.ttl-service-01,
		.ttl-service-02 {
			margin-bottom: 20px;
			padding: 0;
		}

		.ttl-service-01 {
			font-size: 3rem;
		}

		.ttl-service-02 {
			font-size: 2rem;
		}
	}

	@media (min-width: 1200px) {

		.ttl-service-01,
		.ttl-service-02 {
			margin-bottom: 20px;
			padding: 0;
		}

		.ttl-service-01 {
			font-size: 3rem;
		}

		.ttl-service-02 {
			font-size: 2rem;
		}
	}

	.box-text-service .txt {
		line-height: 2.1;
	}

	.tippy-svg-arrow {
		display: none;
	}

	.tippy-tooltip {
		background-color: #fff !important;
		max-width: 100% !important;
		padding: 0 20px;
	}

	.tippy-popper {
		width: 100% !important;
		max-width: 500px !important;
		border: 1px solid #d8d8d8;
		border-radius: 5px;
		-webkit-border-radius: 5px;
		-moz-border-radius: 5px;
		-ms-border-radius: 5px;
		-o-border-radius: 5px;
		box-shadow: 3px 3px 6px 0px rgba(0, 0, 0, .4);
		z-index: 5 !important;
		margin: 25px 0;
		background-color: #fff !important;
		padding: 10px 0px 10px !important;
	}

	.tippy-tooltip[data-placement^=top]>.tippy-arrow {
		bottom: -29px;
		border-top-color: #b4b4b4 !important;
	}

	.tippy-tooltip[data-placement^=bottom]>.tippy-arrow {
		border-bottom-color: #b4b4b4 !important;
		top: -28px;
	}

	.wrap-slide-port .owl-nav .owl-prev {
		left: 0;
		background: url(<?php echo base_url('resources/front_end/images/service/bw.png');
		?>) !important;
	}

	.wrap-slide-port .owl-nav .owl-next {
		right: 0;
		background: url(<?php echo base_url('resources/front_end/images/service/fw.png');
		?>) !important;
	}

	.sec-service-port-list {
		padding-bottom: 0;
	}
	
	.box-text-service p ,
	.box-text-service div {
        line-height: 1.5;
	}
		
	.ttl-port-list {
		position: relative;
		text-align: center;
	}

	.ttl-port-list span {
		background-color: #fff;
		padding: 0 15px;
		position: relative;
		font-family: 'CordiaUPC', sans-serif;
		font-size: 2.3rem;
		color: #127dbc;
	}

	.ttl-port-list::before {
		content: '';
		position: absolute;
		top: 50%;
		left: 0;
		transform: translate3d(0,-50%,0);
		-webkit-transform: translate3d(0,-50%,0);
		-moz-transform: translate3d(0,-50%,0);
		-ms-transform: translate3d(0,-50%,0);
		-o-transform: translate3d(0,-50%,0);
		height: 2px;
		width: 100%;
		background-color: #00264c;
	}
    @media (max-width: 576px) {
		.img-logo-client {
			width: 150px;
			margin-bottom: 20px;
		}
	}
	
</style>

<!-- Title -->
<section class="page-title main-hero-service" style="padding:0;">
	<img class="img-fluid" src="<?php echo base_url((!smm_is_mobile()) ? 'storage/uploads/images/banners/' . unserialize($service['banner_img'])[$lang] : 'storage/uploads/images/banners/' . unserialize($service['banner_img_moblie'])[$lang]); ?>" alt="<?php echo unserialize($service['banner_img_title_alt'])[$lang]; ?>">
	<div class="ttl-header-hero wow">
		<h1><?php echo unserialize($service['banner_title'])[$lang]; ?></h1>
	</div>
</section>

<!-- Content -->
<section class="sec-service-content">
	<div class="row wrap-service-content mb-5">
		<div class="col-lg-4 col-sm-12 text-center">
			<img class="img-fluid" style="width:100%;" src="<?php echo base_url('storage/uploads/images/services/' . unserialize($service['content_top_img'])[$lang]); ?>" alt="<?php echo unserialize($service['content_top_img_title_alt'])[$lang]; ?>">
		</div>
		<div class="col-lg-8 col-sm-12 d-flex justify-content-end">
			<div class="col-lg-11 col-sm-12 d-flex justify-content-between flex-column">
				<div class="box-text-service">
					<h1 class="ttl-service-01"><?php echo unserialize($service['content_top_title'])[$lang]; ?></h1>
					<?php echo unserialize($service['content_top_body'])[$lang]; ?>
				</div>
				<p class="text-sm-center text-lg-left mb-0"><button class="btn btn-primary btn-tooltip"><?php echo unserialize($service['text_button'])[$lang]; ?></button></p>
			</div>
		</div>
	</div>
	<div class="row wrap-service-content mb-5 flex-row-reverse flex-sm-column flex-lg-row-reverse">
		<div class="col-lg-4 col-sm-12 text-center">
			<img class="img-fluid" style="width:100%;" src="<?php echo base_url('storage/uploads/images/services/' . unserialize($service['content_bottom_img'])[$lang]); ?>" alt="<?php echo unserialize($service['content_bottom_img_title_alt'])[$lang]; ?>">
		</div>
		<div class="col-lg-8 col-sm-12 d-flex">
			<div class="col-11 col-lg-11 col-sm-12 d-flex justify-content-between flex-column">
				<div class="box-text-service">
					<h3 class="ttl-service-02"><?php echo unserialize($service['content_bottom_title'])[$lang]; ?></h3>
					<?php echo unserialize($service['content_bottom_body'])[$lang]; ?>
				</div>
				<p class="text-sm-center text-lg-left mb-0"><button class="btn btn-primary btn-tooltip"><?php echo unserialize($service['text_button'])[$lang]; ?></button></p>
			</div>
		</div>
	</div>
</section>

<!-- Form -->
<div id="template" style="display:none;">
	<h2 class="text-secondary contact__form--title" ><?php echo lang('page_contact_title_first'); ?><span><?php echo lang('page_contact_title_center'); ?></span><?php echo lang('page_contact_title_end'); ?></h2>
	<p class="text-secondary contact__form--body mb-4"><?php echo lang('page_contact_desc'); ?></p>
	<form class="mt-4" action="<?php echo base_url($lang . '/'. 'contact/send') ?>" method="post">
		<div class="form-group">
			<input type="text" class="form-control" name="name" placeholder="<?php echo lang('page_contact_form_txt_name'); ?>" required>
		</div>
		<div class="form-group">
			<input type="text" class="form-control" name="email" placeholder="<?php echo lang('page_contact_form_txt_email'); ?>" required>
		</div>
		<div class="form-group">
			<input type="text" class="form-control" name="company" placeholder="<?php echo lang('page_contact_form_txt_company'); ?>" required>
		</div>
		<div class="form-group">
			<input type="text" class="form-control" name="phone" placeholder="<?php echo lang('page_contact_form_txt_phone'); ?>" required>
		</div>
		<div class="form-group">
			<textarea class="form-control" rows="5" name="detail" placeholder="<?php echo lang('page_contact_form_txt_detail'); ?>"></textarea>
		</div>
		<div class="col text-center">
			<button type="submit" class="btn btn-primary text-center"><?php echo lang('page_contact_button_send'); ?></button>
		</div>
	</form>
</div>

<?php if (count($service['portfolios']) > 0) { ?>
	<section class="sec-service-port-list">
		<div class="col sec-service-port--inner">
			<div class="row">
				<h3 class="col-12 ttl-port-list"><span><?php echo lang('page_services_txt_portfolio'); ?></span></h3>
				<?php foreach ($service['portfolios'] as $portfolio) { ?>
					<?php if ($portfolio->service_id == 17) { ?>

						<!-- TODO:: handle Portoflio Video -->

					<?php } else { ?>
						<div class="col-12 col-md-6 col-lg-2 text-center mb-5">
							<img class="img-fluid" src="<?php echo base_url('storage/uploads/images/services/' . unserialize($portfolio->img)[$lang]); ?>" alt="<?php echo unserialize($portfolio->img_title_alt)[$lang]; ?>">
						</div>
					<?php } ?>
				<?php } ?>
			</div>
		</div>
	</section>
<?php } ?>

<!-- Service -->
<section id="service" class="wow fadeInUp pb-0" style="overflow:hidden">
	<div class="container-fluid text-center sec-home-service">
		<div class="row">
			<?php foreach ($services as $service_parent) { ?>
				<a href="<?php echo base_url($lang . '/' . lang('menu_service') . '/' . unserialize($service_parent->slug)[$lang]); ?>" class="col-xs-12 col-md-3 col-lg-3 mb-5 col-cmn-05 ico-service">
					<div class="wrap-icon-flip">
						<img src="<?php echo base_url('storage/uploads/images/services/' . unserialize($service_parent->icon)[$lang]); ?>" class="img-fluid service__icon--resize">
					</div>
					<img src="<?php echo base_url('storage/uploads/images/services/' . unserialize($service_parent->icon)[$lang]); ?>" class="img-fluid service__icon--resize ico-service__img">
					<p class="service__title--body"><?php echo unserialize($service_parent->title)[$lang]; ?></p>
				</a>
			<?php } ?>
		</div>
	</div>
</section>

<?php if (count($service['our_clients']) > 0) { ?>
	<section class="sec-service-port row">
		<div class="col row sec-service-port--inner">
			<div class="col-md-12 col-lg-3 d-flex  justify-content-start justify-content-lg-end">
				<img class="img-fluid img-logo-client" src="<?php echo base_url($lang == 'th' ? 'resources/front_end/images/title-our-client.png' : 'resources/front_end/images/title-our-client.png'); ?>">
			</div>
			<div class=" col-md-12  col-lg-9">
				<div class="wrap-slide-port owl-carousel owl-theme">
					<?php foreach ($service['our_clients'] as $client) { ?>
						<div class="item">
							<img src="<?php echo base_url('storage/uploads/images/services/' . unserialize($client->img)[$lang]) ?>" alt="<?php echo unserialize($client->img_title_alt)[$lang]; ?>">
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</section>
<?php } ?>

<!-- SiteMap -->
<?php include 'layouts/sitemap.php'; ?>


<!-- Push Custom Scripts -->
<script>
	$(function () {

		/** Config Page **/
		// Tippy
		tippy('.btn-tooltip', {
			interactive: true,
			theme: 'light',
			trigger: 'click',
			content: document.getElementById('template').innerHTML,
			animation: 'fade',
			placement: "top",
			arrow: true,
		});

		// Owl Carousel
		$('.wrap-slide-port').owlCarousel({
			items: 5,
			nav: true,
			loop: true,
			dots: false,
			margin: 15,
			autoplay: true,
			autoplayTimeout: 2000,
			autoplaySpeed: 1000,
			responsive: {
				0: {
					items: 3,
					nav: false,
				},
				576: {
					items: 3,
					nav: true,
				},
				1000: {
					items: 5
				}
			}
		});
	});

</script>
