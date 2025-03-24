document.addEventListener("DOMContentLoaded", () => {
  const body = document.querySelector("body");
  const gifts = document.querySelectorAll(".gift");
  const modal = document.getElementById("modal-form");

  gifts.forEach((gift, index) => {
    setTimeout(() => {
      gift.classList.add("animate-in");
    }, index * 300);

    gift.addEventListener("click", openGift);

    function openGift() {
      gift.classList.remove("animate-in");

      gift.classList.add("animate-shake");

      setTimeout(() => {
        gift.classList.remove("animate-shake");
        gift.src = "./assets/img/gift_open.svg";

        gift.classList.add("animate-open");

        setTimeout(() => {
          gift.classList.remove("animate-open");
          modal.classList.remove("hidden");
          body.style.overflow = "hidden";
        }, 700);
      }, 700);
    }
  });
});
