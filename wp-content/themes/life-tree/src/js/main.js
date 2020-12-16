$(document).ready(function() {
    if ($('.main-slider__container').length > 0){
        var mainslider = new Swiper('.main-slider__container', {
            fadeEffect: { crossFade: true },
            virtualTranslate: true,
            // loop: true,
            effect: "fade",
            navigation: {
                nextEl: '.main-slider__next',
                prevEl: '.main-slider__prev',
            },
            watchOverflow: true,
            slidesPerView: 1,
        })
    }

    if ($('.main-special').length > 0){
        var mainslider = new Swiper('.main-special__slider', {
            // loop: true,
            navigation: {
                nextEl: '.main-special__next',
                prevEl: '.main-special__prev',
            },
            watchOverflow: true,
            spaceBetween: 70,
            slidesPerView: 1,
        })
    }


    if ($('.main-about__slider').length > 0){
        var mainslider = new Swiper('.main-about__slider', {
            navigation: {
                nextEl: '.main-about__next',
                prevEl: '.main-about__prev',
            },
            watchOverflow: true,
            spaceBetween: 20,
            slidesPerView: 3.2,
            breakpoints: {
                600: {
                    slidesPerView: 3.3,
                },
                500: {
                    slidesPerView: 2.3,
                },
                300: {
                    slidesPerView: 1.2,
                    spaceBetween: 25,
                },

            },
        })
    }

    if ($('.main-advantages').length > 0){
        var mainslider = new Swiper('.main-advantages__slider', {
            navigation: {
                nextEl: '.main-advantages__next',
                prevEl: '.main-advantages__prev',
            },
            watchOverflow: true,
            spaceBetween: 20,
            slidesPerView: 2.3,
            breakpoints: {
                600: {
                    slidesPerView: 2.3,
                },
                500: {
                    slidesPerView: 1.3,
                },
                300: {
                    slidesPerView: 1.2,
                    spaceBetween: 25,
                },

            },
        })
    }
});
