document.addEventListener("DOMContentLoaded", () => {
  function setupSlider(sliderId, checkpoints) {
    const slider = document.getElementById(sliderId);
    const min = parseInt(slider.min, 10);
    const max = parseInt(slider.max, 10);
    const percentages = checkpoints.map(
      (value) => ((value - min) / (max - min)) * 100
    );

    function updateSliderBackground(value) {
      const percent = ((value - min) / (max - min)) * 100;
      slider.style.background = `linear-gradient(to right, #50C8EC ${percent}%, #c3c4c4 ${percent}%)`;
    }

    let isDragging = false;

    slider.addEventListener("input", () => {
      isDragging = true;
      updateSliderBackground(slider.value);
    });

    slider.addEventListener("change", () => {
      isDragging = false;
      const currentPercent = ((slider.value - min) / (max - min)) * 100;

      let closestIndex = percentages.reduce(
        (prev, curr, index) =>
          Math.abs(curr - currentPercent) <
          Math.abs(percentages[prev] - currentPercent)
            ? index
            : prev,
        0
      );

      slider.value = checkpoints[closestIndex];
      updateSliderBackground(slider.value);
    });

    updateSliderBackground(slider.value);
  }

  // Main investment slider (10, 20, 30, 40, 50)
  setupSlider("investment-slider", [10, 20, 30, 40, 50]);

  // Additional range slider (10000, 25000, 50000, 75000, 100000)
  setupSlider("range-slider", [10000, 25000, 50000, 75000, 100000]);
});
