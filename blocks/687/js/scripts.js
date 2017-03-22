// Filter by Price //
$(function () {
    $("#slider-range").slider({
        range: true,
        min: 9,
        max: 1842,
        values: [9, 1842],
        slide: function (event, ui) {
            $("#amount").val("$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ]);
        }
    });
    $("#amount").val("$" + $("#slider-range").slider("values", 0) +
            " - $" + $("#slider-range").slider("values", 1));
});
    