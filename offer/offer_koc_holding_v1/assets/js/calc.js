document.addEventListener("DOMContentLoaded", () => {
  const investmentSlider = document.getElementById("investment-slider");
  const rangeSlider = document.getElementById("range-slider");
  const profitDisplay = document.getElementById("profit-display");
  const sumDisplay = document.getElementById("sum-display");
  const sumLabel = document.querySelector(".label-num.sum");
  const dateLabel = document.querySelector(".label-num.date");

  const dayMultipliers = {
    1: 2.2,
    2: 2.64,
    3: 3.17,
    4: 3.8,
    5: 4.56,
    6: 5.47,
    7: 6.56,
    8: 7.87,
    9: 9.44,
    10: 11.33,
    11: 13.59,
    12: 16.31,
  };

  function formatNumberWithSpaces(number) {
    const rounded = Math.round(number);
    return rounded.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
  }

  function calculateProfit() {
    const investmentValue = parseInt(rangeSlider.value, 10);
    const daysValue = parseInt(investmentSlider.value, 10);
    const multiplier = dayMultipliers[daysValue] || 2.2;

    const profit = investmentValue * multiplier;
    profitDisplay.textContent = formatNumberWithSpaces(profit) + "₺";
    sumDisplay.textContent = formatNumberWithSpaces(investmentValue) + "₺";
    sumLabel.textContent = formatNumberWithSpaces(investmentValue) + "₺";
    dateLabel.textContent = formatNumberWithSpaces(daysValue) + " ay";
  }

  calculateProfit();

  investmentSlider.addEventListener("input", calculateProfit);
  rangeSlider.addEventListener("input", calculateProfit);

  const sliders = [
    document.getElementById("investment-slider"),
    document.getElementById("range-slider"),
  ];

  function updateSliderBackground(slider) {
    const min = parseInt(slider.min);
    const max = parseInt(slider.max);
    const value = parseInt(slider.value);
    const percentage = ((value - min) / (max - min)) * 100;

    slider.style.background = `linear-gradient(to right, #F9423A ${percentage}%, #F2DDDD ${percentage}%)`;
  }

  sliders.forEach((slider) => {
    slider.addEventListener("input", () => updateSliderBackground(slider));
    updateSliderBackground(slider);
  });
});
