<?php if ($banner) { ?>
<section class="page-title main-hero-service p-0">
	<img class="img-fluid" src="<?php echo base_url((!smm_is_mobile()) ? 'storage/uploads/images/banners/' . unserialize($banner->img)[$lang] : 'storage/uploads/images/banners/' . unserialize($banner->img_moblie)[$lang]); ?>" alt="<?php echo unserialize($banner->img_title_alt)[$lang]; ?>">
	<div class="ttl-header-hero wow">
		<h1><?php echo unserialize($banner->title)[$lang]; ?></h1>
	</div>
</section>
<?php } ?>
<section id="blog">
	<div class="container-fluid">
		<div class="row">
			<div class="title-client col-12 text-center ttl-top-space">
				<img src="<?php echo base_url($lang == 'th' ? 'resources/front_end/images/title-blog.png' : 'resources/front_end/images/title-blog.png'); ?>" class="img-fluid d-none d-md-block mx-auto">
				<img src="<?php echo base_url($lang == 'th' ? 'resources/front_end/images/title-blog_sp.png' : 'resources/front_end/images/title-blog_sp.png'); ?>" class="img-fluid d-block d-md-none mx-auto">
			</div>
		</div>
		<div class="sec-blogs_content-01 row  flex-sm-column-reverse flex-column-reverse flex-md-column-reverse flex-lg-row">
			<div class="col-lg-3 col-md-12 col-sm-12">
				<div class="list-group">
					<span class="list-group-item list-group-item-action list-group-ttl"><?php echo lang('page_last_blog'); ?></span>
					<?php foreach ($last_blogs as $last_blog) { ?>
						<a href="<?php echo base_url($lang . '/' . lang('menu_blogs') . '/' . unserialize($last_blog->blog_category_slug)[$lang] . '/' .  unserialize($last_blog->slug)[$lang]); ?>" class="list-group-item list-group-item-action"><?php echo unserialize($last_blog->title)[$lang]; ?></a>
					<?php } ?>
				</div>
			</div>
			<div class="col-lg-9 col-md-12 col-sm-12">
				<h3 class="text-center"><?php echo unserialize($blog->title)[$lang]; ?></h3>
				<p class="txt-date-blog"><i class="far fa-calendar-alt"></i> <?php echo $blog->created_at; ?></p>
				<figure class="text-center">
					<img src="<?php echo base_url('storage/uploads/images/blogs/' . unserialize($blog->img)[$lang]); ?>" class="img-fluid" alt="<?php echo unserialize($blog->img_title_alt)[$lang]; ?>">
				</figure>
				<?php echo unserialize($blog->body)[$lang]; ?>
				<div class="sharethis-inline-share-buttons"></div>
				<div class="wrap-tag-blog">
					<span class="ttl-tag-blog"><i class="fas fa-tags"></i> <?php echo lang('page_blog_tag'); ?></span>
					<ul class="list-tag-blog">
						<?php if (count($tags) > 0) { ?>
							<?php foreach ($tags as $tag) { ?>
								<li><a href="<?php echo base_url($lang . '/' . lang('menu_tags') . '/' . unserialize($tag->slug)[$lang]); ?>"><?php echo unserialize($tag->title)[$lang]; ?></a></li>
							<?php } ?>
						<?php } ?>
					</ul>
				</div>
				<div class="sec-blog-relate">
					<?php if (count($suggest_blogs) > 0) { ?>
					<h3 class="ttl-blog-relate"><?php echo lang('page_blog_txt_suggest_blog'); ?></h3>
						<div class="row row-60 row-sm">
							<?php $slice_suggest_blogs = array_slice($suggest_blogs, count($suggest_blogs) - 3); ?>
							<?php foreach ($slice_suggest_blogs as $suggest_blog) { ?>
								<div class="col-xs-12 col-sm-6 col-lg-4">
									<article class="blog blog__modern">
										<a class="blog__modern--figure" href="<?php echo base_url($lang . '/' . lang('menu_blogs') . '/' . unserialize($suggest_blog->blog_category_slug)[$lang] . '/' .  unserialize($suggest_blog->slug)[$lang]); ?>">
											<img src="<?php echo base_url('storage/uploads/images/blogs/' . unserialize($suggest_blog->img)[$lang]) ?>" alt="<?php echo unserialize($suggest_blog->img_title_alt)[$lang]; ?>" width="370" height="307">
											<div class="blog__modern--time">
												<time datetime="<?php echo $suggest_blog->created_at; ?>"><span class="blog__modern--time--month"><?php echo date_format(date_create($suggest_blog->created_at), 'm'); ?></span><span class="blog__modern--time--number"><?php echo date_format(date_create($suggest_blog->created_at), 'd'); ?></span></time>
											</div>
										</a>
										<h4 class="blog__modern--title"><a href="#"><?php echo unserialize($suggest_blog->title)[$lang]; ?></a></h4>
										<p class="blog__modern--text"><?php echo unserialize($suggest_blog->description_section)[$lang]; ?></p>
									</article>
								</div>
							<?php } ?>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php include 'layouts/sitemap.php'; ?>

