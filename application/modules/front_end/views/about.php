<!-- Push Custom Style -->
<style>
    .test {
        overflow: hidden;
        padding: 0;
        margin: 0;
        transition: all 1s ease;
        height: 340px;
    }

    .test {
        background: url('<?php base_url() ?>resources/front_end/images/about/img_about_01.jpg') no-repeat center center;
        background-size: cover;
    }

    .test::before {
        content: '';
        background: rgba(0, 0, 0, 0.2);
        position: absolute;
        top: 0;
        bottom: 0;
        width: 100%;
    }

    a {
        color: #fff;
        text-decoration: none;
    }

    .timeline {
        position: absolute;
        bottom: 0;
        top: 100;
        /* width: 3000px; */
        height: 50px;
        background: rgba(0, 0, 0, 0.5);
        border-top: 1px solid #fff;
        padding-left: 80px;
        
        width: calc(100% + 25% - 180px);
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
    }

    .date {
        color: #fff;
        float: left;
        /* width: 250px; */
        height: 50px;
        /*padding-left: 80px;*/
        width: 20%;
    }

    .date::before {
        content: '';
        position: absolute;
        height: 100vh;
        width: 1px;
        background: rgba(255, 255, 255, 0.7);
        background: -webkit-linear-gradient(top, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 1)); /*Safari 5.1-6*/
        background: -o-linear-gradient(bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 1)); /*Opera 11.1-12*/
        background: -moz-linear-gradient(bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 1)); /*Fx 3.6-15*/
        background: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(255, 255, 255, 1)); /*Standard*/
        margin-top: -100vh;
    }

    p.focus {
        position: absolute;
        top: 0;
        margin-left: -14px;
        padding-top: 10px;
    }

    p.focus::before {
        content: '';
        width: 20px;
        height: 20px;
        border: 1px solid #fff;
        border-radius: 50%;
        position: absolute;
        top: -10px;
        left: 3.5px;
    }

    p.focus::after {
        content: '';
        position: absolute;
        width: 10px;
        height: 10px;
        background: #fff;
        border-radius: 50%;
        top: -5px;
        left: 9px;
    }

    .goal_wrap {
        position: absolute;
        width: 50px;
        height: 50px;
        border: 2px solid #fff;
        text-align: center;
        border-radius: 50%;
        line-height: 50px;
        top: -100px;
        margin-left: -24px;
        font-size: 24px;
        transition: all 0.5s ease;
        background-color: #fff;
    }

    /*.goal_wrap:hover {*/
    /*    width: 60px;*/
    /*    height: 60px;*/
    /*    line-height: 60px;*/
    /*    margin-left: -30px;*/
    /*    font-size: 30px;*/
    /*    cursor: pointer;*/
    /*}*/

    .goal_wrap.active {
        top: -160px;
        width: 80px;
        height: 80px;
        line-height: 85px;
        margin-left: -40px;
        font-size: 40px;
        cursor: pointer;
        background: #00264c;
        color: #fff;
        border: none;
    }

    .goal_wrap.active i {
        color: #fff !important;
    }

    .bounce {
        animation: bounce 1s .5s;
        transform: scale(0.85);
    }

    /*@keyframes bounce {*/
    /*    0% {*/
    /*        transform: scale(0.85);*/
    /*        opacity: 1;*/
    /*    }*/
    /*    50% {*/
    /*        transform: scale(0.95);*/
    /*        opacity: .7;*/
    /*    }*/
    /*    60% {*/
    /*        transform: scale(0.6);*/
    /*        opacity: 1;*/
    /*    }*/
    /*    80% {*/
    /*        transform: scale(1.6)*/
    /*    }*/
    /*    100% {*/
    /*        transform: scale(1.1)*/
    /*    }*/
    /*}*/

    .txt-about {
        text-align: left;
        font-size: 1.3rem;
        padding: 33px 90px 0;
        color: #fff;
    }
</style>

<!-- About -->
<section id="about" style="padding-top: 160px; padding-bottom: 160px;">
    <div class="container">
        <div class="row">
            <div class="col-md-5 offset-md-5 pl-md-5 pl-sm-5 pl-xs-0 text-center text-sm-left">
                <div class="title-about" style="">
					<img src="<?php echo base_url($lang == 'th' ? 'resources/front_end/images/title-about.png' : 'resources/front_end/images/title-about.png'); ?>" alt="" class="img-fluid">
                </div>
            </div>

            <div class="col-md-5 col-lg-5 text-right pr-3 pr-xs-0 text-center text-sm-right">
                <h2 class="about__title--head mt-md-0 mt-4"><span>S</span>ocial Media Master</h2>
                <p class="lead about__split--title--body mt-4 mb-4">
                    <?php echo unserialize($about->content_left)[$lang]; ?>
                </p>
            </div>
            <div class="col-xs-12 col-md-7 col-lg-7 pl-md-5 text-center text-sm-left">
				<?php echo unserialize($about->content_right)[$lang]; ?>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-12 test d-none d-sm-none d-md-block d-ld-block d-lx-block" style="background-image: url('<?php echo base_url("resources/front_end/images/about/img_about_01.jpg") ?>');">
                <div class="structure" ng-app="app" ng-controller="HomeController">

                    <div class="preloaderimg">
                        <img src="https://wallpaperscraft.com/image/tropics_sea_palm_trees_vacation_84858_2412x1810.jpg" alt="" style="display: none;" />
                        <img src="http://extrawall.net/images/wallpapers/378_1920x1080_abstract_city.jpg" alt="" style="display: none;" />
                        <img src="http://www.churchmilitant.com/images/uploads/2015-06-12-niles-x.jpg" alt="" style="display: none;"/>
                    </div>

                    <div class="timeline"></div>

                    <div class="timeline">
                        <div ng-repeat="date in dates track by $index" class="date date-{{$index}}">
                            <div class="goal_wrap goal_real_estate" ng-show="goal_real_estate_{{date}}">
                                <i class="far fa-clock fa-lg" aria-hidden="true" style="color: #999;"></i>
                            </div>
                            <div class="goal_wrap goal_involve" ng-show="goal_involve_{{date}}">
                                <i class="far fa-clock fa-lg" aria-hidden="true" style="color: #999;"></i>
                            </div>
                            <div class="goal_wrap goal_retirement" ng-show="goal_retirement_{{date}}">
                                <i class="far fa-clock fa-lg" aria-hidden="true" style="color: #999;"></i>
                            </div>
                            <div class="goal_wrap goal_2017" ng-show="goal_2017_{{date}}">
                                <i class="far fa-clock fa-lg" aria-hidden="true" style="color: #999;"></i>
                            </div>
                            <div class="goal_wrap goal_2019" ng-show="goal_2019_{{date}}">
                                <i class="far fa-clock fa-lg" aria-hidden="true" style="color: #999;"></i>
                            </div>
                            <p class="focus">
                                <a href="#" class="btnDate">{{date}}</a>
                            </p>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h1 class="txt-about" id="test">{{goal_title}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SiteMap -->
<?php include 'layouts/sitemap.php'; ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.4/TweenMax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.5/angular.min.js"></script>

<!-- Push Custom Scripts -->
<script>
    var app = angular.module('app', []);

    app.controller('HomeController', function($scope) {

        $scope.goal_title = "Social Media Master ได้เริ่มก่อตั้งบริษัทที่ให้บริการวางแผนและประชาสัมพันธ์ผ่านสื่อออนไลน์ซึ่งถือได้ว่า เราคือดิจิทัล เอเจนซี่เจ้าแรก ๆ ในยุคนั้น";

        $scope.dates = [
            2011, 2013, 2015, 2017, 2019
        ];

        $scope.goal_real_estate = false;

        for (x in $scope.dates) {
            if($scope.dates[x]== 2011){
                $scope.goal_real_estate_2011 = true;
            }else if($scope.dates[x]== 2013){
                $scope.goal_retirement_2013 = true;
            }else if($scope.dates[x]== 2015){
                $scope.goal_involve_2015 = true;
            }else if($scope.dates[x]== 2017){
                $scope.goal_2017_2017 = true;
            }else if($scope.dates[x]== 2019){
                $scope.goal_2019_2019 = true;
            }
        }
    });

    $(document).ready(function(e) {
        var viewport =Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
        console.log(viewport);


        $('.btnDate').click(function(e){
            e.preventDefault()
        })

        $('.goal_wrap').click(function(){
            var diff = $(this).parent()[0].offsetLeft;
            $('.date .goal_wrap').removeClass('active bounce');
            $(this).addClass('active bounce');
            console.log(diff);
            console.log((viewport - diff));
            // TweenLite.to($('.date').parent(), 1, {x:((viewport*0.5) - diff), onComplete:function(){
            //         console.log('success');
            //         /*TweenLite.to($('.timeline'), 1, {top:"50%"});*/
            //     }});
        });

        $('.goal_real_estate').click(function(){
            console.log('goal click');
            $('.test').fadeTo('ease', 0.3, function() {
                $(this).css('background-image', 'url(<?php echo base_url('resources/front_end/images/about/img_about_01.jpg') ?>');
            }).fadeTo('slow', 1);
            $("#test").html('Social Media Master ได้เริ่มก่อตั้งบริษัทที่ให้บริการวางแผนและประชาสัมพันธ์ผ่านสื่อออนไลน์ซึ่งถือได้ว่า เราคือดิจิทัล เอเจนซี่เจ้าแรก ๆ ในยุคนั้น')
        });

        $('.goal_retirement').click(function(){
            console.log('goal click');
            $('.test').fadeTo('ease', 0.3, function() {
                $(this).css('background-image', 'url(<?php echo base_url('resources/front_end/images/about/about-smm1.jpg') ?>)');
            }).fadeTo('slow', 1);
            $("#test").html('เราคือผู้เชี่ยวชาญในเรื่อง SEOด้วยประสบการณ์กว่า 15 ปีในการคลุกคลีกับการเพิ่มประสิทธิภาพของเว็บไซต์เพื่อให้ติดอันดับในการค้นหาของกูเกิล ทำให้เรากลายเป็นผู้เชี่ยวชาญและเป็น Google Partners จากจุดเริ่มต้นนี้เราได้พัฒนาระบบการทำเว็บไซต์เพื่อรองรับการค้นหาจาก 3 เสิร์ชเอ็นจิ้นชั้นนำอย่าง Google Yahoo และ Bing โดยเน้นไปที่การทำ SEO และ SEM')
        });

        $('.goal_involve').click(function(){
            console.log('goal click');
            $('.test').fadeTo('ease', 0.3, function() {
                $(this).css('background-image', 'url(<?php echo base_url('resources/front_end/images/about/about-smm2.jpg') ?>)');
            }).fadeTo('slow', 1);
            $("#test").html('เราเชื่อมั่นในพลังของความสร้างสรรค์การตลาดผ่านคอนเทนต์ไม่ใช่แนวคิดที่แปลกใหม่ในโลกการตลาดดิจิทัลอีกต่อไป แต่กำลังกลายเป็นขุมพลังที่มีความสำคัญมากกว่าที่เคย ดังคำเปรียบเปรยที่ว่า "Content is the king" เพราะคอนเทนต์ที่มีประสิทธิภาพนอกจากจะช่วยให้การวางกลยุทธ์ทางการตลาดออนไลน์ประสบผลสำเร็จได้แล้ว ยังช่วยส่งผลลัพธ์ที่ดีต่อเว็บไซต์อีกด้วย')
        });


        $('.goal_2017').click(function(){
            console.log('goal click');
            $('.test').fadeTo('ease', 0.3, function() {
                $(this).css('background-image', 'url(<?php echo base_url('resources/front_end/images/about/about-smm3.jpg') ?>)');
            }).fadeTo('slow', 1);
            $("#test").html('ผู้เชี่ยวชาญและให้คำปรึกษาการวางแผนกลยุทธ์ดิจิทัลออนไลน์ด้วยทักษะและประสบการณ์ในหลากหลายธุรกิจของเราจึงทำให้เรามีทีมงานที่เข้าถึงข้อมูลสามารถช่วยวิเคราะห์แผนการลงโฆษณาออนไลน์เพื่อให้ลูกค้าของเราเข้าถึงกลุ่มเป้าหมายได้อย่างตรงจุดที่สุด')
        });

        $('.goal_2019').click(function(){
            console.log('goal click');
            $('.test').fadeTo('ease', 0.3, function() {
                $(this).css('background-image', 'url(<?php echo base_url('resources/front_end/images/about/about-smm4.jpg') ?>)');
            }).fadeTo('slow', 1);
            $("#test").html('ดิจิทัลเอเจนซี่ชั้นนำเพราะยุคปัจจุบันผู้บริโภคมีพฤติกรรมที่เปลี่ยนไป หันหน้าเข้าสู่โลกออนไลน์มากขึ้น เราคือดิจิทัลเอเจนซี่ตัวจริงที่ติดตามความเคลื่อนไหวของโลกออนไลน์ทุกลมหายใจ เราพร้อมแล้วที่จะช่วยให้ธุรกิจของคุณโลดแล่นบนโลกออนไลน์อย่างมีประสิทธิภาพ')
        });
    });
</script>
