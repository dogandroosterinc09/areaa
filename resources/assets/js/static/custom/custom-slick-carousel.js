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
    fade: true,
    asNavFor: '.banner__thumb-slide'
});
$('.banner__thumb-slide').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
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
    arrows: true
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
    arrows: true
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
    arrows: false
});




$('.slider-mask__slick').slick({
    dots: true,
    infinite: true,
    speed: 800,
    slidesToShow: 1,
    autoplay: true,
    autoplaySpeed: 5000,
    cssEase: 'linear',
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