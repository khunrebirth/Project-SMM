<header id="home">
<link rel="stylesheet" href="<?php echo base_url('resources/front_end/css/style_home.min.css'); ?>">
<header class="lazy" data-bg="url('<?php echo base_url(!ssm_is_safari() ? 'resources/front_end/images/brn_top_01.jpg.webp' : 'resources/front_end/images/brn_top_01.jpg');?>')" id="home">
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
<section id="about" class="showcase">
	<div class="container-fluid p-0">
		<div class="row no-gutters">
<<<<<<< HEAD
			<div class="col-md-6 col-lg-6 order-lg-2 showcase-img d-none d-sm-block lazy" data-bg="url('<?php echo base_url(!ssm_is_safari() ? 'storage/uploads/images/abouts/' . unserialize($about->img_section)[$lang] . '.webp' : 'storage/uploads/images/abouts/' . unserialize($about->img_section)[$lang]); ?>')">
=======
			<div class="col-md-6 col-lg-6 order-lg-2 showcase-img d-none d-sm-block" style="background-image: url('<?php echo base_url(!smm_is_safari() ? 'storage/uploads/images/abouts/' . unserialize($about->img_section)[$lang] . '.webp' : 'storage/uploads/images/abouts/' . unserialize($about->img_section)[$lang]); ?>');">
>>>>>>> a5b0fb1c44bbaf9084563a8276790361db27de62
			</div>
			<div class="col-xs-12 col-md-6 col-lg-6 order-lg-1 my-auto showcase-text text-center wow fadeInLeft">
				<div class="title-about ttl-home-img">
					<?php
						$about_title =  base_url($lang == 'th' ? 'resources/front_end/images/title-about.png' : 'resources/front_end/images/title-about.png');
						$about_title_sp =  base_url($lang == 'th' ? 'resources/front_end/images/title-about.png' : 'resources/front_end/images/title-about.png');
					?>
					<img data-src="<?php echo !smm_is_safari() ? $about_title . '.webp' : $about_title; ?>" class="img-fluid d-none d-md-block mx-auto lazy">
					<img data-src="<?php echo !smm_is_safari() ? $about_title_sp . '.webp' : $about_title_sp; ?>" class="img-fluid d-block d-md-none mx-auto lazy">
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
<section id="service" class="wow fadeInUp">
	<div class="container-fluid text-center sec-home-service">
		<div class="title-service ttl-home-img text-left ttl-top-space__home">
			<?php
				$service_title =  base_url($lang == 'th' ? 'resources/front_end/images/title-service.png' : 'resources/front_end/images/title-service.png');
				$service_title_sp =  base_url($lang == 'th' ? 'resources/front_end/images/title-service_sp.png' : 'resources/front_end/images/title-service_sp.png');
			?>
			<img data-src="<?php echo !smm_is_safari() ? $service_title . '.webp' : $service_title; ?>" class="img-fluid d-none d-md-block lazy">
			<img data-src="<?php echo !smm_is_safari() ? $service_title_sp . '.webp' : $service_title_sp; ?>" class="img-fluid d-block d-md-none mx-auto lazy">
		</div>
		<div class="row">
			<?php foreach ($services as $service) { ?>
			<a href="<?php echo base_url($lang . '/' . lang('menu_service') . '/' . unserialize($service->slug)[$lang]); ?>" class="col-xs-12 col-md-3 col-lg-3 mb-5 col-cmn-05 ico-service">
				<div class="wrap-icon-flip">
					<img data-src="<?php echo base_url(!smm_is_safari() ? 'storage/uploads/images/services/' . unserialize($service->icon)[$lang] . '.webp' : 'storage/uploads/images/services/' . unserialize($service->icon)[$lang]); ?>" class="img-fluid service__icon--resize lazy">
				</div>
				<img data-src="<?php echo base_url(!smm_is_safari() ? 'storage/uploads/images/services/' . unserialize($service->icon)[$lang] . '.webp' : 'storage/uploads/images/services/' . unserialize($service->icon)[$lang]); ?>" class="img-fluid service__icon--resize ico-service__img lazy">
				<p class="service__title--body"><?php echo unserialize($service->title)[$lang]; ?></p>
			</a>
			<?php } ?>
		</div>
	</div>
</section>
<section id="client" class="wow fadeInUp">
	<div class="container-fluid">
		<div class="title-client ttl-home-img text-center ttl-top-space__home">
			<?php
				$client_title =  base_url($lang == 'th' ? 'resources/front_end/images/title-cilent.png' : 'resources/front_end/images/title-cilent.png');
				$client_title_sp =  base_url($lang == 'th' ? 'resources/front_end/images/title-cilent_sp.png' : 'resources/front_end/images/title-cilent_sp.png');
			?>
			<img data-src="<?php echo !smm_is_safari() ? $client_title . '.webp' : $client_title; ?>" class="img-fluid d-none d-md-block mx-auto lazy">
			<img data-src="<?php echo !smm_is_safari() ? $client_title_sp . '.webp' : $client_title; ?>" class="img-fluid d-block d-md-none mx-auto lazy">
		</div>
		<div class="col-12 sec-client box-slide-client-sp  owl-carousel owl-theme">
			<div class="row">
				<?php foreach ($top_clients as $top_client) { ?>
					<div class="col-4 col-md-4 col-lg-2 mb-4">
						<img data-src="<?php echo base_url(!smm_is_safari() ? '/storage/uploads/images/home/' .  unserialize($top_client->image)[$lang] . '.webp' : '/storage/uploads/images/home/' .  unserialize($top_client->image)[$lang]); ?>" alt="<?php echo unserialize($top_client->title)[$lang]; ?>" class="img-fluid img-clients lazy">
					</div>
				<?php } ?>
			</div>
			<div class="row">
				<?php $slice_clients = array_slice($clients, 0, 6); ?>
				<?php foreach ($slice_clients as $client) { ?>
					<div class="col-4 col-md-4 col-lg-2 mb-4">
						<img class="img-fluid lazy" data-src="<?php echo base_url(!smm_is_safari() ? 'storage/uploads/images/clients/' . unserialize($client->image)[$lang] .'.webp' : 'storage/uploads/images/clients/' . unserialize($client->image)[$lang]); ?>" alt="<?php echo unserialize($client->title)[$lang]; ?>">
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
	<p class="text-center col-12 mb-0"><a href="<?php echo base_url($lang . '/' . lang('menu_our_clients') . '/'); ?>" class="btn btn-primary btn-full-sp"><?php echo lang('btn_read_all'); ?></a></p>
</section>
<section id="portfolio" class="wow fadeInUp">
	<div class="container-fluid">
		<div class="title-client ttl-home-img text-center ttl-top-space pt-0" >
			<?php
				$portfolio_title =  base_url($lang == 'th' ? 'resources/front_end/images/our-port.png' : 'resources/front_end/images/our-port.png');
				$portfolio_title_sp =  base_url($lang == 'th' ? 'resources/front_end/images/our-port_sp.png' : 'resources/front_end/images/our-port_sp.png');
			?>
			<img data-src="<?php echo !smm_is_safari() ? $portfolio_title . '.webp' : $portfolio_title; ?>" class="img-fluid d-none d-md-block mx-auto lazy">
			<img data-src="<?php echo !smm_is_safari() ? $portfolio_title_sp . '.webp' : $portfolio_title_sp; ?>" class="img-fluid d-block d-md-none mx-auto lazy">
		</div>
		<div class="col-12 sec-client box-slide-portfolio-sp  owl-carousel owl-theme">
			<div class="row">
				<?php foreach ($top_portfolios as $top_portfolio) { ?>
					<div class="col-6 col-md-6 col-lg-3 mb-4">
						<?php if ($top_portfolio->category_id == 17) { ?>

							<!-- TODO:: handle Portoflio Video -->

						<?php } else { ?>
							<img data-src="<?php echo base_url(!smm_is_safari() ? '/storage/uploads/images/home/' . unserialize($top_portfolio->image)[$lang] . '.webp' : '/storage/uploads/images/home/' . unserialize($top_portfolio->image)[$lang]); ?>" alt="<?php echo unserialize($top_portfolio->title)[$lang]; ?>" class="img-fluid img-clients lazy">
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
							<img class="img-fluid lazy" data-src="<?php echo base_url(!smm_is_safari() ? 'storage/uploads/images/portfolios/' . unserialize($portfolio->image)[$lang] . '.webp' : 'storage/uploads/images/portfolios/' . unserialize($portfolio->image)[$lang]); ?>" alt="<?php echo unserialize($portfolio->title)[$lang]; ?>">
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
<section id="blog">
	<div class="container-fluid">
		<div class="title-client ttl-home-img text-center ttl-top-space__home pt-0">
			<?php
				$blog_title =  base_url($lang == 'th' ? 'resources/front_end/images/title-blog.png' : 'resources/front_end/images/title-blog.png');
				$blog_title_sp =  base_url($lang == 'th' ? 'resources/front_end/images/title-blog_sp.png' : 'resources/front_end/images/title-blog_sp.png');
			?>
			<img data-src="<?php echo !smm_is_safari() ? $blog_title . '.webp' : $blog_title; ?>" class="img-fluid d-none d-md-block mx-auto lazy">
			<img data-src="<?php echo !smm_is_safari() ? $blog_title_sp . '.webp' : $blog_title_sp;  ?>" class="img-fluid d-block d-md-none mx-auto lazy">
		</div>
		<div class="row row-60 row-sm">
			<?php foreach ($blogs as $blog) { ?>
			<div class="col-xs-12 col-sm-6 col-lg-3 blog__item animate-cmn">
				<article class="blog blog__modern">
					<a class="blog__modern--figure" href="<?php echo base_url($lang . '/' . lang('menu_blogs') . '/' . unserialize($blog['blog_category_slug'])[$lang] . '/' .  unserialize($blog['slug'])[$lang]); ?>">
						<img class="lazy" data-src="<?php echo base_url(!smm_is_safari() ? 'storage/uploads/images/blogs/' . unserialize($blog['img'])[$lang] . '.webp' : 'storage/uploads/images/blogs/' . unserialize($blog['img'])[$lang]) ?>" alt="<?php echo unserialize($blog['img_title_alt'])[$lang]; ?>" width="370" height="307">
						<div class="blog__modern--time">
							<time datetime="<?php echo $blog['created_at']; ?>"><span class="blog__modern--time--month"><?php echo date_format(date_create($blog['created_at']), 'm'); ?></span><span class="blog__modern--time--number"><?php echo date_format(date_create($blog['created_at']), 'd'); ?></span></time>
						</div>
					</a>
					<h4 class="blog__modern--title"><a href="#"><?php echo unserialize($blog['title'])[$lang]; ?></a></h4>
					<p class="blog__modern--text"><?php echo unserialize($blog['description_section'])[$lang]; ?></p>
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
					<div class="card team__card--parent mb-0">
						<img class="card-img-top owl-lazy" data-src="<?php echo base_url(!smm_is_safari() ? 'storage/uploads/images/teams/' . unserialize($team->image)[$lang] . '.webp' : 'storage/uploads/images/teams/' . unserialize($team->image)[$lang]); ?>">
						<img class="card-img-top is-hover owl-lazy" data-src="<?php echo base_url(!smm_is_safari() ? 'storage/uploads/images/teams/' . unserialize($team->image_hover)[$lang] . '.webp' : 'storage/uploads/images/teams/' . unserialize($team->image_hover)[$lang]); ?>">
						<div class="card-body pl-0 pt-2 pb-2">
							<h5 class="card-title team__crad--title"><?php echo $first_name; ?><br><?php echo $last_name; ?></h5>
							<p class="card-text team__crad--body"><?php echo unserialize($team->body)[$lang]; ?></p>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
			<div class="item-team-ttl col-lg-3 col-sm-12">
				<div class="title-team ttl-home-img text-center">
					<?php
						$team_title =  base_url($lang == 'th' ? 'resources/front_end/images/title-team.png' : 'resources/front_end/images/title-team.png');
						$team_title_sp =  base_url($lang == 'th' ? 'resources/front_end/images/title-team_sp.png' : 'resources/front_end/images/title-team_sp.png');
					?>
					<img data-src="<?php echo !smm_is_safari() ? $team_title . '.webp' : $team_title; ?>" class="img-fluid d-none d-md-block mx-auto lazy">
					<img data-src="<?php echo !smm_is_safari() ? $team_title_sp . '.webp' : $team_title_sp; ?>" class="img-fluid d-block d-md-none mx-auto lazy">
				</div>
				<p class="text-center col-12 mb-4"><a href="<?php echo base_url($lang . '/' . lang('menu_teams') . '/'); ?>" class="btn btn-primary btn-full-sp"><?php echo lang('btn_read_all'); ?></a></p>
			</div>
		</div>
	</div>
</section>
<section id="contact" class="wow fadeInUp">
	<div class="container">
		<div class="title-contact ttl-home-img text-center">
			<?php
				$contact_title =  base_url($lang == 'th' ? 'resources/front_end/images/title-contact.png' : 'resources/front_end/images/title-contact.png');
				$contact_title_sp =  base_url($lang == 'th' ? 'resources/front_end/images/title-contact_sp.png' : 'resources/front_end/images/title-contact_sp.png');
			?>
			<img data-src="<?php echo !smm_is_safari() ? $contact_title . '.webp' : $contact_title; ?>" class="img-fluid d-none d-md-block mx-auto lazy">
			<img data-src="<?php echo !smm_is_safari() ? $contact_title_sp . '.webp' : $contact_title_sp; ?>" class="img-fluid d-block d-md-none mx-auto lazy">
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-7 col-lg-7 ">
				<div class="row">
					<div class="col-xs-12 col-md-4 col-lg-4 d-none d-sm-block">
						<img data-src="https://www.anchorwave.com/wp-content/uploads/2016/04/google-partner358x138.png" alt="Follow Us on Facebook" class="img-fluid m-2 lazy">
					</div>
					<div class="col-xs-12 col-md-8 col-lg8 d-none d-sm-block box-specialized">
						<h2 class="text-secondary d-none d-sm-none d-md-none d-lg-block">specialized in :</h2>
						<img data-src="http://www.clixmarketing.com/blog/wp-content/uploads/2015/02/photo.png" alt="Follow Us on Facebook" class="img-fluid m-2 lazy">
						<img data-src="https://knockconsulting.com/images/icon-sm-instagram-round.svg" alt="Follow Us on Instagram" class="img-fluid m-2 lazy">
						<img data-src="https://b2bm.s3.amazonaws.com/styles/default_image/s3/youtube-icon-full_color.png?itok=3QLCT4W_" alt="Follow Us on Youtube" class="img-fluid m-2 lazy">
						<img data-src="https://knockconsulting.com/images/icon-sm-linkedin-round.svg" alt="Follow Us on Linkedin" class="img-fluid m-2 lazy">
						<img data-src="https://knockconsulting.com/images/google-plus.svg" alt="Follow Us on Google Plus" class="img-fluid m-2 lazy">
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
						<a href="#"><img data-src="https://knockconsulting.com/images/icon-sm-facebook-round.svg" alt="Follow Us on Facebook" width="40" class="img-fluid m-0 lazy"></a>
						<a href="#"><img data-src="https://knockconsulting.com/images/icon-sm-instagram-round.svg" alt="Follow Us on Instagram" width="40" class="img-fluid m-0 lazy"></a>
						<a href="#"><img data-src="https://knockconsulting.com/images/icon-sm-youtube-round.svg" alt="Follow Us on Youtube" width="40" class="img-fluid m-0 lazy"></a>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-5 col-lg-5"></div>
		</div>
	</div>
</section>
<?php include 'layouts/sitemap.php'; ?>
