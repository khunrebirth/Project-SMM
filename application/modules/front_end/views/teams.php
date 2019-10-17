<!-- Push Custom Style -->
<style>
<<<<<<< HEAD
.box-slide-team {
    max-width: 1730px;
    width: 100%;
    padding: 0 104px;
    margin: 0 auto;
}
.box-slide-team .owl-nav {
    position: absolute;
    top: 30%;
    -webkit-transform: translate3d(0,-50%,0);
            transform: translate3d(0,-50%,0);
    width: 100%;
    left: 0;
}
.box-slide-team .owl-nav .owl-prev, 
.box-slide-team .owl-nav .owl-next {
    position: absolute;
    width: 76px;
    height: 76px;
    background-color: #fff !important;
    transition: all 0.3s;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    -ms-transition: all 0.3s;
    -o-transition: all 0.3s;
}
.box-slide-team .owl-nav .owl-prev:focus, 
.box-slide-team .owl-nav .owl-next:focus {
    outline: none;
}
.box-slide-team .owl-nav .owl-prev:hover, 
.box-slide-team .owl-nav .owl-next:hover {
    opacity: 0.7;
}
.box-slide-team .owl-nav .owl-prev span, 
.box-slide-team .owl-nav .owl-next span {
    display: none;
}
.box-slide-team .owl-nav .owl-prev {
    left: 0;
    background: url(<?php echo base_url($lang == 'th' ? 'resources/front_end/images/team/btn_arrow_left.png' : 'resources/front_end/images/team/btn_arrow_left.png'); ?>) !important;
}
.box-slide-team .owl-nav .owl-next {
    right: 0;
    background: url(<?php echo base_url($lang == 'th' ? 'resources/front_end/images/team/btn_arrow_right.png' : 'resources/front_end/images/team/btn_arrow_right.png'); ?>) !important;
}

=======
	.box-slide-team {
		max-width: 1730px;
		width: 100%;
		padding: 0 104px;
		margin: 0 auto;
	}
	.box-slide-team .owl-nav {
		position: absolute;
		top: 30%;
		-webkit-transform: translate3d(0,-50%,0);
				transform: translate3d(0,-50%,0);
		width: 100%;
		left: 0;
	}
	.box-slide-team .owl-nav .owl-prev,
	.box-slide-team .owl-nav .owl-next {
		position: absolute;
		width: 76px;
		height: 76px;
		background-color: #fff !important;
		transition: all 0.3s;
		-webkit-transition: all 0.3s;
		-moz-transition: all 0.3s;
		-ms-transition: all 0.3s;
		-o-transition: all 0.3s;
	}
	.box-slide-team .owl-nav .owl-prev:focus,
	.box-slide-team .owl-nav .owl-next:focus {
		outline: none;
	}
	.box-slide-team .owl-nav .owl-prev:hover,
	.box-slide-team .owl-nav .owl-next:hover {
		opacity: 0.7;
	}
	.box-slide-team .owl-nav .owl-prev span,
	.box-slide-team .owl-nav .owl-next span {
		display: none;
	}
	.box-slide-team .owl-nav .owl-prev {
		left: 0;
		background: url(<?php echo base_url($lang == 'th' ? 'resources/front_end/images/team/btn_arrow_left.png' : 'resources/front_end/images/team/btn_arrow_left.png'); ?>) !important;
	}
	.box-slide-team .owl-nav .owl-next {
		right: 0;
		background: url(<?php echo base_url($lang == 'th' ? 'resources/front_end/images/team/btn_arrow_right.png' : 'resources/front_end/images/team/btn_arrow_right.png'); ?>) !important;
	}
>>>>>>> c10c3379e95b1adc1631450a958a03a8d3956340
</style>

<!-- Title -->
<section class="page-title" style="background-image:url(http://localhost/social-dev/resources/front_end/images/slider-1.jpg)">
    <div class="container my-auto text-center wow fadeInUp">
        <h1><?php echo lang('page_team'); ?></h1>
    </div>
</section>

<!-- Content -->
<section id="team">
    <div class="container-fluid ">
        <div class="title-team" style="text-align: center; padding: 4rem;">
			<img src="<?php echo base_url($lang == 'th' ? 'resources/front_end/images/img-/images/title-team.png' : 'resources/front_end/images/img-/images/title-team.png'); ?>" alt="" class="img-fluid">
        </div>
        
        <div class="owl-carousel owl-theme box-slide-team" id="box-slide-team">
			<?php foreach ($teams as $team) { ?>
				<?php
					$fullname = unserialize($team->title)[$lang];
					$posBlankSpace = strpos(unserialize($team->title)[$lang], " ");
					$first_name = substr($fullname, 0, $posBlankSpace);
					$last_name = substr($fullname, $posBlankSpace, strlen($fullname));
				?>
				<div>
					<div class="card team__card--parent mx-auto" >
						<img class="card-img-top" src="<?php echo base_url('storage/uploads/images/teams/' . unserialize($team->image)[$lang]); ?>" alt="">
						<div class="card-body pl-0">
							<h5 class="card-title team__crad--title"><?php echo $first_name; ?> <br><?php echo $last_name; ?></h5>
							<p class="card-text team__crad--body"><?php echo unserialize($team->body)[$lang]; ?></p>
						</div>
					</div>
				</div>
            <?php } ?>
        </div>
    </div>
</section>

<!-- SiteMap -->
<?php include 'layouts/sitemap.php'; ?>

<!-- Push Custom Scripts -->
<script>
    $(function () {
        $('#box-slide-team').owlCarousel({
            items:4,
            nav:true,
            loop:true,
            dots:false,
            margin:15,
        });
    });
</script>
