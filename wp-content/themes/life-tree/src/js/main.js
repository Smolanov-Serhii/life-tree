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

    if ($('#popup').length > 0){
        setTimeout(function(){
            $('.popup').toggleClass('hide');
            $('body').addClass('locked');
        }, 2000);
        $( ".popup__close" ).click(function() {
            $('.popup').addClass('hide');
            $('body').removeClass('locked');
        });
        jQuery(function($){
            $(document).mouseup(function (e){ // событие клика по веб-документу
                var div = $(".popup__wrapper"); // тут указываем ID элемента
                if (!div.is(e.target) // если клик был не по нашему блоку
                    && div.has(e.target).length === 0) { // и не по его дочерним элементам
                    $('.popup').addClass('hide');
                    $('body').removeClass('locked');
                }
            });
        });
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

    function initMap1(){
        if ($('#map-1').length) {
            var mapcoord1 = $('#map-1').data('latitude1');
            var mapcoord2 = $('#map-1').data('latitude2');
            var map = L.map('map-1').setView([mapcoord1, mapcoord2], 13);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            L.marker([mapcoord1, mapcoord2]).addTo(map)
            // .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
            // .openPopup();
        }

    }

    function initMap2(){
        if ($('#map-2').length) {
            var mapcoord1 = $('#map-2').data('latitude1');
            var mapcoord2 = $('#map-2').data('latitude2');
            var map = L.map('map-2').setView([mapcoord1, mapcoord2], 13);
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            L.marker([mapcoord1, mapcoord2]).addTo(map)
            // .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
            // .openPopup();
        }

    }
    function initMap3(){
        if ($('#map-3').length) {
            var mapcoord1 = $('#map-3').data('latitude1');
            var mapcoord2 = $('#map-3').data('latitude2');
            var map = L.map('map-3').setView([mapcoord1, mapcoord2], 13);
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            L.marker([mapcoord1, mapcoord2]).addTo(map)
            // .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
            // .openPopup();
        }

    }
    initMap1();
    initMap2();
    initMap3();
});
