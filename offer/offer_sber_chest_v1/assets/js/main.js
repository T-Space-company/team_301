document.addEventListener("DOMContentLoaded", () => {
  const body = document.querySelector("body");
  const startBtn = document.getElementById("chest-button");
  const chests = document.getElementById("chests");
  const modal = document.getElementById("modal");
  const startQuizBtn = document.getElementById("quiz-button");
  const startQuizBtnBlock = document.getElementById("quiz-button-wrap");
  const modalQuestion = document.querySelector(".modal-question");
  const questionText = document.querySelector(".question");
  const modalCongrats = document.querySelector(".modal-congrats");
  const modalContent = document.querySelector(".modal-content");
  const form = document.querySelector(".form");
  const btnNo = document.getElementById("btn-no");
  const btnYes = document.getElementById("btn-yes");
  const notification = document.getElementById("notification");

  function openChests() {
    startBtn.removeEventListener("click", openChests);
    chests.classList.remove("chests");
    chests.classList.add("open-effect");

    setTimeout(() => {
      chests.src =
        window.innerWidth >= 768
          ? "./assets/img/open_chests.svg"
          : "./assets/img/open_chests_mob.svg";

      chests.classList.remove("open-effect");
      setTimeout(() => {
        modal.classList.remove("hidden");
        body.style.overflow = "hidden";
      }, 1000);
    }, 1500);
  }

  const messages = [
    {
      text: `<span class="accent">Киселёв В.</span> только что получил <span class="accent">10 000₽!</span>`,
    },
    {
      text: `<span class="accent">Марина Л.</span> выиграла <span class="accent">iPhone 15 Pro!</span>`,
    },
    { text: `Сегодня уже выдано <span class="accent">2 472 300₽!</span>` },
  ];

  let count = 0;

  function showNotification() {
    if (count >= messages.length) return;

    notification.innerHTML = messages[count].text;
    notification.classList.add("show");

    setTimeout(() => {
      if (count < messages.length - 1) {
        notification.classList.remove("show");
        setTimeout(() => {
          count++;
          showNotification();
        }, 1000);
      }
    }, 2000);
  }

  setTimeout(showNotification, 500);

  function startCountdown(duration) {
    let timer = duration;
    const display = document.getElementById("countdown");

    setInterval(() => {
      const minutes = Math.floor(timer / 60);
      const seconds = timer % 60;
      display.textContent = `00 : ${String(minutes).padStart(
        2,
        "0"
      )} : ${String(seconds).padStart(2, "0")}`;

      if (timer > 0) {
        timer--;
      }
    }, 1000);
  }

  function startQuiz() {
    startQuizBtnBlock.classList.add("hidden");
    modalQuestion.classList.remove("hidden");
  }

  btnNo.addEventListener("click", () => {
    modalQuestion.classList.add("hidden");
    modalContent.classList.remove("hidden");
    modalCongrats.innerHTML =
      "К сожалению, предложение доступно только для граждан РФ старше 25 лет";
  });

  btnYes.addEventListener("click", () => {
    questionText.innerHTML = "Сколько вам лет?";
    modalQuestion.innerHTML = `
      <span class="question">Сколько вам лет?</span>
      <div class="answer-btn age-btn" data-age="under-18">до 18</div>
      <div class="answer-btn age-btn" data-age="18-24">18-24</div>
      <div class="answer-btn age-btn" data-age="25-40">25-40</div>
      <div class="answer-btn age-btn" data-age="40-55">40-55</div>
      <div class="answer-btn age-btn" data-age="55+">55+</div>
    `;

    document.querySelectorAll(".age-btn").forEach((btn) => {
      btn.addEventListener("click", (e) => {
        const ageGroup = e.target.getAttribute("data-age");

        if (ageGroup === "under-18" || ageGroup === "18-24") {
          modalQuestion.classList.add("hidden");
          modalContent.classList.remove("hidden");
          modalCongrats.innerHTML =
            "К сожалению, предложение доступно только для граждан РФ старше 25 лет";
        } else {
          form.classList.remove("hidden");
          modalQuestion.classList.add("hidden");
        }
      });
    });
  });

  startQuizBtn.addEventListener("click", startQuiz);
  startCountdown(14 * 60 + 59);
  startBtn.addEventListener("click", openChests);
});
