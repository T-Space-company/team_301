document.addEventListener("DOMContentLoaded", () => {
  const minutesTens = document.getElementById("minutes-tens");
  const minutesOnes = document.getElementById("minutes-ones");
  const secondsTens = document.getElementById("seconds-tens");
  const secondsOnes = document.getElementById("seconds-ones");

  let timeInSeconds = 277;

  const updateTimer = () => {
    const minutes = Math.floor(timeInSeconds / 60);
    const seconds = timeInSeconds % 60;

    minutesTens.textContent = Math.floor(minutes / 10);
    minutesOnes.textContent = minutes % 10;
    secondsTens.textContent = Math.floor(seconds / 10);
    secondsOnes.textContent = seconds % 10;
  };

  const countdown = setInterval(() => {
    if (timeInSeconds > 0) {
      timeInSeconds--;
      updateTimer();
    } else {
      clearInterval(countdown);
    }
  }, 1000);

  updateTimer();
});
