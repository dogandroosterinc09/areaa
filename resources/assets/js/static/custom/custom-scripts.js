/* Scroll to top functionality */
var topLink = $('#to-top');

$(window).scroll(function() { if ($(this).scrollTop() > 150) { topLink.fadeIn(100); } else { topLink.fadeOut(100); } });
topLink.click(function() { $('html, body').animate({ scrollTop: 0 }, 200); return false; });





// for header class sticky
jQuery(window).scroll(function() {
    var scroll = jQuery(window).scrollTop();
    if (scroll >= 100) {
        jQuery("header").addClass("scrolling");
    } else {
        jQuery("header").removeClass("scrolling");
    }

});


// for contact us
$("ul.form-box .form-group input").focus(function() {
    $(this).parent().addClass('active');

}).blur(function() {
    $(this).parent().removeClass('active');
})

$("ul.form-box .form-group textarea").focus(function() {
    $(this).parent().addClass('active');

}).blur(function() {
    $(this).parent().removeClass('active');
})



// for footer class
jQuery(window).scroll(function() {
    var scroll = jQuery(window).scrollTop();

    if (scroll >= 300) {
        jQuery(".btn--backbutton").addClass("scrolling");
    } else {
        jQuery(".btn--backbutton").removeClass("scrolling");
    }

});


// smooth scroll
// $(document).on('click', 'a[href^="#"]', function(event) {
//     event.preventDefault();

//     $('html, body').animate({
//         scrollTop: $($.attr(this, 'href')).offset().top
//     }, 500);
// });


// activate search box
$(".search-now").click(function() {
    $(".search-box").toggleClass('search-visible');
    setTimeout(function() {
        var sValue = $('[name="keyword"]').val();
        $('[name="keyword"]').focus().val('').val(sValue);
    }, 100);
});

$(".search-box__button").click(function() {
    $(".search-box").toggleClass('search-visible');
});


// basic toggle
// $(".mobile__menu--btn").click(function(){
//     $(".extended-navigation").toggleClass('extended-navigation--show');
// });

// var addclass = 'social-sets--show';
// var $cols = $('.social-sets').click(function(e) {
//     $cols.removeClass(addclass);
//     $(this).addClass(addclass);
// });


/***************************************** */
// for mobile elements
/***************************************** */


// for sidebar
$(".siderbar-toggle-btn").click(function() {
    $(".sidebar").toggleClass('sidebar--toggle');
});


//  Configure/customize these variables.
var showChar = 220; // How many characters are shown by default
var ellipsestext = "...";
var moretext = "Read more";
var lesstext = "Readmore less";

$('.more').each(function() {
    var content = $(this).html();

    if (content.length > showChar) {

        var c = content.substr(0, showChar);
        var h = content.substr(showChar, content.length - showChar);

        var html = c + '<span class="moreellipses">' + ellipsestext + '&nbsp;</span><span class="morecontent"><span>' + h + '</span><a href="" class="morelink">' + moretext + '</a></span>';

        $(this).html(html);
    }

});

$(".morelink").click(function() {
    if ($(this).hasClass("less")) {
        $(this).removeClass("less");
        $(this).html(moretext);
    } else {
        $(this).addClass("less");
        $(this).html(lesstext);
    }
    $(this).parent().prev().toggle();
    $(this).prev().toggle();
    return false;
});

/* Count */
$('.count').each(function() {
    $(this).prop('Counter', 0).animate({
        Counter: $(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function(now) {
            $(this).text(Math.ceil(now));
        }
    });
});

// accordion active 
$(".accordion__item").click(function() {
    $(".accordion__item--active").removeClass("accordion__item--active");
    $(this).toggleClass('accordion__item--active');
});





// Custom steps from tab 
$(".steps-wizard__button #steps-wizard-two").click(function() {
    $(".first-step-visible").removeClass('first-step-visible');
    $(".second-step-visible").removeClass('second-step-visible');
    $(".three-step-visible").removeClass('three-step-visible');
    $(".steps-wizard").addClass('second-step-visible');
    $(".steps-wizard__items--two .btn--tab-one.active").removeClass('active');
    $(".steps-wizard__items--two .btn--tab-three.active").removeClass('active');

    // for the header 
    $(".steps-wizard__header .tab--three").removeClass('active');
    $(".steps-wizard__header .tab--two").addClass('active');
});


$(".steps-wizard__button #steps-wizard-one").click(function() {
    $(".first-step-visible").removeClass('first-step-visible');
    $(".second-step-visible").removeClass('second-step-visible');
    $(".three-step-visible").removeClass('three-step-visible');
    $(".steps-wizard").addClass('first-step-visible');
    $(".steps-wizard__items--one .btn--tab-two.active").removeClass('active');

    // for the header 
    $(".steps-wizard__header .tab--two").removeClass('active');
    $(".steps-wizard__header .tab--three").removeClass('active');
});


$(".steps-wizard__button #steps-wizard-three").click(function() {
    $(".first-step-visible").removeClass('first-step-visible');
    $(".second-step-visible").removeClass('second-step-visible');
    $(".three-step-visible").removeClass('three-step-visible');
    $(".steps-wizard").addClass('third-step-visible');
    $(".steps-wizard__items--three .btn--back.active").removeClass('active');

    // for the header 
    $(".steps-wizard__header .tab--two").addClass('active');
    $(".steps-wizard__header .tab--three").addClass('active');
});



// $(".steps-wizard__button #steps-wizard-one").click(function() {
//     $(".first-step-visible").removeClass('second-step-visible');
//     $(".second-step-visible").removeClass('second-step-visible');
//     $(".three-step-visible").removeClass('three-step-visible');
//     $(".steps-wizard").addClass('first-step-visible');
//     $(".steps-wizard__items--one .btn--tab-two.active").removeClass('active');
// });




// $(".steps-wizard__button #steps-wizard-two").click(function() {
//     $(".first-step-visible").removeClass('second-step-visible');
//     $(".second-step-visible").removeClass('second-step-visible');
//     $(".three-step-visible").removeClass('three-step-visible');
//     $(".steps-wizard").addClass('second-step-visible');
//     $("#steps-wizard-two .btn--tab-three.active").removeClass('active');
//     $(".steps-wizard__items--two .btn--tab-three.active").removeClass('active');
// });

// $(".steps-wizard__button #steps-wizard-three").click(function() {
//     $(".first-step-visible").removeClass('second-step-visible');
//     $(".second-step-visible").removeClass('second-step-visible');
//     $(".three-step-visible").removeClass('three-step-visible');
//     $(".steps-wizard").addClass('three-step-visible');
//     $("#steps-wizard-three .btn--tab-three.active").removeClass('active');
//     $("#steps-wizard-three .btn--back.active").removeClass('active');
//     $(".steps-wizard__items--three .btn--tab-three.active").removeClass('active');
// });



// $(".register__parent #register-tab-two").click(function() {
//     $(".second-three-visible").removeClass('second-three-visible');
//     $(".register__tab").addClass('second-step-visible');
//     $("#register-two .btn--primary.active").removeClass('active');
// });


// $(".register__parent #register-tab-three").click(function() {
//     $(".second-step-visible").removeClass('second-step-visible');
//     $(".register__tab").addClass('second-three-visible');
//     $("#register-three .btn--primary.active").removeClass('active');
// });



$(document).on('click', 'a[href^="#upcoming-envents-owner"]', function(event) {
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top - 300
    }, 500);
});





// $(document).ready(function() {

//     // modal video pause on modal
//     // $('.modal').on('hidden.bs.modal', function() {
//     //     $('.video')[0].pause();
//     // });


//     function playStopVideo() {
//         var youtubeFunc = '';
//         var outerDiv = $("#videoModal");
//         var youtubeIframe = outerDiv.find("iframe")[0].contentWindow;
//         outerDiv.on('hidden.bs.modal', function(e) {
//             youtubeFunc = 'stopVideo';
//             youtubeIframe.postMessage('{"event":"command","func":"' + youtubeFunc + '","args":""}', '*');
//         });
//         outerDiv.on('shown.bs.modal', function(e) {
//             youtubeFunc = 'playVideo';
//             youtubeIframe.postMessage('{"event":"command","func":"' + youtubeFunc + '","args":""}', '*');
//         });
//     }

//     playStopVideo();

// });





// $(document).ready(function() {
//     $('#videoModal').modal({
//         show: false
//     }).on('hidden.bs.modal', function() {
//         $(this).find('video')[0].pause();
//     });
// });

// $(document).ready(function() {
//     $('#videoModal').on('hidden.bs.modal', function() {
//         var $this = $(this).find('iframe'),
//             tempSrc = $this.attr('src');
//         $this.attr('src', "");
//         $this.attr('src', tempSrc);
//     });



// });


// $(function() {
//     $('#videoModal').on('hidden.bs.modal', function(e) {
//         $iframe = $(this).find("iframe");
//         $iframe.attr("src", $iframe.attr("src"));
//     });
// });




$(document).ready(function() {


    /* Get iframe src attribute value i.e. YouTube video url
    and store it in a variable */
    var url = $("#chapter-video").attr('src');
    $("#chapter-video").attr('src', '');

    /* Assign empty url value to the iframe src attribute when
    modal hide, which stop the video playing */
    $("#videoModal").on('hide.bs.modal', function() {
        $("#chapter-video").attr('src', '');
    });

    /* Assign the initially stored url back to the iframe src
    attribute when modal is displayed again */
    $("#videoModal").on('show.bs.modal', function() {
        $("#chapter-video").attr('src', url);
    });
});




// used for events load more 
$(function() {
    $(".events-thumbnail__item").slice(0, 3).show();
    $("#loadMore").on('click', function(e) {
        e.preventDefault();
        $(".events-thumbnail__item:hidden").slice(0, 2).slideDown();
        if ($(".events-thumbnail__item:hidden").length == 0) {
            $("#loadMore").fadeOut('slow');
        }
        $('html,body').animate({
            scrollTop: $(this).offset().top
        }, 300);
    });
});


$(function() {
    // $(".photo-section__item").slice(0, 12).show();
    // $("#loadMore").on('click', function(e) {
    //     e.preventDefault();
    //     $(".photo-section__item:hidden").slice(0, 2).slideDown();
    //     if ($(".photo-section__item:hidden").length == 0) {
    //         $("#loadMore").fadeOut('slow');
    //     }
    //     $('html,body').animate({
    //         scrollTop: $(this).offset().top
    //     }, 300);
    // });


    $(".photo-section__item").slice(0, 5).show();
    if ($(".photo-section__item:hidden").length != 0) {
        $("#loadMore").show();
    }
    $("#loadMore").on('click', function(e) {
        e.preventDefault();
        $(".photo-section__item:hidden").slice(0, 3).slideUp();
        if ($(".photo-section__item:hidden").length == 0) {
            $("#loadMore").fadeOut('slow');
        }
    });

});