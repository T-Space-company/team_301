document.addEventListener("DOMContentLoaded", function () {
  const hour1 = document.getElementById("hour1");
  const hour2 = document.getElementById("hour2");
  const minute1 = document.getElementById("minute1");
  const minute2 = document.getElementById("minute2");
  const second1 = document.getElementById("second1");
  const second2 = document.getElementById("second2");

  function updateTimer() {
    let hours = parseInt(hour1.textContent + hour2.textContent);
    let minutes = parseInt(minute1.textContent + minute2.textContent);
    let seconds = parseInt(second1.textContent + second2.textContent);

    if (seconds > 0) {
      seconds -= 1;
    } else {
      if (minutes > 0) {
        minutes -= 1;
        seconds = 59;
      } else if (hours > 0) {
        hours -= 1;
        minutes = 59;
        seconds = 59;
      } else {
        clearInterval(timerInterval);
        return;
      }
    }

    const hoursStr = String(hours).padStart(2, "0");
    const minutesStr = String(minutes).padStart(2, "0");
    const secondsStr = String(seconds).padStart(2, "0");

    hour1.textContent = hoursStr[0];
    hour2.textContent = hoursStr[1];
    minute1.textContent = minutesStr[0];
    minute2.textContent = minutesStr[1];
    second1.textContent = secondsStr[0];
    second2.textContent = secondsStr[1];
  }

  const timerInterval = setInterval(updateTimer, 1000);
});
