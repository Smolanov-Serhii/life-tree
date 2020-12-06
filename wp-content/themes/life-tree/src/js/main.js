$(document).ready(function() {
    if ($('.main-slider__container').length > 0){
        var mainslider = new Swiper('.main-slider__container', {
            fadeEffect: { crossFade: true },
            virtualTranslate: true,
            effect: "fade",
            navigation: {
                nextEl: '.main-slider__next',
                prevEl: '.main-slider__prev',
            },
            watchOverflow: true,
            slidesPerView: 1,
        })
    }
});
