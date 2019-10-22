<!-- Push Custom Style -->
<style>
	.box-thank-you {
		max-width: 1440px;
		width: 100%;
		margin: 0 auto;
		padding: 150px 0
	}

	.thank-you-ttl span {
		color: #0d84be;
	}

	.thank-you-txt {
		padding: 0 15px;
	}

	.thank-you-img {
		padding: 0 30px;
	}
</style>

<!-- Title -->
<section class="page-title" style="background-image:url(http://localhost/social-dev/resources/front_end/images/slider-1.jpg)">
	<div class="container my-auto text-center wow fadeInUp">
		<h1><?php echo lang('page_thanks'); ?></h1>
	</div>
</section>

<!-- Content -->
<section class="sec-thank-you">
	<div class="box-thank-you row">
		<div class="col-md-6 col-lg-6 text-right pr-3 pr-xs-0 text-center text-lg-right  text-sm-center">
			<h2 class="thank-you-ttl mt-md-0 mt-4"><span><?php echo lang('page_thanks_header_first'); ?></span><?php echo lang('page_thanks_header_content'); ?></h2>
			<p class="lead thank-you-txt mt-4 mb-4">
				<?php echo lang('page_thanks_content'); ?>
			</p>
		</div>
		<div class="col-xs-12 col-md-6 col-lg-6 pl-md-5 text-left text-lg-left text-sm-center  thank-you-img">
			<img src="<?php echo base_url('resources/front_end/images/title-service.png')?>" class="img-fluid">
			<div class="col text-left mt-5">
				<a href="<?php echo base_url($lang . '/' . lang('menu_home')); ?>" class="btn btn-primary text-center col-lg-6 col-sm-12"><?php echo lang('page_thanks_btn_back'); ?></a>
			</div>
		</div>
	</div>
</section>

<!-- SiteMap -->
<?php include 'layouts/sitemap.php'; ?>
