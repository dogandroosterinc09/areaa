// for image background
$('.image-background').each(function () {
    var getImageSrc = $(this).find('img').attr('src');
    var getImageErrorSrc = $(this).find('img').attr('onerror');
    if (typeof(getImageErrorSrc) != 'undefined') {
        getImageErrorSrc = getImageErrorSrc.slice(10);
        getImageErrorSrc = getImageErrorSrc.slice(0, -1);
    } else {
        getImageErrorSrc = getImageSrc;
    }
    $(this).css({
        'background-size': 'cover',
        'background-repeat': 'no-repeat',
        'background-position': 'center',
        'background-image': 'url("' + getImageSrc + '"), url("' + getImageErrorSrc + '")'
    });
});


// for header class sticky
jQuery(window).scroll(function () {
    var scroll = jQuery(window).scrollTop();
    if (scroll >= 100) {
        jQuery("header").addClass("scrolling");
    } else {
        jQuery("header").removeClass("scrolling");
    }

});


// for contact us
$("ul.form-box .form-group input").focus(function () {
    $(this).parent().addClass('active');

}).blur(function () {
    $(this).parent().removeClass('active');
})

$("ul.form-box .form-group textarea").focus(function () {
    $(this).parent().addClass('active');

}).blur(function () {
    $(this).parent().removeClass('active');
})


// for mobile
// "/* MOBILE HEADER */
$('.mob-burger-menu').click(function () {
    $(this).toggleClass('change');
    $('.mob-nav-menu').toggleClass('open-menu');
    $('.sub-elem').removeClass('show-sub');
});

$('.drop-menu-elem').click(function (e) {
    e.preventDefault();
    $('.sub-elem').toggleClass('show-sub');
});

$('.back-btn').click(function () {
    $('.mob-sub-menu').removeClass('show-sub');
});

$('.btn--close-menu').click(function () {
    $('.mob-nav-menu').removeClass('open-menu');
    $('.mob-burger-menu').removeClass('change');
    $('.mob-sub-menu').removeClass('show-sub');
});

$(document).click(function (e) {
    if (!$(e.target).closest('.mobile-header__wrapper').length) {
        $('.mob-nav-menu').removeClass('open-menu');
        $('.mob-burger-menu').removeClass('change');
        $('.mob-sub-menu').removeClass('show-sub');
    }
});

// MObile menu sub
$(".icon-button__open").click(function () {
    $('.icon-button-active').removeClass('icon-button-active');
    $(this).parent().addClass('icon-button-active');
});

$(".icon-button__close").click(function () {
    $('.icon-button-active').removeClass('icon-button-active');
});


// for footer class
jQuery(window).scroll(function () {
    var scroll = jQuery(window).scrollTop();

    if (scroll >= 300) {
        jQuery(".btn--backbutton").addClass("scrolling");
    } else {
        jQuery(".btn--backbutton").removeClass("scrolling");
    }

});


// smooth scroll
$(document).on('click', 'a[href^="#"]', function (event) {
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 500);
});


// activate search box
$(".search-now").click(function () {
    $(".search-box").toggleClass('search-visible');
    setTimeout(function () {
        var sValue = $('[name="keyword"]').val();
        $('[name="keyword"]').focus().val('').val(sValue);
    }, 100);
});

$(".search-box__button").click(function () {
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
$(".siderbar-toggle-btn").click(function () {
    $(".sidebar").toggleClass('sidebar--toggle');
});


//  Configure/customize these variables.
var showChar = 220; // How many characters are shown by default
var ellipsestext = "...";
var moretext = "Read more";
var lesstext = "Readmore less";

$('.more').each(function () {
    var content = $(this).html();

    if (content.length > showChar) {

        var c = content.substr(0, showChar);
        var h = content.substr(showChar, content.length - showChar);

        var html = c + '<span class="moreellipses">' + ellipsestext + '&nbsp;</span><span class="morecontent"><span>' + h + '</span><a href="" class="morelink">' + moretext + '</a></span>';

        $(this).html(html);
    }

});

$(".morelink").click(function () {
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