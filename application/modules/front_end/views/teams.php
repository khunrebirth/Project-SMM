<?php if ($banner) { ?>
<section class="page-title main-hero-service p-0">
	<img class="img-fluid lazy" data-src="<?php echo base_url((!smm_is_mobile()) ? 'storage/uploads/images/banners/' . unserialize($banner->img)[$lang] : 'storage/uploads/images/banners/' . unserialize($banner->img_moblie)[$lang]); ?>" alt="<?php echo unserialize($banner->img_title_alt)[$lang]; ?>">
	<div class="ttl-header-hero wow">
		<h1><?php echo unserialize($banner->title)[$lang]; ?></h1>
	</div>
</section>
<?php } ?>
<section id="team">
    <div class="container-fluid ">
        <div class="title-team text-center pb-5" >
			<img data-src="<?php echo base_url($lang == 'th' ? 'resources/front_end/images/title-team.png' : 'resources/front_end/images/title-team.png'); ?>" alt="" class="img-fluid d-none d-md-block mx-auto lazy">
			<img data-src="<?php echo base_url($lang == 'th' ? 'resources/front_end/images/title-team_sp.png' : 'resources/front_end/images/title-team_sp.png'); ?>" alt="" class="img-fluid d-block d-md-none mx-auto lazy">
        </div>
        <div class="box-slide-team row">
			<?php foreach ($teams as $team) { ?>
				<?php
					$fullname = unserialize($team->title)[$lang];
					$posBlankSpace = strpos(unserialize($team->title)[$lang], " ");
					$first_name = substr($fullname, 0, $posBlankSpace);
					$last_name = substr($fullname, $posBlankSpace, strlen($fullname));
				?>
				<div class="col-12 col-md-3">
					<div class="card team__card--parent mx-auto" >
						<img class="card-img-top lazy" data-src="<?php echo base_url('storage/uploads/images/teams/' . unserialize($team->image)[$lang]); ?>" alt="<?php echo unserialize($team->img_title_alt)[$lang]; ?>">
						<img class="card-img-top lazy is-hover" data-src="<?php echo base_url('storage/uploads/images/teams/' . unserialize($team->image_hover)[$lang]); ?>" alt="<?php echo unserialize($team->img_title_alt_hover)[$lang]; ?>">
						<div class="card-body pl-0">
							<h5 class="card-title team__crad--title"><?php echo $first_name; ?> <br><?php echo $last_name; ?></h5>
							<p class="card-text team__crad--body"><?php echo unserialize($team->body)[$lang]; ?></p>
						</div>
					</div>
				</div>
            <?php } ?>
        </div>
    </div>
</section>
<?php include 'layouts/sitemap.php'; ?>
