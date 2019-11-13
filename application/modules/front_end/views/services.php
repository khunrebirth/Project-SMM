<script src="https://unpkg.com/popper.js@1"></script>
<script src="https://unpkg.com/tippy.js@5"></script>
<link rel="stylesheet" href="https://unpkg.com/tippy.js@5/dist/backdrop.css" />
<link rel="stylesheet" href="<?php echo base_url('resources/front_end/css/style_services.min.css'); ?>">
<section class="page-title main-hero-service p-0">
	<img class="img-fluid" src="<?php echo base_url((!smm_is_mobile()) ? 'storage/uploads/images/banners/' . unserialize($service['banner_img'])[$lang] : 'storage/uploads/images/banners/' . unserialize($service['banner_img_moblie'])[$lang]); ?>" alt="<?php echo unserialize($service['banner_img_title_alt'])[$lang]; ?>">
	<div class="ttl-header-hero wow">
		<h1><?php echo unserialize($service['banner_title'])[$lang]; ?></h1>
	</div>
</section>
<section class="sec-service-content">
	<div class="row wrap-service-content mb-5">
		<div class="col-lg-4 col-sm-12 text-center">
			<img class="img-fluid" src="<?php echo base_url('storage/uploads/images/services/' . unserialize($service['content_top_img'])[$lang]); ?>" alt="<?php echo unserialize($service['content_top_img_title_alt'])[$lang]; ?>">
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
			<img class="img-fluid" src="<?php echo base_url('storage/uploads/images/services/' . unserialize($service['content_bottom_img'])[$lang]); ?>" alt="<?php echo unserialize($service['content_bottom_img_title_alt'])[$lang]; ?>">
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
<div class="d-none" id="template">
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
						<a class="col-12 col-md-6 col-lg-2 text-center item-youtube mb-5" data-fancybox href="https://www.youtube.com/embed/keqd4RUQK4s">
							<div class="thumb-youtube" >
								<img src="https://img.youtube.com/vi/keqd4RUQK4s/maxresdefault.jpg" alt="">
							</div>
						</a>
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
<section id="service" class="wow fadeInUp pb-0">
	<div class="container-fluid text-center sec-home-service">
		<div class="title-service ttl-home-img">
			<img src="<?php echo base_url($lang == 'th' ? 'resources/front_end/images/title-service.png' : 'resources/front_end/images/title-service.png'); ?>" class="img-fluid d-none d-md-block">
			<img src="<?php echo base_url($lang == 'th' ? 'resources/front_end/images/title-service_sp.png' : 'resources/front_end/images/title-service_sp.png'); ?>" class="img-fluid d-block d-md-none mx-auto">
		</div>
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
<?php include 'layouts/sitemap.php'; ?>
<script type="text/javascript" src="<?php echo base_url('resources/front_end/js/script_services.min.js'); ?>"></script>
