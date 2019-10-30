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
        <div class="row sec-job sec-job-detail">
            <div class="col-sm-12 col-md-9">
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
                <p> 
                    We’re Omisians. We’re firm believers in the idea that “payment acceptance” 
                    is fundamental to developing a successful business. We build tools and provide 
                    services that power more than just payments; we help our clients to reach 
                    more buyers around the world, unlocking their full potential.
                </p>

                <div class="sec-btn-footer d-none d-md-block">
                   <button type="button" class="btn btn-join-job col-12" data-toggle="modal" data-target=".bd-example-modal-lg">Apply To Position</button>
                </div>
            </div>
            <div class="col-sm-12 col-md-3">
                <button type="button" class="btn btn-join-job col-12" data-toggle="modal" data-target=".bd-example-modal-lg">Apply To Position</button>
                <ul class="list-side-gallery">
                    <li class="item">
                       <a data-fancybox="group1" rel="gallery" class="fancybox" href="https://dummyimage.com/800x500/b8b8b8/ffffff.jpg&text=dummy">
                            <img class="nav-job-img" src="https://dummyimage.com/600x400/dbdbdb/fff" alt="">
                        </a>
                    </li>
                    <li class="item">
                       <a data-fancybox="group1" rel="gallery" class="fancybox" href="https://dummyimage.com/800x500/b8b8b8/ffffff.jpg&text=dummy">
                            <img class="nav-job-img" src="https://dummyimage.com/600x400/dbdbdb/fff" alt="">
                        </a>
                    </li>
                    <li class="item">
                       <a data-fancybox="group1" rel="gallery" class="fancybox" href="https://dummyimage.com/800x500/b8b8b8/ffffff.jpg&text=dummy">
                            <img class="nav-job-img" src="https://dummyimage.com/600x400/dbdbdb/fff" alt="">
                        </a>
                    </li>
                    <li class="item">
                       <a data-fancybox="group1" rel="gallery" class="fancybox" href="https://dummyimage.com/800x500/b8b8b8/ffffff.jpg&text=dummy">
                            <img class="nav-job-img" src="https://dummyimage.com/600x400/dbdbdb/fff" alt="">
                        </a>
                    </li>
                    <li class="item">
                       <a data-fancybox="group1" rel="gallery" class="fancybox" href="https://dummyimage.com/800x500/b8b8b8/ffffff.jpg&text=dummy">
                            <img class="nav-job-img" src="https://dummyimage.com/600x400/dbdbdb/fff" alt="">
                        </a>
                    </li>
                    <li class="item">
                       <a data-fancybox="group1" rel="gallery" class="fancybox" href="https://dummyimage.com/800x500/b8b8b8/ffffff.jpg&text=dummy">
                            <img class="nav-job-img" src="https://dummyimage.com/600x400/dbdbdb/fff" alt="">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="text-secondary contact__form--title">กรอกแบบ<span>ฟอร์ม</span>เพื่อร่วมงานกับเรา</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-12">
                    <p class="text-secondary contact__form--body mb-4">เราจะติดต่อกลับโดยด่วนที่สุด</p>
                    <form class="mt-4" action="http://localhost/social-dev/contact/send" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="ชื่อ-สกุล*" required="">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="อีเมล์*" required="">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="phone" placeholder="เบอร์ติดต่อ*" required="">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="5" name="detail" placeholder="รายละเอียด"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01"
                                    aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label" for="inputGroupFile01">Choose Resume / CV file</label>
                                </div>
                            </div>
                        </div>
                        <div class="col text-center">
                            <button type="submit" class="btn btn-primary text-center">ตกลง</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- SiteMap -->
<?php include 'layouts/sitemap.php'; ?>

<!-- Push Custom Scripts -->
<script>
    $(function () {
        $("a.fancybox").fancybox({ 
            animationEffect : 'fade'
        }).attr('data-fancybox', 'group1');
    });
</script>
