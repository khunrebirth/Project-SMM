<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?php echo base_url('resources/front_end/js/jquery.Thailand.js/dist/jquery.Thailand.min.css'); ?>">

<!-- Push Custom Style -->
<style>
	hr {
		display: block;
		position: relative;
		width: 100%;
	}

	a.btn-back-job {
		color: #fff;
		background-color: #3d6d8a;
		margin-right: 15px;
		position: relative;
		padding-left: 30px;
		line-height: 1.5 !important;
	}
		
	@media (max-width: 768px) {
		a.btn-back-job {
			margin-right: 0;
		}
	}

	.btn-back-job:hover {
		color: #fff;
		background-color: #598ba9;
	}

	.btn-back-job i {
		position: absolute;
		top: 50%;
		transform: translate3d(0,-50%,0);
		left: 5px;
	}

	@media (max-width: 768px) {
		.btn-back-job {
			margin: 0 0 15px
		}
	}
</style>

<!-- Title -->
<section class="page-title main-hero-service" style="padding:0;">
	<img class="img-fluid" src="<?php echo base_url((!smm_is_mobile()) ? 'storage/uploads/images/join_us/' . unserialize($career->img_cover)[$lang] : 'storage/uploads/images/join_us/' . unserialize($career->img_cover_moblie)[$lang]); ?>">
	<div class="ttl-header-hero wow">
		<h1><?php echo unserialize($career->title)[$lang]; ?></h1>
		<p class="txt-detail-job">
			<span><i class="fas fa-map-marker-alt"></i><?php echo lang('page_join_us_location'); ?></span>
			<span><i class="far fa-calendar-alt"></i><?php echo unserialize($career->type)[$lang]; ?></span>
		</p>
	</div>
</section>

<!-- Content -->
<section id="job">
	<div class="container-fluid">
		<div class="row sec-job sec-job-detail">
			<div class="col-sm-12 col-md-9">
				<?php echo unserialize($career->content)[$lang]; ?>
				<div class="col-12 d-flex justify-content-center mt-5 flex-column flex-md-row">
					<a class="btn btn-back-job" href=""><i class="fas fa-chevron-left"></i> <?php echo lang('page_join_us_btn_back'); ?></a>
					<button type="button" class="btn btn-join-job col-12 col-md-6" data-toggle="modal" data-target=".bd-example-modal-lg"><?php echo lang('page_join_us_btn_apply_to_position'); ?></button>
				</div>
			</div>
			<div class="col-sm-12 col-md-3">
				<hr class="d-block d-md-none">
				<?php if (count($career_galleries) > 0) { ?>
				<ul class="list-side-gallery">
					<?php foreach ($career_galleries as $career_gallery) { ?>
					<li class="item">
						<a data-fancybox="group1" rel="gallery" class="fancybox" href="<?php echo base_url('storage/uploads/images/join_us/' . unserialize($career_gallery->img)[$lang]); ?>">
							<img class="nav-job-img" src="<?php  echo base_url('storage/uploads/images/join_us/' . unserialize($career_gallery->img)[$lang]); ?>" alt="<?php echo unserialize($career_gallery->img_title_alt)[$lang]; ?>">
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
				<div id="carouselExampleFade" class="carousel slide" data-interval="false">
					<form class="carousel-inner" action="<?php echo base_url($lang . '/'. 'career-contact/send') ?>" method="post" enctype="multipart/form-data" id="demo1">
						<div class="carousel-item active">
							<div class="col-12">
								<h3 class="ttl-form-regist"><?php echo lang('page_join_us_form_txt_title_section_infomation'); ?></h3>
								<div class="mt-2">
									<div class="row">
										<div class="col-md-6 col-12">
											<div class="form-group">
												<input type="text" class="form-control" name="card_id" placeholder="<?php echo lang('page_join_us_form_txt_card_id'); ?>" required>
											</div>
										</div>
										<div class="col-md-6 col-12">
											<div class="form-group">
												<input type="text" class="form-control" name="name" placeholder="<?php echo lang('page_join_us_form_txt_name'); ?>" required>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6 col-12">
											<div class="form-group">
												<input type="text" class="form-control" name="email" placeholder="<?php echo lang('page_join_us_form_txt_email'); ?>" required>
											</div>
										</div>
										<div class="col-md-6 col-12">
											<div class="form-group">
												<input type="text" class="form-control" name="phone" placeholder="<?php echo lang('page_join_us_form_txt_phone'); ?>" required>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6 col-12">
											<div class="form-group">
												<label for=""><?php echo lang('page_join_us_form_txt_birthday'); ?></label>
												<input type="text" class="form-control inp_date_01" name="birthday" required>
											</div>
										</div>
										<div class="col-md-3 col-12">
											<div class="form-group">
												<label for=""><?php echo lang('page_join_us_form_txt_status'); ?></label>
												<select class="form-control" name="status">
													<option value="<?php echo lang('page_join_us_form_txt_status_1'); ?>"><?php echo lang('page_join_us_form_txt_status_1'); ?></option>
													<option value="<?php echo lang('page_join_us_form_txt_status_2'); ?>"><?php echo lang('page_join_us_form_txt_status_2'); ?></option>
													<option value="<?php echo lang('page_join_us_form_txt_status_3'); ?>"><?php echo lang('page_join_us_form_txt_status_3'); ?></option>
													<option value="<?php echo lang('page_join_us_form_txt_status_4'); ?>"><?php echo lang('page_join_us_form_txt_status_4'); ?></option>
												</select>
											</div>
										</div>
										<div class="col-md-3 col-12">
											<div class="form-group">
												<label class="ttl-form"><?php echo lang('page_join_us_form_txt_gender'); ?></label>
												<label class="radio-inline" for="">
													<input type="radio" name="gender" value="male"> <?php echo lang('page_join_us_form_txt_male'); ?>
												</label>
												<label class="radio-inline ml-2" for="">
													<input type="radio" name="gender" value="female"> <?php echo lang('page_join_us_form_txt_female'); ?>
												</label>
												<label class="radio-inline ml-2" for="">
													<input type="radio" name="gender" value="other"> <?php echo lang('page_join_us_form_txt_other'); ?>
												</label>
											</div>
										</div>
									</div>
									<div class="row">
										<label class="col-12" for=""><?php echo lang('page_join_us_form_txt_addr'); ?></label>
										<div class="col-md-6 col-12">
											<div class="form-group">
												<input type="text" class="form-control" name="addr_no" placeholder="<?php echo lang('page_join_us_form_txt_addr_no'); ?>">
											</div>
										</div>
										<div class="col-md-6 col-12">
											<div class="form-group">
												<input type="text" class="form-control" name="addr_soi" placeholder="<?php echo lang('page_join_us_form_txt_addr_soi'); ?>">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6 col-12">
											<div class="form-group">
												<input type="text" class="form-control" name="addr_road" placeholder="<?php echo lang('page_join_us_form_txt_addr_road'); ?>">
											</div>
										</div>
										<div class="col-md-6 col-12">
											<div class="form-group">
												<input type="text" class="form-control" name="addr_district" placeholder="<?php echo lang('page_join_us_form_txt_addr_district'); ?>">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6 col-12">
											<div class="form-group">
												<input type="text" class="form-control" name="addr_amphoe" placeholder="<?php echo lang('page_join_us_form_txt_addr_amphoe'); ?>">
											</div>
										</div>
										<div class="col-md-6 col-12">
											<div class="form-group">
												<input type="text" class="form-control" name="addr_province" placeholder="<?php echo lang('page_join_us_form_txt_addr_province'); ?>">
											</div>
										</div>
										<div class="col-md-6 col-12">
											<div class="form-group">
												<input type="text" class="form-control" name="addr_zip" placeholder="<?php echo lang('page_join_us_form_txt_addr_zip'); ?>">
											</div>
										</div>
									</div>
									<div class="col-12 text-center">
										<span class="btn btn-primary text-center btn-next"><?php echo lang('page_join_us_btn_next'); ?></span>
									</div>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="col-12">
								<h3 class="ttl-form-regist"><?php echo lang('page_join_us_form_txt_title_section_old_work'); ?></h3>
								<div class="mt-2">
									<div class="row">
										<div class="col-md-6 col-12">
											<div class="form-group">
												<input type="text" class="form-control" name="old_company_name" placeholder="<?php echo lang('page_join_us_form_txt_old_company_name'); ?>">
											</div>
										</div>
										<div class="col-md-6 col-12">
											<div class="form-group">
												<input type="text" class="form-control" name="old_company_position" placeholder="<?php echo lang('page_join_us_form_txt_old_company_position'); ?>">
											</div>
										</div>
									</div>
									<div class="row">
										<label class="col-12" for=""><?php echo lang('page_join_us_form_txt_old_company_status'); ?></label>
										<div class="col-md-6 col-12">
											<div class="form-group">
												<select class="form-control" name="old_company_status">
													<option value="<?php echo lang('page_join_us_form_txt_old_company_status_1'); ?>"><?php echo lang('page_join_us_form_txt_old_company_status_1'); ?></option>
													<option value="<?php echo lang('page_join_us_form_txt_old_company_status_2'); ?>"><?php echo lang('page_join_us_form_txt_old_company_status_2'); ?></option>
												</select>
											</div>
										</div>
										<div class="col-md-6 col-12">
											<div class="form-group">
												<input type="text" class="form-control" name="old_company_salary" placeholder="<?php echo lang('page_join_us_form_txt_old_company_salary'); ?>">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-12 col-md-6">
											<div class="row">
												<label class="col-12" for=""><?php echo lang('page_join_us_form_txt_old_company_start_work'); ?></label>
												<div class="col-md-12 col-12">
													<div class="form-group">
														<input type="text" class="form-control inp_date_02" name="old_company_start_work">
													</div>
												</div>
											</div>
										</div>
										<div class="col-12 col-md-6">
											<div class="row">
												<label class="col-12" for=""><?php echo lang('page_join_us_form_txt_old_company_exp'); ?></label>
												<div class="col-md-12 col-12">
													<div class="form-group">
														<input type="text" class="form-control" name="old_company_exp">
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12 col-12">
											<div class="form-group">
												<label for=""><?php echo lang('page_join_us_form_txt_old_company_comment'); ?></label>
												<textarea class="form-control" name="old_company_comment" rows="8"></textarea>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-12 text-center">
											<span class="btn btn-primary text-center btn-prev"><?php echo lang('page_join_us_btn_back_form'); ?></span>
											<span class="btn btn-primary text-center btn-next"><?php echo lang('page_join_us_btn_next'); ?></span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="col-12">
								<h3 class="ttl-form-regist"><?php echo lang('page_join_us_form_txt_title_section_edu'); ?></h3>
								<div class="mt-2 row">
									<div class="col-md-6 col-12">
										<div class="form-group">
											<label for=""><?php echo lang('page_join_us_form_txt_edu_level'); ?></label>
											<select class="form-control" name="edu_level_group1">
												<option value="<?php echo lang('page_join_us_form_txt_edu_level_0'); ?>"><?php echo lang('page_join_us_form_txt_edu_level_0'); ?></option>
												<option value="<?php echo lang('page_join_us_form_txt_edu_level_1'); ?>"><?php echo lang('page_join_us_form_txt_edu_level_0'); ?></option>
												<option value="<?php echo lang('page_join_us_form_txt_edu_level_2'); ?>"><?php echo lang('page_join_us_form_txt_edu_level_0'); ?></option>
												<option value="<?php echo lang('page_join_us_form_txt_edu_level_3'); ?>"><?php echo lang('page_join_us_form_txt_edu_level_0'); ?></option>
												<option value="<?php echo lang('page_join_us_form_txt_edu_level_4'); ?>"><?php echo lang('page_join_us_form_txt_edu_level_0'); ?></option>
												<option value="<?php echo lang('page_join_us_form_txt_edu_level_5'); ?>"><?php echo lang('page_join_us_form_txt_edu_level_0'); ?></option>
											</select>
										</div>
									</div>
									<div class="col-md-6 col-12">
										<div class="form-group">
											<label for=""><?php echo lang('page_join_us_form_txt_edu_name'); ?></label>
											<input type="text" class="form-control" name="edu_name_group1" placeholder="<?php echo lang('page_join_us_form_txt_edu_name'); ?>">
										</div>
									</div>
									<div class="col-md-6 col-12">
										<div class="form-group">
											<label for=""><?php echo lang('page_join_us_form_txt_edu_pos'); ?></label>
											<input type="text" class="form-control" name="edu_pos_group1" placeholder="<?php echo lang('page_join_us_form_txt_edu_pos'); ?>">
										</div>
									</div>
									<div class="col-md-6 col-12">
										<div class="form-group">
											<label for=""><?php echo lang('page_join_us_form_txt_edu_date_start_to_ends'); ?></label>
											<input type="text" class="form-control" name="edu_date_start_to_end_group1" placeholder="<?php echo lang('page_join_us_form_txt_edu_date_start_to_ends'); ?>">
										</div>
									</div>
									<div class="col-md-6 col-12">
										<div class="form-group">
											<label for=""><?php echo lang('page_join_us_form_txt_edu_gpa'); ?></label>
											<input type="text" class="form-control" name="edu_gpa_group1" placeholder="<?php echo lang('page_join_us_form_txt_edu_gpa'); ?>">
										</div>
									</div>
									<hr>
									<div class="col-md-6 col-12">
										<div class="form-group">
											<label for=""><?php echo lang('page_join_us_form_txt_edu_level'); ?></label>
											<select class="form-control" name="edu_level_group2">
												<option value="<?php echo lang('page_join_us_form_txt_edu_level_0'); ?>"><?php echo lang('page_join_us_form_txt_edu_level_0'); ?></option>
												<option value="<?php echo lang('page_join_us_form_txt_edu_level_1'); ?>"><?php echo lang('page_join_us_form_txt_edu_level_0'); ?></option>
												<option value="<?php echo lang('page_join_us_form_txt_edu_level_2'); ?>"><?php echo lang('page_join_us_form_txt_edu_level_0'); ?></option>
												<option value="<?php echo lang('page_join_us_form_txt_edu_level_3'); ?>"><?php echo lang('page_join_us_form_txt_edu_level_0'); ?></option>
												<option value="<?php echo lang('page_join_us_form_txt_edu_level_4'); ?>"><?php echo lang('page_join_us_form_txt_edu_level_0'); ?></option>
												<option value="<?php echo lang('page_join_us_form_txt_edu_level_5'); ?>"><?php echo lang('page_join_us_form_txt_edu_level_0'); ?></option>
											</select>
										</div>
									</div>
									<div class="col-md-6 col-12">
										<div class="form-group">
											<label for=""><?php echo lang('page_join_us_form_txt_edu_name'); ?></label>
											<input type="text" class="form-control" name="edu_name_group2" placeholder="<?php echo lang('page_join_us_form_txt_edu_name'); ?>">
										</div>
									</div>
									<div class="col-md-6 col-12">
										<div class="form-group">
											<label for=""><?php echo lang('page_join_us_form_txt_edu_pos'); ?></label>
											<input type="text" class="form-control" name="edu_pos_group2" placeholder="<?php echo lang('page_join_us_form_txt_edu_pos'); ?>">
										</div>
									</div>
									<div class="col-md-6 col-12">
										<div class="form-group">
											<label for=""><?php echo lang('page_join_us_form_txt_edu_date_start_to_ends'); ?></label>
											<input type="text" class="form-control" name="edu_date_start_to_end_group2" placeholder="<?php echo lang('page_join_us_form_txt_edu_date_start_to_ends'); ?>">
										</div>
									</div>
									<div class="col-md-6 col-12">
										<div class="form-group">
											<label for=""><?php echo lang('page_join_us_form_txt_edu_gpa'); ?></label>
											<input type="text" class="form-control" name="edu_gpa_group2" placeholder="<?php echo lang('page_join_us_form_txt_edu_gpa'); ?>">
										</div>
									</div>
									<hr>
									<div class="col-md-6 col-12">
										<div class="form-group">
											<label for=""><?php echo lang('page_join_us_form_txt_edu_level'); ?></label>
											<select class="form-control" name="edu_level_group3">
												<option value="<?php echo lang('page_join_us_form_txt_edu_level_0'); ?>"><?php echo lang('page_join_us_form_txt_edu_level_0'); ?></option>
												<option value="<?php echo lang('page_join_us_form_txt_edu_level_1'); ?>"><?php echo lang('page_join_us_form_txt_edu_level_0'); ?></option>
												<option value="<?php echo lang('page_join_us_form_txt_edu_level_2'); ?>"><?php echo lang('page_join_us_form_txt_edu_level_0'); ?></option>
												<option value="<?php echo lang('page_join_us_form_txt_edu_level_3'); ?>"><?php echo lang('page_join_us_form_txt_edu_level_0'); ?></option>
												<option value="<?php echo lang('page_join_us_form_txt_edu_level_4'); ?>"><?php echo lang('page_join_us_form_txt_edu_level_0'); ?></option>
												<option value="<?php echo lang('page_join_us_form_txt_edu_level_5'); ?>"><?php echo lang('page_join_us_form_txt_edu_level_0'); ?></option>
											</select>
										</div>
									</div>
									<div class="col-md-6 col-12">
										<div class="form-group">
											<label for=""><?php echo lang('page_join_us_form_txt_edu_name'); ?></label>
											<input type="text" class="form-control" name="edu_name" placeholder="<?php echo lang('page_join_us_form_txt_edu_name'); ?>">
										</div>
									</div>
									<div class="col-md-6 col-12">
										<div class="form-group">
											<label for=""><?php echo lang('page_join_us_form_txt_edu_pos'); ?></label>
											<input type="text" class="form-control" name="edu_pos_group3" placeholder="<?php echo lang('page_join_us_form_txt_edu_pos'); ?>">
										</div>
									</div>
									<div class="col-md-6 col-12">
										<div class="form-group">
											<label for=""><?php echo lang('page_join_us_form_txt_edu_date_start_to_ends'); ?></label>
											<input type="text" class="form-control" name="edu_date_start_to_end_group3" placeholder="<?php echo lang('page_join_us_form_txt_edu_date_start_to_ends'); ?>">
										</div>
									</div>
									<div class="col-md-6 col-12">
										<div class="form-group">
											<label for=""><?php echo lang('page_join_us_form_txt_edu_gpa'); ?></label>
											<input type="text" class="form-control" name="edu_gpa_group3" placeholder="<?php echo lang('page_join_us_form_txt_edu_gpa'); ?>">
										</div>
									</div>
									<hr>
									<div class="col-md-6 col-12">
										<div class="form-group">
											<label for=""><?php echo lang('page_join_us_form_txt_edu_level'); ?></label>
											<select class="form-control" name="edu_level_group4">
												<option value="<?php echo lang('page_join_us_form_txt_edu_level_0'); ?>"><?php echo lang('page_join_us_form_txt_edu_level_0'); ?></option>
												<option value="<?php echo lang('page_join_us_form_txt_edu_level_1'); ?>"><?php echo lang('page_join_us_form_txt_edu_level_0'); ?></option>
												<option value="<?php echo lang('page_join_us_form_txt_edu_level_2'); ?>"><?php echo lang('page_join_us_form_txt_edu_level_0'); ?></option>
												<option value="<?php echo lang('page_join_us_form_txt_edu_level_3'); ?>"><?php echo lang('page_join_us_form_txt_edu_level_0'); ?></option>
												<option value="<?php echo lang('page_join_us_form_txt_edu_level_4'); ?>"><?php echo lang('page_join_us_form_txt_edu_level_0'); ?></option>
												<option value="<?php echo lang('page_join_us_form_txt_edu_level_5'); ?>"><?php echo lang('page_join_us_form_txt_edu_level_0'); ?></option>
											</select>
										</div>
									</div>
									<div class="col-md-6 col-12">
										<div class="form-group">
											<label for=""><?php echo lang('page_join_us_form_txt_edu_name'); ?></label>
											<input type="text" class="form-control" name="edu_name_group4" placeholder="<?php echo lang('page_join_us_form_txt_edu_name'); ?>">
										</div>
									</div>
									<div class="col-md-6 col-12">
										<div class="form-group">
											<label for=""><?php echo lang('page_join_us_form_txt_edu_pos'); ?></label>
											<input type="text" class="form-control" name="edu_pos_group4" placeholder="<?php echo lang('page_join_us_form_txt_edu_pos'); ?>">
										</div>
									</div>
									<div class="col-md-6 col-12">
										<div class="form-group">
											<label for=""><?php echo lang('page_join_us_form_txt_edu_date_start_to_ends'); ?></label>
											<input type="text" class="form-control" name="edu_date_start_to_end_group4" placeholder="<?php echo lang('page_join_us_form_txt_edu_date_start_to_ends'); ?>">
										</div>
									</div>
									<div class="col-md-6 col-12">
										<div class="form-group">
											<label for=""><?php echo lang('page_join_us_form_txt_edu_gpa'); ?></label>
											<input type="text" class="form-control" name="edu_gpa_group4" placeholder="<?php echo lang('page_join_us_form_txt_edu_gpa'); ?>">
										</div>
									</div>
									<hr>
									<div class="col-md-6 col-12">
										<div class="form-group">
											<label for=""><?php echo lang('page_join_us_form_txt_edu_level'); ?></label>
											<select class="form-control" name="edu_level_group5">
												<option value="<?php echo lang('page_join_us_form_txt_edu_level_0'); ?>"><?php echo lang('page_join_us_form_txt_edu_level_0'); ?></option>
												<option value="<?php echo lang('page_join_us_form_txt_edu_level_1'); ?>"><?php echo lang('page_join_us_form_txt_edu_level_0'); ?></option>
												<option value="<?php echo lang('page_join_us_form_txt_edu_level_2'); ?>"><?php echo lang('page_join_us_form_txt_edu_level_0'); ?></option>
												<option value="<?php echo lang('page_join_us_form_txt_edu_level_3'); ?>"><?php echo lang('page_join_us_form_txt_edu_level_0'); ?></option>
												<option value="<?php echo lang('page_join_us_form_txt_edu_level_4'); ?>"><?php echo lang('page_join_us_form_txt_edu_level_0'); ?></option>
												<option value="<?php echo lang('page_join_us_form_txt_edu_level_5'); ?>"><?php echo lang('page_join_us_form_txt_edu_level_0'); ?></option>
											</select>
										</div>
									</div>
									<div class="col-md-6 col-12">
										<div class="form-group">
											<label for=""><?php echo lang('page_join_us_form_txt_edu_name'); ?></label>
											<input type="text" class="form-control" name="edu_name_group5" placeholder="<?php echo lang('page_join_us_form_txt_edu_name'); ?>">
										</div>
									</div>
									<div class="col-md-6 col-12">
										<div class="form-group">
											<label for=""><?php echo lang('page_join_us_form_txt_edu_pos'); ?></label>
											<input type="text" class="form-control" name="edu_pos_group5" placeholder="<?php echo lang('page_join_us_form_txt_edu_pos'); ?>">
										</div>
									</div>
									<div class="col-md-6 col-12">
										<div class="form-group">
											<label for=""><?php echo lang('page_join_us_form_txt_edu_date_start_to_ends'); ?></label>
											<input type="text" class="form-control" name="edu_date_start_to_end_group5" placeholder="<?php echo lang('page_join_us_form_txt_edu_date_start_to_ends'); ?>">
										</div>
									</div>
									<div class="col-md-6 col-12">
										<div class="form-group">
											<label for=""><?php echo lang('page_join_us_form_txt_edu_gpa'); ?></label>
											<input type="text" class="form-control" name="edu_gpa_group5" placeholder="<?php echo lang('page_join_us_form_txt_edu_gpa'); ?>">
										</div>
									</div>
									<div class="col-12 text-center">
										<span class="btn btn-primary text-center btn-prev"><?php echo lang('page_join_us_btn_back_form'); ?></span>
										<span class="btn btn-primary text-center btn-next"><?php echo lang('page_join_us_btn_next'); ?></span>
									</div>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="col-12">
								<h3 class="ttl-form-regist"><?php echo lang('page_join_us_form_txt_title_section_resume_and_img'); ?></h3>
								<div class="mt-2 row">
									<div class="col-md-12 col-12">
										<div class="form-group">
											<label for=""><?php echo lang('page_join_us_form_file_resume'); ?></label>
											<div class="input-group">
												<div class="input-group-prepend">
													<span class="input-group-text">Upload</span>
												</div>
												<div class="custom-file">
													<input type="file" class="custom-file-input" aria-describedby="inputGroupFileAddon01" name="file_resume">
													<label class="custom-file-label" for="">Choose Resume / CV file</label>
												</div>
											</div>
										</div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for=""><?php echo lang('page_join_us_form_img'); ?></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Upload</span>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" aria-describedby="inputGroupFileAddon01" name="img">
                                                    <label class="custom-file-label" for="">Choose image</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center">
										<span class="btn btn-primary text-center btn-prev"><?php echo lang('page_join_us_btn_back_form'); ?></span>
										<button type="submit" class="btn btn-primary text-center btn-next"><?php echo lang('page_join_us_btn_send'); ?></button>
                                    </div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- SiteMap -->
<?php include 'layouts/sitemap.php'; ?>


<!-- JS Libraies -->
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.20/js/uikit.min.js"></script>

<!-- dependencies for zip mode -->
<script type="text/javascript" src="<?php echo base_url('resources/front_end/js/jquery.Thailand.js/dependencies/zip.js/zip.js'); ?>"></script>
<!-- / dependencies for zip mode -->

<script type="text/javascript" src="<?php echo base_url('resources/front_end/js/jquery.Thailand.js/dependencies/JQL.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('resources/front_end/js/jquery.Thailand.js/dependencies/typeahead.bundle.js'); ?>"></script>

<script type="text/javascript" src="<?php echo base_url('resources/front_end/js/jquery.Thailand.js/dist/jquery.Thailand.min.js'); ?>"></script>

<!-- Push Custom Scripts -->
<script>
	$(function () {
        $.Thailand({
            database: "<?php echo base_url('resources/front_end/js/jquery.Thailand.js/database/db.json'); ?>",

            $district: $('#demo1 [name="addr_district"]'),
            $amphoe: $('#demo1 [name="addr_amphoe"]'),
            $province: $('#demo1 [name="addr_province"]'),
            $zipcode: $('#demo1 [name="addr_zip"]'),

            onDataFill: function(data){
                console.info('Data Filled', data);
            },

            onLoad: function(){
                console.info('Autocomplete is ready!');
                $('#loader, .demo').toggle();
            }
        });

		$("a.fancybox").fancybox({
			animationEffect: 'fade'
		}).attr('data-fancybox', 'group1');

		$('.carousel').carousel('pause');

		$('.btn-next').on('click', function () {
			$('.carousel').carousel('next');
			$('.carousel').carousel('pause');
			$(".modal").animate({ scrollTop: 0}, 600);
		});

		$('.btn-prev').on('click', function () {
			$('.carousel').carousel('prev');
			$('.carousel').carousel('pause');
			$(".modal").animate({ scrollTop: 0}, 600);
		});

		$('.inp_date_01').datepicker({
            uiLibrary: 'bootstrap4'
        });

		$('.inp_date_02').datepicker({
            uiLibrary: 'bootstrap4'
        });
	});
</script>
