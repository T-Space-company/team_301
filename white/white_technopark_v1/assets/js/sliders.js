document.addEventListener("DOMContentLoaded", function () {
  new Splide("#banner-slider", {
    type: "loop",
    autoplay: true,
    interval: 3000,
    perPage: 1,
    pagination: true,
    focus: "center",
    gap: 15,
    arrows: false,
  }).mount();

  new Splide("#circle-slider", {
    type: "slide",
    autoplay: false,
    focus: "left",
    perPage: 8,
    breakpoints: {
      1024: { perPage: 8 },
      768: { perPage: 5 },
      480: { perPage: 4 },
    },
    pagination: false,
    arrows: false,
    gap: "15px",
    drag: "free",
  }).mount();

  new Splide("#hits-slider", {
    type: "slide",
    focus: "left",
    perPage: 4,
    gap: "20px",
    drag: "free",
    pagination: false,
    arrows: false,
    breakpoints: {
      1400: { perPage: 3 },
      1024: { perPage: 2 },
      768: { perPage: 1.5 },
      480: { perPage: 1.5 },
    },
  }).mount();

  new Splide("#banner-slider-2", {
    type: "slide",
    autoplay: false,
    perPage: 2,
    pagination: false,
    focus: "center",
    gap: "20px",
    drag: "free",
    arrows: false,
    breakpoints: {
      1024: { perPage: 1 },
    },
  }).mount();

  new Splide("#new-slider", {
    type: "slide",
    focus: "left",
    perPage: 4,
    gap: "20px",
    drag: "free",
    pagination: false,
    arrows: false,
    breakpoints: {
      1400: { perPage: 3 },
      1024: { perPage: 2 },
      768: { perPage: 1.5 },
      480: { perPage: 1.5 },
    },
  }).mount();
});
