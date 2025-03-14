document.addEventListener("DOMContentLoaded", () => {
  const slider = document.getElementById("range-slider");
  const checkpoints = [10000, 25000, 50000, 75000, 100000];

  slider.addEventListener("input", () => {
    let closest = checkpoints.reduce((prev, curr) =>
      Math.abs(curr - slider.value) < Math.abs(prev - slider.value)
        ? curr
        : prev
    );
    slider.value = closest;
  });
});
