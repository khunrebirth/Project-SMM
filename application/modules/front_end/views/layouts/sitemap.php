<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v4.0&appId=189754555007223&autoLogAppEvents=1"></script>
<style>
	.fb-page {
		width: 300px;
	}
	@media (min-width: 320px)  {
		.fb-page {
			width: 280px;
		}
	}
	@media (min-width: 360px)  {
		.fb-page {
			width: 280px;
		}
	}
	@media (min-width: 540px)  {
		.fb-page {
			width: 350px;
		}
	}
	@media (min-width: 720px)  {
		.fb-page {
			width: 350px;
		}
	}
	@media (min-width: 960px)  {
		.fb-page {
			width: 200px;
		}
	}
	@media (min-width: 1090px)  {
		.fb-page {
			width: 200px;
		}
	}
	@media (min-width: 1140px)  {
		.fb-page {
			width: 250px;
		}
	}
	@media (min-width: 1300px)  {
		.fb-page {
			width: 300px;
		}
	}
	.item-fb-page {
		margin-bottom: 20px;
	}
</style>
<div class="sec-footer-sitemap" id="accordion">
	<div class="card text-center" style="background: #00264c; color: #fff; border-radius: 0;margin:0;">
		<div class="show">
			<div class="card-body">
				<div class="sec-sitemap">
					<div class="row">
						<div class="col-sm-12 sec-site-link col-lg-3 mb-3 mb-md-0">
							<a class="d-block text-left" href="<?php echo base_url($lang . '/' . lang('menu_home')); ?>"><?php echo lang('menu_home'); ?></a>
							<a class="d-block text-left" href="<?php echo base_url($lang . '/' . lang('menu_about')); ?>"><?php echo lang('menu_about'); ?></a>
							<a class="d-block text-left" href=""><?php echo lang('menu_service'); ?></a>
							<ul class="list-sitemap">
								<?php
									$CI =& get_instance();

									$CI->load->model('Service_model');

									$services = $CI->Service_model->get_service_all();
								?>
								<?php foreach ($services as $service) { ?>
									<li><a class="text-left" href="<?php echo base_url($lang . '/' . lang('menu_service') . '/' . unserialize($service->slug)[$lang] . '/' . hashids_encrypt($service->id)); ?>"><?php echo unserialize($service->title)[$lang]; ?></a></li>
								<?php } ?>
							</ul>
							<a class="d-block text-left" href="<?php echo base_url($lang . '/' . lang('menu_our_clients')); ?>"><?php echo lang('menu_our_clients'); ?></a>
							<a class="d-block text-left" href="<?php echo base_url($lang . '/' . lang('menu_blogs')); ?>"><?php echo lang('menu_blogs'); ?></a>
							<a class="d-block text-left" href="<?php echo base_url($lang . '/' . lang('menu_teams')); ?>"><?php echo lang('menu_teams'); ?></a>
						
						</div>
						
						<div class="col-sm-12 col-lg-9">
							<div class="row">
								<div class="col-12 mb-4">
									<h2 class="ttl-facebook">Our Facebook Page</h2>
									<!-- <img class="img-fluid" src="http://localhost/social-dev/resources/front_end/images/title-about.png" alt=""> -->
								</div>
								<div class="col-lg-4 item-fb-page">
									<div class="fb-page" data-href="https://www.facebook.com/iSEO.SEM/" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/iSEO.SEM/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/iSEO.SEM/">รับบริการทำ SEO  SEM</a></blockquote></div>
								</div>
								<div class="col-lg-4 item-fb-page">
									<div class="fb-page" data-href="https://www.facebook.com/SocialMediaMarketing/" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/SocialMediaMarketing/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/SocialMediaMarketing/">Social Media Master</a></blockquote></div>
								</div>
								<div class="col-lg-4 item-fb-page">
									<div class="fb-page" data-href="https://www.facebook.com/EmailDirectMarketing.EDM/" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/EmailDirectMarketing.EDM/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/EmailDirectMarketing.EDM/">บริการรับส่งอีเมล์ : Email Direct Marketing</a></blockquote></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
</script>
