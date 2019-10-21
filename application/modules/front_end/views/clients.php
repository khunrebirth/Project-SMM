<!-- Title -->
<section class="page-title" style="background-image:url(http://localhost/social-dev/resources/front_end/images/slider-1.jpg)">
    <div class="container my-auto text-center wow fadeInUp">
        <h1><?php echo lang('page_client'); ?></h1>
    </div>
</section>

<!-- Content -->
<section id="client">
    <div class="container-fluid">
        <div class="title-client" style="text-align: center; padding: 4rem;">
			<img src="<?php echo base_url($lang == 'th' ? 'resources/front_end/images/img-/images/title-cilent.png' : 'resources/front_end/images/img-/images/title-cilent.png'); ?>" alt="" class="img-fluid">
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
						<?php
							$counter = 1;
							$total = count($client['clients']);
						?>
						<?php foreach ($client['clients'] as $key => $client_specific) { ?>
							<?php if ($counter == 1) { ?>
								<div class="row mt-5">
							<?php } ?>
									<div class="col text-center">
										<img src="<?php echo base_url('storage/uploads/images/clients/' . $client_specific['img']) ?>" alt="<?php echo $client_specific['title']; ?>" class="img-clients">
									</div>
							<?php
								if ($counter == 5) {
									echo '</div>';
									$counter = 1;
								} else {
									if ($total == ($key + 1)) {
										echo '</div>';
									}

									$counter++;
								} ?>
						<?php } ?>
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
        $(".client__navs a:first").tab('show')
    });
</script>
