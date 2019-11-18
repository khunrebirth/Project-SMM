<?php if ($banner) { ?>
<section class="page-title main-hero-service p-0">
	<img class="img-fluid lazy" data-src="<?php echo base_url((!smm_is_mobile()) ? 'storage/uploads/images/banners/' . unserialize($banner->img)[$lang] : 'storage/uploads/images/banners/' . unserialize($banner->img_moblie)[$lang]); ?>" alt="<?php echo unserialize($banner->img_title_alt)[$lang]; ?>">
	<div class="ttl-header-hero wow">
		<h1><?php echo unserialize($banner->title)[$lang]; ?></h1>
	</div>
</section>
<?php } ?>
<section class="sec-thank-you">
	<div class="box-thank-you row">
		<div class="col-md-6 col-lg-6 text-right pr-3 pr-xs-0 text-center text-lg-right  text-sm-center">
			<h2 class="thank-you-ttl mt-md-0 mt-4"><span><?php echo lang('page_thanks_header_first'); ?></span><?php echo lang('page_thanks_header_content'); ?></h2>
			<p class="lead thank-you-txt mt-4 mb-4"><?php echo lang('page_thanks_content'); ?></p>
		</div>
		<div class="col-xs-12 col-md-6 col-lg-6 pl-md-5 text-left text-lg-left text-sm-center  thank-you-img">
			<img data-src="<?php echo base_url('resources/front_end/images/title-service.png')?>" class="img-fluid lazy">
			<div class="col text-left mt-5">
				<a href="<?php echo base_url($lang . '/' . lang('menu_home')); ?>" class="btn btn-primary text-center col-lg-6 col-sm-12"><?php echo lang('page_thanks_btn_back'); ?></a>
			</div>
		</div>
	</div>
</section>
<?php include 'layouts/sitemap.php'; ?>
