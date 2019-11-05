<style>
	.box-teams-slide .owl-nav .owl-prev {
		left: 0;
		background: url(<?php echo base_url($lang == 'th' ? 'resources/front_end/images/team/btn_arrow_left.png' : 'resources/front_end/images/team/btn_arrow_left.png');
		?>) !important;
		background-size: cover !important;
	}

	.box-teams-slide .owl-nav .owl-next {
		right: 0;
		background: url(<?php echo base_url($lang == 'th' ? 'resources/front_end/images/team/btn_arrow_right.png' : 'resources/front_end/images/team/btn_arrow_right.png');
		?>) !important;
		background-size: cover !important;
	}

</style>
<!-- Home -->
<header id="home">
	<div class="container h-100">
		<div class="row justify-content-end h-100 align-items-center">
			<div class="text-center wow fadeInUp">
				<h1 class="home__title--head mb-3">Re<span>s</span>ults Driven <br> Marketing Agency</h1>
				<p class="lead home__title--body">
					จุดประกายให้ธุรกิจของคุณโลดแล่นบนโลกออนไลน์อย่างมืออาชีพด้วย <br>
					ทีมงานคุณภาพที่เข้าใจดิจิทัลอย่างผู้เชียวชาญ
				</p>
			</div>
		</div>
	</div>
</header>

<!-- About -->
<section id="about" class="showcase">
	<div class="container-fluid p-0">
		<div class="row no-gutters">
			<div class="col-md-6 col-lg-6 order-lg-2 showcase-img d-none d-sm-block"
				style="background-image: url('<?php echo base_url('storage/uploads/images/abouts/' . unserialize($about->img_section)[$lang]); ?>');">
			</div>
			<div class="col-xs-12 col-md-6 col-lg-6 order-lg-1 my-auto showcase-text text-center wow fadeInLeft">
				<div class="title-about" style="">
					<img src="<?php echo base_url($lang == 'th' ? 'resources/front_end/images/title-about.png' : 'resources/front_end/images/title-about.png'); ?>"
						class="img-fluid">
				</div>
				<h2 class="about__title--head mt-5 mb-4"><span>S</span>ocial Media Master</h2>
				<div class="row justify-content-center">
					<div class="col-xs-12 col-md-10 col-lg-8">
						<p class="lead about__title--body mt-4 mb-4">
							<?php echo unserialize($about->content_left)[$lang]; ?>
						</p>
						<a href="<?php echo base_url($lang . '/' . lang('menu_about')); ?>"
							class="btn btn-primary"><?php echo lang('btn_read_more'); ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Service -->
<section id="service" class="wow fadeInUp" style="overflow:hidden">
	<div class="container-fluid text-center sec-home-service">
		<div class="title-service" style="text-align: left; padding: 4rem 0;">
			<img src="<?php echo base_url($lang == 'th' ? 'resources/front_end/images/title-service.png' : 'resources/front_end/images/title-service.png'); ?>"
				class="img-fluid">
		</div>
		<div class="row">
			<?php foreach ($services as $service) { ?>
			<a href="<?php echo base_url($lang . '/' . lang('menu_service') . '/' . unserialize($service->slug)[$lang] . '/' . hashids_encrypt($service->id)); ?>"
				class="col-xs-12 col-md-3 col-lg-3 mb-5 col-cmn-05 ico-service">

				<div class="wrap-icon-flip">
					<img src="<?php echo base_url('storage/uploads/images/services/' . unserialize($service->icon)[$lang]); ?>"
						class="img-fluid service__icon--resize">
				</div>
				<img src="<?php echo base_url('storage/uploads/images/services/' . unserialize($service->icon)[$lang]); ?>"
					class="img-fluid service__icon--resize ico-service__img">

				<p class="service__title--body">
					<?php echo unserialize($service->title)[$lang]; ?>
				</p>
			</a>
			<?php } ?>
			<a href="#" class="col-xs-12 col-md-3 col-lg-3 mb-5 col-cmn-05 js-scroll-contact">
				<img src="<?php echo base_url('resources/front_end/images/ico_contact_01.png') ?>" alt=""
					class="img-fluid service__icon--resize">
			</a>
		</div>
	</div>
</section>

<!-- Client -->
<section id="client" class="wow fadeInUp">
	<div class="container-fluid">
		<div class="title-client" style="text-align: center; padding: 4rem;">
			<img src="<?php echo base_url($lang == 'th' ? 'resources/front_end/images/title-cilent.png' : 'resources/front_end/images/title-cilent.png'); ?>"
				class="img-fluid">
		</div>
		<!-- tab pc -->
		<div class="row justify-content-center">
			<div class="col-xs-12 col-sm-12 col-md-10 col-lg-8">
				<!-- Nav tabs -->
				<ul class="nav nav-fill client__navs bg-gray pt-2 pb-2">
					<?php foreach ($client_categories as $client_category) { ?>
					<li class="nav-item">
						<a class="nav-link client__navs--border--right pt-0 pb-0"
							id="pills-<?php echo $client_category->id; ?>-tab" data-toggle="pill"
							href="#pills-<?php echo $client_category->id; ?>" role="tab"
							aria-controls="pills-<?php echo $client_category->id; ?>"><?php echo unserialize($client_category->title)[$lang]; ?></a>
					</li>
					<?php } ?>
				</ul>
			</div>
		</div>
		<!-- content tab pc-->
		<div class="tab-content sec-client " id="pills-tabContent">
			<?php foreach ($clients as $client) { ?>
			<div class="tab-pane fade" id="pills-<?php echo $client['category_id']; ?>" role="tabpanel"
				aria-labelledby="pills-<?php echo $client['category_id']; ?>-tab">
				<?php if (count($client['clients']) > 0) { ?>
				<div class="my-3 wrap-client-slide owl-carousel owl-theme">
					<?php
							$counter = 0;
							$totle_client = count($client['clients']);
						?>
					<?php foreach ($client['clients'] as $key => $client_specific) { ?>

					<?php
								$count_point = ($client_specific['category_id'] == 1 ) ? 12 : 8;

								if (smm_is_mobile()) {
									$count_point = ($client_specific['category_id'] == 1 ) ? 6 : 4;
								}
							?>

					<?php if ($counter == 0) { ?>
					<div class="row">
						<?php } ?>
						<div
							class="<?php echo ($client_specific['category_id'] == 1)?'col-6':'col-12'; ?> col-md-<?php if ($client_specific['category_id'] == 1) { echo '2'; } else { echo '3'; } ?> my-3">
							<img src="<?php echo base_url('storage/uploads/images/clients/' . $client_specific['img']) ?>"
								alt="<?php echo $client_specific['title']; ?>" class="img-fluid img-clients">
							<span class="txt-decs-client text-center col-12 d-block">ใช้บริการXXX,XXX,XXX</span>
						</div>
						<?php $counter++; ?>
						<?php if ($counter == $count_point) { ?>
					</div>
					<?php $counter = 0; ?>
					<?php } else { if ($key == ($totle_client - 1 )) { ?>
				</div>
				<?php } } ?>
				<?php } ?>
			</div>
			<?php } ?>
		</div>
		<?php } ?>
	</div>
	
		<p class="text-center col-12 mb-0">
			<a href="<?php echo base_url($lang . '/' . lang('menu_our_clients') . '/'); ?>" class="btn btn-primary">ไปยังหน้า Clients</a>
		</p>
	</div>
</section>


<!-- portfolio -->
<section id="portfolio" class="wow fadeInUp">
	<div class="container-fluid">
		<div class="title-client" style="text-align: center; padding: 0 4rem 4rem;">
			<img src="<?php echo base_url($lang == 'th' ? 'resources/front_end/images/title-cilent.png' : 'resources/front_end/images/title-cilent.png'); ?>"
				class="img-fluid">
		</div>
		<div class="my-3 wrap-client-slide owl-carousel owl-theme">
			<div class="row">
				<div class="col-12 col-md-3 my-3">
					<img src="http://localhost/social-dev/storage/uploads/images/clients/smm_ava_15722370751.jpg" alt=""
						class="img-fluid img-clients">
				</div>
				<div class="col-12 col-md-3 my-3">
					<img src="http://localhost/social-dev/storage/uploads/images/clients/smm_balanze-by-hydrohealth_15722370841.jpg"
						alt="" class="img-fluid img-clients">
				</div>
				<div class="col-12 col-md-3 my-3">
					<img src="http://localhost/social-dev/storage/uploads/images/clients/smm_blue-fish-solution_15722370921.jpg"
						alt="" class="img-fluid img-clients">
				</div>
				<div class="col-12 col-md-3 my-3">
					<img src="http://localhost/social-dev/storage/uploads/images/clients/smm_dfsk_15722371011.jpg"
						alt="" class="img-fluid img-clients">
				</div>
				<div class="col-12 col-md-3 my-3">
					<img src="http://localhost/social-dev/storage/uploads/images/clients/smm_fashionisland_15722371171.jpg"
						alt="" class="img-fluid img-clients">
				</div>
				<div class="col-12 col-md-3 my-3">
					<img src="http://localhost/social-dev/storage/uploads/images/clients/smm_hatari-wireless_15722371271.jpg"
						alt="" class="img-fluid img-clients">
				</div>
				<div class="col-12 col-md-3 my-3">
					<img src="http://localhost/social-dev/storage/uploads/images/clients/smm_infinityone-condo_15722371361.jpg"
						alt="" class="img-fluid img-clients">
				</div>
				<div class="col-12 col-md-3 my-3">
					<img src="http://localhost/social-dev/storage/uploads/images/clients/smm_jvavathailand_15722371491.jpg"
						alt="" class="img-fluid img-clients">
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-md-3 my-3">
					<img src="http://localhost/social-dev/storage/uploads/images/clients/smm_massproductsco_15722371581.jpg"
						alt="" class="img-fluid img-clients">
				</div>
				<div class="col-12 col-md-3 my-3">
					<img src="http://localhost/social-dev/storage/uploads/images/clients/smm_mercurycardetailing_15722371661.jpg"
						alt="" class="img-fluid img-clients">
				</div>
				<div class="col-12 col-md-3 my-3">
					<img src="http://localhost/social-dev/storage/uploads/images/clients/smm_pattieungworld_15722372141.jpg"
						alt="" class="img-fluid img-clients">
				</div>
				<div class="col-12 col-md-3 my-3">
					<img src="http://localhost/social-dev/storage/uploads/images/clients/smm_sukniwate_15722372231.jpg"
						alt="" class="img-fluid img-clients">
				</div>
				<div class="col-12 col-md-3 my-3">
					<img src="http://localhost/social-dev/storage/uploads/images/clients/smm_talutrips_15722372371.jpg"
						alt="" class="img-fluid img-clients">
				</div>
				<div class="col-12 col-md-3 my-3">
					<img src="http://localhost/social-dev/storage/uploads/images/clients/smm_tcmthailand_15722372471.jpg"
						alt="" class="img-fluid img-clients">
				</div>
				<div class="col-12 col-md-3 my-3">
					<img src="http://localhost/social-dev/storage/uploads/images/clients/smm_thebeautylover_15722372581.jpg"
						alt="" class="img-fluid img-clients">
				</div>
				<div class="col-12 col-md-3 my-3">
					<img src="http://localhost/social-dev/storage/uploads/images/clients/smm_thepromenade_15722372691.jpg"
						alt="" class="img-fluid img-clients">
				</div>
			</div>
		</div>
		<p class="text-center col-12 mb-0">
			<a href="<?php echo base_url($lang . '/' . lang('menu_blogs') . '/'); ?>" class="btn btn-primary">ไปยังหน้า Portfolio</a>
		</p>
	</div>
</section>

<!-- Blog -->
<section id="blog">
	<div class="container-fluid">
		<div class="title-client" style="text-align: center; padding: 4rem;">
			<img src="<?php echo base_url($lang == 'th' ? 'resources/front_end/images/title-blog.png' : 'resources/front_end/images/title-blog.png'); ?>"
				class="img-fluid">
		</div>
		<div class="row row-60 row-sm">
			<?php foreach ($blogs as $blog) { ?>
			<div class="col-xs-12 col-sm-6 col-lg-3" style="visibility: visible; animation-name: fadeInLeft;">
				<article class="blog blog__modern">
					<a class="blog__modern--figure"
						href="<?php echo base_url($lang . '/' . lang('menu_blogs') . '/' . unserialize($blog->blog_category_slug)[$lang] . '/' .  unserialize($blog->slug)[$lang] . '/' . hashids_encrypt($blog->id)); ?>">
						<img src="<?php echo base_url('storage/uploads/images/blogs/' . unserialize($blog->img)[$lang]) ?>"
							alt="<?php echo unserialize($blog->img_title_alt)[$lang]; ?>" width="370" height="307">
						<div class="blog__modern--time">
							<time datetime="<?php echo $blog->created_at; ?>"><span
									class="blog__modern--time--month"><?php echo date_format(date_create($blog->created_at), 'm'); ?></span><span
									class="blog__modern--time--number"><?php echo date_format(date_create($blog->created_at), 'd'); ?></span></time>
						</div>
					</a>
					<h4 class="blog__modern--title"><a href="#"><?php echo unserialize($blog->title)[$lang]; ?></a></h4>
					<p class="blog__modern--text">
						<?php echo unserialize($blog->description_section)[$lang]; ?>
					</p>
				</article>
			</div>
			<?php } ?>
			<p class="text-center col-12 mb-0">
				<a href="<?php echo base_url($lang . '/' . lang('menu_blogs') . '/'); ?>"
					class="btn btn-primary">ไปยังหน้า Blog</a>
			</p>
		</div>
	</div>
</section>

<!-- Team -->
<section id="team" class="wow fadeInUp">
	<div class="container-fluid ">
		<div class="sec-wrap-teams row flex-sm-column-reverse flex-column-reverse flex-md-column-reverse flex-lg-row">
			<div class="row col-lg-9 col-sm-12 item-team">
				<div class="box-teams-slide owl-carousel owl-theme">
					<?php foreach ($teams as $team) { ?>
					<?php
							$fullname = unserialize($team->title)[$lang];
							$posBlankSpace = strpos(unserialize($team->title)[$lang], " ");
							$first_name = substr($fullname, 0, $posBlankSpace);
							$last_name = substr($fullname, $posBlankSpace, strlen($fullname));
						?>
					<div class="">
						<div class="card team__card--parent mb-0" style="width: 18rem;">
							<img class="card-img-top"
								src="<?php echo base_url('storage/uploads/images/teams/' . unserialize($team->image)[$lang]); ?>">
							<img class="card-img-top is-hover"
								src="<?php echo base_url('storage/uploads/images/teams/' . unserialize($team->image_hover)[$lang]); ?>">
							<div class="card-body pl-0 pt-2 pb-2">
								<h5 class="card-title team__crad--title"><?php echo $first_name; ?>
									<br><?php echo $last_name; ?></h5>
								<p class="card-text team__crad--body"><?php echo unserialize($team->body)[$lang]; ?></p>
							</div>
						</div>
					</div>
					<?php } ?>

					<!-- dummy -->
					<div>
						<div class="card team__card--parent mx-auto">
							<img class="card-img-top"
								src="<?php echo base_url('storage/uploads/images/teams/img-juthamas.jpg'); ?>" alt="">
							<img class="card-img-top is-hover"
								src="<?php echo base_url('storage/uploads/images/teams/img-juthamas.jpg'); ?>" alt="">
							<div class="card-body pl-0">
								<h5 class="card-title team__crad--title">Kittichai<br>Rungjang</h5>
								<p class="card-text team__crad--body">Project Manager 01</p>
							</div>
						</div>
					</div>
					<!-- / dummy -->
					<!-- dummy -->
					<div>
						<div class="card team__card--parent mx-auto">
							<img class="card-img-top"
								src="<?php echo base_url('storage/uploads/images/teams/img-juthamas.jpg'); ?>" alt="">
							<img class="card-img-top is-hover"
								src="<?php echo base_url('storage/uploads/images/teams/img-juthamas.jpg'); ?>" alt="">
							<div class="card-body pl-0">
								<h5 class="card-title team__crad--title">Kittichai<br>Rungjang</h5>
								<p class="card-text team__crad--body">Project Manager 01</p>
							</div>
						</div>
					</div>
					<!-- / dummy -->
					<!-- dummy -->
					<div>
						<div class="card team__card--parent mx-auto">
							<img class="card-img-top"
								src="<?php echo base_url('storage/uploads/images/teams/img-juthamas.jpg'); ?>" alt="">
							<img class="card-img-top is-hover"
								src="<?php echo base_url('storage/uploads/images/teams/img-juthamas.jpg'); ?>" alt="">
							<div class="card-body pl-0">
								<h5 class="card-title team__crad--title">Kittichai<br>Rungjang</h5>
								<p class="card-text team__crad--body">Project Manager 01</p>
							</div>
						</div>
					</div>
					<!-- / dummy -->
					<!-- dummy -->
					<div>
						<div class="card team__card--parent mx-auto">
							<img class="card-img-top"
								src="<?php echo base_url('storage/uploads/images/teams/img-juthamas.jpg'); ?>" alt="">
							<img class="card-img-top is-hover"
								src="<?php echo base_url('storage/uploads/images/teams/img-juthamas.jpg'); ?>" alt="">
							<div class="card-body pl-0">
								<h5 class="card-title team__crad--title">Kittichai<br>Rungjang</h5>
								<p class="card-text team__crad--body">Project Manager 01</p>
							</div>
						</div>
					</div>
					<!-- / dummy -->
					<!-- dummy -->
					<div>
						<div class="card team__card--parent mx-auto">
							<img class="card-img-top"
								src="<?php echo base_url('storage/uploads/images/teams/img-juthamas.jpg'); ?>" alt="">
							<img class="card-img-top is-hover"
								src="<?php echo base_url('storage/uploads/images/teams/img-juthamas.jpg'); ?>" alt="">
							<div class="card-body pl-0">
								<h5 class="card-title team__crad--title">Kittichai<br>Rungjang</h5>
								<p class="card-text team__crad--body">Project Manager 01</p>
							</div>
						</div>
					</div>
					<!-- / dummy -->
				</div>
			</div>
			<div class="item-team-ttl col-lg-3 col-sm-12">
				<div class="title-team" style="text-align: center; padding: 3rem 0.5rem 2rem;">
					<img src="<?php echo base_url($lang == 'th' ? 'resources/front_end/images/title-team.png' : 'resources/front_end/images/title-team.png'); ?>"
						alt="" class="img-fluid">
				</div>
				<p class="text-center col-12 mb-2">
					<a href="<?php echo base_url($lang . '/' . lang('menu_teams') . '/'); ?>" class="btn btn-primary">ไปยังหน้า Teams</a>
				</p>
			</div>
		</div>
	</div>
</section>

<!-- Contact -->
<section id="contact" class="wow fadeInUp">
	<div class="container">
		<div class="title-contact" style="text-align: center; padding: 4rem;">
			<img src="<?php echo base_url($lang == 'th' ? 'resources/front_end/images/title-contact.png' : 'resources/front_end/images/title-contact.png'); ?>"
				class="img-fluid">
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-7 col-lg-7 ">
				<div class="row">
					<div class="col-xs-12 col-md-4 col-lg-4 d-none d-sm-block">
						<img src="https://www.anchorwave.com/wp-content/uploads/2016/04/google-partner358x138.png"
							alt="Follow Us on Facebook" class="img-fluid m-2">
					</div>
					<div class="col-xs-12 col-md-8 col-lg8 d-none d-sm-block">
						<h2 class="text-secondary d-none d-sm-none d-md-none d-lg-block" style="font-size:1.2rem;">
							specialized in :
						</h2>
						<img src="http://www.clixmarketing.com/blog/wp-content/uploads/2015/02/photo.png"
							alt="Follow Us on Facebook" class="img-fluid m-2" style="width: 40px;">
						<img src="https://knockconsulting.com/images/icon-sm-instagram-round.svg"
							alt="Follow Us on Instagram" class="img-fluid m-2" style="width: 40px;">
						<img src="https://b2bm.s3.amazonaws.com/styles/default_image/s3/youtube-icon-full_color.png?itok=3QLCT4W_"
							alt="Follow Us on Youtube" class="img-fluid m-2" style="width: 40px;">
						<img src="https://knockconsulting.com/images/icon-sm-linkedin-round.svg"
							alt="Follow Us on Linkedin" class="img-fluid m-2" style="width: 40px;">
						<img src="https://knockconsulting.com/images/google-plus.svg" alt="Follow Us on Google Plus"
							class="img-fluid m-2" style="width: 40px;">
					</div>
				</div>
				<h2 class="text-secondary contact__title--head mt-3 mb-3"><?php echo lang('page_contact_company'); ?>
				</h2>
				<p class="text-secondary contact__title--bod mb-0">
					<?php echo lang('page_contact_address_detail'); ?>
					<strong><?php echo lang('page_contact_phone'); ?>.</strong> 0-2193-9062 (5 line) <br>
					<strong><?php echo lang('page_contact_fax'); ?>.</strong> 0-2193-9047 <br>
					<strong><?php echo lang('page_contact_email'); ?>.</strong> info@social.co.th <br><br>
				</p>
				<div class="row mb-5">
					<div class="col-12 col-sm-12 col-md-11 col-lg-12">
						<h2 class="text-secondary contact__title--head"><?php echo lang('page_contact_follow'); ?></h2>
						<a href="#">
							<img src="https://knockconsulting.com/images/icon-sm-facebook-round.svg"
								alt="Follow Us on Facebook" width="40" class="img-fluid m-0">
						</a>
						<a href="#">
							<img src="https://knockconsulting.com/images/icon-sm-instagram-round.svg"
								alt="Follow Us on Instagram" width="40" class="img-fluid m-0">
						</a>
						<a href="#">
							<img src="https://knockconsulting.com/images/icon-sm-youtube-round.svg"
								alt="Follow Us on Youtube" width="40" class="img-fluid m-0">
						</a>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-5 col-lg-5">

			</div>
		</div>
	</div>
</section>

<!-- SiteMap -->
<?php include 'layouts/sitemap.php'; ?>

<!-- Push Custom Scripts -->
<script>
	$(function () {
		$(".client__navs a:first").tab('show')

		$('.wrap-client-slide').owlCarousel({
			items: 1,
			nav: false,
			loop: true,
			dots: true,
			margin: 15,
			autoplay: false,
			autoplayTimeout: 2000,
			autoplaySpeed: 1000,
		});

		$('.box-teams-slide').owlCarousel({
			items: 4,
			nav: true,
			loop: true,
			dots: false,
			margin: 10,
			scrollPerPage: true,
			singleItem: false,
			slideBy: 4,
			responsive: {
				0: {
					items: 1,
					slideBy: 1,
				},
				576: {
					items: 2,
					slideBy: 2,
				},
				768: {
					items: 3,
					slideBy: 3,
				},
				1200: {
					items: 4,
				}
			}
		});

		$(".js-scroll-contact").click(function (event) {
			event.preventDefault();

			$('html,body').animate({
				scrollTop: $("#contact").offset().top
			}, 'slow');
		});
	});

</script>
