document.addEventListener("DOMContentLoaded", () => {
  const rangeInput = document.getElementById("rangeInput");
  const amountDisplay = document.getElementById("amountDisplay");
  const monthResult = document.getElementById("monthResult");
  const yearResult = document.getElementById("yearResult");

  function formatRub(n) {
    return "₽ " + n.toLocaleString("ru-RU");
  }

  function updateCalc() {
    const base = parseInt(rangeInput.value);
    const monthProfit = Math.round(base * 1.25);
    const yearProfit = Math.round(base * 14.55);

    amountDisplay.textContent = formatRub(base);
    monthResult.textContent = formatRub(monthProfit);
    yearResult.textContent = formatRub(yearProfit);
  }

  function updateProgressBar() {
    const val =
      ((rangeInput.value - rangeInput.min) /
        (rangeInput.max - rangeInput.min)) *
      100;
    rangeInput.style.setProperty("--progress", val + "%");
  }

  rangeInput.addEventListener("input", () => {
    updateCalc();
    updateProgressBar();
  });

  updateProgressBar();

  rangeInput.addEventListener("input", updateCalc);
  updateCalc();
});
