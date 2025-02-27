document.addEventListener("DOMContentLoaded", () => {
  const body = document.querySelector("body");
  const progressBar = document.getElementById("progress");
  const points = document.querySelectorAll(".point");
  const heading = document.querySelector(".progress-heading");
  const image = document.querySelector(".progress-img");
  const primaryScreen = document.querySelector(".progress-section");
  const secondScreen = document.querySelector(".successful-section");
  // const introSection = document.querySelector(".first-section");
  const startButton = document.querySelector("#start-btn");

  const quizSection = document.querySelector(".quiz-section");
  const yesBtn = document.querySelector("#yes-btn");
  const noBtn = document.querySelector("#no-btn");
  const ageButtons = document.querySelectorAll(".age-btn");
  const incomeButtons = document.querySelectorAll(".income-btn");
  const investButtons = document.querySelectorAll(".invest-btn");

  const logo = document.querySelector(".progress-img");

  function updateLogo() {
    logo.src = "./assets/img/logo_sber.svg";
  }
  updateLogo();
  window.addEventListener("resize", updateLogo);

  let progress = 0;
  body.style.overflow = "hidden";

  // introSection.style.display = "flex";
  primaryScreen.style.display = "flex";
  secondScreen.style.display = "none";
  quizSection.style.display = "none";

  firstPhase();

  function firstPhase() {
    const firstPhaseDuration = 1000;
    const firstPhaseIncrement = 1;
    const firstPhaseInterval = 20;

    const intervalId = setInterval(() => {
      progress += firstPhaseIncrement;
      progressBar.style.width = `${progress}%`;

      if (progress >= 50) {
        clearInterval(intervalId);
        points[1].classList.add("active");
        heading.textContent = "Проверка вашего финансового статуса через ЦБ РФ";
        image.src = "./assets/img/logo_cbrf.svg";
        secondPhase();
      }
    }, firstPhaseInterval);
  }

  function secondPhase() {
    const secondPhaseDuration = 3000;
    const secondPhaseIncrement = 0.32;
    const secondPhaseInterval = 20;

    const intervalId = setInterval(() => {
      progress += secondPhaseIncrement;
      progressBar.style.width = `${progress}%`;

      if (progress >= 99) {
        clearInterval(intervalId);
        points[2].classList.add("active");
        heading.textContent =
          "Вы предварительно одобрены! Заполните заявку для участия";
        image.src = "./assets/img/logo_mfr.svg";
        image.style.width = "130px";

        body.style.overflow = "auto";
        setTimeout(() => {
          primaryScreen.style.display = "none";
          quizSection.style.display = "flex";
          showQuestion(1);
        }, 1000);
      }
    }, secondPhaseInterval);
  }

  // startButton.addEventListener("click", () => {
  //   introSection.style.display = "none";
  //   primaryScreen.style.display = "flex";
  //   firstPhase();
  // });

  function showQuestion(num) {
    document
      .querySelectorAll(".question")
      .forEach((q) => (q.style.display = "none"));

    document.querySelector(`#question-${num}`).style.display = "flex";
  }

  yesBtn.addEventListener("click", () => {
    showQuestion(2);
  });

  noBtn.addEventListener("click", () => {
    window.location.href = "err.html";
  });

  ageButtons.forEach((btn) => {
    btn.addEventListener("click", () => {
      const ageValue = btn.getAttribute("data-age");
      if (ageValue === "under18") {
        window.location.href = "err.html";
      } else {
        showQuestion(3);
      }
    });
  });

  incomeButtons.forEach((btn) => {
    btn.addEventListener("click", () => {
      showQuestion(4);
    });
  });

  investButtons.forEach((btn) => {
    btn.addEventListener("click", () => {
      quizSection.style.display = "none";
      secondScreen.style.display = "flex";
      body.style.height = "100%";
    });
  });
});
