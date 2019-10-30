<!-- Title -->
<section class="page-title main-hero-service" style="padding:0;">
	<img class="img-fluid" src="<?php echo base_url('storage/uploads/images/join_us/' . unserialize($career->img_cover)[$lang]); ?>">
	<div class="ttl-header-hero wow">
		<h1><?php echo unserialize($career->title)[$lang]; ?></h1>
	</div>
</section>

<!-- Content -->
<section id="job">
    <div class="container-fluid ">
        <div class="row sec-job sec-job-detail">
            <div class="col-sm-12 col-md-9">
               <?php echo unserialize($career->content)[$lang]; ?>
            </div>
            <div class="col-sm-12 col-md-3">
                <button type="button" class="btn btn-join-job col-12" data-toggle="modal" data-target=".bd-example-modal-lg"><?php echo lang('page_join_us_btn_apply_to_position'); ?></button>
				<hr>
				<?php if (count($career_galleries) > 0) { ?>
					<ul class="list-side-gallery">
						<?php foreach ($career_galleries as $career_gallery) { ?>
							<li class="item">
								<a data-fancybox="group1" rel="gallery" class="fancybox" href="<?php echo base_url('storage/uploads/images/join_us/' . unserialize($career_gallery->img)[$lang]); ?>">
									<img class="nav-job-img" src="<?php echo base_url('storage/uploads/images/join_us/' . unserialize($career_gallery->img)[$lang]); ?>" alt="<?php echo unserialize($career_gallery->img_title_alt); ?>">
								</a>
							</li>
						<?php } ?>
					</ul>
				<?php } ?>
            </div>
        </div>
    </div>
</section>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="text-secondary contact__form--title"><?php echo lang('page_join_us_title_first'); ?><span><?php echo lang('page_join_us_title_center'); ?></span><?php echo lang('page_join_us_title_end'); ?></h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-12">
                    <p class="text-secondary contact__form--body mb-4"><?php echo lang('page_join_us_desc'); ?></p>
                    <form class="mt-4" action="#" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="<?php echo lang('page_join_us_form_txt_name'); ?>" required="">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="<?php echo lang('page_join_us_form_txt_email'); ?>" required="">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="phone" placeholder="<?php echo lang('page_join_us_form_txt_phone'); ?>" required="">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="5" name="detail" placeholder="<?php echo lang('page_join_us_form_txt_detail'); ?>"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01"
                                    aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label" for="inputGroupFile01">Choose Resume / CV file</label>
                                </div>
                            </div>
                        </div>
                        <div class="col text-center">
                            <button type="submit" class="btn btn-primary text-center"><?php echo lang('page_join_us_button_send'); ?></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- SiteMap -->
<?php include 'layouts/sitemap.php'; ?>

<!-- Push Custom Scripts -->
<script>
    $(function () {
        $("a.fancybox").fancybox({ 
            animationEffect : 'fade'
        }).attr('data-fancybox', 'group1');
    });
</script>
