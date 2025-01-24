document.addEventListener("DOMContentLoaded", () => {
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
            color: {
              up: "#00c853",
              down: "#d50000",
              unchanged: "#999",
            },
            barThickness: 6,
            categoryPercentage: 0.2,
            barPercentage: 0.7,
          },
        ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
          x: {
            type: "time",
            time: {
              unit: "minute",
            },
            ticks: { color: "#fff" },
            grid: { color: "#444" },
          },
          y: {
            ticks: { color: "#fff" },
            grid: { color: "#444" },
          },
        },
        plugins: {
          legend: { display: false },
        },
      },
    });

    // Запускаем автообновление для новой пары
    startAutoUpdate(pair);
  };

  // Инициализация графика с первой валютной парой
  initializeChart("LCO");

  // Обработчик для переключения вкладок
  const tabs = document.querySelectorAll(".screen__tab");
  tabs.forEach((tab) => {
    tab.addEventListener("click", () => {
      if (!tab.classList.contains("screen__tab--active")) {
        // Снятие класса "активный" со всех вкладок
        tabs.forEach((t) => t.classList.remove("screen__tab--active"));
        // Добавление класса "активный" к текущей вкладке
        tab.classList.add("screen__tab--active");

        // Получение валютной пары из атрибута data-pair
        const pair = tab.dataset.pair;

        // Обновление графика с новой валютной парой
        initializeChart(pair);
      }
    });
  });
});
