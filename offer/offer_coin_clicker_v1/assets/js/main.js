document.addEventListener("DOMContentLoaded", () => {
  const main = document.querySelector("main");
  const coin = document.querySelector(".main__coin img");
  const quiz1 = document.getElementById("modal-1");
  const quiz2 = document.getElementById("modal-2");
  const form = document.getElementById("modal-form");
  const quiz1Button = document.getElementById("quiz1-btn");
  const quiz2Button = document.getElementById("quiz2-btn");
  const sum = document.querySelector(".bonus__sum");
  let count = 0;

  if (screen.height > 795) {
    main.style.height = "100vh";
  }

  function saveAnswer(question, answer) {
    let answers = JSON.parse(localStorage.getItem("answers")) || [];
    answers.push(`${question}: ${answer}`);
    localStorage.setItem("answers", JSON.stringify(answers));
  }

  function openQuiz() {
    quiz1.classList.remove("hidden");
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
    form.classList.remove("hidden");
  });

  coin.addEventListener("click", () => {
    coin.style.transform = "scale(0.9)";
    coin.style.transition = "transform 0.2s ease";
    count++;

    setTimeout(() => {
      coin.style.transform = "scale(1)";
    }, 200);

    if (count <= 5) {
      const plusWrap = document.createElement("div");
      plusWrap.classList.add("coin-wrap");
      const plus = document.createElement("span");
      plus.textContent = "+1000₽";
      plus.classList.add("coin-value");
      plusWrap.appendChild(plus);

      document.querySelector(".main__coin").appendChild(plusWrap);

      // setTimeout(() => {
      //   plusWrap.classList.add("disappear");

      //   setTimeout(() => {
      //     plusWrap.remove();
      //   }, 500);
      // }, 600);
    }

    switch (count) {
      case 1:
        sum.textContent = "1000₽";
        break;
      case 2:
        sum.textContent = "2000₽";
        break;
      case 3:
        sum.textContent = "3000₽";
        break;
      case 4:
        sum.textContent = "4000₽";
        break;
      case 5:
        sum.textContent = "5000₽";

        const coinsWrap = document.createElement("div");
        coinsWrap.classList.add("coins");
        const coinTL = document.createElement("img");
        coinTL.classList.add("coin--t-l");
        coinTL.src = "./assets/img/t-l.png";
        const coinTR = document.createElement("img");
        coinTR.classList.add("coin--t-r");
        coinTR.src = "./assets/img/t-r.png";
        const coinBR = document.createElement("img");
        coinBR.classList.add("coin--b-r");
        coinBR.src = "./assets/img/b-r.png";
        const coinBL = document.createElement("img");
        coinBL.classList.add("coin--b-l");
        coinBL.src = "./assets/img/b-l.png";

        coinsWrap.appendChild(coinTL);
        setTimeout(coinsWrap.appendChild(coinTR), 200);
        setTimeout(coinsWrap.appendChild(coinBR), 250);
        setTimeout(coinsWrap.appendChild(coinBL), 220);
        document.querySelector(".main__coin").appendChild(coinsWrap);
        setTimeout(openQuiz, 1500);
        return;
    }
  });
});
