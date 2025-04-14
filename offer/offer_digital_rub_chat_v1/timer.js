document.addEventListener("DOMContentLoaded", () => {
  const timerElement = document.querySelector(".timer");
  let timeLeft = 30 * 60;

  function updateTimer() {
    let minutes = Math.floor(timeLeft / 60);
    let seconds = timeLeft % 60;

    timerElement.textContent = `${String(minutes).padStart(2, "0")} : ${String(
      seconds
    ).padStart(2, "0")}`;

    if (timeLeft > 0) {
      timeLeft--;
      setTimeout(updateTimer, 1000);
    }
  }

  updateTimer();
});
