document.addEventListener("DOMContentLoaded", () => {
  const list = document.querySelector(".content__list");
  list.innerHTML += list.innerHTML;

  const buttonStart = document.getElementById("button-start");
  const quiz1 = document.getElementById("modal-1");
  const quiz1Content = document.querySelector("#modal-1 .modal__content");
  const quiz1Btns = document.querySelectorAll(".modal1__btn");
  const quiz2 = document.getElementById("modal-2");
  const quiz2Btn = document.getElementById("modal2-btn");
  const quiz2Content = document.querySelector("#modal-2 .modal__content");
  const quiz3 = document.getElementById("modal-3");
  const quiz3Btns = document.querySelectorAll(".modal3__btn");
  const quiz3Content = document.querySelector("#modal-3 .modal__content");
  const quiz4 = document.getElementById("modal-4");
  const quiz4Btns = document.querySelectorAll(".modal4__btn");
  const quiz4Content = document.querySelector("#modal-4 .modal__content");
  const quiz5 = document.getElementById("modal-5");
  const quiz5Btns = document.querySelectorAll(".modal5__btn");
  const quiz5Content = document.querySelector("#modal-5 .modal__content");
  const form = document.getElementById("modal-form");
  const formContent = document.querySelector("#modal-form .modal__content");

  localStorage.removeItem("answers");

  function saveAnswer(question, answer) {
    let answers = JSON.parse(localStorage.getItem("answers")) || [];
    answers.push(`${question}: ${answer}`);
    localStorage.setItem("answers", JSON.stringify(answers));
  }

  buttonStart.addEventListener("click", () => {
    quiz1.classList.remove("hidden");
    setTimeout(() => {
      quiz1Content.classList.add("active");
    }, 50);
  });

  quiz1Btns.forEach((btn) => {
    btn.addEventListener("click", function () {
      saveAnswer("Сколько вам лет?", this.textContent.trim());
      nextScreen(quiz1, quiz2, quiz2Content);
    });
  });

  quiz2Btn.addEventListener("click", () => {
    saveAnswer("Вы гражданин РФ?", "Да");
    nextScreen(quiz2, quiz3, quiz3Content);
  });

  quiz3Btns.forEach((btn) => {
    btn.addEventListener("click", function () {
      saveAnswer(
        "С какой суммы вы готовы начать на BingX?",
        this.textContent.trim()
      );
      nextScreen(quiz3, quiz4, quiz4Content);
    });
  });

  quiz4Btns.forEach((btn) => {
    btn.addEventListener("click", function () {
      saveAnswer(
        "Готовы использовать бесплатного личного помощника?",
        this.textContent.trim()
      );
      nextScreen(quiz4, quiz5, quiz5Content);
    });
  });

  quiz5Btns.forEach((btn) => {
    btn.addEventListener("click", function () {
      saveAnswer("Как лучше связаться с вами?", this.textContent.trim());
      nextScreen(quiz5, form, formContent);
    });
  });

  function nextScreen(curr, next, content) {
    curr.classList.remove("active");

    setTimeout(() => {
      curr.classList.add("hidden");
      next.classList.remove("hidden");

      setTimeout(() => {
        content.classList.add("active");
      }, 50);
    }, 400);
  }
});
