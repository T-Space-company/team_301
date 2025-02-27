import startModalFlow from "./modal.js";

document.addEventListener("DOMContentLoaded", () => {
  localStorage.removeItem("answers");

  const startBtn = document.getElementById("start-btn");
  const ctx = document.getElementById("chartCanvas").getContext("2d");
  const mainChart = document.getElementById("main-chart");
  const heading1 = document.getElementById("heading1");
  const heading2 = document.getElementById("heading2");
  const profit = document.getElementById("profit");
  const tradingBtn = document.getElementById("trading-btn");
  const tradingBtnDesktop = document.getElementById("trading-btn-desktop");

  function switchScreen() {
    const screen1 = document.getElementById("screen1");
    const screen2 = document.getElementById("screen2");

    screen1.classList.add("hidden");
    screen2.classList.remove("hidden");
    animateDots();
  }

  startBtn.addEventListener("click", switchScreen);

  function animateDots() {
    const headings = [
      document.getElementById("heading1"),
      document.getElementById("heading2"),
    ];

    let dots = "";
    let step = 0;

    const interval = setInterval(() => {
      step = (step + 1) % 4;
      dots = ".".repeat(step);

      headings.forEach((heading) => {
        heading.textContent = heading.textContent.replace(/\.*$/, "") + dots;
      });
    }, 500);

    setTimeout(() => {
      heading1.textContent = "Запуск алгоритмической торговли";
      heading2.textContent = "Идёт анализ рынка";
      setTimeout(() => {
        heading1.classList.add("hidden");
        heading2.classList.add("hidden");
        clearInterval(interval);
        profit.innerHTML = `Ваша прибыль: <span class="accent">104 728₽</span>`;
        profit.classList.remove("hidden");
        if (window.innerWidth > 1024) {
          tradingBtnDesktop.classList.remove("hidden");
        } else {
          tradingBtn.classList.remove("hidden");
        }
      }, 3000);
    }, 3000);
  }

  tradingBtn.addEventListener("click", () => {
    startModalFlow();
  });
  tradingBtnDesktop.addEventListener("click", () => {
    startModalFlow();
  });

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
              up: "#2F2F2F",
              down: "#2F2F2F",
              unchanged: "#999",
            },
            borderThickness: 1,
            barThickness: 8,
            categoryPercentage: 0.2,
            barPercentage: 0.7,
            backgroundColors: {
              up: "#002336",
              down: "#E0E0E0",
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
            ticks: { color: "#E0E0E0" },
            grid: { color: "#E0E0E0" },
          },
          y: { ticks: { color: "#6F6F6F" }, grid: { color: "#E0E0E0" } },
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
});
