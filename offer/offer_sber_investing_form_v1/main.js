document.addEventListener("DOMContentLoaded", () => {
  const countElement = document.querySelector(".count");
  const targetNumber = 128;
  let currentNumber = 0;
  const speed = 20;

  function updateCounter() {
    currentNumber++;

    countElement.innerHTML = currentNumber.toString().split("").join("&nbsp;");

    if (currentNumber < targetNumber) {
      setTimeout(updateCounter, speed);
    }
  }

  updateCounter();
});
