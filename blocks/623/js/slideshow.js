// JavaScript Document
var flag = 0;
$(function() {
    $(window).scroll(function() {
        if ($(this).scrollTop() > -1 && flag == 0) {
            document.getElementById("slide1").style.transform = "scale(1)";
            document.getElementById("slide1").style.transition = "all 12s";
            flag++;
        }
    });
}); 

//----SlideShow
var a = 0;
$(function() {
    setInterval(function(){
        $('#img').removeClass('active-img');
        a++;
        if (a == 1)
        {
            $('#img2').addClass('active-img');
            $('#img1').removeClass('active-img');
            $('#img3').removeClass('active-img');
            document.getElementById("slide2").style.transform = "scale(1)";
            document.getElementById("slide1").style.transform = "scale(1.2)";
            document.getElementById("slide2").style.transition = "all 12s";
        }
         if (a == 2)
        {
            $('#img3').addClass('active-img');
            $('#img1').removeClass('active-img');
            $('#img2').removeClass('active-img');
            document.getElementById("slide3").style.transform = "scale(1)";
            document.getElementById("slide2").style.transform = "scale(1.2)";
            document.getElementById("slide3").style.transition = "all 12s";
        }
         if (a == 3)
        {
            $('#img1').addClass('active-img');
            $('#img2').removeClass('active-img');
            $('#img3').removeClass('active-img');
            document.getElementById("slide1").style.transform = "scale(1)";
            document.getElementById("slide3").style.transform = "scale(1.2)";
            document.getElementById("slide1").style.transition = "all 12s";
            a = 0;
        }
    }, 8000);
}); //----SlideShow

