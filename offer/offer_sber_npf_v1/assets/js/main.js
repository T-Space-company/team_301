document.addEventListener("DOMContentLoaded", function () {
  const body = document.querySelector("body");
  const formButton = document.querySelector(".form-button");
  const question1 = document.getElementById("question1");
  const question2 = document.getElementById("question2");
  const modal = document.getElementById("modal");

  formButton.addEventListener("click", () => {
    question1.classList.remove("hidden");
    body.style.overflow = "hidden";
  });

  document.querySelectorAll("#question1 .question-button").forEach((button) => {
    button.addEventListener("click", function () {
      if (this.textContent === "Нет") {
        window.removeEventListener("beforeunload", trackClose);
        window.location.href = "err.html";
      } else {
        question1.classList.add("hidden");
        question2.classList.remove("hidden");
      }
    });
  });

  document.querySelectorAll("#question2 .question-button").forEach((button) => {
    button.addEventListener("click", function () {
      if (this.textContent === "до 18") {
        window.removeEventListener("beforeunload", trackClose);
        window.location.href = "err.html";
      } else {
        question2.classList.add("hidden");
        modal.classList.remove("hidden");
      }
    });
  });
});
