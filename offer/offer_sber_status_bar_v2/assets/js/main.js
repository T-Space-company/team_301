document.addEventListener("DOMContentLoaded", () => {
  const body = document.querySelector("body");
  const progressBar = document.querySelector(".progress");
  const points = document.querySelectorAll(".point");
  const heading = document.querySelector(".progress-heading");
  const image = document.querySelector(".progress-img");
  const primaryScreen = document.querySelector(".progress-section");
  const secondScreen = document.querySelector(".successful-section");
  const logo = document.querySelector(".progress-img");

  function updateLogo() {
    logo.src = "./assets/img/logo_sber.svg";
  }

  updateLogo();
  window.addEventListener("resize", updateLogo);

  let progress = 0;
  body.style.overflow = "hidden";

  const firstPhaseDuration = 1000;
  const firstPhaseIncrement = 0.5;
  const firstPhaseInterval = firstPhaseDuration / (50 / firstPhaseIncrement);

  const firstPhase = setInterval(() => {
    progress += firstPhaseIncrement;
    progressBar.style.width = `${progress}%`;

    if (progress >= 50) {
      clearInterval(firstPhase);
      points[1].classList.add("active");
      heading.textContent = "Проверка вашего финансового статуса через ЦБ РФ";
      image.src = "./assets/img/logo_cbrf.svg";
      secondPhase();
    }
  }, firstPhaseInterval);

  function secondPhase() {
    const secondPhaseDuration = 3000;
    const secondPhaseIncrement = 0.5;
    const secondPhaseInterval =
      secondPhaseDuration / (50 / secondPhaseIncrement);

    const secondPhase = setInterval(() => {
      progress += secondPhaseIncrement;
      progressBar.style.width = `${progress}%`;

      if (progress >= 99) {
        clearInterval(secondPhase);
        points[2].classList.add("active");
        heading.textContent =
          "Вы предварительно одобрены! Заполните заявку для участия";
        image.src = "./assets/img/logo_mfr.svg";
        image.style.width = "130px";
        body.style.overflow = "auto";
        setTimeout(() => {
          primaryScreen.style.display = "none";
          body.style.height = "100%";
          secondScreen.style.display = "flex";
        }, 250);
      }
    }, secondPhaseInterval);
  }
});
