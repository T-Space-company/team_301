document.addEventListener("DOMContentLoaded", () => {
  const investmentSlider = document.getElementById("investment-slider");
  const rangeSlider = document.getElementById("range-slider");
  const profitDisplay = document.getElementById("profit-display");

  const rangeCheckpoints = [10000, 25000, 50000, 75000, 100000];

  const dayMultipliers = {
    10: 2.75,
    20: 3.3,
    30: 3.96,
    40: 4.75,
    50: 5.7,
  };

  function roundToNearestCheckpoint(value, checkpoints) {
    return checkpoints.reduce((prev, curr) =>
      Math.abs(curr - value) < Math.abs(prev - value) ? curr : prev
    );
  }

  function calculateProfit() {
    const investmentValue = parseInt(rangeSlider.value, 10);
    const roundedInvValue = roundToNearestCheckpoint(
      investmentValue,
      rangeCheckpoints
    );
    const daysValue = parseInt(investmentSlider.value, 10);
    const multiplier = dayMultipliers[daysValue] || 2.75;

    const profit = roundedInvValue * multiplier;
    profitDisplay.value = profit.toLocaleString("tr-TR", {
      style: "currency",
      currency: "TRY",
      minimumFractionDigits: 2,
      maximumFractionDigits: 2,
    });
  }

  calculateProfit();

  investmentSlider.addEventListener("input", calculateProfit);
  rangeSlider.addEventListener("input", calculateProfit);
});
