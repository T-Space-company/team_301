document.addEventListener("DOMContentLoaded", function () {
  const body = document.querySelector("body");
  const modal = document.getElementById("modal");
  const btnForm = document.getElementById("button-form");
  const btnClose = document.getElementById("button-close");

  function openModal() {
    modal.style.display = "flex";
    body.style.overflow = "hidden";
  }

  function closeModal() {
    modal.style.display = "none";
    body.style.overflow = "visible";
  }

  btnForm.addEventListener("click", openModal);
  btnClose.addEventListener("click", closeModal);
});
