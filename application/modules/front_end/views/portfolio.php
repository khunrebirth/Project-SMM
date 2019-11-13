<!-- Push Custom Style -->
<link rel="stylesheet" href="<?php echo base_url('resources/front_end/css/style_portfolio.min.css'); ?>">
<!-- Title -->
<?php if ($banner) { ?>
<section class="page-title main-hero-service p-0">
	<img class="img-fluid" src="<?php echo base_url((!smm_is_mobile()) ? 'storage/uploads/images/banners/' . unserialize($banner->img)[$lang] : 'storage/uploads/images/banners/' . unserialize($banner->img_moblie)[$lang]); ?>" alt="<?php echo unserialize($banner->img_title_alt)[$lang]; ?>">
	<div class="ttl-header-hero wow">
		<h1><?php echo unserialize($banner->title)[$lang]; ?></h1>
	</div>
</section>
<?php } ?>

<!-- Content -->
<section id="client">
    <div class="container-fluid">
        <div class="title-client text-center ttl-top-space">
			<img src="<?php echo base_url($lang == 'th' ? 'resources/front_end/images/our-port.png' : 'resources/front_end/images/our-port.png'); ?>" class="img-fluid d-none d-md-block mx-auto">
			<img src="<?php echo base_url($lang == 'th' ? 'resources/front_end/images/our-port_sp.png' : 'resources/front_end/images/our-port_sp.png'); ?>" class="img-fluid d-block d-md-none mx-auto">
        </div>
		<div class="row sec-client">
			<div class="col-12 col-lg-3 mb-5 wrap-fixed-menu">
				<a class="box-head-catagory" href="#menuService">
					<span>Service</span>
					<span><i class="fas fa-chevron-down"></i></span>
				</a>
				<ul class="list-catagory-client" id="menuService">
					<li class="ttl-list-catagory d-none d-lg-block">
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
						<?php if ($portfolio->category_id == 17) { ?>
							<!-- TODO:: handle Portoflio Video -->
							<a  rel="gallery-<?php echo $portfolio->category_id; ?>" class="item-client col-md-4 col-6 mb-4 vdo-fancybox categoryGroup-<?php echo $portfolio->category_id; ?>" data-fancybox href="https://www.youtube.com/embed/keqd4RUQK4s">
								<figure class="thumb-youtube">
									<img src="https://img.youtube.com/vi/keqd4RUQK4s/maxresdefault.jpg" alt="" class="img-fluid img-clients">
								</figure>
							</a>
						<?php } else { ?>
							<a data-fancybox="gallery-<?php echo $portfolio->category_id; ?>" class="item-client col-md-4 col-6 mb-4 fancybox categoryGroup-<?php echo $portfolio->category_id; ?>" href="<?php echo base_url('storage/uploads/images/portfolios/' . unserialize($portfolio->image)[$lang]); ?>">
								<img src="<?php echo base_url('storage/uploads/images/portfolios/' . unserialize($portfolio->image)[$lang]); ?>" alt="<?php echo unserialize($portfolio->title)[$lang]; ?>" class="img-fluid img-clients">
							</a>
						<?php } ?>
					<?php } ?>
				</div>
			</div>
		</div>
    </div>
</section>

<!-- SiteMap -->
<?php include 'layouts/sitemap.php'; ?>


<!-- Push Custom Scripts -->
<script type="text/javascript" src="<?php echo base_url('resources/front_end/js/script_portfolio.min.js'); ?>"></script>
