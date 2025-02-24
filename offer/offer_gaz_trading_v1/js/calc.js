// Слушатель для изменения суммы инвестиций
const investmentInput = document.querySelector("#investment-slider");
const investmentDisplay = document.querySelector("#investment-value");

investmentInput.addEventListener("input", () => {
  const value =
    ((investmentInput.value - investmentInput.min) /
      (investmentInput.max - investmentInput.min)) *
    100;
  investmentInput.style.background = `linear-gradient(to right, #0079c4 0%, #0079c4 ${value}%, #d3d3d3 ${value}%, #d3d3d3 100%)`;
});
// Слушатели для сроков инвестирования
const periodButtons = document.querySelectorAll(".investment-period button");

// Поля для отображения результатов
const profitDisplay = document.querySelector("#profit-value");
const percentageDisplay = document.querySelector("#percentage-value");
const totalDisplay = document.querySelector("#total-value");

// Данные для расчета прибыли (примерные значения)
const profitRates = {
  7: 0.21, // 21% за 7 дней
  14: 0.45, // 45% за 14 дней
  28: 0.75, // 75% за 28 дней
  56: 1.2, // 120% за 56 дней
};

let currentPeriod = 7; // Начальный срок инвестирования

// Обновить отображаемое значение суммы инвестиций
investmentInput.addEventListener("input", () => {
  const investmentAmount = parseInt(investmentInput.value, 10);
  investmentDisplay.textContent = `${investmentAmount.toLocaleString()} ₽`;
  calculateProfit(investmentAmount, currentPeriod);
});

// Обновить срок инвестирования и пересчитать прибыль
periodButtons.forEach((button) => {
  button.addEventListener("click", () => {
    // Сброс активного состояния
    periodButtons.forEach((btn) => btn.classList.remove("active"));

    // Установить текущий активный срок
    button.classList.add("active");
    currentPeriod = parseInt(button.dataset.period, 10);

    // Пересчитать прибыль
    const investmentAmount = parseInt(investmentInput.value, 10);
    calculateProfit(investmentAmount, currentPeriod);
  });
});

// Функция расчета прибыли
function calculateProfit(investment, period) {
  const rate = profitRates[period] || 0;
  const profit = Math.round(investment * rate);
  const total = investment + profit;

  // Обновить отображение результатов
  profitDisplay.textContent = `${profit.toLocaleString()} ₽`;
  percentageDisplay.textContent = `${Math.round(rate * 100)}%`;
  totalDisplay.textContent = `${total.toLocaleString()} ₽`;
}

// Инициализация начальных значений
const initialInvestment = parseInt(investmentInput.value, 10);
calculateProfit(initialInvestment, currentPeriod);
