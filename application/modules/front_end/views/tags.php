
<!-- Push Custom Style -->
<link rel="stylesheet" href="<?php echo base_url('resources/front_end/css/style_tags.min.css'); ?>">

<!-- Title -->
<?php if ($banner) { ?>
<section class="page-title main-hero-service p-0">
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
			<div class="title-client col-12 text-center ttl-top-space">
				<img src="<?php echo base_url($lang == 'th' ? 'resources/front_end/images/title-blog.png' : 'resources/front_end/images/title-blog.png'); ?>" class="img-fluid">
			</div>
		</div>
		<div class="sec-blogs-01 row">
			<div class="col-12 ">
				<h3 class="ttl-tags"><span><?php echo unserialize($tag->title)[$lang]; ?></span></h3>
			</div>
			<div class="col-12 col-lg-12">
				<div class="row row-60 row-sm">
					<?php foreach ($blogs as $blog) { ?>
						<div class="col-xs-12 col-sm-6 col-lg-3 item-blog animate-cmn categoryGroup-<?php echo $blog->category_blog_id; ?>">
							<article class="blog blog__modern">
								<a class="blog__modern--figure" href="<?php echo base_url($lang . '/' . lang('menu_blogs') . '/' . unserialize($blog->blog_category_slug)[$lang] . '/' .  unserialize($blog->slug)[$lang]); ?>">
									<img src="<?php echo base_url('storage/uploads/images/blogs/' . unserialize($blog->img)[$lang]) ?>" alt="<?php echo unserialize($blog->img_title_alt)[$lang]; ?>" width="370" height="307">
									<div class="blog__modern--time">
										<time datetime="<?php echo $blog->created_at; ?>"><span class="blog__modern--time--month"><?php echo date_format(date_create($blog->created_at), 'm'); ?></span><span class="blog__modern--time--number"><?php echo date_format(date_create($blog->created_at), 'd'); ?></span></time>
									</div>
								</a>
								<h4 class="blog__modern--title"><a href="#"><?php echo unserialize($blog->title)[$lang]; ?></a></h4>
								<p class="blog__modern--text">
									<?php echo unserialize($blog->description_section)[$lang]; ?>
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
<script type="text/javascript" src="<?php echo base_url('resources/front_end/js/script_tags.min.js'); ?>"></script>
