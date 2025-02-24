document.addEventListener("DOMContentLoaded", () => {
  localStorage.removeItem("answers");
  const body = document.querySelector("body");
  const header = document.querySelector(".header");
  const footer = document.querySelector(".footer");
  const screen1 = document.getElementById("screen-1");
  const screen2 = document.getElementById("screen-2");
  const startBtn = document.getElementById("entry-button");
  const firstQuestion = document.getElementById("modal");
  const secondQuestion = document.getElementById("modal-2");
  const thirdQuestion = document.getElementById("modal-3");
  const firstAnswerButtons = document.querySelectorAll(".modal__button--first");
  const secondAnswerButtons = document.querySelectorAll(
    ".modal__button--second"
  );
  const thirdAnswerButtons = document.querySelectorAll(".modal__button--third");

  function updateAnswers(question, answer) {
    let currentAnswers = localStorage.getItem("answers") || "";
    let newEntry = `${question}:${answer}`;

    let updatedAnswers = currentAnswers
      ? `${currentAnswers}, ${newEntry}`
      : newEntry;
    localStorage.setItem("answers", updatedAnswers);
  }

  const goToNextScreen = () => {
    screen1.classList.remove("active");
    screen2.classList.add("active");

    if (window.innerWidth < 768) {
      header.classList.remove("active");
    }

    footer.classList.remove("active");
    body.style.backgroundImage = "none";
    openQuiz();
  };

  const openQuiz = () => {
    firstQuestion.classList.remove("hidden");
  };

  const openSecondQuiz = () => {
    firstQuestion.classList.add("hidden");
    secondQuestion.classList.add("hidden");
    thirdQuestion.classList.remove("hidden");
  };

  const openThirdQuiz = () => {
    firstQuestion.classList.add("hidden");
    secondQuestion.classList.remove("hidden");
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

  secondAnswerButtons.forEach((button) => {
    button.addEventListener("click", () => {
      let investmentValue = "";

      if (button.classList.contains("modal__button--5")) {
        investmentValue = "10000₽";
      } else if (button.classList.contains("modal__button--10")) {
        investmentValue = "15000₽";
      } else if (button.classList.contains("modal__button--50")) {
        investmentValue = "20000₽";
      }

      updateAnswers(
        "С какой суммы вы хотели бы начать работу?",
        investmentValue
      );

      secondQuestion.classList.add("hidden");
      console.log("Final answers:", localStorage.getItem("answers"));
    });
  });

  startBtn.addEventListener("click", goToNextScreen);
});
