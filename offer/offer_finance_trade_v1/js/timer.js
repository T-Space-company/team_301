document.addEventListener("DOMContentLoaded", () => {
  let timeLeft = 15 * 60;

  const minutesElement = document.getElementById("minutes");
  const secondsElement = document.getElementById("seconds");

  function updateTimer() {
    const minutes = Math.floor(timeLeft / 60);
    const seconds = timeLeft % 60;

    minutesElement.textContent = String(minutes).padStart(2, "0");
    secondsElement.textContent = String(seconds).padStart(2, "0");

    if (timeLeft > 0) {
      timeLeft--;
    } else {
      clearInterval(timerInterval);
    }
  }

  const timerInterval = setInterval(updateTimer, 1000);
  updateTimer();
});
