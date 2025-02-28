document.addEventListener("DOMContentLoaded", () => {
  let sliderWrappers = document.querySelectorAll(".slider-wrapper");

  sliderWrappers.forEach((sliderWrapper) => {
    const sliderInput = sliderWrapper.querySelector(".slider-input");
    const thumb = document.querySelector(".slider-thumb");
    const outcomeValue = document.querySelector("#outcomeValue");

    const minValue = +sliderInput.min || 8;
    const maxValue = +sliderInput.max || 100;

    const updateSlider = () => {
      sliderWrapper.style.setProperty(
        "--slider-value",
        (100 * +sliderInput.value) / (maxValue - minValue)
      );
      thumb.innerText = `₺${sliderInput.value * 1000}`;
      outcomeValue.innerText = Math.round(sliderInput.value * 1000 * 3.51);
    };

    sliderInput.addEventListener("input", () => {
      updateSlider();
    });

    updateSlider();
  });
});
