<div id="accordion">
	<div class="card text-center" style="background: #00264c; color: #fff; border-radius: 0;">
		<div class="card-header" id="headingOne" style="padding-top: 0px; padding-bottom: 0px;">
			<h5 class="mb-0">
				<button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
						aria-controls="collapseOne" style="color: #fff;">
					Site map <i class="fas fa-plus-circle"></i>
				</button>
			</h5>
		</div>
		<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
			<div class="card-body">
				<div class="sec-sitemap">
					<div class="row">
						<div class="col-sm-12 col-lg-4">
							<p class="text-left"><img class="img-fluid" src="<?php echo base_url('resources/front_end/images/logo-smm.png');?>" alt=""></p>
							<h4 class="text-left"><?php echo lang('page_contact_company'); ?></h4>
							<p class="text-left"><?php echo lang('page_contact_address_detail'); ?></p>
						</div>
						<div class="col-sm-12 col-lg-4">
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
						</div>
						<div class="col-sm-12 col-lg-4">
							<a class="d-block text-left" href="<?php echo base_url($lang . '/' . lang('menu_our_clients')); ?>"><?php echo lang('menu_our_clients'); ?></a>
							<a class="d-block text-left" href="<?php echo base_url($lang . '/' . lang('menu_blogs')); ?>"><?php echo lang('menu_blogs'); ?></a>
							<a class="d-block text-left" href="<?php echo base_url($lang . '/' . lang('menu_teams')); ?>"><?php echo lang('menu_teams'); ?></a>
							<ul class="list-social">

							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
