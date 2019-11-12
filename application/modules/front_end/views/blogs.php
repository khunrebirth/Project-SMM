<!-- Push Custom Style -->
<style>
	.sec-blogs-01 {
		max-width: 1440px;
		margin: 0 auto;
	}

	.blog {
		margin-bottom: 30px;
	}

	.box-page-nation {
		margin: 30px -2px 0;
	}

	.box-page-nation .page-link {
		color: #756aee;
		font-size: 21px;
		border: none;
		padding: 1rem 1.5rem;
		background-color: #05618b;
		color: #fff;
		margin: 0 2px;
	}

	.box-page-nation .page-link:hover,
	.box-page-nation .page-link.active {
		background-color: #2e7dab;
		outline: none;
		border: none;
		box-shadow: none;
	}

	.box-page-nation .page-link:visited,
	.box-page-nation .page-item:focus,
	.box-page-nation .page-item:active,
	.box-page-nation .page-item:hover,
	.box-page-nation .page-link:active,
	.box-page-nation .page-link:focus {
		outline: none;
		border: none;
		box-shadow: none;
	}

	.box-page-nation .page-item:first-child .page-link,
	.box-page-nation .page-item:last-child .page-link {
		border-radius: 0;
		-webkit-border-radius: 0;
		-moz-border-radius: 0;
		-ms-border-radius: 0;
		-o-border-radius: 0;
		border: none;
	}

	.box-blog_catagory {
		position: relative;
		max-width: 1440px;
		width: 100%;
		margin: 0 auto;
	}

	.list-blog_catagory {
		list-style: none;
		padding: 30px 0;
		margin: 0 0 50px 0;
		background-color: #05618b;
		-webkit-box-shadow: 3px 3px 4px 0px #00000047;
		box-shadow: 3px 3px 4px 0px #00000047;
		width: 100%;
		-webkit-box-align: center;
		-webkit-align-items: center;
		-ms-flex-align: center;
		align-items: center;
		padding: 10px 0 5px;
		border-radius: 5px;
		-webkit-border-radius: 5px;
		-moz-border-radius: 5px;
		-ms-border-radius: 5px;
		-o-border-radius: 5px;
	}

	.list-blog_catagory li {
		margin-bottom: 5px;
		border-right: 1px solid #fff;
	}

	@media (max-width: 768px) {
		.list-blog_catagory li {
			border-right: none;
		}
	}

	.list-blog_catagory li:last-of-type {
		border-right: none;
	}

	.list-blog_catagory li a {
		padding: 10px;
		display: block;
		transition: all 0.3s;
		-webkit-transition: all 0.3s;
		-moz-transition: all 0.3s;
		-ms-transition: all 0.3s;
		-o-transition: all 0.3s;
		text-align: center;
		border-radius: 5px;
		-webkit-border-radius: 5px;
		-moz-border-radius: 5px;
		-ms-border-radius: 5px;
		-o-border-radius: 5px;
		color: #fff;
	}

	.list-blog_catagory li a:hover {
		background: #2e7dab;
		color: #fff;
	}

	.title-client {
		max-width: 1440px;
		margin: 0 auto;
	}
	@media (max-width: 992px) { 
		.title-client {
			padding: 5rem 0 2rem !important;
		}
	}
</style>

<!-- Title -->
<?php if ($banner) { ?>
<section class="page-title main-hero-service" style="padding:0;">
	<img class="img-fluid" src="<?php echo base_url((!smm_is_mobile()) ? 'storage/uploads/images/banners/' . unserialize($banner->img)[$lang] : 'storage/uploads/images/banners/' . unserialize($banner->img_moblie)[$lang]); ?>" alt="<?php echo unserialize($banner->img_title_alt)[$lang]; ?>">
	<div class="ttl-header-hero wow">
		<h1><?php echo unserialize($banner->title)[$lang]; ?></h1>
	</div>
</section>
<?php } ?>

<!-- Content -->
<section id="blog">
	<div class="container-fluid">
		<div class="row">
			<div class="title-client col-12" style="text-align: center; padding: 4rem;">
				<img src="<?php echo base_url($lang == 'th' ? 'resources/front_end/images/title-blog.png' : 'resources/front_end/images/title-blog.png'); ?>" class="img-fluid d-none d-md-block mx-auto">
				<img src="<?php echo base_url($lang == 'th' ? 'resources/front_end/images/title-blog_sp.png' : 'resources/front_end/images/title-blog_sp.png'); ?>" class="img-fluid d-block d-md-none mx-auto">
			</div>
		</div>
		<div class="sec-blogs-01 row">
			<div class="col-12 col-lg-3 mb-5 wrap-fixed-menu">
				<a class="box-head-catagory" href="#menuService">
					<span>Service</span>
					<span><i class="fas fa-chevron-down"></i></span>
				</a>
				<ul class="list-catagory-client" id="menuService">
					<li class="ttl-list-catagory d-none d-lg-block">
						<img src="<?php echo base_url('resources/front_end/images/service-menu.png');?>" alt="">
					</li>
					<?php foreach ($blog_categories as $key => $blog_category) { ?>

						<a href="<?php echo base_url($lang . '/' . lang('menu_blogs') . '/' . unserialize($blog_category->slug)[$lang]); ?>"><?php echo unserialize($blog_category->title)[$lang]; ?></a>

						<li>
							<a class="<?php if ($key == 0) { echo 'is-active'; } ?>" href="#categoryGroup-<?php echo $blog_category->id; ?>">
								<figure>
									<img src="<?php echo base_url('storage/uploads/images/blogs/'.unserialize($blog_category->icon)[$lang]); ?>" alt="">
								</figure>	
								<span><?php echo unserialize($blog_category->title)[$lang]; ?></span>
							</a>
						</li>
					<?php } ?>
				</ul>
			</div>
			<div class="col-12 col-lg-9">
				<div class="row row-60 row-sm">
					<?php foreach ($blogs as $blog) { ?>
						<div class="col-xs-12 col-sm-6 col-lg-4 item-blog categoryGroup-<?php echo $blog['category_blog_id']; ?>" style="visibility: visible; animation-name: fadeInLeft;">
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
				</div>
			</div>
		</div>
	</div>
</section>

<!-- SiteMap -->
<?php include 'layouts/sitemap.php'; ?>


<!-- Push Custom Scripts -->
<script>
	$(function() {
		$('.list-catagory-client li a').click(function(e){
			e.preventDefault();
			if(!$(this).hasClass('is-active')){
				var hash = $(this).attr('href');
				var filter = hash.split("#")[1];
				if(filter == 'all'){
					$('.item-blog').fadeIn( "slow" );
				}else{
					$('.item-blog').fadeOut( "slow" );
					$('.'+filter).fadeIn( "slow" );

					//for close slide when click on sp
					if(window.matchMedia("(max-width: 992px)").matches){
						$('#menuService').slideToggle();
						$('.box-head-catagory').toggleClass('is-active');
					}
				}
			}
			$('.list-catagory-client li a').removeClass('is-active');
			$(this).addClass('is-active');
		});

		$(".list-catagory-client li a").each(function( index ) {
			if ($(this).hasClass('is-active')) {
				var hash = $(this).attr('href');
				var filter = hash.split("#")[1];
				if (filter == 'all') {
					$('.item-client').fadeIn( "slow" );
				} else {
					$('.item-client').fadeOut( "slow" );
					$('.'+filter).fadeIn( "slow" );
				}
			}
		});

		//for menu service and respons
		$('.box-head-catagory').click(function(e){
			e.preventDefault();
			var slide_item = $(this).attr('href');
			$(slide_item).slideToggle();
			$(this).toggleClass('is-active');
		});
		$( window ).resize(function() {
			if(window.matchMedia("(min-width: 992px)").matches){
				$('#menuService').show();
				$('.box-head-catagory').removeClass('is-active');
			}else{
				$('#menuService').hide();
			}
		});
	});
</script>
<script>
$(document).ready(function() {
    $('.list-catagory-client').scrollToFixed({
        marginTop: $('.navbar').outerHeight() + 30,
        limit: function() {
			var limit = $('.wrap-fixed-menu').offset().top + ( $('.wrap-fixed-menu').innerHeight() - $('.list-catagory-client').innerHeight());
            return limit;
        },
		removeOffsets: true,
    });
});
</script>
