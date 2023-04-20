const imgs = document.querySelectorAll(".img-select a");
const imgBtns = [...imgs];
let imgId = 1;
// slide product
imgBtns.forEach((item) => {
  item.addEventListener("click", (event) => {
    event.preventDefault();
    imgId = item.dataset.id;
    slideImg();
  });
});
function slideImg() {
  const displayWidth = document.querySelector(
    ".img-showcase img:first-child"
  ).clientWidth;
  console.log(displayWidth);
  document.querySelector(".img-showcase").style.transform = `translateX(${
    -(imgId - 1) * displayWidth
  }px)`;
}
window.addEventListener("resize", slideImg);
imgBtns.forEach((item) => {
  item.addEventListener("dr", (event) => {
    event.preventDefault();
    imgId = item.dataset.id;
    slideImg();
  });
});

// slide swiper
var swiper = new Swiper(".mySwiper", {
  direction: "horizontal",
  loop: true,
  slidesPerView: 3,
  autoplay: {
    delay: 5000,
  },
  breakpoints: {
    500: {
      slidesPerView: 1,
      spaceBetween: 30,
    },
    320:{
      slidesPerView: 2,
      spaceBetween: 30,
    },
    640: {
      slidesPerView: 3,
      spaceBetween: 40,
    },
    1300: {
      slidesPerView: 4,
      spaceBetween: 40,
    },
  },
});



