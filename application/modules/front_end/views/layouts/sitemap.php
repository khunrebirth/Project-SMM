<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v4.0&appId=189754555007223&autoLogAppEvents=1"></script>

<!-- Push Custom Style -->
<style>
	.fb-page {
		width: 300px;
	}

	@media (min-width: 320px) {
		.fb-page {
			width: 280px;
		}
	}

	@media (min-width: 360px) {
		.fb-page {
			width: 280px;
		}
	}

	@media (min-width: 540px) {
		.fb-page {
			width: 350px;
		}
	}

	@media (min-width: 720px) {
		.fb-page {
			width: 350px;
		}
	}

	@media (min-width: 960px) {
		.fb-page {
			width: 200px;
		}
	}

	@media (min-width: 1090px) {
		.fb-page {
			width: 200px;
		}
	}

	@media (min-width: 1140px) {
		.fb-page {
			width: 250px;
		}
	}

	@media (min-width: 1300px) {
		.fb-page {
			width: 300px;
		}
	}

	.item-fb-page {
		margin-bottom: 20px;
	}

	.sec-social-contact {
		overflow: hidden;
		max-width: 1440px;
		margin: 0 auto;
	}
</style>
<div class="sec-social-contact col-12">
	<div class="row">
		<div class="col-12 mb-4">
			<h2 class="ttl-facebook text-center">Our Facebook Page</h2>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-12 item-fb-page">
			<div class="fb-page" data-href="https://www.facebook.com/iSEO.SEM/" data-width=""
					data-height="" data-small-header="false" data-adapt-container-width="true"
					data-hide-cover="false" data-show-facepile="false">
				<blockquote cite="https://www.facebook.com/iSEO.SEM/"
							class="fb-xfbml-parse-ignore"><a
						href="https://www.facebook.com/iSEO.SEM/">รับบริการทำ SEO SEM</a>
				</blockquote>
			</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-12 item-fb-page">
			<div class="fb-page" data-href="https://www.facebook.com/SocialMediaMarketing/"
					data-width="" data-height="" data-small-header="false"
					data-adapt-container-width="true" data-hide-cover="false"
					data-show-facepile="false">
				<blockquote cite="https://www.facebook.com/SocialMediaMarketing/"
							class="fb-xfbml-parse-ignore"><a
						href="https://www.facebook.com/SocialMediaMarketing/">Social Media
						Master</a></blockquote>
			</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-12 item-fb-page">
			<div class="fb-page" data-href="https://www.facebook.com/EmailDirectMarketing.EDM/"
					data-width="" data-height="" data-small-header="false"
					data-adapt-container-width="true" data-hide-cover="false"
					data-show-facepile="false">
				<blockquote cite="https://www.facebook.com/EmailDirectMarketing.EDM/"
							class="fb-xfbml-parse-ignore"><a
						href="https://www.facebook.com/EmailDirectMarketing.EDM/">บริการรับส่งอีเมล์
						: Email Direct Marketing</a></blockquote>
			</div>
		</div>
	</div>
</div>
<div class="sec-footer-sitemap" id="accordion">
	<div class="card text-center" style="background: #00264c; color: #fff; border-radius: 0;margin:0;">
		<div class="show">
			<div class="card-body">
				<div class="sec-sitemap">
					<div class="row">
						<div class="col-lg-4 col-md-6 col-sm-12">
							<h2 class="text-secondary contact__form--title"><?php echo lang('page_contact_title_first'); ?><span><?php echo lang('page_contact_title_center'); ?></span><?php echo lang('page_contact_title_end'); ?></h2>
							<p class="text-secondary contact__form--body mb-4"><?php echo lang('page_contact_desc'); ?></p>
							<form class="mt-4" action="<?php echo base_url('contact/send') ?>" method="post">
								<div class="form-group">
									<input type="text" class="form-control" name="name" placeholder="<?php echo lang('page_contact_form_txt_name'); ?>" required>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" name="email" placeholder="<?php echo lang('page_contact_form_txt_email'); ?>" required>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" name="company" placeholder="<?php echo lang('page_contact_form_txt_company'); ?>" required>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" name="phone" placeholder="<?php echo lang('page_contact_form_txt_phone'); ?>" required>
								</div>
								<div class="form-group">
									<textarea class="form-control" rows="5" name="detail" placeholder="<?php echo lang('page_contact_form_txt_detail'); ?>"></textarea>
								</div>
								<div class="col text-center">
									<button type="submit" class="btn btn-primary text-center"><?php echo lang('page_contact_button_send'); ?></button>
								</div>
							</form>
						</div>
						<div class="col-sm-12 col-md-6 sec-site-link col-lg-8 mb-3 mb-md-0">
							<div class="row">
								<div class="col-lg-3 col-sm-12 col-md-12">
									<a class="d-block text-left" href="">หน้าหลัก</a>
									<ul class="list-sitemap">
										<li><a class="text-left"
											href="<?php echo base_url($lang . '/' . lang('menu_home')); ?>"><?php echo lang('menu_home'); ?></a>
										</li>
										<li><a class="text-left"
											href="<?php echo base_url($lang . '/' . lang('menu_about')); ?>"><?php echo lang('menu_about'); ?></a>
										</li>
										<li><a class="text-left"
											href="<?php echo base_url($lang . '/' . lang('menu_our_clients')); ?>"><?php echo lang('menu_our_clients'); ?></a>
										</li>
										<li><a class="text-left"
											href="<?php echo base_url($lang . '/' . lang('menu_blogs')); ?>"><?php echo lang('menu_blogs'); ?></a>
										</li>
										<li><a class="text-left"
											href="<?php echo base_url($lang . '/' . lang('menu_teams')); ?>"><?php echo lang('menu_teams'); ?></a>
										</li>
									</ul>
								</div>
								<div class="col-lg-5 col-sm-12 col-md-12">
									<a class="d-block text-left" href=""><?php echo lang('menu_service'); ?></a>
									<ul class="list-sitemap">
										<?php
										$CI =& get_instance();

										$CI->load->model('Service_model');

										$services = $CI->Service_model->get_service_all();
										?>
										<?php foreach ($services as $service) { ?>
											<li><a class="text-left"
												href="<?php echo base_url($lang . '/' . lang('menu_service') . '/' . unserialize($service->slug)[$lang] . '/' . hashids_encrypt($service->id)); ?>"><?php echo unserialize($service->title)[$lang]; ?></a>
											</li>
										<?php } ?>
									</ul>
								</div>
								<div class="col-lg-4 col-sm-12 col-md-12">
									<a class="d-block text-left" href="">สาระน่ารู้</a>
									<ul class="list-sitemap">
										<li><a class="text-left"
											href="#">การทำการตลาดออนไลน์</a>
										</li>
										<li><a class="text-left"
											href="#">การทำการตลาดออนไลน์</a>
										</li>
										<li><a class="text-left"
											href="#">การทำการตลาดออนไลน์</a>
										</li>
										<li><a class="text-left"
											href="#">การทำการตลาดออนไลน์</a>
										</li>
										<li><a class="text-left"
											href="#">การทำการตลาดออนไลน์</a>
										</li>
										<li><a class="text-left"
											href="#">การทำการตลาดออนไลน์</a>
										</li>
										<li><a class="text-left"
											href="#">การทำการตลาดออนไลน์</a>
										</li>
										<li><a class="text-left"
											href="#">การทำการตลาดออนไลน์</a>
										</li>
									</ul>
								</div>
							</div>
							<!-- <a class="d-block text-left"
							   href="<?php //echo base_url($lang . '/' . lang('menu_home')); ?>"><?php //echo lang('menu_home'); ?></a>
							<a class="d-block text-left"
							   href="<?php //echo base_url($lang . '/' . lang('menu_about')); ?>"><?php //echo lang('menu_about'); ?></a>
							<a class="d-block text-left" href=""><?php //echo lang('menu_service'); ?></a>
							<ul class="list-sitemap">
								<?php
								//$CI =& get_instance();

								//$CI->load->model('Service_model');

								//$services = $CI->Service_model->get_service_all();
								?>
								<?php// foreach ($services as $service) { ?>
									<li><a class="text-left"
										   href="<?php //echo base_url($lang . '/' . lang('menu_service') . '/' . unserialize($service->slug)[$lang] . '/' . hashids_encrypt($service->id)); ?>"><?php// echo unserialize($service->title)[$lang]; ?></a>
									</li>
								<?php// } ?>
							</ul>
							<a class="d-block text-left"
							   href="<?php //echo base_url($lang . '/' . lang('menu_our_clients')); ?>"><?php //echo lang('menu_our_clients'); ?></a>
							<a class="d-block text-left"
							   href="<?php //echo base_url($lang . '/' . lang('menu_blogs')); ?>"><?php //echo lang('menu_blogs'); ?></a>
							<a class="d-block text-left"
							   href="<?php //echo base_url($lang . '/' . lang('menu_teams')); ?>"><?php //echo lang('menu_teams'); ?></a> -->

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
