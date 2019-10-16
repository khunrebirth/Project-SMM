<!-- Title -->
<!--<section class="page-title" style="background-image:url(http://localhost/social.co.th/resources/front_end/images/slider-1.jpg)">-->
<!--    <div class="container my-auto text-center wow fadeInUp">-->
<!--        <h1>Services Page</h1>-->
<!--    </div>-->
<!--</section>-->

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
        height: 100%; border-bottom: 1px solid #fff;
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
        background-repeat: no-repeat;.
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
        .box-service-pro  .card-title {
            color: #fff;
            position: relative;
            margin: 0;
            padding: 0 0 15px;
        }
            .box-service-pro  .card-title::after {
                content: '';
                width: 50px;
                height: 3px;
                background-color: #00264c;
                bottom: 0;
                left: 0;
                position: absolute;
            }
</style>

<!-- Service -->
<section id="service" style="padding-top: 160px; padding-bottom: 0px;">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-5 col-lg-5 text-right pr-3 pr-xs-0 text-center text-sm-right">
                <h2 class="service--split__title--head mt-md-0 mt-4"><span>S</span>ocial Media Master</h2>
                <p class="lead service--split__title--body mt-4 mb-4">
                    คร่ำหวอดในแวดวงดิจิทัลมาอย่างยาวนานตั้งแต่ยุคแรก ๆ  ของการทำสื่อโฆษณาออนไลน์ ไม่ใช่แค่ประสบการณ์ที่เราได้เก็บเกี่ยว และเพาะบ่มเท่านั้นแต่เรายังมีเทคนิคในการทำการตลาดออนไลน์มีเพียบ ที่พร้อมจะขับเคลื่อนธุรกิจของคุณ ให้ประสบความสำเร็จ บนโลกออนไลน์
                </p>
            </div>
            <div class="col-xs-12 col-md-7 col-lg-7 pl-md-5 text-center text-sm-left">
                <img src="<?php base_url() ?>resources/front_end/images/img-/images/title-service.png" alt="" class="img-fluid">
            </div>
        </div>
        <div class="row text-center">
            <div class="col-xs-12 col-md-3 col-lg-3 mb-5">
                <img src="resources/front_end/images/service-1/smm-consult.png" alt="" class="img-fluid service__icon--resize">
                <h3 class="service--split__title--head mt-3">บริการที่ปรึกษาการคลาดออนไลน์</h3>
            </div>
            <div class="col-xs-12 col-md-3 col-lg-3 mb-5">
                <img src="resources/front_end/images/service-1/smm-marketing.png" alt="" class="img-fluid service__icon--resize">
                <h3 class="service--split__title--head mt-3">บริการวางแผนและทำการตลาดออนไลน์</h3>
            </div>
            <div class="col-xs-12 col-md-3 col-lg-3 mb-5">
                <img src="resources/front_end/images/service-1/smm-production.png" alt="" class="img-fluid service__icon--resize">
                <h3 class="service--split__title--head mt-3">รับพัฒนา และออกแบบเว็บไซต์</h3>
            </div>
            <div class="col-xs-12 col-md-3 col-lg-3 mb-5">
                <img src="resources/front_end/images/service-1/smm-website.png" alt="" class="img-fluid service__icon--resize">
                <h3 class="service--split__title--head mt-3">Production</h3>
            </div>
        </div>
    </div>
</section>

<section id="service-1">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2>บริการที่ปรึกษาการตลาดออนไลน์</h2>
                <div class="service-1__wrapper--icon text-center mt-5 mb-5" style="width: 100%;">
                    <img src="resources/front_end/images/service-1/smm-consult.png" alt="" class="img-fluid">
                </div>
<!--                <div class="service-1__footer">-->
<!--                    <h3>Contact us</h3>-->
<!--                    <span>02-193-9062</span>-->
<!--                </div>-->
            </div>
            <div class="col-md-8">
                <div class="row mb-5">
                    <img src="resources/front_end/images/service-1/service-1_16.png" alt="" class="img-fluid">
                </div>
                <div class="row">
                    <div class="col-md-4 pl-md-0">
                        <div class="service-1__wrapper">
                            <h3 class="service-1__title--head mb-5">วางแผนทางการตลาดออนไลน์</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid cumque nihil quo repellendus suscipit. Aut, neque sequi. Accusantium adipisci architecto dicta eveniet id omnis, optio rem tempore. Atque, deserunt et.</p>
                        </div>
                    </div>
                    <div class="col-md-4 pl-md-0">
                        <div class="service-1__wrapper">
                            <h3 class="service-1__title--head mb-5">ที่ปรึกษาการตลาดออนไลน์</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet asperiores laudantium minus numquam ratione sapiente? Architecto consectetur eaque itaque nulla possimus veniam voluptatum. Accusamus alias beatae deleniti magnam sint.</p>
                        </div>
                    </div>
                    <div class="col-md-4 pl-md-0">
                        <div class="service-1__wrapper">
                            <h3 class="service-1__title--head mb-5">วิทยากรบรรยาย</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores dolor facilis nulla, provident rerum totam! Aut eos, et ex fugit nam natus necessitatibus quaerat quas sit soluta tenetur voluptas voluptates.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="service-2">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2>บริการวางแผนและการทำการตลาดออนไลน์</h2>
<!--                <div class="service-1__footer">-->
<!--                    <h3>Contact us</h3>-->
<!--                    <span>02-193-9062</span>-->
<!--                </div>-->
            </div>
            <div class="col-md-4">
                <div class="service-2__wrapper--box mb-3">
                    <h5>รับทำ Search Marketing</h5>
                    <ul class="service-2__box--menu">
                        <li>รับทำ SEO</li>
                        <li>รับทำ Google Adword</li>
                    </ul>
                </div>
                <div class="service-2__wrapper--box mb-3">
                    <h5>รับทำ Social Media Marketing</h5>
                    <ul class="service-2__box--menu">
                        <li>รับทำ Facebook Ads</li>
                        <li>รับทำ Instagram Ads</li>
                        <li>รับทำ Youtube Ads</li>
                        <li>บริหารดูแล Line@</li>
                        <li>บริหารบริการจัดการแฟนเพจ</li>
                    </ul>
                </div>
                <div class="service-2__wrapper--box mb-3">
                    <h5>รับทำ Content Marketing / Creative Content</h5>
                </div>

                <div class="service-2__wrapper--box mb-3">
                    <h5>รับทำ Influencer & Micro Influencer</h5>
                </div>
                <div class="service-2__wrapper--box mb-3">
                    <h5>รับทำ EDM</h5>
                </div>
            </div>
            <div class="col-md-4">
                <img src="resources/front_end/images/service-1/service-1_20.png" alt=""  class="img-fluid">
            </div>
        </div>
    </div>
</section>

<section id="service-3" style="position:relative;">
    <img src="resources/front_end/images/service-1/footer-section.jpg" alt="" style="position: absolute;top:-201px;right:0px;">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h2>รับพัฒนาและออกแบบเว็บไซต์</h2>
                <div class="service-1__wrapper--icon text-center mt-5 mb-5" style="width: 100%;">
                    <img src="<?php base_url() ?>resources/front_end/images/service-1/img_service_01.png" alt="" class="img-fluid img-main-cus">
                </div>
            </div>
            <div class="col-md-7 row">

                <div class="mb-5 col-6">
                    <img src="<?php base_url() ?>resources/front_end/images/service-1/img_service_02.jpg" alt="" class="img-fluid">
                    <h3 class="txt-service-cap">Website</h3>
                </div>

                <div class="mb-5 col-6">
                    <img src="<?php base_url() ?>resources/front_end/images/service-1/img_service_03.jpg" alt="" class="img-fluid">
                    <h3 class="txt-service-cap">Web App</h3>
                </div>


                <div class="mb-5 col-6">
                    <img src="<?php base_url() ?>resources/front_end/images/service-1/img_service_04.jpg" alt="" class="img-fluid">
                    <h3 class="txt-service-cap">Moblie App</h3>
                </div>

                <div class="mb-5 col-6">
                    <img src="<?php base_url() ?>resources/front_end/images/service-1/img_service_05.jpg" alt="" class="img-fluid">
                    <h3 class="txt-service-cap">Landing page</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="service-4">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2>Production</h2>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card box-service-pro">
                            <div class="card-body">
                                <h5 class="card-title">VDO Production</h5>
<!--                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card box-service-pro">
                            <div class="card-body">
                                <h5 class="card-title">Graphic Design</h5>
<!--                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card box-service-pro">
                            <div class="card-body">
                                <h5 class="card-title">Motion Graphic</h5>
<!--                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card box-service-pro">
                            <div class="card-body">
                                <h5 class="card-title">Animation</h5>
                                <!--                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card box-service-pro">
                            <div class="card-body">
                                <h5 class="card-title">MV Music</h5>
                                <!--                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
                            </div>
                        </div>
                    </div>
                </div>
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
