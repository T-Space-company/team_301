document.addEventListener("DOMContentLoaded", function () {
  function removeSplideClass() {
    if (window.matchMedia("(min-width: 1025px)").matches) {
      document.getElementById("strategy-slider").classList.remove("splide");
      document.getElementById("products-slider").classList.remove("splide");
      document.getElementById("invest-slider").classList.remove("splide");
      document.getElementById("licenses-slider").classList.remove("splide");
    }
  }

  removeSplideClass();

  window.addEventListener("resize", removeSplideClass);

  new Splide("#strategy-slider", {
    type: "loop",
    perPage: 1,
    // gap: "10px",
    autoplay: true,
    interval: 3000,
    arrows: false,
    pagination: false,
  }).mount();

  new Splide("#products-slider", {
    type: "loop",
    perPage: 1,
    gap: "20px",
    autoplay: true,
    interval: 3000,
    arrows: false,
    pagination: false,
  }).mount();

  new Splide("#invest-slider", {
    type: "loop",
    perPage: 1.5,
    gap: "20px",
    autoplay: true,
    interval: 3000,
    arrows: false,
    pagination: false,
  }).mount();

  new Splide("#licenses-slider", {
    type: "loop",
    perPage: 1.5,
    gap: "10px",
    autoplay: true,
    interval: 3000,
    arrows: false,
    pagination: false,
  }).mount();
});
