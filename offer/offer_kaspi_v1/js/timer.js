document.addEventListener("DOMContentLoaded", () => {
  const startButton = document.getElementById("start-chart");
  const timeValue = document.querySelector(".screen__time-timer");
  const profitValue = document.querySelector(".screen__profit-value");
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
    return `${value.toLocaleString("kk-KZ")} ₸`;
  };

  const startTimer = () => {
    timerInterval = setInterval(() => {
      seconds++;
      timeValue.textContent = formatTime(seconds);

      if (seconds >= 10) {
        stopTimer();
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
  };

  const startProfitUpdate = () => {
    const targetProfit = 124550;

    profitInterval = setInterval(() => {
      if (profit >= targetProfit) {
        clearInterval(profitInterval);
        profit = targetProfit;
        profitValue.textContent = formatProfit(profit);
        return;
      }

      const increment = Math.floor(Math.random() * 10000) + 12500; // Increment range: 10500–20500
      profit = Math.min(profit + increment, targetProfit);
      profitValue.textContent = formatProfit(profit);
    }, Math.random() * (1500 - 1000) + 1000); // Interval between 1000ms and 1500ms
  };

  const buttonClickHandler = () => {
    startTimer();
    timerRunning = true;
    startButton.removeEventListener("click", buttonClickHandler);
  };

  startButton.addEventListener("click", buttonClickHandler);
});
