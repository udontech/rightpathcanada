
  /**
   * Testimonials slider
   */
let testimonialSwiper = new Swiper('.testimonials-slider', {
    speed: 1500,
    loop: true,
    autoplay: {
      delay: 2000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
      navigation: {
        nextEl: "#js-next",
        prevEl: "#js-prev"
    },
    // nextButton: '#js-next',
    // prevButton: '#js-prev',
    breakpoints: {
      280: {
        slidesPerView: 1,
        spaceBetween: 20
      },
      992: {
        slidesPerView: 2,
        spaceBetween: 20
      },
      1200: {
        slidesPerView: 3,
        spaceBetween: 20
      },
      1500: {
        slidesPerView: 4,
        spaceBetween: 20
      }
    }
})

let heroSwiper = new Swiper(".hero-swiper", {
    speed: 1000,
    loop: true,
    // effect: 'fade',
    autoplay: {
        delay: 7000,
        disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
        el: 'swiper-pagination',
        type: 'bullets',
        clickable: true
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
    },
})
