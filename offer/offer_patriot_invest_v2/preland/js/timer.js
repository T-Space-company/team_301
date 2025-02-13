document.addEventListener("DOMContentLoaded", () => {
  const startButton = document.getElementById("start-chart");
  const timeValue = document.querySelector(".screen__time-timer");
  const profitValue = document.querySelector(".screen__profit-value");
  const header = document.querySelector(".header");
  const screen3 = document.getElementById("screen-3");

  let timerInterval;
  let profitInterval;
  let timerRunning = false;
  let seconds = 0;
  let profit = 0;

  const formatTime = (time) => {
    const minutes = Math.floor(time / 60);
    const secs = time % 60;
    return `${String(minutes).padStart(2, "0")}:${String(secs).padStart(
      2,
      "0"
    )}`;
  };

  const formatProfit = (value) => {
    return `${value.toLocaleString("ru-RU")} ₽`;
  };

  const startTimer = () => {
    timerInterval = setInterval(() => {
      seconds++;
      timeValue.textContent = formatTime(seconds);

      if (seconds >= 10) {
        stopTimer();
        resetButtonState();
        removeClickListener();
        setTimeout(showScreen3, 1500);
      }
    }, 1000);

    startProfitUpdate();
  };

  const stopTimer = () => {
    clearInterval(timerInterval);
    clearInterval(profitInterval);
    setTimeout(showScreen3, 1500);
  };

  const showScreen3 = () => {
    screen3.classList.add("active");
    header.classList.add("active");
  };

  const resetButtonState = () => {
    timerRunning = false;
    startButton.textContent = "Запустить бот";
    startButton.classList.remove("active");
  };

  const removeClickListener = () => {
    startButton.removeEventListener("click", buttonClickHandler);
    startButton.classList.add("disabled");
  };

  const startProfitUpdate = () => {
    const minProfit = 8250;
    const maxProfit = 15340;

    const targetProfit =
      Math.floor(Math.random() * (maxProfit - minProfit + 1)) + minProfit;

    profitInterval = setInterval(() => {
      if (profit >= targetProfit) {
        clearInterval(profitInterval);
        profit = targetProfit;
        profitValue.textContent = formatProfit(profit);
        return;
      }

      const increment = Math.floor(Math.random() * 1300) + 1000;
      profit = Math.min(profit + increment, targetProfit);
      profitValue.textContent = formatProfit(profit);
    }, Math.random() * (1500 - 1000) + 1000);
  };

  const buttonClickHandler = () => {
    if (!timerRunning) {
      startTimer();
      timerRunning = true;
      startButton.textContent = "Остановить бот";
      startButton.classList.add("active");
    } else {
      stopTimer();
      resetButtonState();
    }
  };

  startButton.addEventListener("click", buttonClickHandler);
});
