document.addEventListener("DOMContentLoaded", () => {
  const startChartButton = document.getElementById("start-chart");
  const ctx = document.getElementById("chartCanvas").getContext("2d");

  // Генерация данных для свечей
  const generateCandleData = (lastClose, lastTime) => {
    const open = lastClose;
    const close = open + (Math.random() - 0.5) * 10;
    const high = Math.max(open, close) + Math.random() * 5;
    const low = Math.min(open, close) - Math.random() * 5;
    const time = new Date(lastTime.getTime() + 60000); // Интервал 1 минута
    return { x: time, o: open, h: high, l: low, c: close };
  };

  // Создание начальных данных
  const createInitialData = () => {
    const data = [];
    let lastClose = 1150;
    let lastTime = new Date(); // Текущее время
    for (let i = 0; i < 30; i++) {
      const candle = generateCandleData(lastClose, lastTime);
      data.push(candle);
      lastClose = candle.c;
      lastTime = candle.x;
    }
    return data;
  };

  let chart; // Глобальная переменная для графика
  let updateInterval; // Переменная для хранения ID интервала обновления

  // Функция автообновления графика
  const startAutoUpdate = (pair) => {
    clearInterval(updateInterval); // Очищаем предыдущий интервал, если он существует
    updateInterval = setInterval(() => {
      const lastCandle =
        chart.data.datasets[0].data[chart.data.datasets[0].data.length - 1];
      const newCandle = generateCandleData(lastCandle.c, lastCandle.x);

      chart.data.datasets[0].data.push(newCandle);
      if (chart.data.datasets[0].data.length > 30) {
        chart.data.datasets[0].data.shift(); // Удаление старых свечей
      }

      chart.update(); // Обновляем график
    }, 1000); // Добавление новой свечи каждую секунду
  };

  // Функция инициализации графика
  const initializeChart = (pair) => {
    const initialData = createInitialData();

    if (chart) {
      chart.destroy(); // Удаление предыдущего графика
    }

    chart = new Chart(ctx, {
      type: "candlestick",
      data: {
        datasets: [
          {
            label: `График для ${pair}`,
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
        plugins: {
          colors: {
            enabled: false,
          },
        },
        maintainAspectRatio: false,
        scales: {
          x: {
            type: "time",
            time: {
              unit: "minute",
            },
            ticks: { color: "#98989A" },
            grid: { color: "#fff" },
          },
          y: {
            ticks: { color: "#98989A" },
            grid: { color: "#fff" },
          },
        },
        plugins: {
          legend: { display: false },
        },
        elements: {
          candlestick: {
            color: {
              up: "#00c853",
              down: "#d50000",
              unchanged: "#999",
            },
            borderColor: {
              up: "#00c853",
              down: "#d50000",
              unchanged: "#999",
            },
            borderWidth: 1,
          },
        },
      },
    });

    // Запускаем автообновление для новой пары
    startAutoUpdate(pair);
  };

  // Инициализация графика с первой валютной парой
  initializeChart("BTC");
});
