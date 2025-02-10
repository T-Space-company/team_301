document.addEventListener("DOMContentLoaded", function () {
  const body = document.querySelector("body");
  const modal = document.getElementById("modal");
  const formButtons = document.querySelectorAll(".form-button");
  const buttons = document.querySelectorAll(".revenue__item");
  const profitSum = document.querySelector(".revenue__profit-sum");

  formButtons.forEach((btn) => {
    btn.addEventListener("click", () => {
      modal.classList.remove("hidden");
      body.style.overflow = "hidden";
    });
  });

  window.addEventListener("click", (event) => {
    if (event.target === modal) {
      modal.classList.add("hidden");
      body.style.overflow = "auto";
    }
  });

  const profitValues = {
    first: "от 20 000 ₽",
    second: "от 30 000 ₽",
    third: "от 70 000 ₽",
    fourth: "от 120 000 ₽",
  };

  buttons.forEach((button) => {
    button.addEventListener("click", function () {
      buttons.forEach((btn) => btn.classList.remove("active"));

      this.classList.add("active");

      const buttonClass = this.classList[1];
      profitSum.textContent = profitValues[buttonClass];
    });
  });
});
