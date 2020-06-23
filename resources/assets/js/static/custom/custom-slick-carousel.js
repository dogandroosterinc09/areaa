$('.banner__slick').slick({
    dots: false,
    infinite: true,
    speed: 800,
    slidesToShow: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    fade: true,
    cssEase: 'linear',
    arrows: false
});


$('.banner__image-slide').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 6000,
    fade: true,
    asNavFor: '.banner__thumb-slide'
});
$('.banner__thumb-slide').slick({
    // slidesToShow: 3,
    // slidesToScroll: 1,
    vertical: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    verticalSwiping: false,
    asNavFor: '.banner__image-slide',
    dots: false,
    focusOnSelect: true
});


$('.events-camp-slider').slick({
    dots: true,
    infinite: true,
    speed: 800,
    slidesToShow: 4,
    autoplay: true,
    autoplaySpeed: 5000,
    cssEase: 'linear',
    arrows: true,
    // nextArrow: "<i class=\"category-slider__slick--next\"></i>",
    // prevArrow: "<i class=\"category-slider__slick--prev\"></i>",
    nextArrow: "<i class=\"events-camp-slider--next\"></i>",
    prevArrow: "<i class=\"events-camp-slider--prev\"></i>",
    appendDots: $(".slide-m-dots-two"),
    prevArrow: $(".slide-m-prev-two"),
    nextArrow: $(".slide-m-next-two"),
    responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
});






// $('.global-featured-slider__top--slick').slick({
//     lazyLoad: 'ondemand',
//     slidesToShow: 1,
//     slidesToScroll: 1,
//     arrows: false,
//     fade: true,
//     asNavFor: '.global-featured-slider__bottom--slick'
// });


// $('.global-featured-slider__bottom--slick').slick({
//     lazyLoad: 'ondemand',
//     slidesToShow: 3,
//     slidesToScroll: 1,
//     asNavFor: '.global-featured-slider__top--slick',
//     dots: false,
//     centerMode: true,
//     arrows: true,
//     nextArrow: "<div class=\"nextIcon\" style=\"z-index: 9999999;\"><i class=\"featured-properties__icon--next\"></i></div>",
//     prevArrow: "<div class=\"prevIcon\" style=\"z-index: 9999999;\"><i class=\"featured-properties__icon--prev\"></i></div>",
//     // fade: true,
//     focusOnSelect: true
// });



// $('.feat-members-slider').slick({
//     dots: true,
//     infinite: true,
//     speed: 800,
//     slidesToShow: 5,
//     autoplay: true,
//     autoplaySpeed: 5000,
//     cssEase: 'linear',
//     arrows: true
// });


$('.feat-members-slider').slick({
    dots: true,
    infinite: true,
    speed: 800,
    slidesToShow: 5,
    autoplay: true,
    autoplaySpeed: 5000,
    cssEase: 'linear',
    arrows: true,
    nextArrow: "<i class=\"feat-members-slider--next\"></i>",
    prevArrow: "<i class=\"feat-members-slider--prev\"></i>",
    appendDots: $(".feat-members-slider__slide-m-dots-two"),
    prevArrow: $(".feat-members-slider__slide-m-prev-two"),
    nextArrow: $(".feat-members-slider__slide-m-next-two"),
    responsive: [{
            breakpoint: 1100,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 1000,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
});



$('.insta-gram__slide').slick({
    dots: false,
    infinite: true,
    speed: 800,
    slidesToShow: 6,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 5000,
    cssEase: 'linear',
    arrows: true
});

$('.sponsor-logo__slide').slick({
    dots: false,
    infinite: true,
    speed: 800,
    slidesToShow: 5,
    autoplay: true,
    autoplaySpeed: 5000,
    cssEase: 'linear',
    arrows: false,
    responsive: [{
            breakpoint: 1100,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 1000,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
});




$('.slider-mask__slick').slick({
    dots: true,
    infinite: true,
    speed: 800,
    slidesToShow: 1,
    autoplay: true,
    autoplaySpeed: 5000,
    cssEase: 'linear',
    fade: true,
    arrows: true
});



$('.big-advertisement__slick').slick({
    dots: true,
    infinite: true,
    speed: 800,
    slidesToShow: 1,
    autoplay: true,
    autoplaySpeed: 5000,
    cssEase: 'linear',
    arrows: true,
    fade: true,
    cssEase: 'linear',
});



$('.small-advertisement__slick').slick({
    dots: true,
    infinite: true,
    speed: 800,
    slidesToShow: 1,
    autoplay: true,
    autoplaySpeed: 5000,
    cssEase: 'linear',
    arrows: false,
    fade: true,
    cssEase: 'linear',
});