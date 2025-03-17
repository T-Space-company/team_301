document.addEventListener("DOMContentLoaded", () => {
  function setupSlider(sliderId, checkpoints) {
    const slider = document.getElementById(sliderId);
    const min = parseInt(slider.min, 10);
    const max = parseInt(slider.max, 10);

    function updateSliderBackground(value) {
      const percent = ((value - min) / (max - min)) * 100;
      slider.style.background = `linear-gradient(to right, #50C8EC ${percent}%, #c3c4c4 ${percent}%)`;
    }

    function snapToClosest(value) {
      return checkpoints.reduce((prev, curr) =>
        Math.abs(curr - value) < Math.abs(prev - value) ? curr : prev
      );
    }

    slider.addEventListener("input", () => {
      updateSliderBackground(slider.value);
    });

    slider.addEventListener("change", () => {
      slider.value = snapToClosest(slider.value);
      updateSliderBackground(slider.value);
    });

    updateSliderBackground(slider.value);
  }

  setupSlider("investment-slider", [10, 20, 30, 40, 50]);
  setupSlider("range-slider", [10000, 25000, 50000, 75000, 100000]);
});
