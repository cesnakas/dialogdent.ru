var sliderSwiper = new Swiper('.swiper-slider', {
  // cssMode: true,
  autoplay: {
    delay: 4500,
    disableOnInteraction: false,
  },
  navigation: {
    prevEl: '.swiper-button-prev',
    nextEl: '.swiper-button-next',
  },
  pagination: {
    el: '.swiper-pagination',
  },
  mousewheel: false,
  keyboard: true,
});