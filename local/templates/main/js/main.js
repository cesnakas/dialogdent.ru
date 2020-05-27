var sliderSwiper = new Swiper('.swiper-slider', {
  
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
    clickable: true,
    // type: 'progressbar',
  },
  mousewheel: false,
  keyboard: true,
});