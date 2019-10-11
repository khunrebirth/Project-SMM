<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Social Media Master</title>
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

    <!-- Customer CSS -->
    <link rel="stylesheet" href="<?php echo base_url('resources/front_end/css/style.css'); ?>">


    <!-- JS Library -->
    <script src="<?php echo base_url('resources/front_end/js/jquery-3.4.1.min.js'); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="<?php echo base_url('resources/front_end/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('resources/front_end/js/wow.js'); ?>"></script>
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
                <a class="nav-link <?php if ($this->uri->segment(1) == "home" || $this->uri->segment(2) == "home") { echo 'active'; }?>" href="<?php echo base_url('home'); ?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($this->uri->segment(1) == "about" || $this->uri->segment(2) == "about") { echo 'active'; }?>" href="<?php echo base_url('about'); ?>">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($this->uri->segment(1) == "services" || $this->uri->segment(2) == "services") { echo 'active'; }?>" href="<?php echo base_url('services'); ?>">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($this->uri->segment(1) == "clients" || $this->uri->segment(2) == "category_clients") { echo 'active'; }?>" href="<?php echo base_url('clients'); ?>">Clients</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($this->uri->segment(1) == "blogs" || $this->uri->segment(2) == "blogs") { echo 'active'; }?>" href="<?php echo base_url('blogs'); ?>">Blogs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($this->uri->segment(1) == "teams" || $this->uri->segment(2) == "teams") { echo 'active'; }?>" href="<?php echo base_url('teams'); ?>">Teams</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-link btn__contact" href="<?php echo base_url('contact'); ?>">Contact us</a>
            </li>
        </ul>
    </div>
</nav>
