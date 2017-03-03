// JavaScript Document

//----Sroll to top
var flag = 0;
$(function() {
    $(window).scroll(function() {
        if ($(this).scrollTop() > -1 && flag == 0) {
            document.getElementById("img11").style.transform = "scale(1)";
            document.getElementById("img11").style.transition = "all 12s";
            flag++;
        }
        if ($(this).scrollTop() > 0) {
            
            $('.bttop').fadeIn();  
        } else {
            $('.bttop').fadeOut();
        }
    });
    
    $('.bttop').click(function() {
        $('body,html').animate({
            scrollTop: 0
        }, 800);
    });
}); //----Sroll to top


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
            document.getElementById("img22").style.transform = "scale(1)";
            document.getElementById("img11").style.transform = "scale(1.2)";
            document.getElementById("img22").style.transition = "all 12s";
        }
         if (a == 2)
        {
            $('#img3').addClass('active-img');
            $('#img1').removeClass('active-img');
            $('#img2').removeClass('active-img');
            document.getElementById("img33").style.transform = "scale(1)";
            document.getElementById("img22").style.transform = "scale(1.2)";
            document.getElementById("img33").style.transition = "all 12s";
        }
         if (a == 3)
        {
            $('#img1').addClass('active-img');
            $('#img2').removeClass('active-img');
            $('#img3').removeClass('active-img');
            document.getElementById("img11").style.transform = "scale(1)";
            document.getElementById("img33").style.transform = "scale(1.2)";
            document.getElementById("img11").style.transition = "all 12s";
            a = 0;
        }
    }, 8000);
}); //----SlideShow

// Top-Menu
var b = 0;
$(function() {
     $('.button').click(function(){
         if (b == 0)
         {
             $('.input-text').addClass('input-text-active');
             $('.button').addClass('button-active');
             b++;
         }
         else
         {
            $('.input-text').removeClass('input-text-active');
            $('.button').removeClass('button-active');
            b = 0; 
         }
    })
});

//Top-Menu_fixed

$(function() {
    $(window).scroll(function() {
        if ($(this).scrollTop() > 121) {
             document.getElementById("top_panel_middle").style.position = 'fixed';
             document.getElementById("top_panel_middle").style.top = '0';
             $('#top_panel_middle').addClass('box');
        } else {
            document.getElementById("top_panel_middle").style.position = 'static';
            $('#top_panel_middle').removeClass('box');
        }
    });
  
}); //Top-Menu-fixed


   


