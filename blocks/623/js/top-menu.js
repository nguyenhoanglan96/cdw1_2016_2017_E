//----Sroll to top
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

// Button Search
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
     $('.reponsive-menu').click(function(){
        document.getElementById("reponsive-menu").style.right = '0%';
     })
});

// Reponsive Menu
var t = 0;
$(function() {
     $('.reponsive-menu').click(function(){
        if (t == 0)
        {
            $('#reponsive-menu').addClass('reponsive-menu-active');
            document.getElementById("full-show").style.display = 'block';
            t++;
        }else{
             $('#reponsive-menu').removeClass('reponsive-menu-active');
             document.getElementById("reponsive-menu").style.right = '100%';
            t = 0;
        }
     })
     $('.full-show').click(function(){
        $('#reponsive-menu').removeClass('reponsive-menu-active');
        document.getElementById("reponsive-menu").style.right = '100%';
        document.getElementById("full-show").style.display = 'none';
        t = 0;
     })
});

//Top-Menu
$(function() {
    $(".sub-current").hover(function(){
        $(this).addClass('active');
        if ($('.sub-current ul').hasClass('active-1'))
            {
                $('ul').removeClass('active-1');
            }
            $('.active ul').addClass('active-1');
            $(this).removeClass('active');
        }, function(){
            setTimeout(function(){
                $('.sub-current ul').removeClass('active-1');
            }, 70000);
    });
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
  
});


   


