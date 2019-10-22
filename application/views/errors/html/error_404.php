
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>404 Not Found </title>
	<meta name="description" content="404 Not Found">
	<meta name="keywords" content="404 Not Found">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Prompt:300,400,500,700,900&subset=thai">
    <!-- CSS Bootstrap 4 -->
    <link rel="stylesheet" href="<?php echo config_item('base_url');?>/resources/front_end/css/bootstrap.min.css">
    <!-- Hover Effect -->
    <link rel="stylesheet" href="<?php echo config_item('base_url');?>/resources/front_end/css/hover-effect.css">
    <link rel="stylesheet" href="<?php echo config_item('base_url');?>/resources/front_end/css/hover-style.css">
    <!-- Animate -->
    <link rel="stylesheet" href="<?php echo config_item('base_url');?>/resources/front_end/css/animate.css">
    
    <!-- OWL CAL CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    <!-- Customer CSS -->
    <link rel="stylesheet" href="<?php echo config_item('base_url');?>/resources/front_end/css/style.css">


    <!-- JS Library -->
    <script src="<?php echo config_item('base_url');?>/resources/front_end/js/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="<?php echo config_item('base_url');?>/resources/front_end/js/bootstrap.min.js"></script>
    <script src="<?php echo config_item('base_url');?>/resources/front_end/js/wow.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

    <!-- OWL CAL JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
</head>
<body>

<nav class="navbar navbar-light fixed-top navbar-expand-md navbar-no-bg">
    <a class="navbar-brand" href="<?php echo base_url('home'); ?>">
        <img src="<?php echo base_url('resources/front_end/images/img-/logo-smm.png'); ?>" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link <?php if ($this->uri->segment(0) == "home" || $this->uri->segment(0) == "หน้าแรก") { echo 'active'; }?>" href="<?php echo base_url($lang . '/' . lang('menu_home')); ?>"><?php echo lang('menu_home'); ?> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($this->uri->segment(0) == "about" || $this->uri->segment(0) == "เกี่ยวกับเรา") { echo 'active'; }?>" href="<?php echo base_url($lang . '/' . lang('menu_about')); ?>"><?php echo lang('menu_about'); ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($this->uri->segment(0) == "services" || $this->uri->segment(0) == "บริการ") { echo 'active'; }?>" 
                data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" ><?php echo lang('menu_service'); ?></a>
                <div class="collapse wrap-sub-gnav" id="collapseExample" >
                    <ul class="list-sub-gnav row">
                        <li class="item col-lg-2 col-md-3 col-sm-12">
                            <a class="d-flex flex-column text-center" href="">
                                <img class="d-sm-none d-none img-gnavi d-md-block" src="<?php echo base_url('resources/front_end/images/img-/images/icon/icon_facebook_01.jpg' );?>" alt="">
                                <span>Social Media Marketing</span>
                            </a>
                        </li>
                        <li class="item col-lg-2 col-md-3 col-sm-12">
                            <a class="d-flex flex-column text-center" href="">
                                <img class="d-sm-none d-none img-gnavi d-md-block" src="<?php echo base_url('resources/front_end/images/img-/images/icon/ico_seo_01.jpg' );?>" alt="">
                                <span>Search Engine Optimization</span>
                            </a>
                        </li>
                        <li class="item col-lg-2 col-md-3 col-sm-12">
                            <a class="d-flex flex-column text-center" href="">
                                <img class="d-sm-none d-none img-gnavi d-md-block" src="<?php echo base_url('resources/front_end/images/img-/images/icon/ico_sem_01.jpg' );?>" alt="">
                                <span>Search Engine Marketing</span>
                            </a>
                        </li>
                        <li class="item col-lg-2 col-md-3 col-sm-12">
                            <a class="d-flex flex-column text-center" href="">
                                <img class="d-sm-none d-none img-gnavi d-md-block" src="<?php echo base_url('resources/front_end/images/img-/images/icon/ico_web_01.jpg' );?>" alt="">
                                <span>Website Design</span>
                            </a>
                        </li>
                        <li class="item col-lg-2 col-md-3 col-sm-12">
                            <a class="d-flex flex-column text-center" href="">
                                <img class="d-sm-none d-none img-gnavi d-md-block" src="<?php echo base_url('resources/front_end/images/img-/images/icon/ico_line_01.jpg' );?>" alt="">
                                <span>Line Marketing</span>
                            </a>
                        </li>
                        <li class="item col-lg-2 col-md-3 col-sm-12">
                            <a class="d-flex flex-column text-center" href="">
                                <img class="d-sm-none d-none img-gnavi d-md-block" src="<?php echo base_url('resources/front_end/images/img-/images/icon/ico_production_01.jpg' );?>" alt="">
                                <span>Creative & Production</span>
                            </a>
                        </li>
                        <li class="item col-lg-2 col-md-3 col-sm-12">
                            <a class="d-flex flex-column text-center" href="">
                                <img class="d-sm-none d-none img-gnavi d-md-block" src="<?php echo base_url('resources/front_end/images/img-/images/icon/ico_plan_01.jpg' );?>" alt="">
                                <span>Strategy Consultancy Service</span>
                            </a>
                        </li>
                        <li class="item col-lg-2 col-md-3 col-sm-12">
                            <a class="d-flex flex-column text-center" href="">
                                <img class="d-sm-none d-none img-gnavi d-md-block" src="<?php echo base_url('resources/front_end/images/img-/images/icon/ico_speaker_01.jpg' );?>" alt="">
                                <span>Digital Speaker Service</span>
                            </a>
                        </li>
                        <li class="item col-lg-2 col-md-3 col-sm-12">
                            <a class="d-flex flex-column text-center" href="">
                                <img class="d-sm-none d-none img-gnavi d-md-block" src="<?php echo base_url('resources/front_end/images/img-/images/icon/ico_setting_01.jpg' );?>" alt="">
                                <span>Domain Hosting Service</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($this->uri->segment(0) == "clients" || $this->uri->segment(0) == "ลูกค้าของเรา") { echo 'active'; }?>" href="<?php echo base_url($lang . '/' . lang('menu_our_clients')); ?>"><?php echo lang('menu_our_clients'); ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($this->uri->segment(0) == "blogs" || $this->uri->segment(0) == "บทความ") { echo 'active'; }?>" href="<?php echo base_url($lang . '/' . lang('menu_blogs')); ?>"><?php echo lang('menu_blogs'); ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($this->uri->segment(0) == "teams" || $this->uri->segment(0) == "ทีมงาน") { echo 'active'; }?>" href="<?php echo base_url($lang . '/' . lang('menu_teams')); ?>"><?php echo lang('menu_teams'); ?></a>
            </li>
            <li class="nav-item wrap-btn-centact">
                <a class="btn btn-link btn__contact" href="<?php echo base_url($lang . '/' . lang('menu_contact')); ?>"><?php echo lang('menu_contact'); ?></a>
            </li>
            <li class="nav-item">
                <ul class="list-lang">
                    <li><a href="<?php echo base_url('th'); ?>">TH</a></li>
                    <li><a href="<?php echo base_url('en'); ?>">EN</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>

<!-- Push Custom Style -->
<style>
	.box-thank-you {
		max-width: 1440px;
		width: 100%;
		margin: 0 auto;
		padding: 150px 0
	}

	.thank-you-ttl span {
		color: #0d84be;
	}

	.thank-you-txt {
		padding: 0 15px;
	}

	.thank-you-img {
		padding: 0 30px;
	}
</style>

<!-- Title -->
<section class="page-title" style="background-image:url(http://localhost/social-dev/resources/front_end/images/slider-1.jpg)">
	<div class="container my-auto text-center wow fadeInUp">
		<h1><?php echo lang('page_thanks'); ?></h1>
	</div>
</section>

<!-- Content -->
<section class="sec-thank-you">
	<div class="box-thank-you row">
		<div class="col-md-6 col-lg-6 text-right pr-3 pr-xs-0 text-center text-lg-right  text-sm-center">
			<h2 class="thank-you-ttl mt-md-0 mt-4"><span><?php echo lang('page_thanks_header_first'); ?></span><?php echo lang('page_thanks_header_content'); ?></h2>
			<p class="lead thank-you-txt mt-4 mb-4">
				<?php echo lang('page_thanks_content'); ?>
			</p>
		</div>
		<div class="col-xs-12 col-md-6 col-lg-6 pl-md-5 text-left text-lg-left text-sm-center  thank-you-img">
			<img src="<?php echo base_url('resources/front_end/images/img-/images/title-service.png')?>" class="img-fluid">
			<div class="col text-left mt-5">
				<button type="submit" class="btn btn-primary text-center col-lg-6 col-sm-12"><?php echo lang('page_thanks_btn_back'); ?></button>
			</div>
		</div>
	</div>
</section>

<!-- SiteMap -->

<div id="accordion">
	<div class="card text-center" style="background: #00264c; color: #fff; border-radius: 0;">
		<div class="card-header" id="headingOne" style="padding-top: 0px; padding-bottom: 0px;">
			<h5 class="mb-0">
				<button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
						aria-controls="collapseOne" style="color: #fff;">
					Site map <i class="fas fa-plus-circle"></i>
				</button>
			</h5>
		</div>
		<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
			<div class="card-body">
				Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
				moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
				Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
				shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
				proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim
				aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
			</div>
		</div>
	</div>
</div>

<footer class="container-fluid text-center">
    <p>&copy; 2019 <?php echo lang('footer_copyright'); ?> All right reserved.</p>
</footer>


</body>
</html>

