<style>
    .sec-job-activity__type-6-item {
        max-width: 720px;
    }
</style>
<!-- Title -->

<?php if ($banner) { ?>
<section class="page-title main-hero-service" style="padding:0;">
	<img class="img-fluid" src="<?php echo base_url('storage/uploads/images/banners/' . unserialize($banner->img)[$lang]); ?>" alt="<?php echo unserialize($banner->img_title_alt)[$lang]; ?>">
	<div class="ttl-header-hero wow">
		<h1><?php echo unserialize($banner->title)[$lang]; ?></h1>
	</div>
</section>
<?php } ?>

<!-- Content -->
<section id="job">
    <div class="container-fluid ">
        <div class="title-team" style="text-align: center; padding: 4rem;">
			<img src="<?php echo base_url($lang == 'th' ? 'resources/front_end/images/title-joinus.png' : 'resources/front_end/images/title-joinus.png'); ?>" alt="" class="img-fluid">
        </div>  
        <div class="row sec-job sec-job-info">
            <div class="col-sm-12 col-md-6">
                <?php echo unserialize($join_us->content_left)[$lang]; ?>
            </div>
            <div class="col-sm-12 col-md-6 wrap-video">
            <a class="vdo-fancybox" data-fancybox href="https://www.youtube.com/embed/keqd4RUQK4s">
                <img class="img-fluid" src="https://img.youtube.com/vi/keqd4RUQK4s/maxresdefault.jpg" alt="">
                <img class="ico-play-btn" src="<?php echo base_url('resources/front_end/images/join_us/play-button.png'); ?>" alt="">
            </a>
            </div>
        </div>
        <div class="row sec-job sec-job-activity sec-job-activity__type-6-item">
			<h2 class="ttl-cmn-job"><?php echo lang('page_join_us_benefits'); ?></h2>
            <div class="col-6 col-md-4 d-flex flex-column align-items-center">
                <figure>
                    <img src="<?php echo base_url('resources/front_end/images/join_us/ico_time.png');?>" alt="">                </figure>
                <p class="text-center"><?php echo lang('page_join_us_benefit_1'); ?></p>
            </div>
            <div class="col-6 col-md-4 d-flex flex-column align-items-center">
                <figure>
                    <img src="<?php echo base_url('resources/front_end/images/join_us/ico_dress.png');?>" alt="">                </figure>
                <p class="text-center"><?php echo lang('page_join_us_benefit_2'); ?></p>
            </div>
            <div class="col-6 col-md-4 d-flex flex-column align-items-center">
                <figure>
                    <img src="<?php echo base_url('resources/front_end/images/join_us/ico_money_03.png');?>" alt="">                </figure>
                <p class="text-center"><?php echo lang('page_join_us_benefit_3'); ?></p>
            </div>
            <div class="col-6 col-md-4 d-flex flex-column align-items-center">
                <figure>
                    <img src="<?php echo base_url('resources/front_end/images/join_us/ico_security_02.png');?>" alt="">                </figure>
                <p class="text-center"><?php echo lang('page_join_us_benefit_4'); ?></p>
            </div>
            <div class="col-6 col-md-4 d-flex flex-column align-items-center">
                <figure>
                    <img src="<?php echo base_url('resources/front_end/images/join_us/ico_people.png');?>" alt="">                </figure>
                <p class="text-center"><?php echo lang('page_join_us_benefit_5'); ?></p>
            </div>
            <div class="col-6 col-md-4 d-flex flex-column align-items-center">
                <figure>
                    <img src="<?php echo base_url('resources/front_end/images/join_us/ico_date.png');?>" alt="">                </figure>
                <p class="text-center"><?php echo lang('page_join_us_benefit_6'); ?></p>
            </div>
			<!-- <div class="col-4 col-md-3 d-flex flex-column align-items-center">
                <figure>
				    <img src="<?php echo base_url('resources/front_end/images/join_us/ico_money_02.png');?>" alt="">                </figure>
				<p class="text-center">âº¹ÑÊ»ÃÐ¨Ó»Õ</p>			</div>
			<div class="col-4 col-md-3 d-flex flex-column align-items-center">
                <figure>
				    <img src="<?php echo base_url('resources/front_end/images/join_us/ico_money_04.png');?>" alt="">                </figure>
        </div>

        <div class="row sec-job sec-job-img">
<!--            <ul class="list-img-team">-->
<!--                <li>-->
<!--                    <a data-fancybox="group1" rel="gallery" href="https://dummyimage.com/800x500/b8b8b8/ffffff.jpg&text=dummy" class="fancybox">-->
<!--                        <div style="background-image:url(https://dummyimage.com/800x500/b8b8b8/ffffff.jpg&text=dummy);"></div>-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a data-fancybox="group1" rel="gallery" href="https://dummyimage.com/800x500/b8b8b8/ffffff.jpg&text=dummy" class="fancybox">-->
<!--                        <div style="background-image:url(https://dummyimage.com/800x500/b8b8b8/ffffff.jpg&text=dummy);"></div>-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a data-fancybox="group1" rel="gallery" href="https://dummyimage.com/800x500/b8b8b8/ffffff.jpg&text=dummy" class="fancybox">-->
<!--                        <div style="background-image:url(https://dummyimage.com/800x500/b8b8b8/ffffff.jpg&text=dummy);"></div>-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a data-fancybox="group1" rel="gallery" href="https://dummyimage.com/800x500/b8b8b8/ffffff.jpg&text=dummy" class="fancybox">-->
<!--                        <div style="background-image:url(https://dummyimage.com/800x500/b8b8b8/ffffff.jpg&text=dummy);"></div>-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a data-fancybox="group1" rel="gallery" href="https://dummyimage.com/800x500/b8b8b8/ffffff.jpg&text=dummy" class="fancybox">-->
<!--                        <div style="background-image:url(https://dummyimage.com/800x500/b8b8b8/ffffff.jpg&text=dummy);"></div>-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a data-fancybox="group1" rel="gallery" href="https://dummyimage.com/800x500/b8b8b8/ffffff.jpg&text=dummy" class="fancybox">-->
<!--                        <div style="background-image:url(https://dummyimage.com/800x500/b8b8b8/ffffff.jpg&text=dummy);"></div>-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a data-fancybox="group1" rel="gallery" href="https://dummyimage.com/800x500/b8b8b8/ffffff.jpg&text=dummy" class="fancybox">-->
<!--                        <div style="background-image:url(https://dummyimage.com/800x500/b8b8b8/ffffff.jpg&text=dummy);"></div>-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a data-fancybox="group1" rel="gallery" href="https://dummyimage.com/800x500/b8b8b8/ffffff.jpg&text=dummy" class="fancybox">-->
<!--                        <div style="background-image:url(https://dummyimage.com/800x500/b8b8b8/ffffff.jpg&text=dummy);"></div>-->
<!--                    </a>-->
<!--                </li>-->
<!--            </ul>-->
        </div>

        <div class="row sec-job sec-job-item">
			<h2 class="ttl-cmn-job"><?php echo lang('page_join_us_career_title'); ?></h2>
            <ul class="list-cmn-job">
				<?php foreach ($careers as $career) { ?>
					<li>
						<a class="col-12 d-flex justify-content-between align-items-center" href="<?php echo base_url($lang . '/' . lang('menu_join_us_slug') . '/' . unserialize($career->slug)[$lang] . '/' . hashids_encrypt($career->id)); ?>">
							<div class="txt">
								<p class="ttl"><?php echo unserialize($career->title)[$lang]; ?></p>
								<span><i class="fas fa-map-marker-alt"></i><?php echo lang('page_join_us_location'); ?></span>
								<span><i class="far fa-calendar-alt"></i><?php echo unserialize($career->type)[$lang]; ?></span>
								<span><i class="fas fa-user"></i><?php echo unserialize($career->num)[$lang]; ?> <?php echo lang('page_join_us_unit'); ?></span>
							</div>
							<span class="job-btn d-md-block d-none"><?php echo lang('page_join_us_btn_apply'); ?></span>
						</a>
					</li>
				<?php } ?>
            </ul>
        </div>
    </div>
</section>

<!-- SiteMap -->
<?php include 'layouts/sitemap.php'; ?>

<!-- Push Custom Scripts -->
<script>
    $(function () {
        $("a.fancybox").fancybox({ 
            animationEffect : 'fade'
        }).attr('data-fancybox', 'group1');

        $('.vdo-fancybox').fancybox({
            youtube : {
                controls : 0,
                showinfo : 0
            },
            vimeo : {
                color : 'f00'
            }
        });
    });
</script>
