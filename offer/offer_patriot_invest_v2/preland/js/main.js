document.addEventListener("DOMContentLoaded", () => {
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
  const goToLandBtn = document.querySelector(".button-link");

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

  const goToLand = () => {
    window.location.href = "./landing.php";
  };

  firstAnswerButtons.forEach((button) => {
    button.addEventListener("click", () => {
      openSecondQuiz();
    });
  });

  secondAnswerButtons.forEach((button) => {
    button.addEventListener("click", () => {
      secondQuestion.classList.add("hidden");
    });
  });

  thirdAnswerButtons.forEach((button) => {
    button.addEventListener("click", () => {
      openThirdQuiz();
    });
  });

  startBtn.addEventListener("click", goToNextScreen);

  goToLandBtn.addEventListener("click", goToLand);
});
