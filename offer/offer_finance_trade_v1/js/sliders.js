document.addEventListener("DOMContentLoaded", function () {
  function removeSplideClass() {
    if (window.matchMedia("(min-width: 1025px)").matches) {
      document.getElementById("benefits-slider").classList.remove("splide");
      document.getElementById("why-us-slider").classList.remove("splide");
    }
  }

  removeSplideClass();

  new Splide("#why-us-slider", {
    type: "loop",
    perPage: 1,
    autoplay: true,
    interval: 3000,
    arrows: true,
    pagination: false,
  }).mount();

  new Splide("#benefits-slider", {
    type: "loop",
    perPage: 1,
    autoplay: true,
    interval: 3000,
    arrows: false,
    pagination: false,
    gap: 20,
  }).mount();
});
