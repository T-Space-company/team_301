document.addEventListener("DOMContentLoaded", () => {
  const startBtn = document.querySelector(".main__button");
  const quizIntro = document.getElementById("quiz-intro");
  const quizTicket = document.getElementById("quiz-ticket");
  const startQuizBtn = document.querySelector(".quiz__item.start");
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
  const screenWrap = document.querySelector(".screen__wrapper");

  localStorage.removeItem("answers");

  function saveAnswer(question, answer) {
    let answers = JSON.parse(localStorage.getItem("answers")) || [];
    answers.push(`${question}: ${answer}`);
    localStorage.setItem("answers", JSON.stringify(answers));
  }

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

  startBtn.addEventListener("click", () => {
    setTimeout(() => {
      screenWrap.classList.remove("hidden");
      nextScreen(quizIntro, quizIntro);
      startTimer();
    }, 200);
  });

  startQuizBtn.addEventListener("click", () => {
    setTimeout(() => {
      screenWrap.classList.remove("hidden");
      nextScreen(quizIntro, quizTicket);
      setTimeout(() => {
        nextScreen(quizTicket, quiz1);
      }, 2500);
    }, 200);
  });

  ageButtons.forEach((button) => {
    button.addEventListener("click", function () {
      saveAnswer("Сколько вам лет?", this.textContent.trim());
      setTimeout(() => {
        nextScreen(quiz1, quiz2);
      }, 300);
    });
  });

  citizenButton.addEventListener("click", () => {
    saveAnswer("Вы являетесь гражданином Российской Федерации?", "Да");
    setTimeout(() => {
      nextScreen(quiz2, quiz3);
    }, 200);
  });

  goalButtons.forEach((button) => {
    button.addEventListener("click", function () {
      saveAnswer(
        "С какой суммы Вы готовы начать сотрудничество с БКС?",
        this.textContent.trim()
      );
      setTimeout(() => {
        nextScreen(quiz3, quiz4);
      }, 300);
    });
  });

  exprButtons.forEach((button) => {
    button.addEventListener("click", function () {
      saveAnswer("Как лучше всего с Вами связаться?", this.textContent.trim());
      setTimeout(() => {
        nextScreen(quiz4, quiz5);
      }, 300);
    });
  });

  profitButtons.forEach((button) => {
    button.addEventListener("click", function () {
      saveAnswer("Сколько вы хотите зарабатывать?", this.textContent.trim());
      setTimeout(() => {
        nextScreen(quiz5, form);
      }, 300);
    });
  });

  let totalTime = 300;
  const timerElements = document.querySelectorAll(".timer");

  function formatTime(seconds) {
    const min = Math.floor(seconds / 60)
      .toString()
      .padStart(2, "0");
    const sec = (seconds % 60).toString().padStart(2, "0");
    return `${min}:${sec}`;
  }

  function updateTimers() {
    timerElements.forEach((el) => {
      el.textContent = formatTime(totalTime);
    });
  }

  function startTimer() {
    updateTimers();
    const interval = setInterval(() => {
      totalTime--;
      if (totalTime < 0) {
        clearInterval(interval);
        return;
      }
      updateTimers();
    }, 1000);
  }
});
