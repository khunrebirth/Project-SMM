<!-- Title -->
<!--<section class="page-title" style="background-image:url(http://localhost/social.co.th/resources/front-end/images/slider-1.jpg)">-->
<!--    <div class="container my-auto text-center wow fadeInUp">-->
<!--        <h1>About Page</h1>-->
<!--    </div>-->
<!--</section>-->

<style>
    .test {
        overflow: hidden;
        padding: 0;
        margin: 0;
        transition: all 1s ease;
        height: 340px;
    }

    .test {
        background: url('http://extrawall.net/images/wallpapers/378_1920x1080_abstract_city.jpg') no-repeat fixed center;
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
        width: 3000px;
        height: 50px;
        background: rgba(0, 0, 0, 0.5);
        border-top: 1px solid #fff;
        padding-left: 80px;
    }

    .date {
        color: #fff;
        float: left;
        width: 250px;
        height: 50px;
        /*padding-left: 80px;*/
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
</style>

<!-- About -->
<section id="about" style="padding-top: 160px; padding-bottom: 160px;">
    <div class="container">
        <div class="row">
            <div class="col-md-5 offset-md-5 pl-md-5 pl-sm-5 pl-xs-0 text-center text-sm-left">
                <div class="title-about" style="">
                    <img src="<?php base_url() ?>resources/front-end/images/img-/title-about.png" alt="" class="img-fluid">
                </div>
            </div>

            <div class="col-md-5 col-lg-5 text-right pr-3 pr-xs-0 text-center text-sm-right">
                <h2 class="about__title--head mt-md-0 mt-4"><span>S</span>ocial Media Master</h2>
                <p class="lead about__split--title--body mt-4 mb-4">
                    เราคือเอเจนซี่ออนไลน์ที่มีประสบการณ์ในสายงานดิจิทัลพร้อมด้วยบริการการตลาดที่หลากหลายอย่างครบวงจรกว่า
                    4 ล้านแฟนเพจที่เราดูแล กว่า 300 ล้าน impression ที่เราสร้าง ผู้เทนด์ โซเซียลมีเดีย
                    ในประเทศไทย..
                </p>
            </div>
            <div class="col-xs-12 col-md-7 col-lg-7 pl-md-5 text-center text-sm-left">
                <p class="lead about__split--title--body mt-4 mb-4">
                    <strong style="line-height: 2.5;">เป้าหมายของเรา</strong> <br>
                    เรามีความมุ่งมั่นที่จะวางแผนการตลาดออนไลน์ที่ดีที่สุดเพื่อให้ลูกค้าของเราบรรลุวัตถุประสงค์ที่ตั้งไว้  ด้วยการวางกลยุทธ์ที่ผ่านการคิดวิเคราะห์หากลุ่มลูกค้าที่ตรงจุดกับธุรกิจของคุณ
                    <br><br>
                    นอกจากจากวางแผนการตลาดออนไลน์แล้วเรายังทำงานร่วมกันกับลูกค้าเพื่อให้คำแนะนำและปรึกษาใน การวางแนวทางสื่ออนไลน์ให้ได้ผลลัพธ์ที่คุ้มค่าที่สุดอีกด้วย
                </p>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-12 test">
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
                                <h1 id="test">{{goal_title}}</h1>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.4/TweenMax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.5/angular.min.js"></script>
<script>
    var app = angular.module('app', []);

    app.controller('HomeController', function($scope) {

        $scope.goal_title = "Investing in real estate";

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
                $(this).css('background-image', 'url(http://extrawall.net/images/wallpapers/378_1920x1080_abstract_city.jpg)');
            }).fadeTo('slow', 1);
            $("#test").html('test 1')
        });

        $('.goal_retirement').click(function(){
            console.log('goal click');
            $('.test').fadeTo('ease', 0.3, function() {
                $(this).css('background-image', 'url(https://wallpaperscraft.com/image/tropics_sea_palm_trees_vacation_84858_2412x1810.jpg)');
            }).fadeTo('slow', 1);
            $("#test").html('test 2')
        });

        $('.goal_involve').click(function(){
            console.log('goal click');
            $('.test').fadeTo('ease', 0.3, function() {
                $(this).css('background-image', 'url(http://www.churchmilitant.com/images/uploads/2015-06-12-niles-x.jpg)');
            }).fadeTo('slow', 1);
            $("#test").html('test 3')
        });


        $('.goal_2017').click(function(){
            console.log('goal click');
            $('.test').fadeTo('ease', 0.3, function() {
                $(this).css('background-image', 'url(http://extrawall.net/images/wallpapers/378_1920x1080_abstract_city.jpg)');
            }).fadeTo('slow', 1);
            $("#test").html('test 4')
        });

        $('.goal_2019').click(function(){
            console.log('goal click');
            $('.test').fadeTo('ease', 0.3, function() {
                $(this).css('background-image', 'url(http://www.churchmilitant.com/images/uploads/2015-06-12-niles-x.jpg)');
            }).fadeTo('slow', 1);
            $("#test").html('test 5')
        });
    });
</script>