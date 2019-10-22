<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>404 Not Found</title>
	<meta name="description" content="404 Not Found">
	<meta name="keywords" content="404 Not Found">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Prompt:300,400,500,700,900&subset=thai">
    <!-- CSS Bootstrap 4 -->
    <link rel="stylesheet" href="<?php echo config_item('base_url'); ?>/resources/front_end/css/bootstrap.min.css">
    <!-- Hover Effect -->
    <link rel="stylesheet" href="<?php echo config_item('base_url'); ?>/resources/front_end/css/hover-effect.css">
    <link rel="stylesheet" href="<?php echo config_item('base_url'); ?>/resources/front_end/css/hover-style.css">
    <!-- Animate -->
    <link rel="stylesheet" href="<?php echo config_item('base_url'); ?>/resources/front_end/css/animate.css">
    
    <!-- OWL CAL CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    <!-- Customer CSS -->
    <link rel="stylesheet" href="<?php echo config_item('base_url'); ?>/resources/front_end/css/style.css">


    <!-- JS Library -->
    <script src="<?php echo config_item('base_url'); ?>/resources/front_end/js/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="<?php echo config_item('base_url'); ?>/resources/front_end/js/bootstrap.min.js"></script>
    <script src="<?php echo config_item('base_url'); ?>/resources/front_end/js/wow.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

    <!-- OWL CAL JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
</head>
<body>

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

<!-- Content -->
<section class="sec-thank-you">
	<div class="box-thank-you row">
		<div class="col-md-6 col-lg-6 text-right pr-3 pr-xs-0 text-center text-lg-right  text-sm-center">
			<h2 class="thank-you-ttl mt-md-0 mt-4"><span><h1><?php echo $heading; ?></h1></h2>
			<p class="lead thank-you-txt mt-4 mb-4">
				<?php echo $message; ?>
			</p>
		</div>
		<div class="col-xs-12 col-md-6 col-lg-6 pl-md-5 text-left text-lg-left text-sm-center  thank-you-img">
			<div class="col text-left mt-5">
				<a href="<?php echo config_item('base_url'); ?>" class="btn btn-primary text-center col-lg-6 col-sm-12">Back to Home</a>
			</div>
		</div>
	</div>
</section>

</body>
</html>

