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

  function addTiltAnimation() {
    rouletteContent.classList.add("content__tilt");
  }

  window.onload = addTiltAnimation();

  if (spinButton) {
    const totalSections = 6;
    const degreesPerSection = 360 / totalSections;
    const targetSection = 5;

    spinButton.onclick = function () {
      let randomDuration = 8;
      let fullSpins = 10;
      let targetRotation =
        fullSpins * 360 + (targetSection - 1) * degreesPerSection;

      roulette.style.transition = `transform ${randomDuration}s cubic-bezier(0.25, 0.1, 0.25, 1)`;
      roulette.style.transform = `rotate(${targetRotation}deg)`;

      setTimeout(() => {
        console.log(`Success`);
      }, randomDuration * 1000);
    };
  }
});
