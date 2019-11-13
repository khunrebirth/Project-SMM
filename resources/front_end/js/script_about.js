
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
        $('.test').fadeTo('ease', 0.3, function() {
            $(this).css('background-image', 'url('+window.base_url+'resources/front_end/images/about/about-smm1.jpg');
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
