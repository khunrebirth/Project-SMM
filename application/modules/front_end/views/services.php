<style>
	h3.service--split__title--head {
		font-size: 1.25rem;
		font-weight: 500;
		line-height: 1;
		color: #00264c;
	}

	.service--split__title--head span {
		color: #0d84be;
	}

	.service--split__title--body {
		color: #333;
	}


	#service-1 {
		background-color: #0d84be;
		color: #fff;
		padding: 80px 0px;
	}

	.service-1__title--head {
		font-weight: 500;
		font-size: 1.25rem;
		border-bottom: 3px solid #fff;
		height: 60px;
		width: 65%;
	}

	.service-1__wrapper {
		height: 100%;
		border-bottom: 1px solid #fff;
	}


	#service-2 {
		background-color: #fff;
		color: #00264c;
		padding-top: 80px;
		padding-bottom: 16rem;
	}

	#service-2 h2 {
		position: relative;
	}

	#service-2 h2:after {
		content: "";
		color: #00264c;
		position: absolute;
		bottom: -10px;
		left: 0;
		right: 0;
		height: 10px;
		width: 30%;
		border-top: 3px solid #00264c;
		z-index: 1
	}

	#service-3 {
		background-color: #0d84be;
		color: #fff;
		padding: 80px 0px;
	}

	#service-3 h2 {
		position: relative;
	}

	#service-3 h2:after {
		content: "";
		color: #fff;
		position: absolute;
		bottom: -10px;
		left: 0;
		right: 0;
		height: 10px;
		width: 30%;
		border-top: 3px solid #fff;
		z-index: 1
	}

	#service-4 {
		background-image: url("<?php base_url() ?>resources/front_end/images/service-1/bg-service-01.jpg");
		color: #00264c;
		padding: 80px 0px;
		background-size: cover;
		background-position: center;
		background-repeat: no-repeat;
	}

	#service-4 h2 {
		position: relative;
	}

	#service-4 h2:after {
		content: "";
		color: #0d84be;
		position: absolute;
		bottom: -10px;
		left: 0;
		right: 0;
		height: 10px;
		width: 30%;
		border-top: 3px solid #0d84be;
		z-index: 1
	}


	@media (max-width: 767px) {
		.service-1__wrapper {
			border-bottom: none;
		}
	}


	.txt-service-cap {
		padding: 15px 0;
		font-size: 1.3rem;
		border-bottom: 3px solid #fff;
		display: inline-block;
	}

	.img-main-cus {
		margin-left: -100px;
	}

	@media (min-width: 540px) {
		.img-main-cus {
			margin-left: 0;
		}
	}

	@media (min-width: 720px) {
		.img-main-cus {
			margin-left: 0;
		}
	}

	@media (min-width: 960px) {
		.img-main-cus {
			margin-left: -100px;
		}
	}

	@media (min-width: 1140px) {
		.img-main-cus {
			margin-left: -100px;
		}
	}

	.box-service-pro {
		background-color: #51bad7;
		border: none;
		height: 390px;
		border-radius: 40px;
		padding: 2rem;
		margin-bottom: 50px;
	}

	.box-service-pro .card-body {
		padding: 0;
	}

	.box-service-pro .card-title {
		color: #fff;
		position: relative;
		margin: 0;
		padding: 0 0 15px;
	}

	.box-service-pro .card-title::after {
		content: '';
		width: 50px;
		height: 3px;
		background-color: #00264c;
		bottom: 0;
		left: 0;
		position: absolute;
	}


	
.wrap-slide-port .owl-nav .owl-prev {
    left: 0;
    background: url(<?php echo base_url('resources/front_end/images/service/bw.png');?>) !important;
}
.wrap-slide-port .owl-nav .owl-next {
    right: 0;
    background: url(<?php echo base_url('resources/front_end/images/service/fw.png'); ?>) !important;
}


	
</style>
<!-- Title -->
<section class="page-title" style="background-image:url(http://localhost/social.co.th/resources/front_end/images/slider-1.jpg)">
   <div class="container my-auto text-center wow fadeInUp">
       <h1>Services Page</h1>
   </div>
</section>

<section class="sec-service-port row">
	<div class="col row sec-service-port--inner">
		<div class="col-3  col-md-12 col-lg-3">
			<img src="<?php echo base_url('resources/front_end/images/service/portfolio.png') ?>" alt="">
		</div>
		<div class="col-9  col-md-12  col-lg-9">
			<div class="wrap-slide-port owl-carousel owl-theme">
				<div class="item">
					<img src="<?php echo base_url('resources/front_end/images/service/portfolio.png') ?>" alt="">
				</div>
				<div class="item">
					<img src="<?php echo base_url('resources/front_end/images/service/portfolio.png') ?>" alt="">
				</div>
				<div class="item">
					<img src="<?php echo base_url('resources/front_end/images/service/portfolio.png') ?>" alt="">
				</div>
				<div class="item">
					<img src="<?php echo base_url('resources/front_end/images/service/portfolio.png') ?>" alt="">
				</div>
				<div class="item">
					<img src="<?php echo base_url('resources/front_end/images/service/portfolio.png') ?>" alt="">
				</div>
				<div class="item">
					<img src="<?php echo base_url('resources/front_end/images/service/portfolio.png') ?>" alt="">
				</div>
			</div>
		</div>
	</div>
</section>

<section class="sec-service-content">
	<div class="row wrap-service-content mb-5">
		<div class="col-4">
			<img src="<?php echo base_url('resources/front_end/images/service/dummy.jpg') ?>" alt="">
		</div>
		<div class="col-8 row justify-content-end">
			<div class="col-11">
				<h1 class="ttl-service-01">
					SEARCH<br>ENGINE<br>OPTIMIZATION
				</h1>
				<p class="txt">คัตเอาต์อินเตอร์ดั๊มพ์ เฟิร์มป๊อป ทาวน์ดยุกสตริง รุมบ้าโหงวคอนเซปต์แฟนซีแพนงเชิญ ล้มเหลวเซลส์แมนอพาร์ทเมนท์ฟอร์มปักขคณนา ป๊อก แฟ้บโมเดิร์นกัมมันตะ</p>
				<!-- <p class="text-sm-center text-lg-left"><button class="btn btn-primary btn-tooltip" data-tooltip-content="#tooltip_content" >สนใจทำSeoกับเรา</button><p> -->
				<p class="text-sm-center text-lg-left"><button class="btn btn-primary btn-tooltip" data-tippy>สนใจทำSeoกับเรา</button><p>
			</div>
		</div>
	</div>
	<div class="row wrap-service-content flex-row-reverse">
		<div class="col-4">
			<img src="<?php echo base_url('resources/front_end/images/service/dummy.jpg') ?>" alt="">
		</div>
		<div class="col-8 row">
			<div class="col-11">
				<h3 class="ttl-service-02">
					Seo สำคัญอย่างไร
				</h1>
				<p class="txt">คัตเอาต์อินเตอร์ดั๊มพ์ เฟิร์มป๊อป ทาวน์ดยุกสตริง รุมบ้าโหงวคอนเซปต์แฟนซีแพนงเชิญ ล้มเหลวเซลส์แมนอพาร์ทเมนท์ฟอร์มปักขคณนา ป๊อก แฟ้บโมเดิร์นกัมมันตะ
				รุมบ้าโหงวคอนเซปต์แฟนซีแพนงเชิญ ล้มเหลวเซลส์แมนอพาร์ทเมนท์ฟอร์มปักขคณนา ป๊อก แฟ้บโมเดิร์นกัมมันตะรุมบ้าโหงวคอนเซปต์แฟนซีแพนงเชิญ ล้มเหลวเซลส์แมนอพาร์ทเมนท์ฟอร์มปักขคณนา ป๊อก แฟ้บโมเดิร์นกัมมันตะ
				</p>
			</div>
		</div>
	</div>
</section>

<div class="" id="template">
  <h3>Popover Example</h3>
</div>



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
<!-- Push Custom Scripts -->
<script>

    $(function () {
        $('.wrap-slide-port').owlCarousel({
            items:5,
            nav:true,
            loop:true,
            dots:false,
            margin:15,
        });
    });
</script>
<script>
	$(function () {
		const template = document.getElementById('template');
		// console.log(template);
		// // template.style.display = 'block';
		new Tippy('.btn-tooltip',{
			interactive: true,
			position:'bottom',
			animation:'scale',
			arrow:'true',
			theme:'light',
			trigger:'click',
			allowHTML: false,
			content: template
		});
	});
</script>

<script>
// $(document).ready(function () {
//   $('.btn-tooltip').each(function(){
// 	tippy(this, {
// 		delay: 100,
// 		arrow: true,
// 		arrowType: 'round',
// 		size: 'large',
// 		duration: 500,
// 		animation: 'scale',
// 		placement: 'left',
// 		interactive: true,
// 		trigger: 'click',
// 		theme: 'honeybee',
// 		content: document.querySelector('#tooltip_content').cloneNode(true)
// 	});
//   });
// });
</script>
