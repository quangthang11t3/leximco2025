var swiper = new Swiper('.swiper-container', {
    loop: true,
    speed: 2000,
    effect: 'fade',
    //fadeEffect: {
    //	crossFade: true
    //},
    spaceBetween: 0,
    centeredSlides: true,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    //	//stopOnLastSlide: true,
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});