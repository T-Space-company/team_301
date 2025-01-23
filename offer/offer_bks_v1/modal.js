document.addEventListener("DOMContentLoaded", function () {
  const body = document.querySelector("body");
  const modal = document.getElementById("modal");
  const signInBtn = document.getElementById("sign-in-button");
  const btnModal = document.getElementById("button-form");
  const btnClose = document.getElementById("button-close");
  const modalHeading = document.querySelector(".modal-form__heading");

  if (window.matchMedia("(max-width: 1024px)").matches) {
    modalHeading.textContent = "Откройте торговый счет";
  }

  function openModal() {
    modal.style.display = "flex";
    body.style.overflow = "hidden";
  }

  function closeModal() {
    modal.style.display = "none";
    body.style.overflow = "visible";
  }

  btnModal.addEventListener("click", openModal);
  signInBtn.addEventListener("click", openModal);
  btnClose.addEventListener("click", closeModal);
});
