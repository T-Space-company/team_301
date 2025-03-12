document.addEventListener("DOMContentLoaded", () => {
  const firstScreen = document.getElementById("first-screen");
  const secondScreen = document.getElementById("second-screen");
  const thirdScreen = document.getElementById("third-screen");
  const formScreen = document.getElementById("form-screen");
  const startButton = document.getElementById("start-btn");
  const prizeButton = document.getElementById("prize-btn");
  const quiz1 = document.getElementById("modal-1");
  const quiz2 = document.getElementById("modal-2");
  const quiz1Button = document.getElementById("quiz1-btn");
  const quiz2Button = document.getElementById("quiz2-btn");
  const itemsWrapper = document.querySelector(".choose__items");
  const items = document.querySelectorAll(".choose__item-wrap");

  if (window.innerHeight >= 685) {
    firstScreen.style.height = "100vh";
  }

  function saveAnswer(question, answer) {
    let answers = JSON.parse(localStorage.getItem("answers")) || [];
    answers.push(`${question}: ${answer}`);
    localStorage.setItem("answers", JSON.stringify(answers));
  }

  quiz1Button.addEventListener("click", () => {
    saveAnswer("Вам больше 21 года?", "Да");
    quiz1.classList.add("hidden");
    quiz2.classList.remove("hidden");
  });

  quiz2Button.addEventListener("click", () => {
    saveAnswer(
      "Вы являетесь гражданином или резидентом Российской Федерации?",
      "Да"
    );
    quiz2.classList.add("hidden");
  });

  startButton.addEventListener("click", () => {
    firstScreen.classList.add("hidden");
    secondScreen.classList.remove("hidden");
    if (window.innerHeight >= 645) {
      secondScreen.style.height = "100vh";
    }
  });

  items.forEach((item) => {
    item.addEventListener("click", () => {
      itemsWrapper.classList.remove("animate");
      item.classList.add("scale-animation");

      setTimeout(() => {
        item.classList.remove("scale-animation");
        secondScreen.classList.add("hidden");
        thirdScreen.classList.remove("hidden");
      }, 2000);
    });
  });

  prizeButton.addEventListener("click", () => {
    thirdScreen.classList.add("hidden");
    formScreen.classList.remove("hidden");
    if (window.innerHeight >= 645) {
      formScreen.style.height = "100vh";
    }
  });
});
