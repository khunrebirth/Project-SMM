<?php if ($banner) { ?>
<section class="page-title main-hero-service p-0">
	<img class="img-fluid lazy" data-src="<?php echo base_url((!smm_is_mobile()) ? 'storage/uploads/images/banners/' . unserialize($banner->img)[$lang] : 'storage/uploads/images/banners/' . unserialize($banner->img_moblie)[$lang]); ?>" alt="<?php echo unserialize($banner->img_title_alt)[$lang]; ?>">
	<div class="ttl-header-hero wow">
		<h1><?php echo unserialize($banner->title)[$lang]; ?></h1>
	</div>
</section>
<?php } ?>
<section id="client">
    <div class="container-fluid">
        <div class="title-client text-center ttl-top-space">
			<img data-src="<?php echo base_url($lang == 'th' ? 'resources/front_end/images/title-cilent.png' : 'resources/front_end/images/title-cilent.png'); ?>" class="img-fluid d-none d-md-block mx-auto lazy">
			<img data-src="<?php echo base_url($lang == 'th' ? 'resources/front_end/images/title-cilent_sp.png' : 'resources/front_end/images/title-cilent_sp.png'); ?>" class="img-fluid d-block d-md-none mx-auto lazy">
        </div>
		<div class="row sec-client">
			<div class="col-12 col-lg-3 wrap-fixed-menu mb-5">
				<a class="box-head-catagory" href="#menuService">
					<span>Service</span>
					<span><i class="fas fa-chevron-down"></i></span>
				</a>
				<ul class="list-catagory-client" id="menuService">
					<li class="ttl-list-catagory d-none d-lg-block">
						<img class="lazy" data-src="<?php echo base_url('resources/front_end/images/service-menu.png');?>" alt="">
					</li>
					<?php foreach ($client_categories as $key => $client_category) { ?>
						<li>
							<a class="<?php if ($key == 1) { echo 'is-active'; } ?>" href="#categoryGroup-<?php echo $client_category->id; ?>">
								<figure>
									<img class="lazy" data-src="<?php echo base_url('storage/uploads/images/clients/'.unserialize($client_category->icon)[$lang]); ?>" alt="">
								</figure>
								<span><?php echo unserialize($client_category->title)[$lang]; ?><span>
							</a>
						</li>
					<?php } ?>
				</ul>
			</div>
			<div class="col-12 col-lg-9 wrap-logo">
				<div class="row">
					<?php foreach ($clients as $client) { ?>
						<div class="item-client col-md-3 col-4 mb-4 categoryGroup-<?php echo $client->category_id; ?>">
							<img data-src="<?php echo base_url('storage/uploads/images/clients/' . unserialize($client->image)[$lang]); ?>" alt="<?php echo unserialize($client->title)[$lang]; ?>" class="img-fluid img-clients lazy">
							<span class="txt-decs-client text-center col-12 d-block"><?php echo unserialize($client->text)[$lang]; ?></span>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
    </div>
</section>
<?php include 'layouts/sitemap.php'; ?>
