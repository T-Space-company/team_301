document.addEventListener("DOMContentLoaded", function () {
  const frame = document.querySelector(".frame-21");
  const segments = frame.querySelectorAll(".text-wrapper-17, .text-wrapper-18");

  function getTargetDate() {
    const now = new Date();

    const target = new Date(now);
    target.setDate(now.getDate() + 1);
    target.setHours(0, 0, 0, 0);

    return target;
  }

  function updateTimer() {
    const now = new Date();
    const target = getTargetDate();
    const diff = target - now;

    if (diff <= 0) {
      segments[0].textContent = "00";
      segments[2].textContent = "00";
      segments[4].textContent = "00";
      return;
    }

    const hours = String(Math.floor((diff / (1000 * 60 * 60)) % 24)).padStart(
      2,
      "0"
    );
    const minutes = String(Math.floor((diff / (1000 * 60)) % 60)).padStart(
      2,
      "0"
    );
    const seconds = String(Math.floor((diff / 1000) % 60)).padStart(2, "0");

    segments[0].textContent = hours;
    segments[2].textContent = minutes;
    segments[4].textContent = seconds;
  }

  updateTimer();
  setInterval(updateTimer, 1000);
});
