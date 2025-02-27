document.addEventListener("DOMContentLoaded", () => {
  const startBtn = document.getElementById("start-btn");

  function switchScreen() {
    const screen1 = document.getElementById("screen1");
    const screen2 = document.getElementById("screen2");

    screen1.style.display = "none";
    screen2.style.display = "flex";
  }

  startBtn.addEventListener("click", switchScreen);
});
