document.addEventListener("DOMContentLoaded", () => {
  const rouletteContent = document.querySelector(
    ".main__section-secondary__container-img-content"
  );
  const roulette = document.querySelector(
    ".main__section-secondary__container-img-wheel"
  );
  const spinButton = document.querySelector(
    ".main__section-third__container-button"
  );
  const confettiLeft = document.querySelector(".confetti--left");
  const confettiRight = document.querySelector(".confetti--right");

  function addTiltAnimation() {
    rouletteContent.classList.add("content__tilt");
  }

  window.onload = addTiltAnimation();

  if (spinButton) {
    const totalSections = 6;
    const degreesPerSection = 360 / totalSections;
    const targetSection = 5;

    spinButton.addEventListener("click", handleSpinClick);
    function handleSpinClick() {
      let duration = 6;
      let fullSpins = 10;
      let targetRotation =
        fullSpins * 360 + (targetSection - 1) * degreesPerSection;

      roulette.style.transition = `transform ${duration}s cubic-bezier(0.25, 0.1, 0.25, 1)`;
      roulette.style.transform = `rotate(${targetRotation}deg)`;

      setTimeout(() => {
        console.log(`Success`);
        confettiLeft.style.opacity = "1";
        confettiRight.style.opacity = "1";

        confettiLeft.classList.add("confetti--left__animate");
        confettiRight.classList.add("confetti--right__animate");

        spinButton.removeEventListener("click", handleSpinClick);
        spinButton.innerText = "ЗАБРАТЬ ВЫПЛАТУ";
        spinButton.addEventListener("click", goChat);
      }, duration * 1050);
    }
    function goChat() {
      window.open("./chat/chat.html", "_self");
    }
  }
});
