<!-- Push Custom Style -->
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
			<div class="text-center wow fadeInUp txt-top-home">
				<h1 class="home__title--head mb-3">Re<span>s</span>ults Driven <br> <span class="sub">Marketing Agency</span></h1>
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
			<div class="col-md-6 col-lg-6 order-lg-2 showcase-img d-none d-sm-block" style="background-image: url('<?php echo base_url('storage/uploads/images/abouts/' . unserialize($about->img_section)[$lang]); ?>');">
			</div>
			<div class="col-xs-12 col-md-6 col-lg-6 order-lg-1 my-auto showcase-text text-center wow fadeInLeft">
				<div class="title-about ttl-home-img" style="">
					<img src="<?php echo base_url($lang == 'th' ? 'resources/front_end/images/title-about.png' : 'resources/front_end/images/title-about.png'); ?>" class="img-fluid d-none d-md-block mx-auto">
					<img src="<?php echo base_url($lang == 'th' ? 'resources/front_end/images/title-about_sp.png' : 'resources/front_end/images/title-about_sp.png'); ?>" class="img-fluid d-block d-md-none mx-auto">
				</div>
				<h2 class="about__title--head mt-5 mb-4"><span>S</span>ocial Media Master</h2>
				<div class="row justify-content-center">
					<div class="col-xs-12 col-md-10 col-lg-8">
						<p class="lead about__title--body mt-2 mb-4"><?php echo unserialize($about->content_left)[$lang]; ?></p>
						<a href="<?php echo base_url($lang . '/' . lang('menu_about')); ?>" class="btn btn-primary btn-full-sp"><?php echo lang('btn_read_more'); ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Service -->
<section id="service" class="wow fadeInUp" style="overflow:hidden">
	<div class="container-fluid text-center sec-home-service">
		<div class="title-service ttl-home-img" style="text-align: left; padding: 4rem 0;">
			<img src="<?php echo base_url($lang == 'th' ? 'resources/front_end/images/title-service.png' : 'resources/front_end/images/title-service.png'); ?>" class="img-fluid d-none d-md-block">
			<img src="<?php echo base_url($lang == 'th' ? 'resources/front_end/images/title-service_sp.png' : 'resources/front_end/images/title-service_sp.png'); ?>" class="img-fluid d-block d-md-none mx-auto">
		</div>
		<div class="row">
			<?php foreach ($services as $service) { ?>
			<a href="<?php echo base_url($lang . '/' . lang('menu_service') . '/' . unserialize($service->slug)[$lang]); ?>" class="col-xs-12 col-md-3 col-lg-3 mb-5 col-cmn-05 ico-service">
				<div class="wrap-icon-flip">
					<img src="<?php echo base_url('storage/uploads/images/services/' . unserialize($service->icon)[$lang]); ?>" class="img-fluid service__icon--resize">
				</div>
				<img src="<?php echo base_url('storage/uploads/images/services/' . unserialize($service->icon)[$lang]); ?>" class="img-fluid service__icon--resize ico-service__img">
				<p class="service__title--body"><?php echo unserialize($service->title)[$lang]; ?></p>
			</a>
			<?php } ?>
		</div>
	</div>
</section>

<!-- Client -->
<section id="client" class="wow fadeInUp">
	<div class="container-fluid">
		<div class="title-client ttl-home-img" style="text-align: center; padding: 4rem 0;">
			<img src="<?php echo base_url($lang == 'th' ? 'resources/front_end/images/title-cilent.png' : 'resources/front_end/images/title-cilent.png'); ?>" class="img-fluid d-none d-md-block mx-auto">
			<img src="<?php echo base_url($lang == 'th' ? 'resources/front_end/images/title-cilent_sp.png' : 'resources/front_end/images/title-cilent_sp.png'); ?>" class="img-fluid d-block d-md-none mx-auto">
		</div>
		<div class="col-12 sec-client box-slide-client-sp  owl-carousel owl-theme">
			<div class="row">
				<?php foreach ($top_clients as $top_client) { ?>
					<div class="col-4 col-md-4 col-lg-2 mb-4">
						<img src="<?php echo base_url('/storage/uploads/images/home/' .  unserialize($top_client->image)[$lang]); ?>" alt="<?php echo unserialize($top_client->title)[$lang]; ?>" class="img-fluid img-clients">
					</div>
				<?php } ?>
			</div>
			<div class="row">
				<?php $slice_clients = array_slice($clients, 0, 6); ?>
				<?php foreach ($slice_clients as $client) { ?>
					<div class="col-4 col-md-4 col-lg-2 mb-4">
						<img class="img-fluid" src="<?php echo base_url('storage/uploads/images/clients/' . unserialize($client->image)[$lang]); ?>" alt="<?php echo unserialize($client->title)[$lang]; ?>">
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
	<p class="text-center col-12 mb-0"><a href="<?php echo base_url($lang . '/' . lang('menu_our_clients') . '/'); ?>" class="btn btn-primary btn-full-sp"><?php echo lang('btn_read_all'); ?></a></p>
	
</section>

<!-- Portfolios -->
<section id="portfolio" class="wow fadeInUp">
	<div class="container-fluid">
		<div class="title-client ttl-home-img" style="text-align: center; padding: 0 4rem 4rem;">
			<img src="<?php echo base_url($lang == 'th' ? 'resources/front_end/images/our-port.png' : 'resources/front_end/images/our-port.png'); ?>" class="img-fluid d-none d-md-block mx-auto">
			<img src="<?php echo base_url($lang == 'th' ? 'resources/front_end/images/our-port_sp.png' : 'resources/front_end/images/our-port_sp.png'); ?>" class="img-fluid d-block d-md-none mx-auto">
		</div>
		<div class="col-12 sec-client box-slide-portfolio-sp  owl-carousel owl-theme">
			<div class="row">
				<?php foreach ($top_portfolios as $top_portfolio) { ?>
					<div class="col-6 col-md-6 col-lg-3 mb-4">
						<?php if ($top_portfolio->category_id == 17) { ?>

							<!-- TODO:: handle Portoflio Video -->

						<?php } else { ?>
							<img src="<?php echo base_url('/storage/uploads/images/home/' . unserialize($top_portfolio->image)[$lang]); ?>" alt="<?php echo unserialize($top_portfolio->title)[$lang]; ?>" class="img-fluid img-clients">
						<?php } ?>
						<div class="caption-detail">
							<p class="ttl"><?php echo unserialize($top_portfolio->text)[$lang]; ?></p>
							<p class="desc"><?php echo unserialize($top_portfolio->category_title)[$lang]; ?></p>
						</div>
					</div>
				<?php } ?>
			</div>
			<div class="row">
				<?php $slice_portfolios = array_slice($portfolios, 0, 4); ?>
				<?php foreach ($slice_portfolios as $portfolio) { ?>
					<div class="col-6 col-md-6 col-lg-3 mb-4">
						<?php if ($portfolio->category_id == 17) { ?>

							<!-- TODO:: handle Portoflio Video -->

						<?php } else { ?>
							<img class="img-fluid" src="<?php echo base_url('storage/uploads/images/portfolios/' . unserialize($portfolio->image)[$lang]); ?>" alt="<?php echo unserialize($portfolio->title)[$lang]; ?>">
						<?php } ?>
						<div class="caption-detail">
							<p class="ttl"><?php echo unserialize($portfolio->text)[$lang]; ?></p>
							<p class="desc"><?php echo unserialize($portfolio->category_title)[$lang]; ?></p>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
	<p class="text-center col-12 mb-0"><a href="<?php echo base_url($lang . '/' . lang('menu_portfolios')); ?>" class="btn btn-primary btn-full-sp"><?php echo lang('btn_read_all'); ?></a></p>
</section>

<!-- Blog -->
<section id="blog">
	<div class="container-fluid">
		<div class="title-client ttl-home-img" style="text-align: center; padding: 0 0 4rem;">
			<img src="<?php echo base_url($lang == 'th' ? 'resources/front_end/images/title-blog.png' : 'resources/front_end/images/title-blog.png'); ?>" class="img-fluid d-none d-md-block mx-auto">
			<img src="<?php echo base_url($lang == 'th' ? 'resources/front_end/images/title-blog_sp.png' : 'resources/front_end/images/title-blog_sp.png'); ?>" class="img-fluid d-block d-md-none mx-auto">
		</div>
		<div class="row row-60 row-sm">
			<?php foreach ($blogs as $blog) { ?>
			<div class="col-xs-12 col-sm-6 col-lg-3 blog__item" style="visibility: visible; animation-name: fadeInLeft;">
				<article class="blog blog__modern">
					<a class="blog__modern--figure" href="<?php echo base_url($lang . '/' . lang('menu_blogs') . '/' . unserialize($blog['blog_category_slug'])[$lang] . '/' .  unserialize($blog['slug'])[$lang]); ?>">
						<img src="<?php echo base_url('storage/uploads/images/blogs/' . unserialize($blog['img'])[$lang]) ?>" alt="<?php echo unserialize($blog['img_title_alt'])[$lang]; ?>" width="370" height="307">
						<div class="blog__modern--time">
							<time datetime="<?php echo $blog['created_at']; ?>"><span class="blog__modern--time--month"><?php echo date_format(date_create($blog['created_at']), 'm'); ?></span><span class="blog__modern--time--number"><?php echo date_format(date_create($blog['created_at']), 'd'); ?></span></time>
						</div>
					</a>
					<h4 class="blog__modern--title"><a href="#"><?php echo unserialize($blog['title'])[$lang]; ?></a></h4>
					<p class="blog__modern--text"><?php echo unserialize($blog['description_section'])[$lang]; ?></p>
					<!-- handle moblie -->
					<p class="blog__modern--bottom-text d-block d-md-none">
						<?php echo $lang == 'th' ? ssm_thai_date(strtotime($blog['created_at'])) : date('d F Y', strtotime($blog['created_at'])); ?> |
						<?php
							$maximum = count($blog['tags']);
							$counter = 0;
						?>
						<?php foreach ($blog['tags'] as $tag) { ?>
							<?php echo unserialize($tag->title)[$lang]; ?>
							<?php $counter++; ?>
							<?php if ($counter != $maximum)  { echo ','; } else { echo ''; } ?>
						<?php } ?>
					</p>
				</article>
			</div>
			<?php } ?>
			<p class="text-center col-12 mb-0"><a href="<?php echo base_url($lang . '/' . lang('menu_blogs') . '/'); ?>" class="btn btn-primary btn-full-sp"><?php echo lang('btn_read_all'); ?></a></p>
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
					<div class="card team__card--parent mb-0" style="width: 18rem;">
						<img class="card-img-top" src="<?php echo base_url('storage/uploads/images/teams/' . unserialize($team->image)[$lang]); ?>">
						<img class="card-img-top is-hover" src="<?php echo base_url('storage/uploads/images/teams/' . unserialize($team->image_hover)[$lang]); ?>">
						<div class="card-body pl-0 pt-2 pb-2">
							<h5 class="card-title team__crad--title"><?php echo $first_name; ?><br><?php echo $last_name; ?></h5>
							<p class="card-text team__crad--body"><?php echo unserialize($team->body)[$lang]; ?></p>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
			<div class="item-team-ttl col-lg-3 col-sm-12">
				<div class="title-team ttl-home-img" style="text-align: center; padding: 3rem 0.5rem 2rem;">
					<img src="<?php echo base_url($lang == 'th' ? 'resources/front_end/images/title-team.png' : 'resources/front_end/images/title-team.png'); ?>" class="img-fluid d-none d-md-block mx-auto">
					<img src="<?php echo base_url($lang == 'th' ? 'resources/front_end/images/title-team_sp.png' : 'resources/front_end/images/title-team_sp.png'); ?>" class="img-fluid d-block d-md-none mx-auto">
				</div>
				<p class="text-center col-12 mb-4"><a href="<?php echo base_url($lang . '/' . lang('menu_teams') . '/'); ?>" class="btn btn-primary btn-full-sp"><?php echo lang('btn_read_all'); ?></a></p>
			</div>
		</div>
	</div>
</section>

<!-- Contact -->
<section id="contact" class="wow fadeInUp">
	<div class="container">
		<div class="title-contact ttl-home-img" style="text-align: center; padding: 4rem 15px;">
			<img src="<?php echo base_url($lang == 'th' ? 'resources/front_end/images/title-contact.png' : 'resources/front_end/images/title-contact.png'); ?>" class="img-fluid d-none d-md-block mx-auto">
			<img src="<?php echo base_url($lang == 'th' ? 'resources/front_end/images/title-contact_sp.png' : 'resources/front_end/images/title-contact_sp.png'); ?>" class="img-fluid d-block d-md-none mx-auto">
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-7 col-lg-7 ">
				<div class="row">
					<div class="col-xs-12 col-md-4 col-lg-4 d-none d-sm-block">
						<img src="https://www.anchorwave.com/wp-content/uploads/2016/04/google-partner358x138.png" alt="Follow Us on Facebook" class="img-fluid m-2">
					</div>
					<div class="col-xs-12 col-md-8 col-lg8 d-none d-sm-block">
						<h2 class="text-secondary d-none d-sm-none d-md-none d-lg-block" style="font-size:1.2rem;">specialized in :</h2>
						<img src="http://www.clixmarketing.com/blog/wp-content/uploads/2015/02/photo.png" alt="Follow Us on Facebook" class="img-fluid m-2" style="width: 40px;">
						<img src="https://knockconsulting.com/images/icon-sm-instagram-round.svg" alt="Follow Us on Instagram" class="img-fluid m-2" style="width: 40px;">
						<img src="https://b2bm.s3.amazonaws.com/styles/default_image/s3/youtube-icon-full_color.png?itok=3QLCT4W_" alt="Follow Us on Youtube" class="img-fluid m-2" style="width: 40px;">
						<img src="https://knockconsulting.com/images/icon-sm-linkedin-round.svg" alt="Follow Us on Linkedin" class="img-fluid m-2" style="width: 40px;">
						<img src="https://knockconsulting.com/images/google-plus.svg" alt="Follow Us on Google Plus" class="img-fluid m-2" style="width: 40px;">
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
						<a href="#"><img src="https://knockconsulting.com/images/icon-sm-facebook-round.svg" alt="Follow Us on Facebook" width="40" class="img-fluid m-0"></a>
						<a href="#"><img src="https://knockconsulting.com/images/icon-sm-instagram-round.svg" alt="Follow Us on Instagram" width="40" class="img-fluid m-0"></a>
						<a href="#"><img src="https://knockconsulting.com/images/icon-sm-youtube-round.svg" alt="Follow Us on Youtube" width="40" class="img-fluid m-0"></a>
					</div>
				</div>
			</div>
			<!-- Map -->
			<div class="col-xs-12 col-md-5 col-lg-5"></div>
		</div>
	</div>
</section>

<!-- SiteMap -->
<?php include 'layouts/sitemap.php'; ?>

<!-- Push Custom Scripts -->
<script>
	$(function () {
		$(".client__navs a:first").tab('show')

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

	$(function () {
		var optional_owl = {
			items: 1,
			nav: false,
			loop: true,
			dots: true,
		};
		var select_owl_client = $('.box-slide-client-sp');
		var select_owl_portfolio = $('.box-slide-portfolio-sp');

		if ( $(window).width() < 768 ) {
			startCarousel();
		} else {
			select_owl_client.addClass('off');
			select_owl_portfolio.addClass('off');
		}
				
		$(window).resize(function() {
			if ( $(window).width() < 854 ) {
			startCarousel();
			} else {
			stopCarousel();
			}
		});
		function startCarousel(){
			select_owl_client.owlCarousel(optional_owl);
			select_owl_portfolio.owlCarousel(optional_owl);
		}
		function stopCarousel() {
			select_owl_client.trigger('destroy.owl.carousel');
			select_owl_client.addClass('off');
			select_owl_portfolio.trigger('destroy.owl.carousel');
			select_owl_portfolio.addClass('off');
		}
	});
</script>
