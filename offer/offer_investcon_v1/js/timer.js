document.addEventListener("DOMContentLoaded", () => {
  function getTomorrowEnd() {
    const now = new Date();
    const tomorrow = new Date(now);
    tomorrow.setDate(now.getDate() + 1);
    tomorrow.setHours(23, 59, 59, 999);
    return tomorrow;
  }

  function startCountdown(elementId, endTime) {
    const countdownElement = document.getElementById(elementId);

    if (!countdownElement) return;

    function updateCountdown() {
      const now = new Date();
      const distance = endTime - now;

      if (distance <= 0) {
        countdownElement.textContent = "00:00:00";
        clearInterval(timerInterval);
        return;
      }

      const hours = String(
        Math.floor((distance / (1000 * 60 * 60)) % 24)
      ).padStart(2, "0");
      const minutes = String(
        Math.floor((distance / (1000 * 60)) % 60)
      ).padStart(2, "0");
      const seconds = String(Math.floor((distance / 1000) % 60)).padStart(
        2,
        "0"
      );

      countdownElement.textContent = `${hours}:${minutes}:${seconds}`;
    }

    updateCountdown();
    const timerInterval = setInterval(updateCountdown, 1000);
  }

  const endTime = getTomorrowEnd();
  startCountdown("startup-timer", endTime);
});
