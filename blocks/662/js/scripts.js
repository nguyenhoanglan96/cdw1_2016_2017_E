///////////////////////////////////////////////////Carousel Auto-Cycle
$(document).ready(function () {
    $('.carousel').carousel({
        interval: 6000
    })
});


///////////////////////////////////////////////Recommended Shoes  
$(document).ready(function () {
    $('#media').carousel({
        pause: true,
        interval: false,
    });
});



//////////////////////////////////////////////Recommended Bags
$(document).ready(function () {
    $('#myCarousel').carousel({
        interval: 10000
    })
    $('.fdi-Carousel .item').each(function () {
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));

        if (next.next().length > 0) {
            next.next().children(':first-child').clone().appendTo($(this));
        } else {
            $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
        }
    });
});



//////////////////////////////////////////////New In Store
jQuery(document).ready(function () {



    jQuery('.carousel[data-type="multi"] .item').each(function () {

        var next = jQuery(this).next();

        if (!next.length) {

            next = jQuery(this).siblings(':first');

        }

        next.children(':first-child').clone().appendTo(jQuery(this));



        for (var i = 0; i < 2; i++) {

            next = next.next();

            if (!next.length) {

                next = jQuery(this).siblings(':first');

            }

            next.children(':first-child').clone().appendTo($(this));

        }

    });
});



///////////////////////////////////////////////Our Brands
$(document).ready(function () {
    $('#Carousel').carousel({
        interval: 5000
    })
});



