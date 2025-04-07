document.addEventListener("DOMContentLoaded", () => {
  const startButton = document.querySelector(
    ".main__section-third__container-button"
  );

  const confettiLeft = document.querySelector(".confetti--left");
  const confettiRight = document.querySelector(".confetti--right");
  const headingWrapper = document.querySelector(
    ".main__section-primary__container"
  );
  const headingText = document.querySelector(
    ".main__section-primary__container-item"
  );
  const subHeadingText = document.getElementById("sum-start-text");
  const primaryText = document.querySelector(".primary__text");
  const footerText = document.getElementById("footer-text");
  const itemsHeading = document.querySelector(".third__subheading");
  const itemsWrapper = document.querySelector(".third__plates");
  const items = document.querySelectorAll(".plates__item");
  const rewards = ["175 ₽", "УДАЧИ", "8 500 ₽"];
  const backdrop = document.querySelector(".backdrop");
  let opened = 0;

  items.forEach((item) => {
    item.addEventListener("click", handleClick);
  });

  function handleClick(e) {
    const item = e.currentTarget;

    if (item.classList.contains("flipped")) return;
    item.classList.add("flipped");

    const back = item.querySelector(".plates__back");

    if (opened < 3) {
      back.textContent = rewards[opened];
    }

    opened++;

    if (opened >= 3) {
      items.forEach((i) => {
        i.removeEventListener("click", handleClick);
      });
      setTimeout(() => {
        confettiLeft.style.opacity = "1";
        confettiRight.style.opacity = "1";

        confettiLeft.classList.add("confetti--left__animate");
        confettiRight.classList.add("confetti--right__animate");
        itemsHeading.classList.add("hidden");
        headingWrapper.style.marginTop = "30px";
        itemsWrapper.style.marginTop = "0";
        headingText.textContent = "Поздравляем!";
        primaryText.classList.remove("hidden");
        subHeadingText.classList.add("secondary");
        subHeadingText.textContent = "8675₽";

        startButton.classList.remove("hidden");
        footerText.style.marginTop = "30px";
        startButton.addEventListener("click", () => {
          setTimeout(() => {
            backdrop.classList.remove("d-none");
          }, 500);
        });
      }, 1000);
    }
  }

  // function goChat() {
  //   window.location.href = "chat.php";
  // }
});
