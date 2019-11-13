<link rel="stylesheet" href="<?php echo base_url('resources/front_end/css/style_about.min.css'); ?>">
<!-- About -->
<section id="about" >
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="title-about">
					<img src="<?php echo base_url($lang == 'th' ? 'resources/front_end/images/title-about.png' : 'resources/front_end/images/title-about.png'); ?>" alt="" class="img-fluid d-none d-md-block">
					<img src="<?php echo base_url($lang == 'th' ? 'resources/front_end/images/title-about_sp.png' : 'resources/front_end/images/title-about_sp.png'); ?>" alt="" class="img-fluid d-block d-md-none">
                </div>
            </div>

            <div class="col-md-12 col-lg-12 mt-4 mt-md-5 mb-1">
                <h2 class="about__title--head mt-md-0 mt-4"><span>S</span>ocial Media Master</h2>
                <p class="lead about__split--title--body mt-4">
                    <?php echo unserialize($about->content_left)[$lang]; ?>
                </p>
            </div>

            <div class="col-xs-12 col-md-12 col-lg-12 lead about__split--title--body mb-3 mb-md-5">
				<?php echo unserialize($about->content_right)[$lang]; ?>
            </div>
        </div>
    </div>
    <div class="sec-about-vdo">
        <div class="container px-0">
            <video id="videoId" width="100%" height="auto" autoplay loop muted>
                <source src="<?php echo base_url('resources/front_end/video/VDO.mp4'); ?>" type="video/mp4">
            </video>
        </div>
    </div>
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-12 test d-none d-sm-none d-md-block d-ld-block d-lx-block" style="background-image: url('<?php echo base_url("resources/front_end/images/about/about-smm1.jpg") ?>');">
                <div class="structure" ng-app="app" ng-controller="HomeController">

                    <div class="preloaderimg">
                        <img src="https://wallpaperscraft.com/image/tropics_sea_palm_trees_vacation_84858_2412x1810.jpg" alt="" class="d-none" />
                        <img src="http://extrawall.net/images/wallpapers/378_1920x1080_abstract_city.jpg" alt="" class="d-none" />
                        <img src="http://www.churchmilitant.com/images/uploads/2015-06-12-niles-x.jpg" alt="" class="d-none"/>
                    </div>

                    <div class="timeline"></div>

                    <div class="timeline">
                        <div ng-repeat="date in dates track by $index" class="date date-{{$index}}">
                            <div class="goal_wrap goal_real_estate" ng-show="goal_real_estate_{{date}}">
                                <i class="far fa-clock fa-lg" aria-hidden="true"></i>
                            </div>
                            <div class="goal_wrap goal_involve" ng-show="goal_involve_{{date}}">
                                <i class="far fa-clock fa-lg" aria-hidden="true"></i>
                            </div>
                            <div class="goal_wrap goal_retirement" ng-show="goal_retirement_{{date}}">
                                <i class="far fa-clock fa-lg" aria-hidden="true"></i>
                            </div>
                            <div class="goal_wrap goal_2017" ng-show="goal_2017_{{date}}">
                                <i class="far fa-clock fa-lg" aria-hidden="true"></i>
                            </div>
                            <div class="goal_wrap goal_2019" ng-show="goal_2019_{{date}}">
                                <i class="far fa-clock fa-lg" aria-hidden="true"></i>
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
        <div class="d-block d-lg-flex sec-about-story">
            <div class="item-story">
                <p class="ttl">2011</p>
                <img class="img-fluid" src="<?php echo base_url('resources/front_end/images/about/about1.jpg'); ?>" alt="">
                <p class="txt">
                    Social Media Master ได้เริ่มก่อตั้งบริษัทที่ให้บริการวางแผนและประชาสัมพันธ์ผ่านสื่อออนไลน์ซึ่งถือได้ว่า เราคือดิจิทัล เอเจนซี่เจ้าแรก ๆ ในยุคนั้น
                </p>
            </div>
            <div class="item-story">
                <p class="ttl">2013</p>
                <img class="img-fluid" src="<?php echo base_url('resources/front_end/images/about/about2.jpg'); ?>" alt="">
                <p class="txt">
                    เราคือผู้เชี่ยวชาญในเรื่อง SEOด้วยประสบการณ์กว่า 15 ปีในการคลุกคลีกับการเพิ่มประสิทธิภาพของเว็บไซต์เพื่อให้ติดอันดับในการค้นหาของกูเกิล ทำให้เรากลายเป็นผู้เชี่ยวชาญและเป็น Google Partners จากจุดเริ่มต้นนี้เราได้พัฒนาระบบการทำเว็บไซต์เพื่อรองรับการค้นหาจาก 3 เสิร์ชเอ็นจิ้นชั้นนำอย่าง Google Yahoo และ Bing โดยเน้นไปที่การทำ SEO และ SEM
                </p>
            </div>
            <div class="item-story">
                <p class="ttl">2015</p>
                <img class="img-fluid" src="<?php echo base_url('resources/front_end/images/about/about3.jpg'); ?>" alt="">
                <p class="txt">
                    เราเชื่อมั่นในพลังของความสร้างสรรค์การตลาดผ่านคอนเทนต์ไม่ใช่แนวคิดที่แปลกใหม่ในโลกการตลาดดิจิทัลอีกต่อไป แต่กำลังกลายเป็นขุมพลังที่มีความสำคัญมากกว่าที่เคย ดังคำเปรียบเปรยที่ว่า "Content is the king" เพราะคอนเทนต์ที่มีประสิทธิภาพนอกจากจะช่วยให้การวางกลยุทธ์ทางการตลาดออนไลน์ประสบผลสำเร็จได้แล้ว ยังช่วยส่งผลลัพธ์ที่ดีต่อเว็บไซต์อีกด้วย
                </p>
            </div>
            <div class="item-story">
                <p class="ttl">2017</p>
                <img class="img-fluid" src="<?php echo base_url('resources/front_end/images/about/about4.jpg'); ?>" alt="">
                <p class="txt">
                    ผู้เชี่ยวชาญและให้คำปรึกษาการวางแผนกลยุทธ์ดิจิทัลออนไลน์ด้วยทักษะและประสบการณ์ในหลากหลายธุรกิจของเราจึงทำให้เรามีทีมงานที่เข้าถึงข้อมูลสามารถช่วยวิเคราะห์แผนการลงโฆษณาออนไลน์เพื่อให้ลูกค้าของเราเข้าถึงกลุ่มเป้าหมายได้อย่างตรงจุดที่สุด
                </p>
            </div>
            <div class="item-story">
                <p class="ttl ttl--now">NOW</p>
                <img class="img-fluid" src="<?php echo base_url('resources/front_end/images/about/about5.jpg'); ?>" alt="">
                <p class="txt">
                    ดิจิทัลเอเจนซี่ชั้นนำเพราะยุคปัจจุบันผู้บริโภคมีพฤติกรรมที่เปลี่ยนไป หันหน้าเข้าสู่โลกออนไลน์มากขึ้น เราคือดิจิทัลเอเจนซี่ตัวจริงที่ติดตามความเคลื่อนไหวของโลกออนไลน์ทุกลมหายใจ เราพร้อมแล้วที่จะช่วยให้ธุรกิจของคุณโลดแล่นบนโลกออนไลน์อย่างมีประสิทธิภาพ
                </p>
            </div>
        </div>
    </div>
</section>

<!-- SiteMap -->
<?php include 'layouts/sitemap.php'; ?>


<!-- JS Libraies -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.4/TweenMax.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.5/angular.min.js" type="text/javascript"></script>

<!-- Push Custom Scripts
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
        // console.log(viewport);


        $('.btnDate').click(function(e){
            e.preventDefault()
        })

        $('.goal_wrap').click(function(){
            var diff = $(this).parent()[0].offsetLeft;
            $('.date .goal_wrap').removeClass('active bounce');
            $(this).addClass('active bounce');
            // console.log(diff);
            // console.log((viewport - diff));
            // TweenLite.to($('.date').parent(), 1, {x:((viewport*0.5) - diff), onComplete:function(){
            //         console.log('success');
            //         /*TweenLite.to($('.timeline'), 1, {top:"50%"});*/
            //     }});
        });

        $('.goal_real_estate').click(function(){
            // console.log('goal click');
            $('.test').fadeTo('ease', 0.3, function() {
                $(this).css('background-image', 'url('+window.base_url+'resources/front_end/images/about/about-smm1.jp');
            }).fadeTo('slow', 1);
            $("#test").html('Social Media Master ได้เริ่มก่อตั้งบริษัทที่ให้บริการวางแผนและประชาสัมพันธ์ผ่านสื่อออนไลน์ซึ่งถือได้ว่า เราคือดิจิทัล เอเจนซี่เจ้าแรก ๆ ในยุคนั้น')
        });

        $('.goal_retirement').click(function(){
            // console.log('goal click');
            $('.test').fadeTo('ease', 0.3, function() {
                $(this).css('background-image', 'url('+window.base_url+'resources/front_end/images/about/about-smm2.jpg');
            }).fadeTo('slow', 1);
            $("#test").html('เราคือผู้เชี่ยวชาญในเรื่อง SEOด้วยประสบการณ์กว่า 15 ปีในการคลุกคลีกับการเพิ่มประสิทธิภาพของเว็บไซต์เพื่อให้ติดอันดับในการค้นหาของกูเกิล ทำให้เรากลายเป็นผู้เชี่ยวชาญและเป็น Google Partners จากจุดเริ่มต้นนี้เราได้พัฒนาระบบการทำเว็บไซต์เพื่อรองรับการค้นหาจาก 3 เสิร์ชเอ็นจิ้นชั้นนำอย่าง Google Yahoo และ Bing โดยเน้นไปที่การทำ SEO และ SEM')
        });

        $('.goal_involve').click(function(){
            // console.log('goal click');
            $('.test').fadeTo('ease', 0.3, function() {
                $(this).css('background-image', 'url('+window.base_url+'resources/front_end/images/about/about-smm3.jpg');
            }).fadeTo('slow', 1);
            $("#test").html('เราเชื่อมั่นในพลังของความสร้างสรรค์การตลาดผ่านคอนเทนต์ไม่ใช่แนวคิดที่แปลกใหม่ในโลกการตลาดดิจิทัลอีกต่อไป แต่กำลังกลายเป็นขุมพลังที่มีความสำคัญมากกว่าที่เคย ดังคำเปรียบเปรยที่ว่า "Content is the king" เพราะคอนเทนต์ที่มีประสิทธิภาพนอกจากจะช่วยให้การวางกลยุทธ์ทางการตลาดออนไลน์ประสบผลสำเร็จได้แล้ว ยังช่วยส่งผลลัพธ์ที่ดีต่อเว็บไซต์อีกด้วย')
        });


        $('.goal_2017').click(function(){
            // console.log('goal click');
            $('.test').fadeTo('ease', 0.3, function() {
                $(this).css('background-image', 'url('+window.base_url+'resources/front_end/images/about/about-smm4.jpg');
            }).fadeTo('slow', 1);
            $("#test").html('ผู้เชี่ยวชาญและให้คำปรึกษาการวางแผนกลยุทธ์ดิจิทัลออนไลน์ด้วยทักษะและประสบการณ์ในหลากหลายธุรกิจของเราจึงทำให้เรามีทีมงานที่เข้าถึงข้อมูลสามารถช่วยวิเคราะห์แผนการลงโฆษณาออนไลน์เพื่อให้ลูกค้าของเราเข้าถึงกลุ่มเป้าหมายได้อย่างตรงจุดที่สุด')
        });

        $('.goal_2019').click(function(){
            // console.log('goal click');
            $('.test').fadeTo('ease', 0.3, function() {
                $(this).css('background-image', 'url('+window.base_url+'resources/front_end/images/about/about-smm5.jpg');
            }).fadeTo('slow', 1);
            $("#test").html('ดิจิทัลเอเจนซี่ชั้นนำเพราะยุคปัจจุบันผู้บริโภคมีพฤติกรรมที่เปลี่ยนไป หันหน้าเข้าสู่โลกออนไลน์มากขึ้น เราคือดิจิทัลเอเจนซี่ตัวจริงที่ติดตามความเคลื่อนไหวของโลกออนไลน์ทุกลมหายใจ เราพร้อมแล้วที่จะช่วยให้ธุรกิจของคุณโลดแล่นบนโลกออนไลน์อย่างมีประสิทธิภาพ')
        });

    });
    $(document).ready(function() {
        document.getElementById('videoId').play();
    });
</script> -->

<script src="<?php  echo base_url('resources/front_end/js/script_about.js'); ?>" type="text/javascript"></script>

