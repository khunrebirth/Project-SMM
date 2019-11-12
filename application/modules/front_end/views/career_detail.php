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
	<div class="container-fluid ">
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
					<div class="carousel-inner">
						<div class="carousel-item active">
							<div class="col-12">
								<h3 class="ttl-form-regist"><?php echo lang('page_join_us_form_txt_title_section_infomation'); ?></h3>
								<form class="mt-2"
									action="<?php echo base_url($lang . '/'. 'career-contact/send') ?>" method="post">
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
										<label class="col-12" for=""><?php echo lang('page_join_us_form_txt_birthday'); ?></label>
										<div class="col-md-6 col-12">
											<div class="form-group">
												<input type="text" class="form-control inp_date_01" name="birthday" required>
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
												<label for=""><?php echo lang('page_join_us_form_txt_status'); ?></label>
												<select class="form-control" name="status">
													<option value="<?php echo lang('page_join_us_form_txt_status_1'); ?>"><?php echo lang('page_join_us_form_txt_status_1'); ?></option>
													<option value="<?php echo lang('page_join_us_form_txt_status_2'); ?>"><?php echo lang('page_join_us_form_txt_status_2'); ?></option>
													<option value="<?php echo lang('page_join_us_form_txt_status_3'); ?>"><?php echo lang('page_join_us_form_txt_status_3'); ?></option>
													<option value="<?php echo lang('page_join_us_form_txt_status_4'); ?>"><?php echo lang('page_join_us_form_txt_status_4'); ?></option>
												</select>
											</div>
										</div>
										<div class="col-md-6 col-12">
											<div class="form-group">
												<label class="ttl-form"><?php echo lang('page_join_us_form_txt_gender'); ?></label>
												<label class="radio-inline pl-4" for="">
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
										<label class="col-12" for="">ที่อยู่</label>
										<div class="col-md-6 col-12">
											<div class="form-group">
												<input type="text" class="form-control" name="phone"
													placeholder="บ้านเลขที่ / หมู่บ้าน / คอนโด" required="">
											</div>
										</div>
										<div class="col-md-6 col-12">
											<div class="form-group">
												<input type="text" class="form-control" name="phone" placeholder="ซอย"
													required="">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6 col-12">
											<div class="form-group">
												<input type="text" class="form-control" name="phone" placeholder="ถนน"
													required="">
											</div>
										</div>
										<div class="col-md-6 col-12">
											<div class="form-group">
												<input type="text" class="form-control" name="phone" placeholder="อำเภอ"
													required="">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6 col-12">
											<div class="form-group">
												<input type="text" class="form-control" name="phone" placeholder="ตำบล"
													required="">
											</div>
										</div>
										<div class="col-md-6 col-12">
											<div class="form-group">
												<input type="text" class="form-control" name="phone" placeholder="จังหวัด"
													required="">
											</div>
										</div>
										<div class="col-md-6 col-12">
											<div class="form-group">
												<input type="text" class="form-control" name="phone"
													placeholder="รหัสไปรษณี" required="">
											</div>
										</div>
									</div>
									<div class="col-12 text-center">
										<span class="btn btn-primary text-center btn-next">ต่อไป</span>
									</div>
								</form>
							</div>
						</div>
						<div class="carousel-item">
							<div class="col-12">
								<h3 class="ttl-form-regist">ประวัติการทำงานล่าสุด</h3>
								<form class="mt-2"
									action="<?php echo base_url($lang . '/'. 'career-contact/send') ?>" method="post">
									<div class="row">
										<div class="col-md-6 col-12">
											<div class="form-group">
												<input type="text" class="form-control" name="name" placeholder="ชื่อบริษัท"
													required="">
											</div>
										</div>
										<div class="col-md-6 col-12">
											<div class="form-group">
												<input type="text" class="form-control" name="surname" placeholder="ตำแหน่ง"
													required="">
											</div>
										</div>
									</div>
									<div class="row">
										<label class="col-12" for="">สถานะการทำงาน</label>
										<div class="col-md-6 col-12">
											<div class="form-group">
												<select class="form-control" id="">
													<option>ลูกจ้าง</option>
													<option>ว่างงาน</option>
												</select>
											</div>
										</div>
										<div class="col-md-6 col-12">
											<div class="form-group">
												<input type="text" class="form-control" name="surname"
													placeholder="เงินเดือน" required="">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-12 col-md-6">
											<div class="row">
												<label class="col-12" for="">ตั้งแต่ วัน/เดือน/ปี</label>
												<div class="col-md-12 col-12">
													<div class="form-group">
														<input type="text" class="form-control inp_date_02" name="surname" required="">
													</div>
												</div>
											</div>
										</div>
										<div class="col-12 col-md-6">
											<div class="row">
												<label class="col-12" for="">ประสบการณ์การทำงาน</label>
												<div class="col-md-12 col-12">
													<div class="form-group">
														<input type="text" class="form-control " name="surname"  required="">
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12 col-12">
											<div class="form-group">
												<label for="">กรุณาใส่ประวัติการทำงานทั้งหมด
													ตำแหน่ง/ชื่อบริษัท/ระยะเวลา</label>
												<textarea class="form-control" name="" required="" rows="8"></textarea>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-12 text-center">
											<span class="btn btn-primary text-center btn-prev">ย้อนกลับ</span>
											<span class="btn btn-primary text-center btn-next">ต่อไป</span>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="carousel-item">
							<div class="col-12">
								<h3 class="ttl-form-regist">ประวัติการศึกษา</h3>
								<form class="mt-2 row"
									action="<?php echo base_url($lang . '/'. 'career-contact/send') ?>" method="post">
									<div class="col-md-6 col-12">
										<div class="form-group">
											<label for="">ระดับ</label>
											<select class="form-control" id="">
												<option>มัธยม / ปวช.</option>
												<option>ปวส.</option>
												<option>ปริญญาตรี</option>
												<option>ปริญญาโท</option>
												<option>อื่นๆ</option>
											</select>
										</div>
									</div>
									<div class="col-md-6 col-12">
										<div class="form-group">
											<label for="">สถาบัน</label>
											<input type="text" class="form-control" name="surname" placeholder="สถาบัน"
												required="">
										</div>
									</div>
									<div class="col-md-6 col-12">
										<div class="form-group">
											<label for="">คณะ</label>
											<input type="text" class="form-control" name="surname" placeholder="คณะ"
												required="">
										</div>
									</div>
									<div class="col-md-6 col-12">
										<div class="form-group">
											<label for="">ปี (เริ่ม-จบ)</label>
											<input type="text" class="form-control" name="surname"
												placeholder="ปี (เริ่ม-จบ)" required="">
										</div>
									</div>
									<div class="col-md-6 col-12">
										<div class="form-group">
											<label for="">เกรดเฉลี่ย</label>
											<input type="text" class="form-control" name="surname"
												placeholder="เกรดเฉลี่ย" required="">
										</div>
									</div>
									<hr>
									<div class="col-md-6 col-12">
										<div class="form-group">
											<label for="">ระดับ</label>
											<select class="form-control" id="">
												<option>มัธยม / ปวช.</option>
												<option>ปวส.</option>
												<option>ปริญญาตรี</option>
												<option>ปริญญาโท</option>
												<option>อื่นๆ</option>
											</select>
										</div>
									</div>
									<div class="col-md-6 col-12">
										<div class="form-group">
											<label for="">สถาบัน</label>
											<input type="text" class="form-control" name="surname" placeholder="สถาบัน"
												required="">
										</div>
									</div>
									<div class="col-md-6 col-12">
										<div class="form-group">
											<label for="">คณะ</label>
											<input type="text" class="form-control" name="surname" placeholder="คณะ"
												required="">
										</div>
									</div>
									<div class="col-md-6 col-12">
										<div class="form-group">
											<label for="">ปี (เริ่ม-จบ)</label>
											<input type="text" class="form-control" name="surname"
												placeholder="ปี (เริ่ม-จบ)" required="">
										</div>
									</div>
									<div class="col-md-6 col-12">
										<div class="form-group">
											<label for="">เกรดเฉลี่ย</label>
											<input type="text" class="form-control" name="surname"
												placeholder="เกรดเฉลี่ย" required="">
										</div>
									</div>
									<hr>
									<div class="col-md-6 col-12">
										<div class="form-group">
											<label for="">ระดับ</label>
											<select class="form-control" id="">
												<option>มัธยม / ปวช.</option>
												<option>ปวส.</option>
												<option>ปริญญาตรี</option>
												<option>ปริญญาโท</option>
												<option>อื่นๆ</option>
											</select>
										</div>
									</div>
									<div class="col-md-6 col-12">
										<div class="form-group">
											<label for="">สถาบัน</label>
											<input type="text" class="form-control" name="surname" placeholder="สถาบัน"
												required="">
										</div>
									</div>
									<div class="col-md-6 col-12">
										<div class="form-group">
											<label for="">คณะ</label>
											<input type="text" class="form-control" name="surname" placeholder="คณะ"
												required="">
										</div>
									</div>
									<div class="col-md-6 col-12">
										<div class="form-group">
											<label for="">ปี (เริ่ม-จบ)</label>
											<input type="text" class="form-control" name="surname"
												placeholder="ปี (เริ่ม-จบ)" required="">
										</div>
									</div>
									<div class="col-md-6 col-12">
										<div class="form-group">
											<label for="">เกรดเฉลี่ย</label>
											<input type="text" class="form-control" name="surname"
												placeholder="เกรดเฉลี่ย" required="">
										</div>
									</div>
									<hr>
									<div class="col-md-6 col-12">
										<div class="form-group">
											<label for="">ระดับ</label>
											<select class="form-control" id="">
												<option>มัธยม / ปวช.</option>
												<option>ปวส.</option>
												<option>ปริญญาตรี</option>
												<option>ปริญญาโท</option>
												<option>อื่นๆ</option>
											</select>
										</div>
									</div>
									<div class="col-md-6 col-12">
										<div class="form-group">
											<label for="">สถาบัน</label>
											<input type="text" class="form-control" name="surname" placeholder="สถาบัน"
												required="">
										</div>
									</div>
									<div class="col-md-6 col-12">
										<div class="form-group">
											<label for="">คณะ</label>
											<input type="text" class="form-control" name="surname" placeholder="คณะ"
												required="">
										</div>
									</div>
									<div class="col-md-6 col-12">
										<div class="form-group">
											<label for="">ปี (เริ่ม-จบ)</label>
											<input type="text" class="form-control" name="surname"
												placeholder="ปี (เริ่ม-จบ)" required="">
										</div>
									</div>
									<div class="col-md-6 col-12">
										<div class="form-group">
											<label for="">เกรดเฉลี่ย</label>
											<input type="text" class="form-control" name="surname"
												placeholder="เกรดเฉลี่ย" required="">
										</div>
									</div>
									<hr>
									<div class="col-md-6 col-12">
										<div class="form-group">
											<label for="">ระดับ</label>
											<select class="form-control" id="">
												<option>มัธยม / ปวช.</option>
												<option>ปวส.</option>
												<option>ปริญญาตรี</option>
												<option>ปริญญาโท</option>
												<option>อื่นๆ</option>
											</select>
										</div>
									</div>
									<div class="col-md-6 col-12">
										<div class="form-group">
											<label for="">สถาบัน</label>
											<input type="text" class="form-control" name="surname" placeholder="สถาบัน"
												required="">
										</div>
									</div>
									<div class="col-md-6 col-12">
										<div class="form-group">
											<label for="">คณะ</label>
											<input type="text" class="form-control" name="surname" placeholder="คณะ"
												required="">
										</div>
									</div>
									<div class="col-md-6 col-12">
										<div class="form-group">
											<label for="">ปี (เริ่ม-จบ)</label>
											<input type="text" class="form-control" name="surname"
												placeholder="ปี (เริ่ม-จบ)" required="">
										</div>
									</div>
									<div class="col-md-6 col-12">
										<div class="form-group">
											<label for="">เกรดเฉลี่ย</label>
											<input type="text" class="form-control" name="surname"
												placeholder="เกรดเฉลี่ย" required="">
										</div>
									</div>
									<div class="col-12 text-center">
										<span class="btn btn-primary text-center btn-prev">ย้อนกลับ</span>
										<span class="btn btn-primary text-center btn-next">ต่อไป</span>
									</div>
								</form>
							</div>
						</div>
						<div class="carousel-item">
							<div class="col-12">
								<h3 class="ttl-form-regist">แนบ Resume / รูป</h3>
								<form class="mt-2 row"
									action="<?php echo base_url($lang . '/'. 'career-contact/send') ?>" method="post">
									<div class="col-md-12 col-12">
										<div class="form-group">
											<label for="">แนบ Resume</label>
											<div class="input-group">
												<div class="input-group-prepend">
													<span class="input-group-text"
														id="inputGroupFileAddon01">Upload</span>
												</div>
												<div class="custom-file">
													<input type="file" class="custom-file-input" id="inputGroupFile01"
														aria-describedby="inputGroupFileAddon01">
													<label class="custom-file-label" for="inputGroupFile01">Choose
														Resume / CV file</label>
												</div>
											</div>
										</div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="">แนบรูป</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"
                                                        id="inputGroupFileAddon01">Upload</span>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input"
                                                        id="inputGroupFile01"
                                                        aria-describedby="inputGroupFileAddon01">
                                                    <label class="custom-file-label"
                                                        for="inputGroupFile01">Choose image</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center">
                                        <span class="btn btn-primary text-center btn-prev">ย้อนกลับ</span>
                                        <span class="btn btn-primary text-center btn-next">บันทึก</span>
                                    </div>
								</form>
							</div>
						</div>
					</div>
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
