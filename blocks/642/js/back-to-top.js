jQuery(document).ready(function($){
	// browser window scroll (in pixels) after which the "back to top" link is shown
	var offset = 300,
		//browser window scroll (in pixels) after which the "back to top" link opacity is reduced
		offset_opacity = 1200,
		//duration of the top scrolling animation (in ms)
		scroll_top_duration = 700,
		//grab the "back to top" link
		$back_to_top = $('.cd-top');

	//hide or show the "back to top" link
	$(window).scroll(function(){
		( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
		if( $(this).scrollTop() > offset_opacity ) { 
			$back_to_top.addClass('cd-fade-out');
		}
	});

	//smooth scroll to top
	$back_to_top.on('click', function(event){
		event.preventDefault();
		$('body,html').animate({
			scrollTop: 0 ,
		 	}, scroll_top_duration
		);
	});

	var skillsDiv = jQuery('.skillbar').parent();

    if( skillsDiv.length > 0 ) {
        jQuery(window).on('scroll', function () {
            var winT = jQuery(window).scrollTop(),
                winH = jQuery(window).height(),
                skillsT = skillsDiv.offset().top;
            if (winT + winH > skillsT) {
                jQuery('.skillbar').each(function () {
                    jQuery(this).find('.skillbar-bar').animate({
                        width: jQuery(this).attr('data-percent')
                    }, 2000);
                });
            }
        });
    }

    // Counter Function
    jQuery('.counter').counterUp({
        delay: 100,
        time: 1500
    });

    // Partners Carousel
    jQuery('.logo-slides').find('br').remove();
    jQuery('.logo-slides').owlCarousel({
        autoplay: true,
        autoplayTimeout: 3000,
        loop: true,
        margin: 10,
        nav: false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            480: {
                items: 2
            },
            767: {
                items: 3
            },
            991: {
                items: 4
            },
            1199: {
                items: 5
            }
        }
    });

    /* ============= Service Slider ============= */

        if ($('.service-slider').length) {
            $('.service-slider').flexslider({
                animation: "slide",
                controlNav: false,
                directionNav: true,
                touch: true
            });
        }


    // Remove unecessary br tags from counter box short code
        if ($('.row.stats.stats-2').length) {
            $('.row.stats.stats-2').find('br').remove();
        }

    // Make top level menu item clickable
        $('#navbar .dropdown > a').click(function(){
            location.href = this.href;
        });

});