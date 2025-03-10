document.addEventListener("DOMContentLoaded", () => {
  const ctx = document.getElementById("chartCanvas").getContext("2d");
  const overlay = document.getElementById("overlay");
  const profit = document.querySelector(".profit__sum");
  const questionNum = document.querySelector(".task__num");
  const question = document.getElementById("question");
  const mainChart = document.getElementById("main-chart");
  const formMain = document.getElementById("form-main");
  const tradingPair = document.querySelector(".stats__pair");
  let tradeButton = document.getElementById("action-button");
  const tradeButtonIcon = document.querySelector(".button__icon");
  const greeting = document.getElementById("chart-greeting");
  const balance = document.querySelector(".balance__sum");
  const balanceChange = document.querySelector(".balance__change");
  const message = document.getElementById("message-text");
  const tradeNumber = document.querySelector(".trading__count");
  const tradeSum = document.querySelector(".sum__num");
  const modal5 = document.getElementById("modal-5");

  let clickCount = 0;

  const generateCandleData = (lastClose, lastTime, trend = 0) => {
    let open = lastClose;
    let close = open + (Math.random() - 0.5 + trend) * 10;
    let high = Math.max(open, close) + Math.random() * 5;
    let low = Math.min(open, close) - Math.random() * 5;
    let time = new Date(lastTime.getTime() + 60000);
    return { x: time, o: open, h: high, l: low, c: close };
  };

  // Создание начальных данных
  const createInitialData = () => {
    const data = [];
    let lastClose = 1150;
    let lastTime = new Date();
    for (let i = 0; i < 30; i++) {
      const candle = generateCandleData(lastClose, lastTime);
      data.push(candle);
      lastClose = candle.c;
      lastTime = candle.x;
    }
    return data;
  };

  let chart;
  let updateInterval;
  let trend = 0;

  // Функция автообновления графика
  const startAutoUpdate = () => {
    clearInterval(updateInterval);
    updateInterval = setInterval(() => {
      const lastCandle =
        chart.data.datasets[0].data[chart.data.datasets[0].data.length - 1];
      const newCandle = generateCandleData(lastCandle.c, lastCandle.x, trend);

      chart.data.datasets[0].data.push(newCandle);
      if (chart.data.datasets[0].data.length > 30) {
        chart.data.datasets[0].data.shift();
      }

      chart.update();
    }, 1000);
  };

  // Функция инициализации графика
  const initializeChart = () => {
    const initialData = createInitialData();

    if (chart) {
      chart.destroy();
    }

    chart = new Chart(ctx, {
      type: "candlestick",
      data: {
        datasets: [
          {
            label: "График",
            data: initialData,
            borderColors: {
              up: "#02C173",
              down: "#E11A38",
              unchanged: "#999",
            },
            borderThickness: 1,
            barThickness: 8,
            categoryPercentage: 0.2,
            barPercentage: 0.7,
            backgroundColors: {
              up: "#02C173",
              down: "#E11A38",
              unchanged: "#999",
            },
          },
        ],
      },
      options: {
        responsive: true,
        plugins: { colors: { enabled: false } },
        maintainAspectRatio: false,
        scales: {
          x: {
            type: "time",
            time: { unit: "minute" },
            ticks: { color: "#98989A" },
            grid: { color: "#fff" },
          },
          y: { ticks: { color: "#98989A" }, grid: { color: "#fff" } },
        },
        plugins: { legend: { display: false } },
        elements: {
          candlestick: {
            color: { up: "#00c853", down: "#d50000", unchanged: "#999" },
            borderColor: { up: "#00c853", down: "#d50000", unchanged: "#999" },
            borderWidth: 1,
          },
        },
      },
    });

    startAutoUpdate();
  };

  // Запускаем график при загрузке страницы
  initializeChart();

  // Функция обработки нажатий
  const handleButtonClick = (direction) => {
    // Удаляем обработчики, чтобы исключить повторные клики
    tradeButton.removeEventListener("click", chooseHandler);

    tradeButton.classList.add("disabled");
    overlay.classList.remove("hidden");

    setTimeout(() => {
      trend = direction === "up" ? 0.5 : -0.5;

      setTimeout(() => {
        trend = Math.random() > 0.5 ? (direction === "up" ? 0.2 : -0.2) : 0;
        overlay.classList.add("hidden");
        // Увеличиваем счетчик кликов
        clickCount++;

        if (clickCount === 1) {
          greeting.classList.add("hidden");
          balance.textContent = "19 650₽";
          balanceChange.classList.remove("hidden");
          setTimeout(() => {
            message.textContent =
              "Тренд сохраняется! Отличный момент для повторной сделки!";
            tradeNumber.textContent = "Сделка 2";
            tradeSum.textContent = "19 650 ₽";
            balanceChange.classList.add("hidden");
            tradeButton.classList.remove("disabled");
            tradeButton.addEventListener("click", chooseHandler);
          }, 1500);
        } else if (clickCount === 2) {
          balance.textContent = "25 741₽";
          balanceChange.classList.remove("hidden");
          setTimeout(() => {
            message.textContent =
              "Рынок немного корректируется. Давайте откроем сделку вниз. Для снижения рисков ставка уменьшена до 6 200 ₽";
            tradeNumber.textContent = "Сделка 3";
            tradeSum.textContent = "6 200 ₽";
            balanceChange.classList.add("hidden");
            tradeButton.classList.remove("up");
            tradeButton.classList.add("down");
            tradeButtonIcon.src = "./assets/img/arr-down.svg";
            tradeButton.classList.remove("disabled");
            tradeButton.addEventListener("click", chooseHandler);
          }, 1500);
        } else if (clickCount === 3) {
          balance.textContent = "19 541₽";
          balanceChange.textContent = "-15%";
          balanceChange.classList.remove("up");
          balanceChange.classList.add("down");
          balanceChange.classList.remove("hidden");
          setTimeout(() => {
            message.textContent =
              "Чёткий сигнал на рост! Вкладываем всю сумму вверх!";
            tradeNumber.textContent = "Сделка 4";
            tradeSum.textContent = "19 541 ₽";
            balanceChange.classList.add("hidden");
            tradeButton.classList.remove("down");
            tradeButton.classList.add("up");
            tradeButtonIcon.src = "./assets/img/arr-up.svg";
            tradeButton.classList.remove("disabled");
            tradeButton.addEventListener("click", chooseHandler);
          }, 1500);
        } else if (clickCount === 4) {
          message.textContent = "Поздравляю! Ваш итоговый баланс – 25 598 ₽!";
          balance.textContent = "25 598₽";
          balanceChange.textContent = "+31%";
          balanceChange.classList.remove("down");
          balanceChange.classList.add("up");
          balanceChange.classList.remove("hidden");
          setTimeout(() => {
            modal5.classList.remove("hidden");
          }, 1500);
        }
      }, 3000);
    }, 1000);
  };

  // Обработчик для кнопок
  const chooseHandler = () => {
    console.log(clickCount);
    if (tradeButton.classList.contains("up")) {
      handleButtonClick("up");
    } else if (tradeButton.classList.contains("down") && clickCount === 2) {
      handleButtonClick("up");
    } else {
      handleButtonClick("down");
    }
  };

  tradeButton.addEventListener("click", chooseHandler);
});
