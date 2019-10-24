<!-- Push Custom Style -->
<style>
	.sec-blogs_content-01 {
		max-width: 1440px;
		width: 100%;
		margin: 0 auto;
	}

	.sec-blogs_content-01 .card {
		margin: 0;
	}

	.sec-blogs_content-01 .list-group {
		margin: 0;
	}

	.sec-blogs_content-01 .list-group-item {
		border: none;
		border-radius: 0;
		-webkit-border-radius: 0;
		-moz-border-radius: 0;
		-ms-border-radius: 0;
		-o-border-radius: 0;
		border-bottom: 1px solid #e2e1e6;
		margin: 0;
		transition: all 0.3s;
		-webkit-transition: all 0.3s;
		-moz-transition: all 0.3s;
		-ms-transition: all 0.3s;
		-o-transition: all 0.3s;
	}

	.sec-blogs_content-01 .list-group-item:last-of-type {
		border-bottom: none;
	}

	.sec-blogs_content-01 .list-group-item.active,
	.sec-blogs_content-01 .list-group-item:hover {
		background-color: #127dbc;
		border-color: #127dbc;
		color: #fff;
	}

	.sec-blogs_content-01 .list-group-ttl {
		background-color: #00264c;
		border-color: #00264c;
		font-size: 1.25rem;
		color: #fff;
	}

	.sec-blogs_content-01 .list-group-ttl:hover {
		background-color: #00264c;
		border-color: #00264c;

	}
</style>

<!-- Title -->
<section class="page-title" style="background-image:url(<?php echo base_url('storage/uploads/images/banners/' . unserialize($banner->img)[$lang]); ?>)">
	<div class="container my-auto text-center wow fadeInUp">
		<h1><?php echo unserialize($banner->title)[$lang]; ?></h1>
	</div>
</section>

<!-- Content -->
<section id="blog">
	<div class="container-fluid">
		<div class="row">
			<div class="title-client col-12" style="text-align: center; padding: 4rem;">
				<img src="<?php echo base_url($lang == 'th' ? 'resources/front_end/images/title-blog.png' : 'resources/front_end/images/title-blog.png'); ?>" alt="" class="img-fluid">
			</div>
		</div>
		<div class="sec-blogs_content-01 row  flex-sm-column-reverse flex-column-reverse flex-md-column-reverse flex-lg-row">
			<div class="col-lg-3 col-md-12 col-sm-12">
				<div class="list-group">
					<span class="list-group-item list-group-item-action list-group-ttl"><?php echo lang('page_last_blog'); ?></span>
					<?php foreach ($last_blogs as $last_blog) { ?>
						<a href="<?php echo base_url($lang . '/' . lang('menu_blogs') . '/' . unserialize($last_blog->blog_category_slug)[$lang] . '/' .  unserialize($last_blog->slug)[$lang] . '/' . hashids_encrypt($last_blog->id)); ?>" class="list-group-item list-group-item-action"><?php echo unserialize($last_blog->title)[$lang]; ?></a>
					<?php } ?>
				</div>
			</div>
			<div class="col-lg-9 col-md-12 col-sm-12">
				<h3 class="text-center"><?php echo unserialize($blog->title)[$lang]; ?></h3>
				<figure class="text-center">
					<img src="<?php echo base_url('storage/uploads/images/blogs/' . unserialize($blog->img)[$lang]); ?>" class="img-fluid" alt="">
				</figure>
				<?php echo unserialize($blog->body)[$lang]; ?>
			</div>
		</div>
	</div>
</section>

<!-- SiteMap -->
<?php include 'layouts/sitemap.php'; ?>
