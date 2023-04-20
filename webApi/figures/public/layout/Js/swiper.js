const swiper1 = new Swiper('.swiperRate', {

    direction: 'horizontal',
    loop: true,
    slidesPerView: 3,

    autoplay: {
      delay: 5000,
    },
    pagination: {
      el: '.pagination1',
    },

    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      50: {
        slidesPerView: 1,
        spaceBetween: 20
      },
    // when window width is >= 480px
    480: {
      slidesPerView: 1,
      spaceBetween: 30
    },
    // when window width is >= 640px
    640: {
      slidesPerView: 3,
      spaceBetween: 40
    },
    1300: {
        slidesPerView: 4,
        spaceBetween: 40
      }
  }
  // scrollbar: {
  //   el: '.swiper-scrollbar',
  // },
});

const swiperProduct = new Swiper(".mySwiper-product", {
  loop: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  autoplay: {
    delay: 5000,
  }
});

