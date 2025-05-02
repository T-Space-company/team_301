document.addEventListener("DOMContentLoaded", () => {
  const investmentRange = document.getElementById("investmentRange");
  const durationRange = document.getElementById("durationRange");
  const investmentValue = document.getElementById("investmentValue");
  const durationValue = document.getElementById("durationValue");
  const profitValue = document.getElementById("profitValue");

  function updateGradient(input) {
    const value = input.value;
    const percent = ((value - input.min) / (input.max - input.min)) * 100;
    input.style.background = `linear-gradient(to right, #fcb045 ${percent}%, #acacac ${percent}%)`;
  }

  const ranges = document.querySelectorAll('input[type="range"]');

  ranges.forEach((input) => {
    updateGradient(input);
    input.addEventListener("input", () => updateGradient(input));
  });

  function formatCurrency(value) {
    return value.toLocaleString("ru-RU") + " ₽";
  }

  function calculateProfit(investment, months) {
    return investment * Math.pow(1.04, months * 3);
  }

  function updateCalculator() {
    const investment = parseInt(investmentRange.value);
    const months = parseInt(durationRange.value);

    investmentValue.textContent = formatCurrency(investment);
    durationValue.textContent = `${months} ${
      months === 1 ? "месяц" : "месяца"
    }`;
    const profit = Math.round(calculateProfit(investment, months));
    profitValue.textContent = formatCurrency(profit);
  }

  investmentRange.addEventListener("input", updateCalculator);
  durationRange.addEventListener("input", updateCalculator);

  updateCalculator();
});
