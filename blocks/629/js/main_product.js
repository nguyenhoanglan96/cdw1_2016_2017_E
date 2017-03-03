// JavaScript Document

//----Sroll to top
var flag = 0;
$(function() {
    $(window).scroll(function() {
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

// Top-Menu
var b = 0;
$(function() {
     $('.form-search').click(function(){
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


   


