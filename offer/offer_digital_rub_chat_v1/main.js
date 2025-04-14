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
  const primarySubheading = document.querySelector(".primary__subheading");
  const footerText = document.getElementById("footer-text");
  const itemsHeading = document.querySelector(".third__subheading");
  const itemsWrapper = document.querySelector(".third__plates");
  const items = document.querySelectorAll(".plates__item");
  const rewards = [
    "5000 ₽",
    `УДАЧИ!<span class="accent">СПАСИБО</>`,
    "10 000 ₽",
  ];
  let opened = 0;
  let autoOpeningStarted = false;

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

    if (!autoOpeningStarted) {
      autoOpeningStarted = true;
      autoOpenNext();
    }
  }

  function autoOpenNext() {
    if (opened >= 3) return;

    const nextItem = Array.from(items).find(
      (i) => !i.classList.contains("flipped")
    );
    if (!nextItem) return;

    setTimeout(() => {
      nextItem.classList.add("flipped");
      const back = nextItem.querySelector(".plates__back");
      back.innerHTML = rewards[opened];
      opened++;

      if (opened < 3) {
        autoOpenNext();
      } else {
        // All 3 revealed
        items.forEach((i) => {
          i.removeEventListener("click", handleClick);
        });
        setTimeout(showWinScreen, 1000);
      }
    }, 1000);
  }

  function showWinScreen() {
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
    subHeadingText.textContent = "5000₽";
    primarySubheading.classList.remove("hidden");

    startButton.classList.remove("hidden");
    footerText.style.marginTop = "30px";
    startButton.addEventListener("click", goChat);
  }

  function goChat() {
    window.location.href = "chat.php";
  }
});
