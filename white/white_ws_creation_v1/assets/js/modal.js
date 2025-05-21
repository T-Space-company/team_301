document.addEventListener("DOMContentLoaded", () => {
  const body = document.querySelector("body");
  const modal = document.getElementById("modal");
  const openModalBtns = document.querySelectorAll(".openBtn");
  const closeModalBtns = document.querySelectorAll(".closeModal");

  openModalBtns.forEach((btn) => {
    btn.addEventListener("click", () => {
      body.style.overflow = "hidden";
      modal.classList.remove("hidden");
    });
  });

  closeModalBtns.forEach((btn) => {
    btn.addEventListener("click", () => {
      body.style.overflow = "auto";
      modal.classList.add("hidden");
    });
  });
});
