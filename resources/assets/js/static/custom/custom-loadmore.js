$(document).ready(function() {
    $(".moreBox").slice(0, 13).show(); // if 0,3 show 2 rows and load more on 3rd row
    if ($(".moreBox__item:hidden").length != 0) {
        $("#loadMore").show();
    }
    $("#loadMore").on('click', function(e) {
        e.preventDefault();
        $(".moreBox:hidden").slice(0, 100).slideDown(); // if 0,2 on click show next 2
        if ($(".moreBox:hidden").length == 0) {
            $("#loadMore").fadeOut('slow');
        }
    });
});


$(document).ready(function() {
    $(".moreWebinar").slice(0, 7).show();
    if ($(".moreWebinar__item:hidden").length != 0) {
        $("#loadMore").show();
    }
    $("#loadMore").on('click', function(e) {
        e.preventDefault();
        $(".moreWebinar:hidden").slice(0, 6).slideDown();
        if ($(".moreWebinar:hidden").length == 0) {
            $("#loadMore").fadeOut('slow');
        }
    });
});



$(document).ready(function() {
    $(".morePhoto").slice(0, 7).show();
    if ($(".morePhoto__item:hidden").length != 0) {
        $("#loadMore").show();
    }
    $("#loadMore").on('click', function(e) {
        e.preventDefault();
        $(".morePhoto:hidden").slice(0, 6).slideDown();
        if ($(".morePhoto:hidden").length == 0) {
            $("#loadMore").fadeOut('slow');
        }
    });
});