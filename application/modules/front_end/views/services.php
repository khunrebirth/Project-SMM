<script src="https://unpkg.com/popper.js@1"></script>
<script src="https://unpkg.com/tippy.js@5"></script>
<link rel="stylesheet" href="https://unpkg.com/tippy.js@5/dist/backdrop.css" />
<style>
	
.sec-service-port {
    background-color: #eee;
    width: 100%;
    margin: 0 !important;
    
}
.sec-service-port--inner {
    max-width: 1440px;
    margin: 0 auto;
}
.wrap-slide-port {
    padding: 0;
    height: 100%;
    position: relative;
}
@media (min-width: 576px) {
    .wrap-slide-port {
        padding: 0 45px;
    }
 }
@media (min-width: 768px) {
    .wrap-slide-port {
        padding: 0 45px;
    }
 }
@media (min-width: 992px) {
    .wrap-slide-port {
        padding: 0 45px;
    }
 }
@media (min-width: 1200px) {
    .wrap-slide-port {
        padding: 0 45px;
    }
 }
.wrap-slide-port .item {
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}
.wrap-slide-port  .owl-item ,
.wrap-slide-port  .owl-stage,
.wrap-slide-port  .owl-stage-outer {
    height: 100%;
}
.wrap-slide-port .owl-nav {
    position: absolute;
    top: 10%;
    -webkit-transform: translate3d(0,-50%,0);
            transform: translate3d(0,-50%,0);
    width: 100%;
    left: 0;
}
.wrap-slide-port .owl-nav .owl-prev, 
.wrap-slide-port .owl-nav .owl-next {
    position: absolute;
    width: 31px;
    height: 36px;
    background-color: #fff !important;
    transition: all 0.3s;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    -ms-transition: all 0.3s;
    -o-transition: all 0.3s;
}
.wrap-slide-port .owl-nav .owl-prev:focus, 
.wrap-slide-port .owl-nav .owl-next:focus {
    outline: none;
}
.wrap-slide-port .owl-nav .owl-prev:hover, 
.wrap-slide-port .owl-nav .owl-next:hover {
    opacity: 0.7;
}
.wrap-slide-port .owl-nav .owl-prev span, 
.wrap-slide-port .owl-nav .owl-next span {
    display: none;
}
.wrap-service-content {
    max-width: 1440px;
    margin: 0 auto;
}

.ttl-service-01,
.ttl-service-02 {
    color: #127dbc;
    margin-bottom: 10px;
    padding-top: 20px;
}
.ttl-service-01 {
    font-size: 2rem;
}
.ttl-service-02 {
    font-size: 1.5rem;
}
@media (min-width: 576px) {
    .ttl-service-01,
    .ttl-service-02 {
        font-size: 20px;
        margin-bottom: 10px;
        padding-top: 20px;
    }
}
@media (min-width: 768px) {
    .ttl-service-01,
    .ttl-service-02 {
        font-size: 20px;
        margin-bottom: 20px;
        padding: 0;
    }
}
@media (min-width: 992px) {
    .ttl-service-01,
    .ttl-service-02 {
        margin-bottom: 20px;
        padding: 0;
    }
    .ttl-service-01 {
        font-size: 3rem;
    }
    .ttl-service-02 {
        font-size: 2rem;
    }
}
@media (min-width: 1200px) {
    .ttl-service-01,
    .ttl-service-02 {
        margin-bottom: 20px;
        padding: 0;
    }
    .ttl-service-01 {
        font-size: 3rem;
    }
    .ttl-service-02 {
        font-size: 2rem;
    }
}
.box-text-service .txt {
   line-height: 2.1; 
}
.tippy-svg-arrow {
    display: none;
}
.tippy-tooltip {
    background-color: #fff !important;
    max-width: 100% !important;
    padding: 0 20px;
}
.tippy-popper {
    width: 100% !important;
    max-width: 500px !important;
    border: 1px solid #d8d8d8;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    -ms-border-radius: 5px;
    -o-border-radius: 5px;
    box-shadow: 3px 3px 6px 0px rgba(0, 0, 0, .4);
    z-index: 5 !important;
    margin: 25px 0;
    background-color: #fff !important;
    padding: 10px 0px 10px !important;
}
.tippy-tooltip[data-placement^=top]>.tippy-arrow {
    bottom: -20px;
    border-top-color: #b4b4b4 !important;
}
.tippy-tooltip[data-placement^=bottom]>.tippy-arrow {
    border-bottom-color: #b4b4b4 !important;
    top: -18px;
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
		<div class=" col-md-12 col-lg-3">
			<img class="img-fluid" src="<?php echo base_url('resources/front_end/images/service/portfolio.png') ?>" alt="">
		</div>
		<div class=" col-md-12  col-lg-9">
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
		<div class="col-lg-4 col-sm-12 text-center">
			<img class="img-fluid"  style="width:100%;" src="<?php echo base_url('resources/front_end/images/service/dummy.jpg') ?>" alt="">
		</div>
		<div class="col-lg-8 col-sm-12 d-flex justify-content-end">
			<div class="col-lg-11 col-sm-12 d-flex justify-content-between flex-column">
				<div class="box-text-service">
					<h1 class="ttl-service-01">
						SEARCH<br>ENGINE<br>OPTIMIZATION
					</h1>
					<p class="txt">คัตเอาต์อินเตอร์ดั๊มพ์ เฟิร์มป๊อป ทาวน์ดยุกสตริง รุมบ้าโหงวคอนเซปต์แฟนซีแพนงเชิญ ล้มเหลวเซลส์แมนอพาร์ทเมนท์ฟอร์มปักขคณนา ป๊อก แฟ้บโมเดิร์นกัมมันตะ</p>
				</div>
				<p class="text-sm-center text-lg-left mb-0"><button class="btn btn-primary btn-tooltip" >สนใจทำSeoกับเรา</button></p>
			</div>
		</div>
	</div>
	<div class="row wrap-service-content mb-5 flex-row-reverse flex-sm-column flex-lg-row-reverse">
		<div class="col-lg-4 col-sm-12 text-center">
			<img class="img-fluid" style="width:100%;" src="<?php echo base_url('resources/front_end/images/service/dummy.jpg') ?>" alt="">
		</div>
		<div class="col-lg-8 col-sm-12 d-flex">
			<div class="col-11 col-lg-11 col-sm-12 d-flex justify-content-between flex-column">
				<div class="box-text-service">
					<h3 class="ttl-service-02">
						Seo สำคัญอย่างไร
					</h3>
					<p class="txt">คัตเอาต์อินเตอร์ดั๊มพ์ เฟิร์มป๊อป ทาวน์ดยุกสตริง รุมบ้าโหงวคอนเซปต์แฟนซีแพนงเชิญ ล้มเหลวเซลส์แมนอพาร์ทเมนท์ฟอร์มปักขคณนา ป๊อก แฟ้บโมเดิร์นกัมมันตะ
					รุมบ้าโหงวคอนเซปต์แฟนซีแพนงเชิญ ล้มเหลวเซลส์แมนอพาร์ทเมนท์ฟอร์มปักขคณนา ป๊อก แฟ้บโมเดิร์นกัมมันตะรุมบ้าโหงวคอนเซปต์แฟนซีแพนงเชิญ ล้มเหลวเซลส์แมนอพาร์ทเมนท์ฟอร์มปักขคณนา ป๊อก แฟ้บโมเดิร์นกัมมันตะ
					</p>
				</div>
				<p class="text-sm-center text-lg-left mb-0"><button class="btn btn-primary btn-tooltip">สนใจทำSeoกับเรา</button></p>
			</div>
		</div>
	</div>
</section>

<section style="background-image:url(http://localhost/social-dev/resources/front_end/images/slider-1.jpg);height:500px;background-size: cover;">
</section>

<div class="" id="template" style="display:none;">
	<h2 class="text-secondary contact__form--title">กรอกแบบ<span>ฟอร์ม</span>ติดต่อเรา</h2>
	<p class="text-secondary contact__form--body mb-4">เราจะติดต่อกลับโดยด่วนที่สุด</p>
	<form class="mt-4" action="http://localhost/social-dev/contact/send" method="post">
		<div class="form-group">
			<input type="text" class="form-control" name="name" placeholder="ชื่อ*" required="">
		</div>
		<div class="form-group">
			<input type="text" class="form-control" name="email" placeholder="อีเมล์*" required="">
		</div>
		<div class="form-group">
			<input type="text" class="form-control" name="company" placeholder="บริษัท*" required="">
		</div>
		<div class="form-group">
			<input type="text" class="form-control" name="phone" placeholder="เบอร์ติดต่อ*" required="">
		</div>
		<div class="form-group">
			<textarea class="form-control" rows="5" name="detail" placeholder="รายละเอียด"></textarea>
		</div>
		<div class="col text-center">
			<button type="submit" class="btn btn-primary text-center">ตกลง</button>
		</div>
	</form>
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
			autoplay: true,
			autoplayTimeout: 2000,
			autoplaySpeed: 1000,
			responsive:{
				0:{
					items:3,
            		nav:false,
				},
				576:{
					items:3,
            		nav:true,
				},
				1000:{
					items:5
				}
			}
        });
    });
</script>
<script>
	$(function () {
		const template = document.getElementById('template');
		tippy('.btn-tooltip', {
			interactive: true,
			theme:'light',
			trigger:'click',
			content: template.innerHTML,
			animation: 'fade',
			placement: "top",
			arrow: true,
		});
		
	});
</script>
