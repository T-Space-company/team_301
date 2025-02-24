document.addEventListener("DOMContentLoaded", function () {
  let questionElement = document.querySelector(".text-block-2");
  let questionText = questionElement ? questionElement.innerText.trim() : "";

  let buttonUp = document.querySelector(".button-2.w-button");
  let buttonDown = document.querySelector(".button-3.w-button");

  const firstQuestion = document.getElementById("modal");
  const thirdQuestion = document.getElementById("modal-3");

  const firstAnswerButtons = document.querySelectorAll(".modal__button--first");
  const thirdAnswerButtons = document.querySelectorAll(".modal__button--third");

  function updateAnswers(question, answer) {
    let currentAnswers = localStorage.getItem("answers") || "";
    let newEntry = `${question}: ${answer}`;

    let updatedAnswers = currentAnswers
      ? `${currentAnswers}, ${newEntry}`
      : newEntry;

    localStorage.setItem("answers", updatedAnswers);
  }

  if (buttonUp) {
    buttonUp.addEventListener("click", function () {
      updateAnswers(questionText, "Вверх");
    });
  }

  if (buttonDown) {
    buttonDown.addEventListener("click", function () {
      updateAnswers(questionText, "вниз");
    });
  }

  const openSecondQuiz = () => {
    firstQuestion.classList.add("hidden");
    thirdQuestion.classList.remove("hidden");
  };

  const openThirdQuiz = () => {
    firstQuestion.classList.add("hidden");
    thirdQuestion.classList.add("hidden");
  };

  firstAnswerButtons.forEach((button) => {
    button.addEventListener("click", () => {
      if (button.classList.contains("modal__button--yes")) {
        updateAnswers("Вам исполнился 21 год?", "да");
        openSecondQuiz();
      } else if (button.classList.contains("modal__button--no")) {
        updateAnswers("Вам исполнился 21 год?", "нет");
        window.location.href = "err.html";
      }
    });
  });

  thirdAnswerButtons.forEach((button) => {
    button.addEventListener("click", () => {
      if (button.classList.contains("modal__button--yes")) {
        updateAnswers(
          "Являетесь ли вы гражданином Российской Федерации?",
          "да"
        );
        openThirdQuiz();
      } else if (button.classList.contains("modal__button--no")) {
        updateAnswers(
          "Являетесь ли вы гражданином Российской Федерации?",
          "нет"
        );
        window.location.href = "err.html";
      }
    });
  });
});
