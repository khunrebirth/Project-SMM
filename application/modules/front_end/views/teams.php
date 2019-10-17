<!-- Title -->
<section class="page-title" style="background-image:url(http://localhost/social-dev/resources/front_end/images/slider-1.jpg)">
    <div class="container my-auto text-center wow fadeInUp">
        <h1><?php echo lang('page_team'); ?></h1>
    </div>
</section>

<!-- Content -->
<section id="team">
    <div class="container-fluid ">
        <div class="title-team" style="text-align: center; padding: 4rem;">
			<img src="<?php echo base_url($lang == 'th' ? 'resources/front_end/images/img-/images/title-team.png' : 'resources/front_end/images/img-/images/title-team.png'); ?>" alt="" class="img-fluid">
        </div>
        <div class="row">
			<?php foreach ($teams as $team) { ?>
				<?php
					$fullname = unserialize($team->title)[$lang];
					$posBlankSpace = strpos(unserialize($team->title)[$lang], " ");
					$first_name = substr($fullname, 0, $posBlankSpace);
					$last_name = substr($fullname, $posBlankSpace, strlen($fullname));
				?>
				<div class="col-xs-12 col-md-3 col-lg-3">
					<div class="card team__card--parent mx-auto" style="width: 18rem;">
						<img class="card-img-top" src="<?php echo base_url('storage/uploads/images/teams/' . unserialize($team->image)[$lang]); ?>" alt="">
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

<!-- SiteMap -->
<?php include 'layouts/sitemap.php'; ?>
