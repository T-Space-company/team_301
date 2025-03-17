document.addEventListener("DOMContentLoaded", () => {
  const coin = document.querySelector(".main__coin img");

  coin.addEventListener("click", () => {
    coin.style.transform = "scale(0.9)";
    coin.style.transition = "transform 0.2s ease";

    setTimeout(() => {
      coin.style.transform = "scale(1)";
    }, 200);

    const plusWrap = document.createElement("div");
    plusWrap.classList.add("coin-wrap");
    const plus = document.createElement("span");
    plus.textContent = "+1000";
    plus.classList.add("coin-value");
    plusWrap.appendChild(plus);

    document.querySelector(".main__coin").appendChild(plusWrap);

    setTimeout(() => {
      //   .remove(plusWrap);
    }, 1000);
  });
});
