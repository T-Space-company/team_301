document.addEventListener("DOMContentLoaded", () => {
  const firstScreen = document.getElementById("first-screen");
  const secondScreen = document.getElementById("second-screen");
  const formScreen = document.getElementById("form-screen");
  const startButton = document.getElementById("start-btn");
  const prizeButton = document.getElementById("prize-btn");
  const quiz1 = document.getElementById("modal-1");
  const quiz2 = document.getElementById("modal-2");
  const quiz1Button = document.getElementById("quiz1-btn");
  const quiz2Button = document.getElementById("quiz2-btn");

  const wheel = document.querySelector(".wheel__content-wrap");
  const wheelContent = document.querySelector(".wheel__content");

  function addTiltAnimation() {
    wheel.classList.add("wheel-tilt");
  }

  window.onload = addTiltAnimation();

  if (startButton) {
    const totalSections = 6;
    const degreesPerSection = 360 / totalSections;
    const targetSection = 4;

    startButton.addEventListener("click", handleSpinClick);
    function handleSpinClick() {
      let duration = 6;
      let fullSpins = 10;
      let targetRotation =
        fullSpins * 360 + (targetSection - 1) * degreesPerSection;

      wheelContent.style.transition = `transform ${duration}s cubic-bezier(0.25, 0.1, 0.25, 1)`;
      wheelContent.style.transform = `rotate(${targetRotation}deg)`;

      setTimeout(() => {
        console.log(`Success`);
        //    confettiLeft.style.opacity = "1";
        //    confettiRight.style.opacity = "1";

        //    confettiLeft.classList.add("confetti--left__animate");
        //    confettiRight.classList.add("confetti--right__animate");

        startButton.removeEventListener("click", handleSpinClick);
        firstScreen.classList.add("hidden");
        secondScreen.classList.remove("hidden");
      }, duration * 1200);
    }
  }

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

  prizeButton.addEventListener("click", () => {
    secondScreen.classList.add("hidden");
    quiz1.classList.remove("hidden");
    if (window.innerHeight >= 645) {
      formScreen.style.height = "100vh";
    }
  });
});
