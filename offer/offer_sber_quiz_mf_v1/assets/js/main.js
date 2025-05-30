document.addEventListener("DOMContentLoaded", () => {
  const body = document.querySelector("body");
  const firstModal = document.getElementById("modal-1");
  const firstModalBtn = document.getElementById("modal1-btn");
  const secondModal = document.getElementById("modal-2");
  const secondModalBtn = document.getElementById("modal2-btn");
  const video = document.getElementById("main-vid");
  const quiz1 = document.getElementById("quiz1");
  const quiz1Buttons = document.querySelectorAll(".quiz__button1");
  const quiz2 = document.getElementById("quiz2");
  const quiz2Buttons = document.querySelectorAll(".quiz__button2");
  const quiz3 = document.getElementById("quiz3");
  const quiz3Buttons = document.querySelectorAll(".quiz__button3");
  const quiz4 = document.getElementById("quiz4");
  const quiz4Buttons = document.querySelectorAll(".quiz__button4");
  const quiz5 = document.getElementById("quiz5");
  const quiz5Buttons = document.querySelectorAll(".quiz__button5");
  const form = document.getElementById("quiz-form");

  body.style.overflow = "hidden";

  localStorage.removeItem("answers");

  function saveAnswer(question, answer) {
    let answers = JSON.parse(localStorage.getItem("answers")) || [];
    answers.push(`${question}: ${answer}`);
    localStorage.setItem("answers", JSON.stringify(answers));
  }

  firstModalBtn.addEventListener("click", () => {
    saveAnswer("Вам больше 21 года?", "Да");
    firstModal.classList.add("hidden");
    secondModal.classList.remove("hidden");
  });

  secondModalBtn.addEventListener("click", () => {
    saveAnswer(
      "Вы являетесь гражданином или резидентом Российской Федерации?",
      "Да"
    );
    secondModal.classList.add("hidden");
    body.style.overflow = "auto";
    video.muted = false;
    video.play();
  });

  function nextScreen(curr, next) {
    curr.classList.remove("active");

    setTimeout(() => {
      curr.classList.add("hidden");
      next.classList.remove("hidden");

      setTimeout(() => {
        next.classList.add("active");
      }, 50);
    }, 400);
  }

  quiz1Buttons.forEach((btn) => {
    btn.addEventListener("click", function () {
      saveAnswer("Был ли у вас опыт в инвестициях?", this.textContent.trim());
      nextScreen(quiz1, quiz2);
    });
  });
  quiz2Buttons.forEach((btn) => {
    btn.addEventListener("click", function () {
      saveAnswer(
        "От какой суммы в месяц вы хотите зарабатывать на пассивном доходе?",
        this.textContent.trim()
      );
      nextScreen(quiz2, quiz3);
    });
  });
  quiz3Buttons.forEach((btn) => {
    btn.addEventListener("click", function () {
      saveAnswer(
        "Откуда вы узнали о нашей платформе?",
        this.textContent.trim()
      );
      nextScreen(quiz3, quiz4);
    });
  });
  quiz4Buttons.forEach((btn) => {
    btn.addEventListener("click", function () {
      saveAnswer(
        "С какой периодичностью вы планируете выводить средства?",
        this.textContent.trim()
      );
      nextScreen(quiz4, quiz5);
    });
  });
  quiz5Buttons.forEach((btn) => {
    btn.addEventListener("click", function () {
      saveAnswer(
        "Готовы ли вы воспользоваться советами специалиста?",
        this.textContent.trim()
      );
      nextScreen(quiz5, form);
    });
  });
});
