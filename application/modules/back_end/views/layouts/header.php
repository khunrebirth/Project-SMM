<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SSM &mdash; Backoffice <?php echo "($title)"; ?></title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="<?php echo base_url('resources/back_end/node_modules/jqvmap/dist/jqvmap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('resources/back_end/node_modules/weathericons/css/weather-icons.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('resources/back_end/node_modules/weathericons/css/weather-icons-wind.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('resources/back_end/node_modules/summernote/dist/summernote-bs4.css'); ?>">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?php echo base_url('resources/back_end/assets/css/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('resources/back_end/assets/css/components.css'); ?>">


    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="<?php echo base_url('resources/back_end/assets/js/stisla.js'); ?>"></script>

    <!-- JS Libraies -->
    <script src="<?php echo base_url('resources/back_end/node_modules/simpleweather/jquery.simpleWeather.min.js'); ?>"></script>
    <script src="<?php echo base_url('resources/back_end/node_modules/chart.js/dist/Chart.min.js'); ?>"></script>
    <script src="<?php echo base_url('resources/back_end/node_modules/jqvmap/dist/jquery.vmap.min.js'); ?>"></script>
    <script src="<?php echo base_url('resources/back_end/node_modules/jqvmap/dist/maps/jquery.vmap.world.js'); ?>"></script>
    <script src="<?php echo base_url('resources/back_end/node_modules/summernote/dist/summernote-bs4.js'); ?>"></script>
    <script src="<?php echo base_url('resources/back_end/node_modules/chocolat/dist/js/jquery.chocolat.min.js'); ?>"></script>
    <script src="<?php echo base_url('resources/back_end/node_modules/sweetalert/dist/sweetalert.min.js'); ?>"></script>

	<style>
		.input-file-w-30 {
			width: 30%;
		}

		@media (max-width: 767px) {
			.input-file-w-30 {
				width: 100% !important;
			}
		}
	</style>
</head>
<body>
<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        <nav class="navbar navbar-expand-lg main-navbar">
            <form class="form-inline mr-auto">
                <ul class="navbar-nav mr-3">
                    <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                    <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
                </ul>
            </form>
            <ul class="navbar-nav navbar-right">
                <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                        <div class="d-sm-none d-lg-inline-block">Hi, <?php echo $user->username; ?></div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="<?php echo base_url('backoffice/logout'); ?>" class="dropdown-item has-icon text-danger">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <div class="main-sidebar sidebar-style-2">
            <aside id="sidebar-wrapper">
                <div class="sidebar-brand">
                    <a href="<?php echo base_url('backoffice/dashboard'); ?>">SMM Backoffice</a>
                </div>
                <div class="sidebar-brand sidebar-brand-sm">
                    <a href="<?php echo base_url('backoffice/dashboard'); ?>">SMM</a>
                </div>
				<ul class="sidebar-menu">
					<li class="menu-header">General</li>
					<li class="<?php if ($this->uri->segment(2) == "dashboard") { echo 'active'; } ?>">
						<a class="nav-link" href="<?php echo base_url('backoffice/dashboard'); ?>"><i class="fas fa-fire"></i> <span>Dashboard</span></a>
					</li>
					<li class="menu-header">Pages</li>
					</li>
					</li>
					<li class="nav-item dropdown <?php if ($this->uri->segment(2) == "page" && $this->uri->segment(3) == "home") { echo 'active'; } ?>">
						<a href="#" class="nav-link has-dropdown"><i class="fas fa-home"></i><span>Home</span></a>
						<ul class="dropdown-menu">
							<li class="<?php if ($this->uri->segment(3) == "home" && $this->uri->segment(4) == "content") { echo 'active'; } ?>">
								<a class="nav-link" href="<?php echo base_url('backoffice/page/home/content/1'); ?>">&#9679; Content</a>
							</li>
						</ul>
					</li>
					<li class="nav-item dropdown <?php if ($this->uri->segment(2) == "page" && $this->uri->segment(3) == "abouts") { echo 'active'; } ?>">
						<a href="#" class="nav-link has-dropdown"><i class="fas fa-address-card"></i><span>Abouts</span></a>
						<ul class="dropdown-menu">
							<li class="<?php if ($this->uri->segment(3) == "abouts" && $this->uri->segment(4) == "content") { echo 'active'; } ?>">
								<a class="nav-link" href="<?php echo base_url('backoffice/page/abouts/content/1'); ?>">&#9679; Content</a>
							</li>
						</ul>
					</li>
					<li class="nav-item dropdown <?php if ($this->uri->segment(2) == "page" && $this->uri->segment(3) == "services") { echo 'active'; } ?>">
						<a href="#" class="nav-link has-dropdown"><i class="fab fa-servicestack"></i><span>Services</span></a>
						<ul class="dropdown-menu">
							<li class="<?php if ($this->uri->segment(3) == "services" && $this->uri->segment(4) == "content") { echo 'active'; } ?>">
								<a class="nav-link" href="<?php echo base_url('backoffice/page/services/content/1'); ?>">&#9679; Content</a>
							</li>
						</ul>
					</li>
					<li class="nav-item dropdown <?php if ($this->uri->segment(2) == "page" && $this->uri->segment(3) == "category_clients") { echo 'active'; } ?>">
						<a href="#" class="nav-link has-dropdown"><i class="fas fa-user-astronaut"></i><span>Clients</span></a>
						<ul class="dropdown-menu">
							<li class="<?php if ($this->uri->segment(3) == "category_clients" && $this->uri->segment(4) == "content") { echo 'active'; } ?>">
								<a class="nav-link" href="<?php echo base_url('backoffice/page/category_clients/content/1'); ?>">&#9679; Content</a>
							</li>
						</ul>
                        <ul class="dropdown-menu">
                            <li class="<?php if ($this->uri->segment(3) == "clients" && $this->uri->segment(4) == "category") { echo 'active'; } ?>">
                                <a class="nav-link" href="<?php echo base_url('backoffice/page/clients/category'); ?>">&#9679; Category</a>
                            </li>
                        </ul>

					</li>
					<li class="nav-item dropdown <?php if ($this->uri->segment(2) == "page" && $this->uri->segment(3) == "blogs") { echo 'active'; } ?>">
						<a href="#" class="nav-link has-dropdown"><i class="fas fa-pen-alt"></i><span>Blogs</span></a>
						<ul class="dropdown-menu">
<!--							<li class="--><?php //if ($this->uri->segment(3) == "blogs" && $this->uri->segment(4) == "content") { echo 'active'; } ?><!--">-->
<!--								<a class="nav-link" href="--><?php //echo base_url('backoffice/page/blogs/content/1'); ?><!--">&#9679; Content</a>-->
<!--							</li>-->
						</ul>
					</li>
					<li class="nav-item dropdown <?php if ($this->uri->segment(2) == "page" && $this->uri->segment(3) == "teams") { echo 'active'; } ?>">
						<a href="#" class="nav-link has-dropdown"><i class="fas fa-building"></i><span>Teams</span></a>
						<ul class="dropdown-menu">
							<li class="<?php if ($this->uri->segment(3) == "teams" && $this->uri->segment(4) == "content") { echo 'active'; } ?>">
								<a class="nav-link" href="<?php echo base_url('backoffice/page/teams/content/1'); ?>">&#9679; Content</a>
							</li>
							<li class="<?php if ($this->uri->segment(3) == "teams" && $this->uri->segment(4) == "list-teams") { echo 'active'; } ?>">
								<a class="nav-link" href="<?php echo base_url('backoffice/page/teams/list-teams'); ?>">&#9679; Teams</a>
							</li>
						</ul>
					</li>
					<li class="nav-item dropdown <?php if ($this->uri->segment(2) == "page" && $this->uri->segment(3) == "contact") { echo 'active'; } ?>">
						<a href="#" class="nav-link has-dropdown"><i class="fas fa-file-signature"></i><span>Contact</span></a>
						<ul class="dropdown-menu">
							<li class="<?php if ($this->uri->segment(3) == "contact" && $this->uri->segment(4) == "content") { echo 'active'; } ?>">
								<a class="nav-link" href="<?php echo base_url('backoffice/page/contact/content/1'); ?>">&#9679; Content</a>
							</li>
						</ul>
					</li>
				</ul>
                <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                    <a href="<?php echo base_url('home'); ?>" class="btn btn-primary btn-lg btn-block btn-icon-split">
                        <i class="fas fa-rocket"></i> Back to Website
                    </a>
                </div>
            </aside>
        </div>
