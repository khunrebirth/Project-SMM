<!-- Push Custom Style -->
<style>

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
			<img src="<?php echo base_url($lang == 'th' ? 'resources/front_end/images/title-team.png' : 'resources/front_end/images/title-team.png'); ?>" alt="" class="img-fluid">
        </div>  
        <div class="row sec-job sec-job-info mb-5">
            <div class="col-sm-6">
                <p> 
                    We’re Omisians. We’re firm believers in the idea that “payment acceptance” 
                    is fundamental to developing a successful business. We build tools and provide 
                    services that power more than just payments; we help our clients to reach 
                    more buyers around the world, unlocking their full potential.
                </p>
                <p> 
                    We’re Omisians. We’re firm believers in the idea that “payment acceptance” 
                    is fundamental to developing a successful business. We build tools and provide 
                    services that power more than just payments; we help our clients to reach 
                    more buyers around the world, unlocking their full potential.
                </p>
            </div>
            <div class="col-sm-6 wrap-video">
                <iframe width="560" height="349" src="https://www.youtube.com/embed/keqd4RUQK4s" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div class="row sec-job sec-job-activity">
            <div class="col-6 col-md-4 item-activity d-flex justify-content-center flex-column">
                <img src="https://dummyimage.com/100x100/b8b8b8/ffffff.jpg" alt="">
                <p>dummy text</p>
            </div>
            <div class="col-6 col-md-4 item-activity d-flex justify-content-center flex-column">
                <img src="https://dummyimage.com/100x100/b8b8b8/ffffff.jpg" alt="">
                <p>dummy text</p>
            </div>
            <div class="col-6 col-md-4 item-activity d-flex justify-content-center flex-column">
                <img src="https://dummyimage.com/100x100/b8b8b8/ffffff.jpg" alt="">
                <p>dummy text</p>
            </div>
            <div class="col-6 col-md-4 item-activity d-flex justify-content-center flex-column">
                <img src="https://dummyimage.com/100x100/b8b8b8/ffffff.jpg" alt="">
                <p>dummy text</p>
            </div>
            <div class="col-6 col-md-4 item-activity d-flex justify-content-center flex-column">
                <img src="https://dummyimage.com/100x100/b8b8b8/ffffff.jpg" alt="">
                <p>dummy text</p>
            </div>
            <div class="col-6 col-md-4 item-activity d-flex justify-content-center flex-column">
                <img src="https://dummyimage.com/100x100/b8b8b8/ffffff.jpg" alt="">
                <p>dummy text</p>
            </div>
        </div>
        <div class="row sec-job sec-job-img">
            <img src="" alt="">
        </div>
        <div class="row sec-job sec-job-item">
            <ul class="list-cmn-job col-12">
                <li class="mb-2">
                    <a class="col-12" href="">
                        <div class="txt">
                            <p class="ttl"></p>
                        </div>
                        <span>apply</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</section>

<!-- SiteMap -->
<?php include 'layouts/sitemap.php'; ?>

<!-- Push Custom Scripts -->
<script>
    $(function () {
       
    });
</script>
