document.addEventListener("DOMContentLoaded", () => {
  const startBtn = document.getElementById("start-btn");
  const intro = document.getElementById("intro");
  const quiz1 = document.getElementById("quiz1");
  const ageButtons = document.querySelectorAll(".quiz__item.age");
  const quiz2 = document.getElementById("quiz2");
  const citizenButton = document.querySelector(".quiz__item.citizen");
  const quiz3 = document.getElementById("quiz3");
  const goalButtons = document.querySelectorAll(".quiz__item.goal");
  const quiz4 = document.getElementById("quiz4");
  const exprButtons = document.querySelectorAll(".quiz__item.expr");
  const quiz5 = document.getElementById("quiz5");
  const profitButtons = document.querySelectorAll(".quiz__item.profit");
  const form = document.getElementById("form-screen");

  localStorage.removeItem("answers");

  function saveAnswer(question, answer) {
    let answers = JSON.parse(localStorage.getItem("answers")) || [];
    answers.push(`${question}: ${answer}`);
    localStorage.setItem("answers", JSON.stringify(answers));
  }

  startBtn.addEventListener("click", () => {
    setTimeout(() => {
      nextScreen(intro, quiz1);
    }, 200);
  });

  ageButtons.forEach((button) => {
    button.addEventListener("click", function () {
      const circle = this.querySelector(".quiz__circle");
      circle.classList.add("active");

      saveAnswer("Сколько вам лет?", this.textContent.trim());
      setTimeout(() => {
        nextScreen(quiz1, quiz2);
      }, 300);
    });
  });

  citizenButton.addEventListener("click", function () {
    const circle = this.querySelector(".quiz__circle");
    circle.classList.add("active");

    saveAnswer("Вы являетесь гражданином Российской Федерации?", "Да");
    setTimeout(() => {
      nextScreen(quiz2, quiz3);
    }, 300);
  });

  goalButtons.forEach((button) => {
    button.addEventListener("click", function () {
      const circle = this.querySelector(".quiz__circle");
      circle.classList.add("active");

      saveAnswer("Какая Ваша цель обучения?", this.textContent.trim());
      setTimeout(() => {
        nextScreen(quiz3, quiz4);
      }, 300);
    });
  });

  exprButtons.forEach((button) => {
    button.addEventListener("click", function () {
      const circle = this.querySelector(".quiz__circle");
      circle.classList.add("active");

      saveAnswer(
        "Имеете ли Вы опыт в инвестировании?",
        this.textContent.trim()
      );
      setTimeout(() => {
        nextScreen(quiz4, quiz5);
      }, 300);
    });
  });

  profitButtons.forEach((button) => {
    button.addEventListener("click", function () {
      const circle = this.querySelector(".quiz__circle");
      circle.classList.add("active");

      saveAnswer("Сколько Вы хотите зарабатывать?", this.textContent.trim());
      setTimeout(() => {
        nextScreen(quiz5, form);
      }, 300);
    });
  });

  function nextScreen(curr, next) {
    curr.classList.add("fade-out");

    setTimeout(() => {
      curr.classList.add("hidden");
      curr.classList.remove("fade-out");

      next.classList.remove("hidden");
      next.classList.add("fade-in");

      void next.offsetWidth;

      next.classList.add("showing");

      setTimeout(() => {
        next.classList.remove("fade-in", "showing");
      }, 400);
    }, 400);
  }
});
