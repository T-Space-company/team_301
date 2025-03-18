document.addEventListener("DOMContentLoaded", () => {
  const coin = document.querySelector(".main__coin img");
  const sum = document.querySelector(".bonus__sum");
  let count = 0;

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

      setTimeout(() => {
        plusWrap.remove();
      }, 1500);
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

        coinsWrap.appendChild(coinTL);
        document.querySelector(".main__coin").appendChild(coinsWrap);
        return;
    }
  });
});
