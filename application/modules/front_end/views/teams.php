<!-- Push Custom Style -->
<style>
.box-slide-team {
    max-width: 1470px;
    width: 100%;
    padding: 0 30px;
    margin: 0 auto;
}
/* 
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
    width: 45px;
    height: 45px;
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
    background: url(<?php // echo base_url($lang == 'th' ? 'resources/front_end/images/team/btn_arrow_left.png' : 'resources/front_end/images/team/btn_arrow_left.png'); ?>) !important;
    background-size: cover !important;
}

.box-slide-team .owl-nav .owl-next {
    right: 0;
    background: url(<?php // echo base_url($lang == 'th' ? 'resources/front_end/images/team/btn_arrow_right.png' : 'resources/front_end/images/team/btn_arrow_right.png'); ?>) !important;
    background-size: cover !important;
} */

.team__card--parent .is-hover {
	position: absolute;
	top: 0;
	left: 0;
	visibility: hidden;
	opacity: 0;
	transition: all 0.2s;
	-webkit-transition: all 0.2s;
	-moz-transition: all 0.2s;
	-ms-transition: all 0.2s;
	-o-transition: all 0.2s;
}

.team__card--parent:hover .is-hover { 
	visibility: visible;
	opacity: 1;
}

/* @media (min-width: 576px) { 
	.box-slide-team {
		padding: 0 30px !important;
	}
} */

/* @media (min-width: 768px) { 
	.box-slide-team {
		padding: 0 50px !important;
    }
    .box-slide-team .owl-nav .owl-prev, 
    .box-slide-team .owl-nav .owl-next {
        width: 76px;
        height: 76px;
    }
} */

/* @media (min-width: 992px) { 
	.box-slide-team {
		padding: 0 80px !important;
	}
}

@media (min-width: 1200px) { 
	.box-slide-team {
		padding: 0 140px !important;
	}
} */
</style>

<!-- Title -->
<?php if ($banner) { ?>
<section class="page-title main-hero-service" style="padding:0;">
	<img class="img-fluid" src="<?php echo base_url((!smm_is_mobile()) ? 'storage/uploads/images/banners/' . unserialize($banner->img)[$lang] : 'storage/uploads/images/banners/' . unserialize($banner->img_moblie)[$lang]); ?>" alt="<?php echo unserialize($banner->img_title_alt)[$lang]; ?>">
	<div class="ttl-header-hero wow">
		<h1><?php echo unserialize($banner->title)[$lang]; ?></h1>
	</div>
</section>
<?php } ?>

<!-- Content -->
<section id="team">
    <div class="container-fluid ">
        <div class="title-team" style="text-align: center; padding: 4rem;">
			<img src="<?php echo base_url($lang == 'th' ? 'resources/front_end/images/title-team.png' : 'resources/front_end/images/title-team.png'); ?>" alt="" class="img-fluid">
        </div>
        
        <div class="box-slide-team row">
			<?php foreach ($teams as $team) { ?>
				<?php
					$fullname = unserialize($team->title)[$lang];
					$posBlankSpace = strpos(unserialize($team->title)[$lang], " ");
					$first_name = substr($fullname, 0, $posBlankSpace);
					$last_name = substr($fullname, $posBlankSpace, strlen($fullname));
				?>
				<div class="col-12 col-lg-3">
					<div class="card team__card--parent mx-auto" >
						<img class="card-img-top" src="<?php echo base_url('storage/uploads/images/teams/' . unserialize($team->image)[$lang]); ?>" alt="<?php echo unserialize($team->img_title_alt)[$lang]; ?>">
						<img class="card-img-top is-hover" src="<?php echo base_url('storage/uploads/images/teams/' . unserialize($team->image_hover)[$lang]); ?>" alt="<?php echo unserialize($team->img_title_alt_hover)[$lang]; ?>">
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
            items:5,
            nav:true,
            loop:true,
            dots:false,
            margin:15,
            responsive : {
                0 : {
                    items:1,
                },
                576 : {
                    items:2,
                },
                768 : {
                    items:3,
                },
                1200 : {
                    items:5,
                }
            }
        });
    });

</script>
