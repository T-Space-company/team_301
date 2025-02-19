document.addEventListener("DOMContentLoaded", () => {
  const ctx = document.getElementById("chartCanvas").getContext("2d");
  const buttonUp = document.getElementById("up");
  const buttonDown = document.getElementById("down");
  const overlay = document.getElementById("overlay");
  const profit = document.querySelector(".profit__sum");
  const questionNum = document.querySelector(".task__num");
  const question = document.getElementById("question");
  const mainChart = document.getElementById("main-chart");
  const quiz = document.getElementById("quiz");
  const formMain = document.getElementById("form-main");
  const tradingPair = document.querySelector(".stats__pair");

  let clickCount = 0; // Tracks how many times the user clicks

  // Генерация случайных свечных данных
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
    buttonUp.removeEventListener("click", upHandler);
    buttonDown.removeEventListener("click", downHandler);

    buttonUp.classList.add("disabled");
    buttonDown.classList.add("disabled");
    overlay.classList.remove("hidden");

    setTimeout(() => {
      trend = direction === "up" ? 0.5 : -0.5;

      setTimeout(() => {
        trend = Math.random() > 0.5 ? (direction === "up" ? 0.2 : -0.2) : 0;
        overlay.classList.add("hidden");
        buttonUp.classList.remove("disabled");
        buttonDown.classList.remove("disabled");

        // Увеличиваем счетчик кликов
        clickCount++;

        if (clickCount === 1) {
          profit.textContent = "50 000 ₽";
          questionNum.textContent = "2/3";
          question.textContent =
            "Куда пойдет цена Bitcoin на фоне новостей что его признают как резервную валюту?";
        } else if (clickCount === 2) {
          profit.textContent = "100 000 ₽";
          questionNum.textContent = "3/3";
          question.textContent =
            "Куда пойдет цена Bitcoin на фоне новостей что обанкротилась биржа Coinbase?";
        } else if (clickCount === 3) {
          buttonUp.classList.add("disabled");
          buttonDown.classList.add("disabled");
          setTimeout(() => {
            mainChart.classList.add("hidden");
            quiz.classList.add("hidden");
            tradingPair.classList.add("hidden");
            formMain.classList.remove("hidden");
          }, 500);
        }

        buttonUp.addEventListener("click", upHandler);
        buttonDown.addEventListener("click", downHandler);
      }, 3000);
    }, 1000);
  };

  // Обработчики для кнопок
  const upHandler = () => handleButtonClick("up");
  const downHandler = () => handleButtonClick("down");

  buttonUp.addEventListener("click", upHandler);
  buttonDown.addEventListener("click", downHandler);
});
