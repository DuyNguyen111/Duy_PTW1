$(document).ready(function () {
    var galleryThumbs = new Swiper('.gallery-thumbs', {
        spaceBetween: 10,
        slidesPerView: 5,
        
    });
    var galleryTop = new Swiper('.gallery-top', {
        effect: 'fade',
        spaceBetween: 10,
        navigation: {
        nextEl: '.swiper-next',
        prevEl: '.swiper-prev',
        },
        autoplay: {
            delay: 5000,
            disableOnInteraction: true
        },
        thumbs: {
            swiper: galleryThumbs,
        },
    });
    galleryTop.on('slideChange', function () {
        $('.line-di').css('width', '0px');
        setTimeout(function() {
            $('.line-di').css('width', '500px');
        }, 500);
        
    });
    setTimeout(function() {
        $('.line-di').css('width', '500px');
    }, 500);
});