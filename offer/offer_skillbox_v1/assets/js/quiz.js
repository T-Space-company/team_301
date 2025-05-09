document.addEventListener("DOMContentLoaded", () => {
  const body = document.querySelector("body");
  const modal1 = document.getElementById("modal-1");
  const modal2 = document.getElementById("modal-2");
  const btnYes1 = document.querySelector(".modal__button--first.yes");
  const btnYes2 = document.querySelectorAll(".modal__button--second.yes");

  body.style.overflow = "hidden";
  modal1.classList.remove("hidden");

  btnYes1.addEventListener("click", () => {
    modal1.classList.add("hidden");
    modal2.classList.remove("hidden");
  });

  btnYes2.forEach((btn) => {
    btn.addEventListener("click", () => {
      modal2.classList.add("hidden");
      body.style.overflow = "auto";
    });
  });
});
