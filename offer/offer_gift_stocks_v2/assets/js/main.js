document.addEventListener("DOMContentLoaded", () => {
  const main = document.querySelector(".main");
  const quiz1 = document.getElementById("modal-1");
  const quiz2 = document.getElementById("modal-2");
  const quiz1Button = document.getElementById("quiz1-btn");
  const quiz2Button = document.getElementById("quiz2-btn");
  const gift = document.querySelector(".main__gift");
  const firstGift = document.querySelector(".first-gift");
  const secondGift = document.querySelector(".second-gift");
  const thirdGift = document.querySelector(".third-gift");
  const text = document.querySelector(".main__subheading");
  const firstScreen = document.getElementById("first-screen");
  const secondScreen = document.getElementById("second-screen");
  const prizeText = document.querySelector(".prize__text");
  const prizeHeading = document.querySelector(".prize__heading");
  const prizeButton = document.querySelector(".prize__button");
  const prizeContent = document.querySelector(".prize__content");
  const form = document.getElementById("prize-form");

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

  const givePrize = () => {
    main.classList.add("prize-bg");
    firstScreen.classList.add("hidden");
    secondScreen.classList.remove("hidden");
  };

  const startGifts = () => {
    gift.removeEventListener("click", startGifts);
    text.classList.add("hidden");
    firstGift.classList.remove("rotate");
    firstGift.classList.add("animate");
    secondGift.classList.remove("hidden");
    setTimeout(() => {
      firstGift.style.scale = "0.8";
      setTimeout(() => {
        firstGift.classList.add("hidden");
        secondGift.classList.add("hidden");
        thirdGift.classList.remove("hidden");
        gift.classList.add("third");
        setTimeout(() => {
          thirdGift.classList.add("animate");
          text.classList.remove("hidden");
          thirdGift.addEventListener("click", givePrize);
        }, 1500);
      }, 500);
    }, 3000);
  };

  const openForm = () => {
    prizeText.classList.add("hidden");
    prizeHeading.innerHTML = `Вам доступен <span class="accent">БОНУС 5 000 ₽</span> после первого вложения! `;
    prizeContent.classList.add("hidden");
    form.classList.remove("hidden");
  };

  gift.addEventListener("click", startGifts);
  prizeButton.addEventListener("click", openForm);
});
