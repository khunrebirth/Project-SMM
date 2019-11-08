<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SMM &mdash; Backoffice <?php echo "($title)"; ?></title>

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

		.custom-switch-indicator {
			cursor: pointer;
		}

		@media (max-width: 767px) {
			.input-file-w-30 {
				width: 100% !important;
			}
		}
	</style>
	<!-- Custom JS -->
	<script type="text/javascript">
        window.base_url = "<?php echo base_url(); ?>"
        window.langSite = "<?php echo $lang; ?>"
	</script>
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
						<a href="<?php echo base_url($lang . '/backoffice/setting/profile/edit/' . $user->id); ?>" class="dropdown-item has-icon">
							<i class="fas fa-cog"></i> Profile
						</a>
						<div class="dropdown-divider"></div>
						<a href="<?php echo base_url($lang . '/backoffice/logout'); ?>" class="dropdown-item has-icon text-danger">
							<i class="fas fa-sign-out-alt"></i> Logout
						</a>
					</div>
                </li>
            </ul>
        </nav>
        <div class="main-sidebar sidebar-style-2">
            <aside id="sidebar-wrapper">
                <div class="sidebar-brand">
                    <a href="<?php echo base_url($lang . '/backoffice/dashboard'); ?>">SMM Backoffice</a>
                </div>
                <div class="sidebar-brand sidebar-brand-sm">
                    <a href="<?php echo base_url($lang . '/backoffice/dashboard'); ?>">SMM</a>
                </div>
				<ul class="sidebar-menu">
					<li class="menu-header">General</li>
					<li class="<?php if ($this->uri->segment(1) == "dashboard") { echo 'active'; } ?>">
						<a class="nav-link" href="<?php echo base_url($lang . '/backoffice/dashboard'); ?>"><i class="fas fa-fire"></i> <span>Dashboard</span></a>
					</li>
					<li class="menu-header">Pages</li>
					<li class="nav-item dropdown <?php if ($this->uri->segment(1) == "page" && $this->uri->segment(2) == "home") { echo 'active'; } ?>">
						<a href="#" class="nav-link has-dropdown"><i class="fas fa-home"></i><span>Home</span></a>
						<ul class="dropdown-menu">
							<li class="<?php if ($this->uri->segment(2) == "home" && $this->uri->segment(3) == "content") { echo 'active'; } ?>">
								<a class="nav-link" href="<?php echo base_url($lang . '/backoffice/page/home/content/2'); ?>">&#9679; Content</a>
							</li>
							<li class="<?php if ($this->uri->segment(2) == "home" && $this->uri->segment(3) == "list-top-clients") { echo 'active'; } ?>">
								<a class="nav-link" href="<?php echo base_url($lang . '/backoffice/page/home/list-top-clients'); ?>">&#9679; Top Clients</a>
							</li>
							<li class="<?php if ($this->uri->segment(2) == "home" && $this->uri->segment(3) == "list-top-portfolios") { echo 'active'; } ?>">
								<a class="nav-link" href="<?php echo base_url($lang . '/backoffice/page/home/list-top-services'); ?>">&#9679; Top Portfolios</a>
							</li>
						</ul>
					</li>
					<li class="nav-item dropdown <?php if ($this->uri->segment(1) == "page" && $this->uri->segment(2) == "abouts") { echo 'active'; } ?>">
						<a href="#" class="nav-link has-dropdown"><i class="fas fa-address-card"></i><span>Abouts</span></a>
						<ul class="dropdown-menu">
							<li class="<?php if ($this->uri->segment(2) == "abouts" && $this->uri->segment(3) == "content") { echo 'active'; } ?>">
								<a class="nav-link" href="<?php echo base_url($lang . '/backoffice/page/abouts/content/3'); ?>">&#9679; Content</a>
							</li>
						</ul>
					</li>
					<li class="nav-item dropdown <?php if ($this->uri->segment(1) == "page" && $this->uri->segment(2) == "services") { echo 'active'; } ?>">
						<a href="#" class="nav-link has-dropdown"><i class="fab fa-servicestack"></i><span>Services</span></a>
						<ul class="dropdown-menu">
							<li class="<?php if ($this->uri->segment(2) == "services" && $this->uri->segment(3) == "list-services" || $this->uri->segment(3) == 'list-service-ports' || $this->uri->segment(3) == 'list-service-clients') { echo 'active'; } ?>">
								<a class="nav-link" href="<?php echo base_url($lang . '/backoffice/page/services/list-services'); ?>">&#9679; Services</a>
							</li>
						</ul>
					</li>
					<li class="nav-item dropdown <?php if ($this->uri->segment(1) == "page" && $this->uri->segment(2) == "clients") { echo 'active'; } ?>">
						<a href="#" class="nav-link has-dropdown"><i class="fas fa-user-astronaut"></i><span>Clients</span></a>
						<ul class="dropdown-menu">
							<li class="<?php if ($this->uri->segment(2) == "clients" && $this->uri->segment(3) == "content") { echo 'active'; } ?>">
								<a class="nav-link" href="<?php echo base_url($lang . '/backoffice/page/clients/content/5'); ?>">&#9679; Content</a>
							</li>
							<li class="<?php if ($this->uri->segment(2) == "clients" && $this->uri->segment(3) == "list-category-clients" || $this->uri->segment(3) == 'list-clients') { echo 'active'; } ?>">
								<a class="nav-link" href="<?php echo base_url($lang . '/backoffice/page/clients/list-category-clients'); ?>">&#9679; Clients</a>
							</li>
						</ul>
					</li>
					<li class="nav-item dropdown <?php if ($this->uri->segment(1) == "page" && $this->uri->segment(2) == "portfolios") { echo 'active'; } ?>">
						<a href="#" class="nav-link has-dropdown"><i class="fas fa-handshake"></i><span>Portfolios</span></a>
						<ul class="dropdown-menu">
							<li class="<?php if ($this->uri->segment(2) == "portfolios" && $this->uri->segment(3) == "content") { echo 'active'; } ?>">
								<a class="nav-link" href="<?php echo base_url($lang . '/backoffice/page/portfolios/content/11'); ?>">&#9679; Content</a>
							</li>
							<li class="<?php if ($this->uri->segment(2) == "portfolios" && $this->uri->segment(3) == "list-category-portfolios" || $this->uri->segment(3) == 'list-portfolios') { echo 'active'; } ?>">
								<a class="nav-link" href="<?php echo base_url($lang . '/backoffice/page/portfolios/list-category-portfolios'); ?>">&#9679; Portfolios</a>
							</li>
						</ul>
					</li>
					<li class="nav-item dropdown <?php if ($this->uri->segment(1) == "page" && $this->uri->segment(2) == "blogs") { echo 'active'; } ?>">
						<a href="#" class="nav-link has-dropdown"><i class="fas fa-pen-alt"></i><span>Blogs</span></a>
						<ul class="dropdown-menu">
							<li class="<?php if ($this->uri->segment(2) == "blogs" && $this->uri->segment(3) == "list-tags") { echo 'active'; } ?>">
								<a class="nav-link" href="<?php echo base_url($lang . '/backoffice/page/blogs/list-tags'); ?>">&#9679; Tags</a>
							</li>
							<li class="<?php if ($this->uri->segment(2) == "blogs" && $this->uri->segment(3) == "list-category-blogs" || $this->uri->segment(3) == 'list-blogs') { echo 'active'; } ?>">
								<a class="nav-link" href="<?php echo base_url($lang . '/backoffice/page/blogs/list-category-blogs'); ?>">&#9679; Blogs</a>
							</li>
						</ul>
					</li>
					<li class="nav-item dropdown <?php if ($this->uri->segment(1) == "page" && $this->uri->segment(2) == "teams") { echo 'active'; } ?>">
						<a href="#" class="nav-link has-dropdown"><i class="fas fa-building"></i><span>Teams</span></a>
						<ul class="dropdown-menu">
							<li class="<?php if ($this->uri->segment(2) == "teams" && $this->uri->segment(3) == "content") { echo 'active'; } ?>">
								<a class="nav-link" href="<?php echo base_url($lang . '/backoffice/page/teams/content/7'); ?>">&#9679; Content</a>
							</li>
							<li class="<?php if ($this->uri->segment(2) == "teams" && $this->uri->segment(3) == "list-teams") { echo 'active'; } ?>">
								<a class="nav-link" href="<?php echo base_url($lang . '/backoffice/page/teams/list-teams'); ?>">&#9679; Teams</a>
							</li>
						</ul>
					</li>
					<li class="nav-item dropdown <?php if ($this->uri->segment(1) == "page" && $this->uri->segment(2) == "join-us") { echo 'active'; } ?>">
						<a href="#" class="nav-link has-dropdown"><i class="fas fa-users"></i><span>Join Us</span></a>
						<ul class="dropdown-menu">
							<li class="<?php if ($this->uri->segment(2) == "join-us" && $this->uri->segment(3) == "content") { echo 'active'; } ?>">
								<a class="nav-link" href="<?php echo base_url($lang . '/backoffice/page/join-us/content/8'); ?>">&#9679; Content</a>
							</li>
							<li class="<?php if ($this->uri->segment(2) == "join-us" && $this->uri->segment(3) == "list-careers" || $this->uri->segment(3) == "list-career-galleries") { echo 'active'; } ?>">
								<a class="nav-link" href="<?php echo base_url($lang . '/backoffice/page/join-us/list-careers'); ?>">&#9679; Careers</a>
							</li>
						</ul>
					</li>
					<li class="nav-item dropdown <?php if ($this->uri->segment(1) == "page" && $this->uri->segment(2) == "contact") { echo 'active'; } ?>">
						<a href="#" class="nav-link has-dropdown"><i class="fas fa-file-signature"></i><span>Contact</span></a>
						<ul class="dropdown-menu">
							<li class="<?php if ($this->uri->segment(2) == "contact" && $this->uri->segment(3) == "content") { echo 'active'; } ?>">
								<a class="nav-link" href="<?php echo base_url($lang . '/backoffice/page/contact/content/9'); ?>">&#9679; Content</a>
							</li>
						</ul>
					</li>
					<li class="menu-header">Settings</li>
					<li class="<?php if ($this->uri->segment(1) == "setting" && $this->uri->segment(2) == "banners") { echo 'active'; } ?>">
						<a class="nav-link" href="<?php echo base_url($lang . '/backoffice/setting/banners') ?>"><i class="fas fa-images"></i> <span>Banners</span></a>
					</li>
					<?php if ($user->role_id == 1) { ?>
						<li class="<?php if ($this->uri->segment(1) == "setting" && $this->uri->segment(2) == "users") { echo 'active'; } ?>">
							<a class="nav-link" href="<?php echo base_url($lang . '/backoffice/setting/users') ?>"><i class="fas fa-user"></i> <span>Users</span></a>
						</li>
					<?php } ?>
				</ul>
                <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                    <a href="<?php echo base_url($lang . '/' . lang('menu_home')); ?>" class="btn btn-primary btn-lg btn-block btn-icon-split">
                        <i class="fas fa-rocket"></i> Back to Website
                    </a>
                </div>
            </aside>
        </div>
