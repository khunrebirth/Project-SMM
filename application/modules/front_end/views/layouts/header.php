<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title; ?></title>
	<meta name="description" content="<?php echo $meta['description']; ?>">
	<meta name="keywords" content="<?php echo $meta['keyword']; ?>">
	<link rel="shortcut icon" href="<?php echo base_url('resources/front_end/images/favicon.png'); ?>">
	<link rel="canonical" href="<?php echo current_url(); ?>" />
	<meta property="og:locale" content="th_TH" />
	<meta property="og:locale:alternate" content="en_US" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="<?php echo $og_twitter['title']; ?>" />
	<meta property="og:description" content="<?php echo $og_twitter['description']; ?>" />
	<meta property="og:url" content="<?php echo current_url(); ?>" />
	<meta property="og:site_name" content="<?php echo base_url(); ?>" />
	<meta property="og:image" content="<?php echo $og_twitter['image']; ?>" />

	<meta name="twitter:card" content="summary" />
	<meta name="twitter:title" content="<?php echo $og_twitter['title']; ?>" />
	<meta name="twitter:description" content="<?php echo $og_twitter['description']; ?>" />
	<meta name="twitter:image" content="<?php echo $og_twitter['image']; ?>" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Prompt:300,400,500,700,900&subset=thai">
    <!-- CSS Bootstrap 4 -->
    <link rel="stylesheet" href="<?php echo base_url('resources/front_end/css/bootstrap.min.css'); ?>">
    <!-- Hover Effect -->
    <link rel="stylesheet" href="<?php echo base_url('resources/front_end/css/hover-effect.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('resources/front_end/css/hover-style.css'); ?>">
    <!-- Animate -->
    <link rel="stylesheet" href="<?php echo base_url('resources/front_end/css/animate.css'); ?>">
    
    <!-- OWL CAL CSS -->
    <link rel="stylesheet" href="<?php echo base_url('resources/front_end/css/owl.theme.default.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('resources/front_end/css/owl.carousel.min.css'); ?>">

    <!-- Customer CSS -->
    <link rel="stylesheet" href="<?php echo base_url('resources/front_end/css/style.css'); ?>">


    <!-- JS Library -->
    <script src="<?php echo base_url('resources/front_end/js/jquery-3.4.1.min.js'); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="<?php echo base_url('resources/front_end/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('resources/front_end/js/wow.js'); ?>"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

    <!-- OWL CAL JS -->
    <script src="<?php echo base_url('resources/front_end/js/owl.carousel.min.js'); ?>"></script>
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
                                <img class="d-sm-none d-none img-gnavi d-md-block" src="https://dummyimage.com/200x80/cccccc/fff" alt="">
                                <span>Search Engine Optimization</span>
                            </a>
                        </li>
                        <li class="item col-lg-2 col-md-3 col-sm-12">
                            <a class="d-flex flex-column text-center" href="">
                                <img class="d-sm-none d-none img-gnavi d-md-block" src="https://dummyimage.com/200x80/cccccc/fff" alt="">
                                <span>Social Media Marketing</span>
                            </a>
                        </li>
                        <li class="item col-lg-2 col-md-3 col-sm-12">
                            <a class="d-flex flex-column text-center" href="">
                                <img class="d-sm-none d-none img-gnavi d-md-block" src="https://dummyimage.com/200x80/cccccc/fff" alt="">
                                <span>Search Engine Marketing</span>
                            </a>
                        </li>
                        <li class="item col-lg-2 col-md-3 col-sm-12">
                            <a class="d-flex flex-column text-center" href="">
                                <img class="d-sm-none d-none img-gnavi d-md-block" src="https://dummyimage.com/200x80/cccccc/fff" alt="">
                                <span>Website Design</span>
                            </a>
                        </li>
                        <li class="item col-lg-2 col-md-3 col-sm-12">
                            <a class="d-flex flex-column text-center" href="">
                                <img class="d-sm-none d-none img-gnavi d-md-block" src="https://dummyimage.com/200x80/cccccc/fff" alt="">
                                <span>Line Marketing</span>
                            </a>
                        </li>
                        <li class="item col-lg-2 col-md-3 col-sm-12">
                            <a class="d-flex flex-column text-center" href="">
                                <img class="d-sm-none d-none img-gnavi d-md-block" src="https://dummyimage.com/200x80/cccccc/fff" alt="">
                                <span>Creative & Production</span>
                            </a>
                        </li>
                        <li class="item col-lg-2 col-md-3 col-sm-12">
                            <a class="d-flex flex-column text-center" href="">
                                <img class="d-sm-none d-none img-gnavi d-md-block" src="https://dummyimage.com/200x80/cccccc/fff" alt="">
                                <span>Strategy Consultancy  Service</span>
                            </a>
                        </li>
                        <li class="item col-lg-2 col-md-3 col-sm-12">
                            <a class="d-flex flex-column text-center" href="">
                                <img class="d-sm-none d-none img-gnavi d-md-block" src="https://dummyimage.com/200x80/cccccc/fff" alt="">
                                <span>Digital Speaker  Service</span>
                            </a>
                        </li>
                        <li class="item col-lg-2 col-md-3 col-sm-12">
                            <a class="d-flex flex-column text-center" href="">
                                <img class="d-sm-none d-none img-gnavi d-md-block" src="https://dummyimage.com/200x80/cccccc/fff" alt="">
                                <span>Domain Hosting  Service</span>
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
