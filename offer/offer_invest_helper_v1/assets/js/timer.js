document.addEventListener("DOMContentLoaded", () => {
  const startButton = document.querySelector(".quiz__button");
  const timeValue = document.querySelector(".task__num");
  const profitValue = document.querySelector(".profit__sum");
  const quiz1 = document.getElementById("modal");
  const quiz2 = document.getElementById("modal-2");
  const quiz3 = document.getElementById("modal-3");
  const quiz1Button = document.getElementById("quiz1-btn");
  const quiz2Button = document.getElementById("quiz2-btn");
  const quiz3Button = document.getElementById("quiz3-btn");
  const chartContent = document.getElementById("main-content");
  const formContent = document.getElementById("form-main");

  let timerInterval;
  let profitInterval;
  let timerRunning = false;
  let seconds = 0;
  let profit = 0;
  const targetProfit = 74265;
  const totalTime = 10;
  const profitStep = Math.floor(targetProfit / totalTime);

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
    seconds = 0;
    profit = 0;
    timeValue.textContent = formatTime(seconds);
    profitValue.textContent = formatProfit(profit);

    timerInterval = setInterval(() => {
      seconds++;
      timeValue.textContent = formatTime(seconds);

      updateProfit();

      if (seconds >= totalTime) {
        stopTimer();
        setTimeout(() => {
          quiz1.classList.remove("hidden");
        }, 1000);
      }
    }, 1000);
  };

  const updateProfit = () => {
    if (profit >= targetProfit) {
      profit = targetProfit;
      profitValue.textContent = formatProfit(profit);
      return;
    }

    profit = Math.min(profit + profitStep, targetProfit);
    profitValue.textContent = formatProfit(profit);
  };

  const stopTimer = () => {
    clearInterval(timerInterval);
    timerRunning = false;
    profit = targetProfit;
    profitValue.textContent = formatProfit(profit);
  };

  const buttonClickHandler = () => {
    startButton.removeEventListener("click", buttonClickHandler);
    startButton.classList.add("disabled");
    if (!timerRunning) {
      startTimer();
      timerRunning = true;
    } else {
      stopTimer();
    }
  };

  startButton.addEventListener("click", buttonClickHandler);
  quiz1Button.addEventListener("click", () => {
    quiz1.classList.add("hidden");
    quiz2.classList.remove("hidden");
  });
  quiz2Button.addEventListener("click", () => {
    quiz2.classList.add("hidden");
    quiz3.classList.remove("hidden");
  });
  quiz3Button.addEventListener("click", () => {
    quiz3.classList.add("hidden");
    chartContent.classList.add("hidden");
    formContent.classList.remove("hidden");
  });
});
